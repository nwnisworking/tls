<?php
namespace Enums;

enum SupportedGroup: int{
  case SECT163K1 = 1;

  case SECT163R1 = 2;
  
  case SECT163R2 = 3;
  
  case SECT193R1 = 4;
  
  case SECT193R2 = 5;
  
  case SECT233K1 = 6;
  
  case SECT233R1 = 7;
  
  case SECT239K1 = 8;
  
  case SECT283K1 = 9;
  
  case SECT283R1 = 10;
  
  case SECT409K1 = 11;
  
  case SECT409R1 = 12;
  
  case SECT571K1 = 13;
  
  case SECT571R1 = 14;
  
  case SECP160K1 = 15;
  
  case SECP160R1 = 16;
  
  case SECP160R2 = 17;
  
  case SECP192K1 = 18;
  
  case SECP192R1 = 19;
  
  case SECP224K1 = 20;
  
  case SECP224R1 = 21;
  
  case SECP256K1 = 22;

  case SECP256R1 = 23;

  case SECP384R1 = 24;

  case SECP521R1 = 25;

  // Requires sodium extension
  case X25519 = 29;
}