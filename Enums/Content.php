<?php
namespace Enums;

enum Content: int{
  case CHANGE_CIPHER_SPEC = 20;
  case ALERT = 21;
  case HANDSHAKE = 22;
  case APPLICATION_DATA = 23;
  case HEARTBEAT = 24;
  case TLS12_CID = 25;
  case ACK = 26;
}

