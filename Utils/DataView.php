<?php
class DataView{
	private array $data = [];

	private int $cursor = 0;

	public function __construct(string $data){
		for($i = 0; $i < strlen($data); $i++)
			$this->data[$i] = $data[$i];
	}

	public function size(): int{
		return count($this->data);
	}

	public function rewind(): static{
		$this->cursor = 0;
		return $this;
	}
	
	public function end(): static{
		$this->cursor = $this->size() - 1;
		return $this;
	}

	public function tell(): int{
		return $this->cursor;
	}

	public function read(int $length, ?int $position = null, bool $ignore = false): string{
		return $this->__read__($length, $position, $ignore);
	}

	public function readArr(int $length, ?int $position = null, bool $ignore = false): array{
		return $this->__read__($length, $position, $ignore, 'array');
	}

	public function readInt(int $length, ?int $position = null, bool $ignore = false): int{
		return $this->__read__($length, $position, $ignore, 'int');
	}

	public function pad(int $size): static{
		for($i = 0; $i < $size; $i++)
			$this->data[$i + $this->size()] = "\0";

		return $this;
	}

	public function append(string $text, ?int $position = null, bool $ignore = false): static{
		return $this->__write__($text, $position, $ignore);
	}

	public function write(string $text, ?int $position = null, bool $ignore = false): static{
		return $this->__write__($text, $position, $ignore, '');
	}

	private function shift(int $length, ?int $position, bool $ignore): int{
		if(!isset($position)){
			$position = $this->cursor;

			if(!$ignore)
				$this->cursor+= $length;
		}

		return $position;
	}

	private function __read__(int $length, ?int $position, bool $ignore, string $type = 'string'): mixed{
		assert(!$this->isOutOfBound($length, $position), '$length is out of bound');

		return match($type){
			'string'=>join('', array_splice(
				$this->data, 
				$this->shift($length, $position, $ignore),
				$length
			)),
			'array'=>array_map('ord', array_slice(
				$this->data, 
				$this->shift($length, $position, $ignore),
				$length
			)),
			'int'=>array_reduce(array_slice($this->data, $this->shift($length, $position, $ignore), $length), function($carry, $value) use(&$length){ return $carry|= ord($value) << (--$length * 8); }, 0)
		};
	}

	private function __write__(string $text, ?int $position = null, bool $ignore = false, string $type = 'append'){
		if($position > $this->size() - 1){
			$this->pad($position - $this->size());
		}

		array_splice(
			$this->data, 
			$this->shift(strlen($text), $position, $ignore), 
			$type === 'append' ? 0 : strlen($text), 
			str_split($text)
		);

		return $this;
	}

	private function isOutOfBound(int $length, ?int $position = null): bool{
		return isset($position) ? $position + $length > $this->size() : $this->cursor + $length > $this->size();
	}

	public function __debugInfo(): array{
		return [
			'cursor'=>$this->cursor
		];
	}

	public function __tostring(){
		return join('', $this->data);
	}
}