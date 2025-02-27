<?php
namespace Enums;

enum Cipher: int{
  case TLS_NULL_WITH_NULL_NULL = 0x0000;
  case TLS_RSA_WITH_NULL_MD5 = 0x0001;
  case TLS_RSA_WITH_NULL_SHA = 0x0002;
  case TLS_RSA_EXPORT_WITH_RC4_40_MD5 = 0x0003;
  case TLS_RSA_WITH_RC4_128_MD5 = 0x0004;
  case TLS_RSA_WITH_RC4_128_SHA = 0x0005;
  case TLS_RSA_EXPORT_WITH_RC2_CBC_40_MD5 = 0x0006;
  case TLS_RSA_WITH_IDEA_CBC_SHA = 0x0007;
  case TLS_RSA_EXPORT_WITH_DES40_CBC_SHA = 0x0008;
  case TLS_RSA_WITH_DES_CBC_SHA = 0x0009;
  case TLS_RSA_WITH_3DES_EDE_CBC_SHA = 0x000A;
  case TLS_DH_DSS_EXPORT_WITH_DES40_CBC_SHA = 0x000B;
  case TLS_DH_DSS_WITH_DES_CBC_SHA = 0x000C;
  case TLS_DH_DSS_WITH_3DES_EDE_CBC_SHA = 0x000D;
  case TLS_DH_RSA_EXPORT_WITH_DES40_CBC_SHA = 0x000E;
  case TLS_DH_RSA_WITH_DES_CBC_SHA = 0x000F;
  case TLS_DH_RSA_WITH_3DES_EDE_CBC_SHA = 0x0010;
  case TLS_DHE_DSS_EXPORT_WITH_DES40_CBC_SHA = 0x0011;
  case TLS_DHE_DSS_WITH_DES_CBC_SHA = 0x0012;
  case TLS_DHE_DSS_WITH_3DES_EDE_CBC_SHA = 0x0013;
  case TLS_DHE_RSA_EXPORT_WITH_DES40_CBC_SHA = 0x0014;
  case TLS_DHE_RSA_WITH_DES_CBC_SHA = 0x0015;
  case TLS_DHE_RSA_WITH_3DES_EDE_CBC_SHA = 0x0016;
  case TLS_DH_anon_EXPORT_WITH_RC4_40_MD5 = 0x0017;
  case TLS_DH_anon_WITH_RC4_128_MD5 = 0x0018;
  case TLS_DH_anon_EXPORT_WITH_DES40_CBC_SHA = 0x0019;
  case TLS_DH_anon_WITH_DES_CBC_SHA = 0x001A;
  case TLS_DH_anon_WITH_3DES_EDE_CBC_SHA = 0x001B;
  case TLS_KRB5_WITH_DES_CBC_SHA = 0x001E;
  case TLS_KRB5_WITH_3DES_EDE_CBC_SHA = 0x001F;
  case TLS_KRB5_WITH_RC4_128_SHA = 0x0020;
  case TLS_KRB5_WITH_IDEA_CBC_SHA = 0x0021;
  case TLS_KRB5_WITH_DES_CBC_MD5 = 0x0022;
  case TLS_KRB5_WITH_3DES_EDE_CBC_MD5 = 0x0023;
  case TLS_KRB5_WITH_RC4_128_MD5 = 0x0024;
  case TLS_KRB5_WITH_IDEA_CBC_MD5 = 0x0025;
  case TLS_KRB5_EXPORT_WITH_DES_CBC_40_SHA = 0x0026;
  case TLS_KRB5_EXPORT_WITH_RC2_CBC_40_SHA = 0x0027;
  case TLS_KRB5_EXPORT_WITH_RC4_40_SHA = 0x0028;
  case TLS_KRB5_EXPORT_WITH_DES_CBC_40_MD5 = 0x0029;
  case TLS_KRB5_EXPORT_WITH_RC2_CBC_40_MD5 = 0x002A;
  case TLS_KRB5_EXPORT_WITH_RC4_40_MD5 = 0x002B;
  case TLS_PSK_WITH_NULL_SHA = 0x002C;
  case TLS_DHE_PSK_WITH_NULL_SHA = 0x002D;
  case TLS_RSA_PSK_WITH_NULL_SHA = 0x002E;
  case TLS_RSA_WITH_AES_128_CBC_SHA = 0x002F;
  case TLS_DH_DSS_WITH_AES_128_CBC_SHA = 0x0030;
  case TLS_DH_RSA_WITH_AES_128_CBC_SHA = 0x0031;
  case TLS_DHE_DSS_WITH_AES_128_CBC_SHA = 0x0032;
  case TLS_DHE_RSA_WITH_AES_128_CBC_SHA = 0x0033;
  case TLS_DH_anon_WITH_AES_128_CBC_SHA = 0x0034;
  case TLS_RSA_WITH_AES_256_CBC_SHA = 0x0035;
  case TLS_DH_DSS_WITH_AES_256_CBC_SHA = 0x0036;
  case TLS_DH_RSA_WITH_AES_256_CBC_SHA = 0x0037;
  case TLS_DHE_DSS_WITH_AES_256_CBC_SHA = 0x0038;
  case TLS_DHE_RSA_WITH_AES_256_CBC_SHA = 0x0039;
  case TLS_DH_anon_WITH_AES_256_CBC_SHA = 0x003A;
  case TLS_RSA_WITH_NULL_SHA256 = 0x003B;
  case TLS_RSA_WITH_AES_128_CBC_SHA256 = 0x003C;
  case TLS_RSA_WITH_AES_256_CBC_SHA256 = 0x003D;
  case TLS_DH_DSS_WITH_AES_128_CBC_SHA256 = 0x003E;
  case TLS_DH_RSA_WITH_AES_128_CBC_SHA256 = 0x003F;
  case TLS_DHE_DSS_WITH_AES_128_CBC_SHA256 = 0x0040;
  case TLS_RSA_WITH_CAMELLIA_128_CBC_SHA = 0x0041;
  case TLS_DH_DSS_WITH_CAMELLIA_128_CBC_SHA = 0x0042;
  case TLS_DH_RSA_WITH_CAMELLIA_128_CBC_SHA = 0x0043;
  case TLS_DHE_DSS_WITH_CAMELLIA_128_CBC_SHA = 0x0044;
  case TLS_DHE_RSA_WITH_CAMELLIA_128_CBC_SHA = 0x0045;
  case TLS_DH_anon_WITH_CAMELLIA_128_CBC_SHA = 0x0046;
  case TLS_DHE_RSA_WITH_AES_128_CBC_SHA256 = 0x0067;
  case TLS_DH_DSS_WITH_AES_256_CBC_SHA256 = 0x0068;
  case TLS_DH_RSA_WITH_AES_256_CBC_SHA256 = 0x0069;
  case TLS_DHE_DSS_WITH_AES_256_CBC_SHA256 = 0x006A;
  case TLS_DHE_RSA_WITH_AES_256_CBC_SHA256 = 0x006B;
  case TLS_DH_anon_WITH_AES_128_CBC_SHA256 = 0x006C;
  case TLS_DH_anon_WITH_AES_256_CBC_SHA256 = 0x006D;
  case TLS_RSA_WITH_CAMELLIA_256_CBC_SHA = 0x0084;
  case TLS_DH_DSS_WITH_CAMELLIA_256_CBC_SHA = 0x0085;
  case TLS_DH_RSA_WITH_CAMELLIA_256_CBC_SHA = 0x0086;
  case TLS_DHE_DSS_WITH_CAMELLIA_256_CBC_SHA = 0x0087;
  case TLS_DHE_RSA_WITH_CAMELLIA_256_CBC_SHA = 0x0088;
  case TLS_DH_anon_WITH_CAMELLIA_256_CBC_SHA = 0x0089;
  case TLS_PSK_WITH_RC4_128_SHA = 0x008A;
  case TLS_PSK_WITH_3DES_EDE_CBC_SHA = 0x008B;
  case TLS_PSK_WITH_AES_128_CBC_SHA = 0x008C;
  case TLS_PSK_WITH_AES_256_CBC_SHA = 0x008D;
  case TLS_DHE_PSK_WITH_RC4_128_SHA = 0x008E;
  case TLS_DHE_PSK_WITH_3DES_EDE_CBC_SHA = 0x008F;
  case TLS_DHE_PSK_WITH_AES_128_CBC_SHA = 0x0090;
  case TLS_DHE_PSK_WITH_AES_256_CBC_SHA = 0x0091;
  case TLS_RSA_PSK_WITH_RC4_128_SHA = 0x0092;
  case TLS_RSA_PSK_WITH_3DES_EDE_CBC_SHA = 0x0093;
  case TLS_RSA_PSK_WITH_AES_128_CBC_SHA = 0x0094;
  case TLS_RSA_PSK_WITH_AES_256_CBC_SHA = 0x0095;
  case TLS_RSA_WITH_SEED_CBC_SHA = 0x0096;
  case TLS_DH_DSS_WITH_SEED_CBC_SHA = 0x0097;
  case TLS_DH_RSA_WITH_SEED_CBC_SHA = 0x0098;
  case TLS_DHE_DSS_WITH_SEED_CBC_SHA = 0x0099;
  case TLS_DHE_RSA_WITH_SEED_CBC_SHA = 0x009A;
  case TLS_DH_anon_WITH_SEED_CBC_SHA = 0x009B;
  case TLS_RSA_WITH_AES_128_GCM_SHA256 = 0x009C;
  case TLS_RSA_WITH_AES_256_GCM_SHA384 = 0x009D;
  case TLS_DHE_RSA_WITH_AES_128_GCM_SHA256 = 0x009E;
  case TLS_DHE_RSA_WITH_AES_256_GCM_SHA384 = 0x009F;
  case TLS_DH_RSA_WITH_AES_128_GCM_SHA256 = 0x00A0;
  case TLS_DH_RSA_WITH_AES_256_GCM_SHA384 = 0x00A1;
  case TLS_DHE_DSS_WITH_AES_128_GCM_SHA256 = 0x00A2;
  case TLS_DHE_DSS_WITH_AES_256_GCM_SHA384 = 0x00A3;
  case TLS_DH_DSS_WITH_AES_128_GCM_SHA256 = 0x00A4;
  case TLS_DH_DSS_WITH_AES_256_GCM_SHA384 = 0x00A5;
  case TLS_DH_anon_WITH_AES_128_GCM_SHA256 = 0x00A6;
  case TLS_DH_anon_WITH_AES_256_GCM_SHA384 = 0x00A7;
  case TLS_PSK_WITH_AES_128_GCM_SHA256 = 0x00A8;
  case TLS_PSK_WITH_AES_256_GCM_SHA384 = 0x00A9;
  case TLS_DHE_PSK_WITH_AES_128_GCM_SHA256 = 0x00AA;
  case TLS_DHE_PSK_WITH_AES_256_GCM_SHA384 = 0x00AB;
  case TLS_RSA_PSK_WITH_AES_128_GCM_SHA256 = 0x00AC;
  case TLS_RSA_PSK_WITH_AES_256_GCM_SHA384 = 0x00AD;
  case TLS_PSK_WITH_AES_128_CBC_SHA256 = 0x00AE;
  case TLS_PSK_WITH_AES_256_CBC_SHA384 = 0x00AF;
  case TLS_PSK_WITH_NULL_SHA256 = 0x00B0;
  case TLS_PSK_WITH_NULL_SHA384 = 0x00B1;
  case TLS_DHE_PSK_WITH_AES_128_CBC_SHA256 = 0x00B2;
  case TLS_DHE_PSK_WITH_AES_256_CBC_SHA384 = 0x00B3;
  case TLS_DHE_PSK_WITH_NULL_SHA256 = 0x00B4;
  case TLS_DHE_PSK_WITH_NULL_SHA384 = 0x00B5;
  case TLS_RSA_PSK_WITH_AES_128_CBC_SHA256 = 0x00B6;
  case TLS_RSA_PSK_WITH_AES_256_CBC_SHA384 = 0x00B7;
  case TLS_RSA_PSK_WITH_NULL_SHA256 = 0x00B8;
  case TLS_RSA_PSK_WITH_NULL_SHA384 = 0x00B9;
  case TLS_RSA_WITH_CAMELLIA_128_CBC_SHA256 = 0x00BA;
  case TLS_DH_DSS_WITH_CAMELLIA_128_CBC_SHA256 = 0x00BB;
  case TLS_DH_RSA_WITH_CAMELLIA_128_CBC_SHA256 = 0x00BC;
  case TLS_DHE_DSS_WITH_CAMELLIA_128_CBC_SHA256 = 0x00BD;
  case TLS_DHE_RSA_WITH_CAMELLIA_128_CBC_SHA256 = 0x00BE;
  case TLS_DH_anon_WITH_CAMELLIA_128_CBC_SHA256 = 0x00BF;
  case TLS_RSA_WITH_CAMELLIA_256_CBC_SHA256 = 0x00C0;
  case TLS_DH_DSS_WITH_CAMELLIA_256_CBC_SHA256 = 0x00C1;
  case TLS_DH_RSA_WITH_CAMELLIA_256_CBC_SHA256 = 0x00C2;
  case TLS_DHE_DSS_WITH_CAMELLIA_256_CBC_SHA256 = 0x00C3;
  case TLS_DHE_RSA_WITH_CAMELLIA_256_CBC_SHA256 = 0x00C4;
  case TLS_DH_anon_WITH_CAMELLIA_256_CBC_SHA256 = 0x00C5;
  case TLS_SM4_GCM_SM3 = 0x00C6;
  case TLS_SM4_CCM_SM3 = 0x00C7;
  case TLS_EMPTY_RENEGOTIATION_INFO_SCSV = 0x00FF;
  case TLS_AES_128_GCM_SHA256 = 0x1301;
  case TLS_AES_256_GCM_SHA384 = 0x1302;
  case TLS_CHACHA20_POLY1305_SHA256 = 0x1303;
  case TLS_AES_128_CCM_SHA256 = 0x1304;
  case TLS_AES_128_CCM_8_SHA256 = 0x1305;
  case TLS_AEGIS_256_SHA512 = 0x1306;
  case TLS_AEGIS_128L_SHA256 = 0x1307;
  case TLS_FALLBACK_SCSV = 0x5600;
  case TLS_ECDH_ECDSA_WITH_NULL_SHA = 0xC001;
  case TLS_ECDH_ECDSA_WITH_RC4_128_SHA = 0xC002;
  case TLS_ECDH_ECDSA_WITH_3DES_EDE_CBC_SHA = 0xC003;
  case TLS_ECDH_ECDSA_WITH_AES_128_CBC_SHA = 0xC004;
  case TLS_ECDH_ECDSA_WITH_AES_256_CBC_SHA = 0xC005;
  case TLS_ECDHE_ECDSA_WITH_NULL_SHA = 0xC006;
  case TLS_ECDHE_ECDSA_WITH_RC4_128_SHA = 0xC007;
  case TLS_ECDHE_ECDSA_WITH_3DES_EDE_CBC_SHA = 0xC008;
  case TLS_ECDHE_ECDSA_WITH_AES_128_CBC_SHA = 0xC009;
  case TLS_ECDHE_ECDSA_WITH_AES_256_CBC_SHA = 0xC00A;
  case TLS_ECDH_RSA_WITH_NULL_SHA = 0xC00B;
  case TLS_ECDH_RSA_WITH_RC4_128_SHA = 0xC00C;
  case TLS_ECDH_RSA_WITH_3DES_EDE_CBC_SHA = 0xC00D;
  case TLS_ECDH_RSA_WITH_AES_128_CBC_SHA = 0xC00E;
  case TLS_ECDH_RSA_WITH_AES_256_CBC_SHA = 0xC00F;
  case TLS_ECDHE_RSA_WITH_NULL_SHA = 0xC010;
  case TLS_ECDHE_RSA_WITH_RC4_128_SHA = 0xC011;
  case TLS_ECDHE_RSA_WITH_3DES_EDE_CBC_SHA = 0xC012;
  case TLS_ECDHE_RSA_WITH_AES_128_CBC_SHA = 0xC013;
  case TLS_ECDHE_RSA_WITH_AES_256_CBC_SHA = 0xC014;
  case TLS_ECDH_anon_WITH_NULL_SHA = 0xC015;
  case TLS_ECDH_anon_WITH_RC4_128_SHA = 0xC016;
  case TLS_ECDH_anon_WITH_3DES_EDE_CBC_SHA = 0xC017;
  case TLS_ECDH_anon_WITH_AES_128_CBC_SHA = 0xC018;
  case TLS_ECDH_anon_WITH_AES_256_CBC_SHA = 0xC019;
  case TLS_SRP_SHA_WITH_3DES_EDE_CBC_SHA = 0xC01A;
  case TLS_SRP_SHA_RSA_WITH_3DES_EDE_CBC_SHA = 0xC01B;
  case TLS_SRP_SHA_DSS_WITH_3DES_EDE_CBC_SHA = 0xC01C;
  case TLS_SRP_SHA_WITH_AES_128_CBC_SHA = 0xC01D;
  case TLS_SRP_SHA_RSA_WITH_AES_128_CBC_SHA = 0xC01E;
  case TLS_SRP_SHA_DSS_WITH_AES_128_CBC_SHA = 0xC01F;
  case TLS_SRP_SHA_WITH_AES_256_CBC_SHA = 0xC020;
  case TLS_SRP_SHA_RSA_WITH_AES_256_CBC_SHA = 0xC021;
  case TLS_SRP_SHA_DSS_WITH_AES_256_CBC_SHA = 0xC022;
  case TLS_ECDHE_ECDSA_WITH_AES_128_CBC_SHA256 = 0xC023;
  case TLS_ECDHE_ECDSA_WITH_AES_256_CBC_SHA384 = 0xC024;
  case TLS_ECDH_ECDSA_WITH_AES_128_CBC_SHA256 = 0xC025;
  case TLS_ECDH_ECDSA_WITH_AES_256_CBC_SHA384 = 0xC026;
  case TLS_ECDHE_RSA_WITH_AES_128_CBC_SHA256 = 0xC027;
  case TLS_ECDHE_RSA_WITH_AES_256_CBC_SHA384 = 0xC028;
  case TLS_ECDH_RSA_WITH_AES_128_CBC_SHA256 = 0xC029;
  case TLS_ECDH_RSA_WITH_AES_256_CBC_SHA384 = 0xC02A;
  case TLS_ECDHE_ECDSA_WITH_AES_128_GCM_SHA256 = 0xC02B;
  case TLS_ECDHE_ECDSA_WITH_AES_256_GCM_SHA384 = 0xC02C;
  case TLS_ECDH_ECDSA_WITH_AES_128_GCM_SHA256 = 0xC02D;
  case TLS_ECDH_ECDSA_WITH_AES_256_GCM_SHA384 = 0xC02E;
  case TLS_ECDHE_RSA_WITH_AES_128_GCM_SHA256 = 0xC02F;
  case TLS_ECDHE_RSA_WITH_AES_256_GCM_SHA384 = 0xC030;
  case TLS_ECDH_RSA_WITH_AES_128_GCM_SHA256 = 0xC031;
  case TLS_ECDH_RSA_WITH_AES_256_GCM_SHA384 = 0xC032;
  case TLS_ECDHE_PSK_WITH_RC4_128_SHA = 0xC033;
  case TLS_ECDHE_PSK_WITH_3DES_EDE_CBC_SHA = 0xC034;
  case TLS_ECDHE_PSK_WITH_AES_128_CBC_SHA = 0xC035;
  case TLS_ECDHE_PSK_WITH_AES_256_CBC_SHA = 0xC036;
  case TLS_ECDHE_PSK_WITH_AES_128_CBC_SHA256 = 0xC037;
  case TLS_ECDHE_PSK_WITH_AES_256_CBC_SHA384 = 0xC038;
  case TLS_ECDHE_PSK_WITH_NULL_SHA = 0xC039;
  case TLS_ECDHE_PSK_WITH_NULL_SHA256 = 0xC03A;
  case TLS_ECDHE_PSK_WITH_NULL_SHA384 = 0xC03B;
  case TLS_RSA_WITH_ARIA_128_CBC_SHA256 = 0xC03C;
  case TLS_RSA_WITH_ARIA_256_CBC_SHA384 = 0xC03D;
  case TLS_DH_DSS_WITH_ARIA_128_CBC_SHA256 = 0xC03E;
  case TLS_DH_DSS_WITH_ARIA_256_CBC_SHA384 = 0xC03F;
  case TLS_DH_RSA_WITH_ARIA_128_CBC_SHA256 = 0xC040;
  case TLS_DH_RSA_WITH_ARIA_256_CBC_SHA384 = 0xC041;
  case TLS_DHE_DSS_WITH_ARIA_128_CBC_SHA256 = 0xC042;
  case TLS_DHE_DSS_WITH_ARIA_256_CBC_SHA384 = 0xC043;
  case TLS_DHE_RSA_WITH_ARIA_128_CBC_SHA256 = 0xC044;
  case TLS_DHE_RSA_WITH_ARIA_256_CBC_SHA384 = 0xC045;
  case TLS_DH_anon_WITH_ARIA_128_CBC_SHA256 = 0xC046;
  case TLS_DH_anon_WITH_ARIA_256_CBC_SHA384 = 0xC047;
  case TLS_ECDHE_ECDSA_WITH_ARIA_128_CBC_SHA256 = 0xC048;
  case TLS_ECDHE_ECDSA_WITH_ARIA_256_CBC_SHA384 = 0xC049;
  case TLS_ECDH_ECDSA_WITH_ARIA_128_CBC_SHA256 = 0xC04A;
  case TLS_ECDH_ECDSA_WITH_ARIA_256_CBC_SHA384 = 0xC04B;
  case TLS_ECDHE_RSA_WITH_ARIA_128_CBC_SHA256 = 0xC04C;
  case TLS_ECDHE_RSA_WITH_ARIA_256_CBC_SHA384 = 0xC04D;
  case TLS_ECDH_RSA_WITH_ARIA_128_CBC_SHA256 = 0xC04E;
  case TLS_ECDH_RSA_WITH_ARIA_256_CBC_SHA384 = 0xC04F;
  case TLS_RSA_WITH_ARIA_128_GCM_SHA256 = 0xC050;
  case TLS_RSA_WITH_ARIA_256_GCM_SHA384 = 0xC051;
  case TLS_DHE_RSA_WITH_ARIA_128_GCM_SHA256 = 0xC052;
  case TLS_DHE_RSA_WITH_ARIA_256_GCM_SHA384 = 0xC053;
  case TLS_DH_RSA_WITH_ARIA_128_GCM_SHA256 = 0xC054;
  case TLS_DH_RSA_WITH_ARIA_256_GCM_SHA384 = 0xC055;
  case TLS_DHE_DSS_WITH_ARIA_128_GCM_SHA256 = 0xC056;
  case TLS_DHE_DSS_WITH_ARIA_256_GCM_SHA384 = 0xC057;
  case TLS_DH_DSS_WITH_ARIA_128_GCM_SHA256 = 0xC058;
  case TLS_DH_DSS_WITH_ARIA_256_GCM_SHA384 = 0xC059;
  case TLS_DH_anon_WITH_ARIA_128_GCM_SHA256 = 0xC05A;
  case TLS_DH_anon_WITH_ARIA_256_GCM_SHA384 = 0xC05B;
  case TLS_ECDHE_ECDSA_WITH_ARIA_128_GCM_SHA256 = 0xC05C;
  case TLS_ECDHE_ECDSA_WITH_ARIA_256_GCM_SHA384 = 0xC05D;
  case TLS_ECDH_ECDSA_WITH_ARIA_128_GCM_SHA256 = 0xC05E;
  case TLS_ECDH_ECDSA_WITH_ARIA_256_GCM_SHA384 = 0xC05F;
  case TLS_ECDHE_RSA_WITH_ARIA_128_GCM_SHA256 = 0xC060;
  case TLS_ECDHE_RSA_WITH_ARIA_256_GCM_SHA384 = 0xC061;
  case TLS_ECDH_RSA_WITH_ARIA_128_GCM_SHA256 = 0xC062;
  case TLS_ECDH_RSA_WITH_ARIA_256_GCM_SHA384 = 0xC063;
  case TLS_PSK_WITH_ARIA_128_CBC_SHA256 = 0xC064;
  case TLS_PSK_WITH_ARIA_256_CBC_SHA384 = 0xC065;
  case TLS_DHE_PSK_WITH_ARIA_128_CBC_SHA256 = 0xC066;
  case TLS_DHE_PSK_WITH_ARIA_256_CBC_SHA384 = 0xC067;
  case TLS_RSA_PSK_WITH_ARIA_128_CBC_SHA256 = 0xC068;
  case TLS_RSA_PSK_WITH_ARIA_256_CBC_SHA384 = 0xC069;
  case TLS_PSK_WITH_ARIA_128_GCM_SHA256 = 0xC06A;
  case TLS_PSK_WITH_ARIA_256_GCM_SHA384 = 0xC06B;
  case TLS_DHE_PSK_WITH_ARIA_128_GCM_SHA256 = 0xC06C;
  case TLS_DHE_PSK_WITH_ARIA_256_GCM_SHA384 = 0xC06D;
  case TLS_RSA_PSK_WITH_ARIA_128_GCM_SHA256 = 0xC06E;
  case TLS_RSA_PSK_WITH_ARIA_256_GCM_SHA384 = 0xC06F;
  case TLS_ECDHE_PSK_WITH_ARIA_128_CBC_SHA256 = 0xC070;
  case TLS_ECDHE_PSK_WITH_ARIA_256_CBC_SHA384 = 0xC071;
  case TLS_ECDHE_ECDSA_WITH_CAMELLIA_128_CBC_SHA256 = 0xC072;
  case TLS_ECDHE_ECDSA_WITH_CAMELLIA_256_CBC_SHA384 = 0xC073;
  case TLS_ECDH_ECDSA_WITH_CAMELLIA_128_CBC_SHA256 = 0xC074;
  case TLS_ECDH_ECDSA_WITH_CAMELLIA_256_CBC_SHA384 = 0xC075;
  case TLS_ECDHE_RSA_WITH_CAMELLIA_128_CBC_SHA256 = 0xC076;
  case TLS_ECDHE_RSA_WITH_CAMELLIA_256_CBC_SHA384 = 0xC077;
  case TLS_ECDH_RSA_WITH_CAMELLIA_128_CBC_SHA256 = 0xC078;
  case TLS_ECDH_RSA_WITH_CAMELLIA_256_CBC_SHA384 = 0xC079;
  case TLS_RSA_WITH_CAMELLIA_128_GCM_SHA256 = 0xC07A;
  case TLS_RSA_WITH_CAMELLIA_256_GCM_SHA384 = 0xC07B;
  case TLS_DHE_RSA_WITH_CAMELLIA_128_GCM_SHA256 = 0xC07C;
  case TLS_DHE_RSA_WITH_CAMELLIA_256_GCM_SHA384 = 0xC07D;
  case TLS_DH_RSA_WITH_CAMELLIA_128_GCM_SHA256 = 0xC07E;
  case TLS_DH_RSA_WITH_CAMELLIA_256_GCM_SHA384 = 0xC07F;
  case TLS_DHE_DSS_WITH_CAMELLIA_128_GCM_SHA256 = 0xC080;
  case TLS_DHE_DSS_WITH_CAMELLIA_256_GCM_SHA384 = 0xC081;
  case TLS_DH_DSS_WITH_CAMELLIA_128_GCM_SHA256 = 0xC082;
  case TLS_DH_DSS_WITH_CAMELLIA_256_GCM_SHA384 = 0xC083;
  case TLS_DH_anon_WITH_CAMELLIA_128_GCM_SHA256 = 0xC084;
  case TLS_DH_anon_WITH_CAMELLIA_256_GCM_SHA384 = 0xC085;
  case TLS_ECDHE_ECDSA_WITH_CAMELLIA_128_GCM_SHA256 = 0xC086;
  case TLS_ECDHE_ECDSA_WITH_CAMELLIA_256_GCM_SHA384 = 0xC087;
  case TLS_ECDH_ECDSA_WITH_CAMELLIA_128_GCM_SHA256 = 0xC088;
  case TLS_ECDH_ECDSA_WITH_CAMELLIA_256_GCM_SHA384 = 0xC089;
  case TLS_ECDHE_RSA_WITH_CAMELLIA_128_GCM_SHA256 = 0xC08A;
  case TLS_ECDHE_RSA_WITH_CAMELLIA_256_GCM_SHA384 = 0xC08B;
  case TLS_ECDH_RSA_WITH_CAMELLIA_128_GCM_SHA256 = 0xC08C;
  case TLS_ECDH_RSA_WITH_CAMELLIA_256_GCM_SHA384 = 0xC08D;
  case TLS_PSK_WITH_CAMELLIA_128_GCM_SHA256 = 0xC08E;
  case TLS_PSK_WITH_CAMELLIA_256_GCM_SHA384 = 0xC08F;
  case TLS_DHE_PSK_WITH_CAMELLIA_128_GCM_SHA256 = 0xC090;
  case TLS_DHE_PSK_WITH_CAMELLIA_256_GCM_SHA384 = 0xC091;
  case TLS_RSA_PSK_WITH_CAMELLIA_128_GCM_SHA256 = 0xC092;
  case TLS_RSA_PSK_WITH_CAMELLIA_256_GCM_SHA384 = 0xC093;
  case TLS_PSK_WITH_CAMELLIA_128_CBC_SHA256 = 0xC094;
  case TLS_PSK_WITH_CAMELLIA_256_CBC_SHA384 = 0xC095;
  case TLS_DHE_PSK_WITH_CAMELLIA_128_CBC_SHA256 = 0xC096;
  case TLS_DHE_PSK_WITH_CAMELLIA_256_CBC_SHA384 = 0xC097;
  case TLS_RSA_PSK_WITH_CAMELLIA_128_CBC_SHA256 = 0xC098;
  case TLS_RSA_PSK_WITH_CAMELLIA_256_CBC_SHA384 = 0xC099;
  case TLS_ECDHE_PSK_WITH_CAMELLIA_128_CBC_SHA256 = 0xC09A;
  case TLS_ECDHE_PSK_WITH_CAMELLIA_256_CBC_SHA384 = 0xC09B;
  case TLS_RSA_WITH_AES_128_CCM = 0xC09C;
  case TLS_RSA_WITH_AES_256_CCM = 0xC09D;
  case TLS_DHE_RSA_WITH_AES_128_CCM = 0xC09E;
  case TLS_DHE_RSA_WITH_AES_256_CCM = 0xC09F;
  case TLS_RSA_WITH_AES_128_CCM_8 = 0xC0A0;
  case TLS_RSA_WITH_AES_256_CCM_8 = 0xC0A1;
  case TLS_DHE_RSA_WITH_AES_128_CCM_8 = 0xC0A2;
  case TLS_DHE_RSA_WITH_AES_256_CCM_8 = 0xC0A3;
  case TLS_PSK_WITH_AES_128_CCM = 0xC0A4;
  case TLS_PSK_WITH_AES_256_CCM = 0xC0A5;
  case TLS_DHE_PSK_WITH_AES_128_CCM = 0xC0A6;
  case TLS_DHE_PSK_WITH_AES_256_CCM = 0xC0A7;
  case TLS_PSK_WITH_AES_128_CCM_8 = 0xC0A8;
  case TLS_PSK_WITH_AES_256_CCM_8 = 0xC0A9;
  case TLS_PSK_DHE_WITH_AES_128_CCM_8 = 0xC0AA;
  case TLS_PSK_DHE_WITH_AES_256_CCM_8 = 0xC0AB;
  case TLS_ECDHE_ECDSA_WITH_AES_128_CCM = 0xC0AC;
  case TLS_ECDHE_ECDSA_WITH_AES_256_CCM = 0xC0AD;
  case TLS_ECDHE_ECDSA_WITH_AES_128_CCM_8 = 0xC0AE;
  case TLS_ECDHE_ECDSA_WITH_AES_256_CCM_8 = 0xC0AF;
  case TLS_ECCPWD_WITH_AES_128_GCM_SHA256 = 0xC0B0;
  case TLS_ECCPWD_WITH_AES_256_GCM_SHA384 = 0xC0B1;
  case TLS_ECCPWD_WITH_AES_128_CCM_SHA256 = 0xC0B2;
  case TLS_ECCPWD_WITH_AES_256_CCM_SHA384 = 0xC0B3;
  case TLS_SHA256_SHA256 = 0xC0B4;
  case TLS_SHA384_SHA384 = 0xC0B5;
  case TLS_GOSTR341112_256_WITH_KUZNYECHIK_CTR_OMAC = 0xC100;
  case TLS_GOSTR341112_256_WITH_MAGMA_CTR_OMAC = 0xC101;
  case TLS_GOSTR341112_256_WITH_28147_CNT_IMIT = 0xC102;
  case TLS_GOSTR341112_256_WITH_KUZNYECHIK_MGM_L = 0xC103;
  case TLS_GOSTR341112_256_WITH_MAGMA_MGM_L = 0xC104;
  case TLS_GOSTR341112_256_WITH_KUZNYECHIK_MGM_S = 0xC105;
  case TLS_GOSTR341112_256_WITH_MAGMA_MGM_S = 0xC106;
  case TLS_ECDHE_RSA_WITH_CHACHA20_POLY1305_SHA256 = 0xCCA8;
  case TLS_ECDHE_ECDSA_WITH_CHACHA20_POLY1305_SHA256 = 0xCCA9;
  case TLS_DHE_RSA_WITH_CHACHA20_POLY1305_SHA256 = 0xCCAA;
  case TLS_PSK_WITH_CHACHA20_POLY1305_SHA256 = 0xCCAB;
  case TLS_ECDHE_PSK_WITH_CHACHA20_POLY1305_SHA256 = 0xCCAC;
  case TLS_DHE_PSK_WITH_CHACHA20_POLY1305_SHA256 = 0xCCAD;
  case TLS_RSA_PSK_WITH_CHACHA20_POLY1305_SHA256 = 0xCCAE;
  case TLS_ECDHE_PSK_WITH_AES_128_GCM_SHA256 = 0xD001;
  case TLS_ECDHE_PSK_WITH_AES_256_GCM_SHA384 = 0xD002;
  case TLS_ECDHE_PSK_WITH_AES_128_CCM_8_SHA256 = 0xD003;
  case TLS_ECDHE_PSK_WITH_AES_128_CCM_SHA256 = 0xD005;

  public function data(){
    return match($this){
      self::TLS_AES_128_CCM_8_SHA256=>[
        "e"=>"AES-128-CCM-8",
        "h"=>"SHA256",
        "k"=>"-",
        "a"=>"-",
      ],
      self::TLS_AES_128_CCM_SHA256=>[
        "e"=>"AES-128-CCM",
        "h"=>"SHA256",
        "k"=>"-",
        "a"=>"-"
      ],
      self::TLS_AES_128_GCM_SHA256=>[
        "e"=>"AES-128-GCM",
        "h"=>"SHA256",
        "k"=>"-",
        "a"=>"-"
      ],
      self::TLS_AES_256_GCM_SHA384=>[
        "e"=>"AES-256-GCM",
        "h"=>"SHA384",
        "k"=>"-",
        "a"=>"-"
      ],
      self::TLS_CHACHA20_POLY1305_SHA256=>[
        "e"=>"CHACHA20-POLY1305",
        "h"=>"SHA256",
        "k"=>"-",
        "a"=>"-"
      ],
      self::TLS_DH_anon_EXPORT_WITH_DES40_CBC_SHA=>[
        "e"=>"DES40-CBC",
        "h"=>"SHA",
        "k"=>"DH",
        "a"=>"anon"
      ],
      self::TLS_DH_anon_EXPORT_WITH_RC4_40_MD5=>[
        "e"=>"RC4-40",
        "h"=>"MD5",
        "k"=>"DH",
        "a"=>"anon"
      ],
      self::TLS_DH_anon_WITH_3DES_EDE_CBC_SHA=>[
        "e"=>"3DES-EDE-CBC",
        "h"=>"SHA",
        "k"=>"DH",
        "a"=>"anon"
      ],
      self::TLS_DH_anon_WITH_AES_128_CBC_SHA=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA",
        "k"=>"DH",
        "a"=>"anon"
      ],
      self::TLS_DH_anon_WITH_AES_128_CBC_SHA256=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA256",
        "k"=>"DH",
        "a"=>"anon"
      ],
      self::TLS_DH_anon_WITH_AES_128_GCM_SHA256=>[
        "e"=>"AES-128-GCM",
        "h"=>"SHA256",
        "k"=>"DH",
        "a"=>"anon"
      ],
      self::TLS_DH_anon_WITH_AES_256_CBC_SHA=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA",
        "k"=>"DH",
        "a"=>"anon"
      ],
      self::TLS_DH_anon_WITH_AES_256_CBC_SHA256=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA256",
        "k"=>"DH",
        "a"=>"anon"
      ],
      self::TLS_DH_anon_WITH_AES_256_GCM_SHA384=>[
        "e"=>"AES-256-GCM",
        "h"=>"SHA384",
        "k"=>"DH",
        "a"=>"anon"
      ],
      self::TLS_DH_anon_WITH_ARIA_128_CBC_SHA256=>[
        "e"=>"ARIA-128-CBC",
        "h"=>"SHA256",
        "k"=>"DH",
        "a"=>"anon"
      ],
      self::TLS_DH_anon_WITH_ARIA_128_GCM_SHA256=>[
        "e"=>"ARIA-128-GCM",
        "h"=>"SHA256",
        "k"=>"DH",
        "a"=>"anon"
      ],
      self::TLS_DH_anon_WITH_ARIA_256_CBC_SHA384=>[
        "e"=>"ARIA-256-CBC",
        "h"=>"SHA384",
        "k"=>"DH",
        "a"=>"anon"
      ],
      self::TLS_DH_anon_WITH_ARIA_256_GCM_SHA384=>[
        "e"=>"ARIA-256-GCM",
        "h"=>"SHA384",
        "k"=>"DH",
        "a"=>"anon"
      ],
      self::TLS_DH_anon_WITH_CAMELLIA_128_CBC_SHA=>[
        "e"=>"CAMELLIA-128-CBC",
        "h"=>"SHA",
        "k"=>"DH",
        "a"=>"anon"
      ],
      self::TLS_DH_anon_WITH_CAMELLIA_128_CBC_SHA256=>[
        "e"=>"CAMELLIA-128-CBC",
        "h"=>"SHA256",
        "k"=>"DH",
        "a"=>"anon"
      ],
      self::TLS_DH_anon_WITH_CAMELLIA_128_GCM_SHA256=>[
        "e"=>"CAMELLIA-128-GCM",
        "h"=>"SHA256",
        "k"=>"DH",
        "a"=>"anon"
      ],
      self::TLS_DH_anon_WITH_CAMELLIA_256_CBC_SHA=>[
        "e"=>"CAMELLIA-256-CBC",
        "h"=>"SHA",
        "k"=>"DH",
        "a"=>"anon"
      ],
      self::TLS_DH_anon_WITH_CAMELLIA_256_CBC_SHA256=>[
        "e"=>"CAMELLIA-256-CBC",
        "h"=>"SHA256",
        "k"=>"DH",
        "a"=>"anon"
      ],
      self::TLS_DH_anon_WITH_CAMELLIA_256_GCM_SHA384=>[
        "e"=>"CAMELLIA-256-GCM",
        "h"=>"SHA384",
        "k"=>"DH",
        "a"=>"anon"
      ],
      self::TLS_DH_anon_WITH_DES_CBC_SHA=>[
        "e"=>"DES-CBC",
        "h"=>"SHA",
        "k"=>"DH",
        "a"=>"anon"
      ],
      self::TLS_DH_anon_WITH_RC4_128_MD5=>[
        "e"=>"RC4-128",
        "h"=>"MD5",
        "k"=>"DH",
        "a"=>"anon"
      ],
      self::TLS_DH_anon_WITH_SEED_CBC_SHA=>[
        "e"=>"SEED-CBC",
        "h"=>"SHA",
        "k"=>"DH",
        "a"=>"anon"
      ],
      self::TLS_DH_DSS_EXPORT_WITH_DES40_CBC_SHA=>[
        "e"=>"DES40-CBC",
        "h"=>"SHA",
        "k"=>"DH",
        "a"=>"DSS"
      ],
      self::TLS_DH_DSS_WITH_3DES_EDE_CBC_SHA=>[
        "e"=>"3DES-EDE-CBC",
        "h"=>"SHA",
        "k"=>"DH",
        "a"=>"DSS"
      ],
      self::TLS_DH_DSS_WITH_AES_128_CBC_SHA=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA",
        "k"=>"DH",
        "a"=>"DSS"
      ],
      self::TLS_DH_DSS_WITH_AES_128_CBC_SHA256=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA256",
        "k"=>"DH",
        "a"=>"DSS"
      ],
      self::TLS_DH_DSS_WITH_AES_128_GCM_SHA256=>[
        "e"=>"AES-128-GCM",
        "h"=>"SHA256",
        "k"=>"DH",
        "a"=>"DSS"
      ],
      self::TLS_DH_DSS_WITH_AES_256_CBC_SHA=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA",
        "k"=>"DH",
        "a"=>"DSS"
      ],
      self::TLS_DH_DSS_WITH_AES_256_CBC_SHA256=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA256",
        "k"=>"DH",
        "a"=>"DSS"
      ],
      self::TLS_DH_DSS_WITH_AES_256_GCM_SHA384=>[
        "e"=>"AES-256-GCM",
        "h"=>"SHA384",
        "k"=>"DH",
        "a"=>"DSS"
      ],
      self::TLS_DH_DSS_WITH_ARIA_128_CBC_SHA256=>[
        "e"=>"ARIA-128-CBC",
        "h"=>"SHA256",
        "k"=>"DH",
        "a"=>"DSS"
      ],
      self::TLS_DH_DSS_WITH_ARIA_128_GCM_SHA256=>[
        "e"=>"ARIA-128-GCM",
        "h"=>"SHA256",
        "k"=>"DH",
        "a"=>"DSS"
      ],
      self::TLS_DH_DSS_WITH_ARIA_256_CBC_SHA384=>[
        "e"=>"ARIA-256-CBC",
        "h"=>"SHA384",
        "k"=>"DH",
        "a"=>"DSS"
      ],
      self::TLS_DH_DSS_WITH_ARIA_256_GCM_SHA384=>[
        "e"=>"ARIA-256-GCM",
        "h"=>"SHA384",
        "k"=>"DH",
        "a"=>"DSS"
      ],
      self::TLS_DH_DSS_WITH_CAMELLIA_128_CBC_SHA=>[
        "e"=>"CAMELLIA-128-CBC",
        "h"=>"SHA",
        "k"=>"DH",
        "a"=>"DSS"
      ],
      self::TLS_DH_DSS_WITH_CAMELLIA_128_CBC_SHA256=>[
        "e"=>"CAMELLIA-128-CBC",
        "h"=>"SHA256",
        "k"=>"DH",
        "a"=>"DSS"
      ],
      self::TLS_DH_DSS_WITH_CAMELLIA_128_GCM_SHA256=>[
        "e"=>"CAMELLIA-128-GCM",
        "h"=>"SHA256",
        "k"=>"DH",
        "a"=>"DSS"
      ],
      self::TLS_DH_DSS_WITH_CAMELLIA_256_CBC_SHA=>[
        "e"=>"CAMELLIA-256-CBC",
        "h"=>"SHA",
        "k"=>"DH",
        "a"=>"DSS"
      ],
      self::TLS_DH_DSS_WITH_CAMELLIA_256_CBC_SHA256=>[
        "e"=>"CAMELLIA-256-CBC",
        "h"=>"SHA256",
        "k"=>"DH",
        "a"=>"DSS"
      ],
      self::TLS_DH_DSS_WITH_CAMELLIA_256_GCM_SHA384=>[
        "e"=>"CAMELLIA-256-GCM",
        "h"=>"SHA384",
        "k"=>"DH",
        "a"=>"DSS"
      ],
      self::TLS_DH_DSS_WITH_DES_CBC_SHA=>[
        "e"=>"DES-CBC",
        "h"=>"SHA",
        "k"=>"DH",
        "a"=>"DSS"
      ],
      self::TLS_DH_DSS_WITH_SEED_CBC_SHA=>[
        "e"=>"SEED-CBC",
        "h"=>"SHA",
        "k"=>"DH",
        "a"=>"DSS"
      ],
      self::TLS_DHE_DSS_EXPORT_WITH_DES40_CBC_SHA=>[
        "e"=>"DES40-CBC",
        "h"=>"SHA",
        "k"=>"DHE",
        "a"=>"DSS"
      ],
      self::TLS_DHE_DSS_WITH_3DES_EDE_CBC_SHA=>[
        "e"=>"3DES-EDE-CBC",
        "h"=>"SHA",
        "k"=>"DHE",
        "a"=>"DSS"
      ],
      self::TLS_DHE_DSS_WITH_AES_128_CBC_SHA=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA",
        "k"=>"DHE",
        "a"=>"DSS"
      ],
      self::TLS_DHE_DSS_WITH_AES_128_CBC_SHA256=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"DSS"
      ],
      self::TLS_DHE_DSS_WITH_AES_128_GCM_SHA256=>[
        "e"=>"AES-128-GCM",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"DSS"
      ],
      self::TLS_DHE_DSS_WITH_AES_256_CBC_SHA=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA",
        "k"=>"DHE",
        "a"=>"DSS"
      ],
      self::TLS_DHE_DSS_WITH_AES_256_CBC_SHA256=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"DSS"
      ],
      self::TLS_DHE_DSS_WITH_AES_256_GCM_SHA384=>[
        "e"=>"AES-256-GCM",
        "h"=>"SHA384",
        "k"=>"DHE",
        "a"=>"DSS"
      ],
      self::TLS_DHE_DSS_WITH_ARIA_128_CBC_SHA256=>[
        "e"=>"ARIA-128-CBC",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"DSS"
      ],
      self::TLS_DHE_DSS_WITH_ARIA_128_GCM_SHA256=>[
        "e"=>"ARIA-128-GCM",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"DSS"
      ],
      self::TLS_DHE_DSS_WITH_ARIA_256_CBC_SHA384=>[
        "e"=>"ARIA-256-CBC",
        "h"=>"SHA384",
        "k"=>"DHE",
        "a"=>"DSS"
      ],
      self::TLS_DHE_DSS_WITH_ARIA_256_GCM_SHA384=>[
        "e"=>"ARIA-256-GCM",
        "h"=>"SHA384",
        "k"=>"DHE",
        "a"=>"DSS"
      ],
      self::TLS_DHE_DSS_WITH_CAMELLIA_128_CBC_SHA=>[
        "e"=>"CAMELLIA-128-CBC",
        "h"=>"SHA",
        "k"=>"DHE",
        "a"=>"DSS"
      ],
      self::TLS_DHE_DSS_WITH_CAMELLIA_128_CBC_SHA256=>[
        "e"=>"CAMELLIA-128-CBC",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"DSS"
      ],
      self::TLS_DHE_DSS_WITH_CAMELLIA_128_GCM_SHA256=>[
        "e"=>"CAMELLIA-128-GCM",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"DSS"
      ],
      self::TLS_DHE_DSS_WITH_CAMELLIA_256_CBC_SHA=>[
        "e"=>"CAMELLIA-256-CBC",
        "h"=>"SHA",
        "k"=>"DHE",
        "a"=>"DSS"
      ],
      self::TLS_DHE_DSS_WITH_CAMELLIA_256_CBC_SHA256=>[
        "e"=>"CAMELLIA-256-CBC",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"DSS"
      ],
      self::TLS_DHE_DSS_WITH_CAMELLIA_256_GCM_SHA384=>[
        "e"=>"CAMELLIA-256-GCM",
        "h"=>"SHA384",
        "k"=>"DHE",
        "a"=>"DSS"
      ],
      self::TLS_DHE_DSS_WITH_DES_CBC_SHA=>[
        "e"=>"DES-CBC",
        "h"=>"SHA",
        "k"=>"DHE",
        "a"=>"DSS"
      ],
      self::TLS_DHE_DSS_WITH_SEED_CBC_SHA=>[
        "e"=>"SEED-CBC",
        "h"=>"SHA",
        "k"=>"DHE",
        "a"=>"DSS"
      ],
      self::TLS_DHE_PSK_WITH_3DES_EDE_CBC_SHA=>[
        "e"=>"3DES-EDE-CBC",
        "h"=>"SHA",
        "k"=>"DHE",
        "a"=>"PSK"
      ],
      self::TLS_DHE_PSK_WITH_AES_128_CBC_SHA=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA",
        "k"=>"DHE",
        "a"=>"PSK"
      ],
      self::TLS_DHE_PSK_WITH_AES_128_CBC_SHA256=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"PSK"
      ],
      self::TLS_DHE_PSK_WITH_AES_128_CCM=>[
        "e"=>"AES-128-CCM",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"PSK"
      ],
      self::TLS_DHE_PSK_WITH_AES_128_GCM_SHA256=>[
        "e"=>"AES-128-GCM",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"PSK"
      ],
      self::TLS_DHE_PSK_WITH_AES_256_CBC_SHA=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA",
        "k"=>"DHE",
        "a"=>"PSK"
      ],
      self::TLS_DHE_PSK_WITH_AES_256_CBC_SHA384=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA384",
        "k"=>"DHE",
        "a"=>"PSK"
      ],
      self::TLS_DHE_PSK_WITH_AES_256_CCM=>[
        "e"=>"AES-256-CCM",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"PSK"
      ],
      self::TLS_DHE_PSK_WITH_AES_256_GCM_SHA384=>[
        "e"=>"AES-256-GCM",
        "h"=>"SHA384",
        "k"=>"DHE",
        "a"=>"PSK"
      ],
      self::TLS_DHE_PSK_WITH_ARIA_128_CBC_SHA256=>[
        "e"=>"ARIA-128-CBC",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"PSK"
      ],
      self::TLS_DHE_PSK_WITH_ARIA_128_GCM_SHA256=>[
        "e"=>"ARIA-128-GCM",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"PSK"
      ],
      self::TLS_DHE_PSK_WITH_ARIA_256_CBC_SHA384=>[
        "e"=>"ARIA-256-CBC",
        "h"=>"SHA384",
        "k"=>"DHE",
        "a"=>"PSK"
      ],
      self::TLS_DHE_PSK_WITH_ARIA_256_GCM_SHA384=>[
        "e"=>"ARIA-256-GCM",
        "h"=>"SHA384",
        "k"=>"DHE",
        "a"=>"PSK"
      ],
      self::TLS_DHE_PSK_WITH_CAMELLIA_128_CBC_SHA256=>[
        "e"=>"CAMELLIA-128-CBC",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"PSK"
      ],
      self::TLS_DHE_PSK_WITH_CAMELLIA_128_GCM_SHA256=>[
        "e"=>"CAMELLIA-128-GCM",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"PSK"
      ],
      self::TLS_DHE_PSK_WITH_CAMELLIA_256_CBC_SHA384=>[
        "e"=>"CAMELLIA-256-CBC",
        "h"=>"SHA384",
        "k"=>"DHE",
        "a"=>"PSK"
      ],
      self::TLS_DHE_PSK_WITH_CAMELLIA_256_GCM_SHA384=>[
        "e"=>"CAMELLIA-256-GCM",
        "h"=>"SHA384",
        "k"=>"DHE",
        "a"=>"PSK"
      ],
      self::TLS_DHE_PSK_WITH_CHACHA20_POLY1305_SHA256=>[
        "e"=>"CHACHA20-POLY1305",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"PSK"
      ],
      self::TLS_DHE_PSK_WITH_NULL_SHA=>[
        "e"=>"NULL",
        "h"=>"SHA",
        "k"=>"DHE",
        "a"=>"PSK"
      ],
      self::TLS_DHE_PSK_WITH_NULL_SHA256=>[
        "e"=>"NULL",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"PSK"
      ],
      self::TLS_DHE_PSK_WITH_NULL_SHA384=>[
        "e"=>"NULL",
        "h"=>"SHA384",
        "k"=>"DHE",
        "a"=>"PSK"
      ],
      self::TLS_DHE_PSK_WITH_RC4_128_SHA=>[
        "e"=>"RC4-128",
        "h"=>"SHA",
        "k"=>"DHE",
        "a"=>"PSK"
      ],
      self::TLS_DHE_RSA_EXPORT_WITH_DES40_CBC_SHA=>[
        "e"=>"DES40-CBC",
        "h"=>"SHA",
        "k"=>"DHE",
        "a"=>"RSA"
      ],
      self::TLS_DHE_RSA_WITH_3DES_EDE_CBC_SHA=>[
        "e"=>"3DES-EDE-CBC",
        "h"=>"SHA",
        "k"=>"DHE",
        "a"=>"RSA"
      ],
      self::TLS_DHE_RSA_WITH_AES_128_CBC_SHA=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA",
        "k"=>"DHE",
        "a"=>"RSA"
      ],
      self::TLS_DHE_RSA_WITH_AES_128_CBC_SHA256=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"RSA"
      ],
      self::TLS_DHE_RSA_WITH_AES_128_CCM=>[
        "e"=>"AES-128-CCM",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"RSA"
      ],
      self::TLS_DHE_RSA_WITH_AES_128_CCM_8=>[
        "e"=>"AES-128-CCM-8",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"RSA"
      ],
      self::TLS_DHE_RSA_WITH_AES_128_GCM_SHA256=>[
        "e"=>"AES-128-GCM",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"RSA"
      ],
      self::TLS_DHE_RSA_WITH_AES_256_CBC_SHA=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA",
        "k"=>"DHE",
        "a"=>"RSA"
      ],
      self::TLS_DHE_RSA_WITH_AES_256_CBC_SHA256=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"RSA"
      ],
      self::TLS_DHE_RSA_WITH_AES_256_CCM=>[
        "e"=>"AES-256-CCM",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"RSA"
      ],
      self::TLS_DHE_RSA_WITH_AES_256_CCM_8=>[
        "e"=>"AES-256-CCM-8",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"RSA"
      ],
      self::TLS_DHE_RSA_WITH_AES_256_GCM_SHA384=>[
        "e"=>"AES-256-GCM",
        "h"=>"SHA384",
        "k"=>"DHE",
        "a"=>"RSA"
      ],
      self::TLS_DHE_RSA_WITH_ARIA_128_CBC_SHA256=>[
        "e"=>"ARIA-128-CBC",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"RSA"
      ],
      self::TLS_DHE_RSA_WITH_ARIA_128_GCM_SHA256=>[
        "e"=>"ARIA-128-GCM",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"RSA"
      ],
      self::TLS_DHE_RSA_WITH_ARIA_256_CBC_SHA384=>[
        "e"=>"ARIA-256-CBC",
        "h"=>"SHA384",
        "k"=>"DHE",
        "a"=>"RSA"
      ],
      self::TLS_DHE_RSA_WITH_ARIA_256_GCM_SHA384=>[
        "e"=>"ARIA-256-GCM",
        "h"=>"SHA384",
        "k"=>"DHE",
        "a"=>"RSA"
      ],
      self::TLS_DHE_RSA_WITH_CAMELLIA_128_CBC_SHA=>[
        "e"=>"CAMELLIA-128-CBC",
        "h"=>"SHA",
        "k"=>"DHE",
        "a"=>"RSA"
      ],
      self::TLS_DHE_RSA_WITH_CAMELLIA_128_CBC_SHA256=>[
        "e"=>"CAMELLIA-128-CBC",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"RSA"
      ],
      self::TLS_DHE_RSA_WITH_CAMELLIA_128_GCM_SHA256=>[
        "e"=>"CAMELLIA-128-GCM",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"RSA"
      ],
      self::TLS_DHE_RSA_WITH_CAMELLIA_256_CBC_SHA=>[
        "e"=>"CAMELLIA-256-CBC",
        "h"=>"SHA",
        "k"=>"DHE",
        "a"=>"RSA"
      ],
      self::TLS_DHE_RSA_WITH_CAMELLIA_256_CBC_SHA256=>[
        "e"=>"CAMELLIA-256-CBC",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"RSA"
      ],
      self::TLS_DHE_RSA_WITH_CAMELLIA_256_GCM_SHA384=>[
        "e"=>"CAMELLIA-256-GCM",
        "h"=>"SHA384",
        "k"=>"DHE",
        "a"=>"RSA"
      ],
      self::TLS_DHE_RSA_WITH_CHACHA20_POLY1305_SHA256=>[
        "e"=>"CHACHA20-POLY1305",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"RSA"
      ],
      self::TLS_DHE_RSA_WITH_DES_CBC_SHA=>[
        "e"=>"DES-CBC",
        "h"=>"SHA",
        "k"=>"DHE",
        "a"=>"RSA"
      ],
      self::TLS_DHE_RSA_WITH_SEED_CBC_SHA=>[
        "e"=>"SEED-CBC",
        "h"=>"SHA",
        "k"=>"DHE",
        "a"=>"RSA"
      ],
      self::TLS_DH_RSA_EXPORT_WITH_DES40_CBC_SHA=>[
        "e"=>"DES40-CBC",
        "h"=>"SHA",
        "k"=>"DH",
        "a"=>"RSA"
      ],
      self::TLS_DH_RSA_WITH_3DES_EDE_CBC_SHA=>[
        "e"=>"3DES-EDE-CBC",
        "h"=>"SHA",
        "k"=>"DH",
        "a"=>"RSA"
      ],
      self::TLS_DH_RSA_WITH_AES_128_CBC_SHA=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA",
        "k"=>"DH",
        "a"=>"RSA"
      ],
      self::TLS_DH_RSA_WITH_AES_128_CBC_SHA256=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA256",
        "k"=>"DH",
        "a"=>"RSA"
      ],
      self::TLS_DH_RSA_WITH_AES_128_GCM_SHA256=>[
        "e"=>"AES-128-GCM",
        "h"=>"SHA256",
        "k"=>"DH",
        "a"=>"RSA"
      ],
      self::TLS_DH_RSA_WITH_AES_256_CBC_SHA=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA",
        "k"=>"DH",
        "a"=>"RSA"
      ],
      self::TLS_DH_RSA_WITH_AES_256_CBC_SHA256=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA256",
        "k"=>"DH",
        "a"=>"RSA"
      ],
      self::TLS_DH_RSA_WITH_AES_256_GCM_SHA384=>[
        "e"=>"AES-256-GCM",
        "h"=>"SHA384",
        "k"=>"DH",
        "a"=>"RSA"
      ],
      self::TLS_DH_RSA_WITH_ARIA_128_CBC_SHA256=>[
        "e"=>"ARIA-128-CBC",
        "h"=>"SHA256",
        "k"=>"DH",
        "a"=>"RSA"
      ],
      self::TLS_DH_RSA_WITH_ARIA_128_GCM_SHA256=>[
        "e"=>"ARIA-128-GCM",
        "h"=>"SHA256",
        "k"=>"DH",
        "a"=>"RSA"
      ],
      self::TLS_DH_RSA_WITH_ARIA_256_CBC_SHA384=>[
        "e"=>"ARIA-256-CBC",
        "h"=>"SHA384",
        "k"=>"DH",
        "a"=>"RSA"
      ],
      self::TLS_DH_RSA_WITH_ARIA_256_GCM_SHA384=>[
        "e"=>"ARIA-256-GCM",
        "h"=>"SHA384",
        "k"=>"DH",
        "a"=>"RSA"
      ],
      self::TLS_DH_RSA_WITH_CAMELLIA_128_CBC_SHA=>[
        "e"=>"CAMELLIA-128-CBC",
        "h"=>"SHA",
        "k"=>"DH",
        "a"=>"RSA"
      ],
      self::TLS_DH_RSA_WITH_CAMELLIA_128_CBC_SHA256=>[
        "e"=>"CAMELLIA-128-CBC",
        "h"=>"SHA256",
        "k"=>"DH",
        "a"=>"RSA"
      ],
      self::TLS_DH_RSA_WITH_CAMELLIA_128_GCM_SHA256=>[
        "e"=>"CAMELLIA-128-GCM",
        "h"=>"SHA256",
        "k"=>"DH",
        "a"=>"RSA"
      ],
      self::TLS_DH_RSA_WITH_CAMELLIA_256_CBC_SHA=>[
        "e"=>"CAMELLIA-256-CBC",
        "h"=>"SHA",
        "k"=>"DH",
        "a"=>"RSA"
      ],
      self::TLS_DH_RSA_WITH_CAMELLIA_256_CBC_SHA256=>[
        "e"=>"CAMELLIA-256-CBC",
        "h"=>"SHA256",
        "k"=>"DH",
        "a"=>"RSA"
      ],
      self::TLS_DH_RSA_WITH_CAMELLIA_256_GCM_SHA384=>[
        "e"=>"CAMELLIA-256-GCM",
        "h"=>"SHA384",
        "k"=>"DH",
        "a"=>"RSA"
      ],
      self::TLS_DH_RSA_WITH_DES_CBC_SHA=>[
        "e"=>"DES-CBC",
        "h"=>"SHA",
        "k"=>"DH",
        "a"=>"RSA"
      ],
      self::TLS_DH_RSA_WITH_SEED_CBC_SHA=>[
        "e"=>"SEED-CBC",
        "h"=>"SHA",
        "k"=>"DH",
        "a"=>"RSA"
      ],
      self::TLS_ECCPWD_WITH_AES_128_CCM_SHA256=>[
        "e"=>"AES-128-CCM",
        "h"=>"SHA256",
        "k"=>"ECCPWD",
        "a"=>"ECCPWD"
      ],
      self::TLS_ECCPWD_WITH_AES_128_GCM_SHA256=>[
        "e"=>"AES-128-GCM",
        "h"=>"SHA256",
        "k"=>"ECCPWD",
        "a"=>"ECCPWD"
      ],
      self::TLS_ECCPWD_WITH_AES_256_CCM_SHA384=>[
        "e"=>"AES-256-CCM",
        "h"=>"SHA384",
        "k"=>"ECCPWD",
        "a"=>"ECCPWD"
      ],
      self::TLS_ECCPWD_WITH_AES_256_GCM_SHA384=>[
        "e"=>"AES-256-GCM",
        "h"=>"SHA384",
        "k"=>"ECCPWD",
        "a"=>"ECCPWD"
      ],
      self::TLS_ECDH_anon_WITH_3DES_EDE_CBC_SHA=>[
        "e"=>"3DES-EDE-CBC",
        "h"=>"SHA",
        "k"=>"ECDH",
        "a"=>"anon"
      ],
      self::TLS_ECDH_anon_WITH_AES_128_CBC_SHA=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA",
        "k"=>"ECDH",
        "a"=>"anon"
      ],
      self::TLS_ECDH_anon_WITH_AES_256_CBC_SHA=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA",
        "k"=>"ECDH",
        "a"=>"anon"
      ],
      self::TLS_ECDH_anon_WITH_NULL_SHA=>[
        "e"=>"NULL",
        "h"=>"SHA",
        "k"=>"ECDH",
        "a"=>"anon"
      ],
      self::TLS_ECDH_anon_WITH_RC4_128_SHA=>[
        "e"=>"RC4-128",
        "h"=>"SHA",
        "k"=>"ECDH",
        "a"=>"anon"
      ],
      self::TLS_ECDH_ECDSA_WITH_3DES_EDE_CBC_SHA=>[
        "e"=>"3DES-EDE-CBC",
        "h"=>"SHA",
        "k"=>"ECDH",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDH_ECDSA_WITH_AES_128_CBC_SHA=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA",
        "k"=>"ECDH",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDH_ECDSA_WITH_AES_128_CBC_SHA256=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA256",
        "k"=>"ECDH",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDH_ECDSA_WITH_AES_128_GCM_SHA256=>[
        "e"=>"AES-128-GCM",
        "h"=>"SHA256",
        "k"=>"ECDH",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDH_ECDSA_WITH_AES_256_CBC_SHA=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA",
        "k"=>"ECDH",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDH_ECDSA_WITH_AES_256_CBC_SHA384=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA384",
        "k"=>"ECDH",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDH_ECDSA_WITH_AES_256_GCM_SHA384=>[
        "e"=>"AES-256-GCM",
        "h"=>"SHA384",
        "k"=>"ECDH",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDH_ECDSA_WITH_ARIA_128_CBC_SHA256=>[
        "e"=>"ARIA-128-CBC",
        "h"=>"SHA256",
        "k"=>"ECDH",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDH_ECDSA_WITH_ARIA_128_GCM_SHA256=>[
        "e"=>"ARIA-128-GCM",
        "h"=>"SHA256",
        "k"=>"ECDH",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDH_ECDSA_WITH_ARIA_256_CBC_SHA384=>[
        "e"=>"ARIA-256-CBC",
        "h"=>"SHA384",
        "k"=>"ECDH",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDH_ECDSA_WITH_ARIA_256_GCM_SHA384=>[
        "e"=>"ARIA-256-GCM",
        "h"=>"SHA384",
        "k"=>"ECDH",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDH_ECDSA_WITH_CAMELLIA_128_CBC_SHA256=>[
        "e"=>"CAMELLIA-128-CBC",
        "h"=>"SHA256",
        "k"=>"ECDH",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDH_ECDSA_WITH_CAMELLIA_128_GCM_SHA256=>[
        "e"=>"CAMELLIA-128-GCM",
        "h"=>"SHA256",
        "k"=>"ECDH",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDH_ECDSA_WITH_CAMELLIA_256_CBC_SHA384=>[
        "e"=>"CAMELLIA-256-CBC",
        "h"=>"SHA384",
        "k"=>"ECDH",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDH_ECDSA_WITH_CAMELLIA_256_GCM_SHA384=>[
        "e"=>"CAMELLIA-256-GCM",
        "h"=>"SHA384",
        "k"=>"ECDH",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDH_ECDSA_WITH_NULL_SHA=>[
        "e"=>"NULL",
        "h"=>"SHA",
        "k"=>"ECDH",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDH_ECDSA_WITH_RC4_128_SHA=>[
        "e"=>"RC4-128",
        "h"=>"SHA",
        "k"=>"ECDH",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDHE_ECDSA_WITH_3DES_EDE_CBC_SHA=>[
        "e"=>"3DES-EDE-CBC",
        "h"=>"SHA",
        "k"=>"ECDHE",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDHE_ECDSA_WITH_AES_128_CBC_SHA=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA",
        "k"=>"ECDHE",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDHE_ECDSA_WITH_AES_128_CBC_SHA256=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA256",
        "k"=>"ECDHE",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDHE_ECDSA_WITH_AES_128_CCM=>[
        "e"=>"AES-128-CCM",
        "h"=>"SHA256",
        "k"=>"ECDHE",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDHE_ECDSA_WITH_AES_128_CCM_8=>[
        "e"=>"AES-128-CCM-8",
        "h"=>"SHA256",
        "k"=>"ECDHE",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDHE_ECDSA_WITH_AES_128_GCM_SHA256=>[
        "e"=>"AES-128-GCM",
        "h"=>"SHA256",
        "k"=>"ECDHE",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDHE_ECDSA_WITH_AES_256_CBC_SHA=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA",
        "k"=>"ECDHE",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDHE_ECDSA_WITH_AES_256_CBC_SHA384=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA384",
        "k"=>"ECDHE",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDHE_ECDSA_WITH_AES_256_CCM=>[
        "e"=>"AES-256-CCM",
        "h"=>"SHA256",
        "k"=>"ECDHE",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDHE_ECDSA_WITH_AES_256_CCM_8=>[
        "e"=>"AES-256-CCM-8",
        "h"=>"SHA256",
        "k"=>"ECDHE",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDHE_ECDSA_WITH_AES_256_GCM_SHA384=>[
        "e"=>"AES-256-GCM",
        "h"=>"SHA384",
        "k"=>"ECDHE",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDHE_ECDSA_WITH_ARIA_128_CBC_SHA256=>[
        "e"=>"ARIA-128-CBC",
        "h"=>"SHA256",
        "k"=>"ECDHE",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDHE_ECDSA_WITH_ARIA_128_GCM_SHA256=>[
        "e"=>"ARIA-128-GCM",
        "h"=>"SHA256",
        "k"=>"ECDHE",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDHE_ECDSA_WITH_ARIA_256_CBC_SHA384=>[
        "e"=>"ARIA-256-CBC",
        "h"=>"SHA384",
        "k"=>"ECDHE",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDHE_ECDSA_WITH_ARIA_256_GCM_SHA384=>[
        "e"=>"ARIA-256-GCM",
        "h"=>"SHA384",
        "k"=>"ECDHE",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDHE_ECDSA_WITH_CAMELLIA_128_CBC_SHA256=>[
        "e"=>"CAMELLIA-128-CBC",
        "h"=>"SHA256",
        "k"=>"ECDHE",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDHE_ECDSA_WITH_CAMELLIA_128_GCM_SHA256=>[
        "e"=>"CAMELLIA-128-GCM",
        "h"=>"SHA256",
        "k"=>"ECDHE",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDHE_ECDSA_WITH_CAMELLIA_256_CBC_SHA384=>[
        "e"=>"CAMELLIA-256-CBC",
        "h"=>"SHA384",
        "k"=>"ECDHE",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDHE_ECDSA_WITH_CAMELLIA_256_GCM_SHA384=>[
        "e"=>"CAMELLIA-256-GCM",
        "h"=>"SHA384",
        "k"=>"ECDHE",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDHE_ECDSA_WITH_CHACHA20_POLY1305_SHA256=>[
        "e"=>"CHACHA20-POLY1305",
        "h"=>"SHA256",
        "k"=>"ECDHE",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDHE_ECDSA_WITH_NULL_SHA=>[
        "e"=>"NULL",
        "h"=>"SHA",
        "k"=>"ECDHE",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDHE_ECDSA_WITH_RC4_128_SHA=>[
        "e"=>"RC4-128",
        "h"=>"SHA",
        "k"=>"ECDHE",
        "a"=>"ECDSA"
      ],
      self::TLS_ECDHE_PSK_WITH_3DES_EDE_CBC_SHA=>[
        "e"=>"3DES-EDE-CBC",
        "h"=>"SHA",
        "k"=>"ECDHE",
        "a"=>"PSK"
      ],
      self::TLS_ECDHE_PSK_WITH_AES_128_CBC_SHA=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA",
        "k"=>"ECDHE",
        "a"=>"PSK"
      ],
      self::TLS_ECDHE_PSK_WITH_AES_128_CBC_SHA256=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA256",
        "k"=>"ECDHE",
        "a"=>"PSK"
      ],
      self::TLS_ECDHE_PSK_WITH_AES_128_CCM_8_SHA256=>[
        "e"=>"AES-128-CCM-8",
        "h"=>"SHA256",
        "k"=>"ECDHE",
        "a"=>"PSK"
      ],
      self::TLS_ECDHE_PSK_WITH_AES_128_CCM_SHA256=>[
        "e"=>"AES-128-CCM",
        "h"=>"SHA256",
        "k"=>"ECDHE",
        "a"=>"PSK"
      ],
      self::TLS_ECDHE_PSK_WITH_AES_128_GCM_SHA256=>[
        "e"=>"AES-128-GCM",
        "h"=>"SHA256",
        "k"=>"ECDHE",
        "a"=>"PSK"
      ],
      self::TLS_ECDHE_PSK_WITH_AES_256_CBC_SHA=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA",
        "k"=>"ECDHE",
        "a"=>"PSK"
      ],
      self::TLS_ECDHE_PSK_WITH_AES_256_CBC_SHA384=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA384",
        "k"=>"ECDHE",
        "a"=>"PSK"
      ],
      self::TLS_ECDHE_PSK_WITH_AES_256_GCM_SHA384=>[
        "e"=>"AES-256-GCM",
        "h"=>"SHA384",
        "k"=>"ECDHE",
        "a"=>"PSK"
      ],
      self::TLS_ECDHE_PSK_WITH_ARIA_128_CBC_SHA256=>[
        "e"=>"ARIA-128-CBC",
        "h"=>"SHA256",
        "k"=>"ECDHE",
        "a"=>"PSK"
      ],
      self::TLS_ECDHE_PSK_WITH_ARIA_256_CBC_SHA384=>[
        "e"=>"ARIA-256-CBC",
        "h"=>"SHA384",
        "k"=>"ECDHE",
        "a"=>"PSK"
      ],
      self::TLS_ECDHE_PSK_WITH_CAMELLIA_128_CBC_SHA256=>[
        "e"=>"CAMELLIA-128-CBC",
        "h"=>"SHA256",
        "k"=>"ECDHE",
        "a"=>"PSK"
      ],
      self::TLS_ECDHE_PSK_WITH_CAMELLIA_256_CBC_SHA384=>[
        "e"=>"CAMELLIA-256-CBC",
        "h"=>"SHA384",
        "k"=>"ECDHE",
        "a"=>"PSK"
      ],
      self::TLS_ECDHE_PSK_WITH_CHACHA20_POLY1305_SHA256=>[
        "e"=>"CHACHA20-POLY1305",
        "h"=>"SHA256",
        "k"=>"ECDHE",
        "a"=>"PSK"
      ],
      self::TLS_ECDHE_PSK_WITH_NULL_SHA=>[
        "e"=>"NULL",
        "h"=>"SHA",
        "k"=>"ECDHE",
        "a"=>"PSK"
      ],
      self::TLS_ECDHE_PSK_WITH_NULL_SHA256=>[
        "e"=>"NULL",
        "h"=>"SHA256",
        "k"=>"ECDHE",
        "a"=>"PSK"
      ],
      self::TLS_ECDHE_PSK_WITH_NULL_SHA384=>[
        "e"=>"NULL",
        "h"=>"SHA384",
        "k"=>"ECDHE",
        "a"=>"PSK"
      ],
      self::TLS_ECDHE_PSK_WITH_RC4_128_SHA=>[
        "e"=>"RC4-128",
        "h"=>"SHA",
        "k"=>"ECDHE",
        "a"=>"PSK"
      ],
      self::TLS_ECDHE_RSA_WITH_3DES_EDE_CBC_SHA=>[
        "e"=>"3DES-EDE-CBC",
        "h"=>"SHA",
        "k"=>"ECDHE",
        "a"=>"RSA"
      ],
      self::TLS_ECDHE_RSA_WITH_AES_128_CBC_SHA=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA",
        "k"=>"ECDHE",
        "a"=>"RSA"
      ],
      self::TLS_ECDHE_RSA_WITH_AES_128_CBC_SHA256=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA256",
        "k"=>"ECDHE",
        "a"=>"RSA"
      ],
      self::TLS_ECDHE_RSA_WITH_AES_128_GCM_SHA256=>[
        "e"=>"AES-128-GCM",
        "h"=>"SHA256",
        "k"=>"ECDHE",
        "a"=>"RSA"
      ],
      self::TLS_ECDHE_RSA_WITH_AES_256_CBC_SHA=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA",
        "k"=>"ECDHE",
        "a"=>"RSA"
      ],
      self::TLS_ECDHE_RSA_WITH_AES_256_CBC_SHA384=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA384",
        "k"=>"ECDHE",
        "a"=>"RSA"
      ],
      self::TLS_ECDHE_RSA_WITH_AES_256_GCM_SHA384=>[
        "e"=>"AES-256-GCM",
        "h"=>"SHA384",
        "k"=>"ECDHE",
        "a"=>"RSA"
      ],
      self::TLS_ECDHE_RSA_WITH_ARIA_128_CBC_SHA256=>[
        "e"=>"ARIA-128-CBC",
        "h"=>"SHA256",
        "k"=>"ECDHE",
        "a"=>"RSA"
      ],
      self::TLS_ECDHE_RSA_WITH_ARIA_128_GCM_SHA256=>[
        "e"=>"ARIA-128-GCM",
        "h"=>"SHA256",
        "k"=>"ECDHE",
        "a"=>"RSA"
      ],
      self::TLS_ECDHE_RSA_WITH_ARIA_256_CBC_SHA384=>[
        "e"=>"ARIA-256-CBC",
        "h"=>"SHA384",
        "k"=>"ECDHE",
        "a"=>"RSA"
      ],
      self::TLS_ECDHE_RSA_WITH_ARIA_256_GCM_SHA384=>[
        "e"=>"ARIA-256-GCM",
        "h"=>"SHA384",
        "k"=>"ECDHE",
        "a"=>"RSA"
      ],
      self::TLS_ECDHE_RSA_WITH_CAMELLIA_128_CBC_SHA256=>[
        "e"=>"CAMELLIA-128-CBC",
        "h"=>"SHA256",
        "k"=>"ECDHE",
        "a"=>"RSA"
      ],
      self::TLS_ECDHE_RSA_WITH_CAMELLIA_128_GCM_SHA256=>[
        "e"=>"CAMELLIA-128-GCM",
        "h"=>"SHA256",
        "k"=>"ECDHE",
        "a"=>"RSA"
      ],
      self::TLS_ECDHE_RSA_WITH_CAMELLIA_256_CBC_SHA384=>[
        "e"=>"CAMELLIA-256-CBC",
        "h"=>"SHA384",
        "k"=>"ECDHE",
        "a"=>"RSA"
      ],
      self::TLS_ECDHE_RSA_WITH_CAMELLIA_256_GCM_SHA384=>[
        "e"=>"CAMELLIA-256-GCM",
        "h"=>"SHA384",
        "k"=>"ECDHE",
        "a"=>"RSA"
      ],
      self::TLS_ECDHE_RSA_WITH_CHACHA20_POLY1305_SHA256=>[
        "e"=>"CHACHA20-POLY1305",
        "h"=>"SHA256",
        "k"=>"ECDHE",
        "a"=>"RSA"
      ],
      self::TLS_ECDHE_RSA_WITH_NULL_SHA=>[
        "e"=>"NULL",
        "h"=>"SHA",
        "k"=>"ECDHE",
        "a"=>"RSA"
      ],
      self::TLS_ECDHE_RSA_WITH_RC4_128_SHA=>[
        "e"=>"RC4-128",
        "h"=>"SHA",
        "k"=>"ECDHE",
        "a"=>"RSA"
      ],
      self::TLS_ECDH_RSA_WITH_3DES_EDE_CBC_SHA=>[
        "e"=>"3DES-EDE-CBC",
        "h"=>"SHA",
        "k"=>"ECDH",
        "a"=>"RSA"
      ],
      self::TLS_ECDH_RSA_WITH_AES_128_CBC_SHA=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA",
        "k"=>"ECDH",
        "a"=>"RSA"
      ],
      self::TLS_ECDH_RSA_WITH_AES_128_CBC_SHA256=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA256",
        "k"=>"ECDH",
        "a"=>"RSA"
      ],
      self::TLS_ECDH_RSA_WITH_AES_128_GCM_SHA256=>[
        "e"=>"AES-128-GCM",
        "h"=>"SHA256",
        "k"=>"ECDH",
        "a"=>"RSA"
      ],
      self::TLS_ECDH_RSA_WITH_AES_256_CBC_SHA=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA",
        "k"=>"ECDH",
        "a"=>"RSA"
      ],
      self::TLS_ECDH_RSA_WITH_AES_256_CBC_SHA384=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA384",
        "k"=>"ECDH",
        "a"=>"RSA"
      ],
      self::TLS_ECDH_RSA_WITH_AES_256_GCM_SHA384=>[
        "e"=>"AES-256-GCM",
        "h"=>"SHA384",
        "k"=>"ECDH",
        "a"=>"RSA"
      ],
      self::TLS_ECDH_RSA_WITH_ARIA_128_CBC_SHA256=>[
        "e"=>"ARIA-128-CBC",
        "h"=>"SHA256",
        "k"=>"ECDH",
        "a"=>"RSA"
      ],
      self::TLS_ECDH_RSA_WITH_ARIA_128_GCM_SHA256=>[
        "e"=>"ARIA-128-GCM",
        "h"=>"SHA256",
        "k"=>"ECDH",
        "a"=>"RSA"
      ],
      self::TLS_ECDH_RSA_WITH_ARIA_256_CBC_SHA384=>[
        "e"=>"ARIA-256-CBC",
        "h"=>"SHA384",
        "k"=>"ECDH",
        "a"=>"RSA"
      ],
      self::TLS_ECDH_RSA_WITH_ARIA_256_GCM_SHA384=>[
        "e"=>"ARIA-256-GCM",
        "h"=>"SHA384",
        "k"=>"ECDH",
        "a"=>"RSA"
      ],
      self::TLS_ECDH_RSA_WITH_CAMELLIA_128_CBC_SHA256=>[
        "e"=>"CAMELLIA-128-CBC",
        "h"=>"SHA256",
        "k"=>"ECDH",
        "a"=>"RSA"
      ],
      self::TLS_ECDH_RSA_WITH_CAMELLIA_128_GCM_SHA256=>[
        "e"=>"CAMELLIA-128-GCM",
        "h"=>"SHA256",
        "k"=>"ECDH",
        "a"=>"RSA"
      ],
      self::TLS_ECDH_RSA_WITH_CAMELLIA_256_CBC_SHA384=>[
        "e"=>"CAMELLIA-256-CBC",
        "h"=>"SHA384",
        "k"=>"ECDH",
        "a"=>"RSA"
      ],
      self::TLS_ECDH_RSA_WITH_CAMELLIA_256_GCM_SHA384=>[
        "e"=>"CAMELLIA-256-GCM",
        "h"=>"SHA384",
        "k"=>"ECDH",
        "a"=>"RSA"
      ],
      self::TLS_ECDH_RSA_WITH_NULL_SHA=>[
        "e"=>"NULL",
        "h"=>"SHA",
        "k"=>"ECDH",
        "a"=>"RSA"
      ],
      self::TLS_ECDH_RSA_WITH_RC4_128_SHA=>[
        "e"=>"RC4-128",
        "h"=>"SHA",
        "k"=>"ECDH",
        "a"=>"RSA"
      ],
      self::TLS_GOSTR341112_256_WITH_28147_CNT_IMIT=>[
        "e"=>"28147-CNT",
        "h"=>"GOSTR341112",
        "k"=>"GOSTR341112 256",
        "a"=>"GOSTR341012"
      ],
      self::TLS_GOSTR341112_256_WITH_KUZNYECHIK_CTR_OMAC=>[
        "e"=>"KUZNYECHIK-CTR",
        "h"=>"GOSTR341112",
        "k"=>"GOSTR341112 256",
        "a"=>"GOSTR341012"
      ],
      self::TLS_GOSTR341112_256_WITH_KUZNYECHIK_MGM_L=>[
        "e"=>"KUZNYECHIK-MGM-L",
        "h"=>"-",
        "k"=>"ECDHE",
        "a"=>"-"
      ],
      self::TLS_GOSTR341112_256_WITH_KUZNYECHIK_MGM_S=>[
        "e"=>"KUZNYECHIK-MGM-S",
        "h"=>"-",
        "k"=>"ECDHE",
        "a"=>"-"
      ],
      self::TLS_GOSTR341112_256_WITH_MAGMA_CTR_OMAC=>[
        "e"=>"MAGMA-CTR",
        "h"=>"GOSTR341112",
        "k"=>"GOSTR341112 256",
        "a"=>"GOSTR341012"
      ],
      self::TLS_GOSTR341112_256_WITH_MAGMA_MGM_L=>[
        "e"=>"MAGMA-MGM-L",
        "h"=>"-",
        "k"=>"ECDHE",
        "a"=>"-"
      ],
      self::TLS_GOSTR341112_256_WITH_MAGMA_MGM_S=>[
        "e"=>"MAGMA-MGM-S",
        "h"=>"-",
        "k"=>"ECDHE",
        "a"=>"-"
      ],
      self::TLS_KRB5_EXPORT_WITH_DES_CBC_40_MD5=>[
        "e"=>"DES-CBC-40",
        "h"=>"MD5",
        "k"=>"KRB5",
        "a"=>"KRB5"
      ],
      self::TLS_KRB5_EXPORT_WITH_DES_CBC_40_SHA=>[
        "e"=>"DES-CBC-40",
        "h"=>"SHA",
        "k"=>"KRB5",
        "a"=>"KRB5"
      ],
      self::TLS_KRB5_EXPORT_WITH_RC2_CBC_40_MD5=>[
        "e"=>"RC2-CBC-40",
        "h"=>"MD5",
        "k"=>"KRB5",
        "a"=>"KRB5"
      ],
      self::TLS_KRB5_EXPORT_WITH_RC2_CBC_40_SHA=>[
        "e"=>"RC2-CBC-40",
        "h"=>"SHA",
        "k"=>"KRB5",
        "a"=>"KRB5"
      ],
      self::TLS_KRB5_EXPORT_WITH_RC4_40_MD5=>[
        "e"=>"RC4-40",
        "h"=>"MD5",
        "k"=>"KRB5",
        "a"=>"KRB5"
      ],
      self::TLS_KRB5_EXPORT_WITH_RC4_40_SHA=>[
        "e"=>"RC4-40",
        "h"=>"SHA",
        "k"=>"KRB5",
        "a"=>"KRB5"
      ],
      self::TLS_KRB5_WITH_3DES_EDE_CBC_MD5=>[
        "e"=>"3DES-EDE-CBC",
        "h"=>"MD5",
        "k"=>"KRB5",
        "a"=>"KRB5"
      ],
      self::TLS_KRB5_WITH_3DES_EDE_CBC_SHA=>[
        "e"=>"3DES-EDE-CBC",
        "h"=>"SHA",
        "k"=>"KRB5",
        "a"=>"KRB5"
      ],
      self::TLS_KRB5_WITH_DES_CBC_MD5=>[
        "e"=>"DES-CBC",
        "h"=>"MD5",
        "k"=>"KRB5",
        "a"=>"KRB5"
      ],
      self::TLS_KRB5_WITH_DES_CBC_SHA=>[
        "e"=>"DES-CBC",
        "h"=>"SHA",
        "k"=>"KRB5",
        "a"=>"KRB5"
      ],
      self::TLS_KRB5_WITH_IDEA_CBC_MD5=>[
        "e"=>"IDEA-CBC",
        "h"=>"MD5",
        "k"=>"KRB5",
        "a"=>"KRB5"
      ],
      self::TLS_KRB5_WITH_IDEA_CBC_SHA=>[
        "e"=>"IDEA-CBC",
        "h"=>"SHA",
        "k"=>"KRB5",
        "a"=>"KRB5"
      ],
      self::TLS_KRB5_WITH_RC4_128_MD5=>[
        "e"=>"RC4-128",
        "h"=>"MD5",
        "k"=>"KRB5",
        "a"=>"KRB5"
      ],
      self::TLS_KRB5_WITH_RC4_128_SHA=>[
        "e"=>"RC4-128",
        "h"=>"SHA",
        "k"=>"KRB5",
        "a"=>"KRB5"
      ],
      self::TLS_NULL_WITH_NULL_NULL=>[
        "e"=>"NULL",
        "h"=>"NULL",
        "k"=>"NULL",
        "a"=>"NULL"
      ],
      self::TLS_PSK_DHE_WITH_AES_128_CCM_8=>[
        "e"=>"AES-128-CCM-8",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"PSK"
      ],
      self::TLS_PSK_DHE_WITH_AES_256_CCM_8=>[
        "e"=>"AES-256-CCM-8",
        "h"=>"SHA256",
        "k"=>"DHE",
        "a"=>"PSK"
      ],
      self::TLS_PSK_WITH_3DES_EDE_CBC_SHA=>[
        "e"=>"3DES-EDE-CBC",
        "h"=>"SHA",
        "k"=>"PSK",
        "a"=>"PSK"
      ],
      self::TLS_PSK_WITH_AES_128_CBC_SHA=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA",
        "k"=>"PSK",
        "a"=>"PSK"
      ],
      self::TLS_PSK_WITH_AES_128_CBC_SHA256=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA256",
        "k"=>"PSK",
        "a"=>"PSK"
      ],
      self::TLS_PSK_WITH_AES_128_CCM=>[
        "e"=>"AES-128-CCM",
        "h"=>"SHA256",
        "k"=>"PSK",
        "a"=>"PSK"
      ],
      self::TLS_PSK_WITH_AES_128_CCM_8=>[
        "e"=>"AES-128-CCM-8",
        "h"=>"SHA256",
        "k"=>"PSK",
        "a"=>"PSK"
      ],
      self::TLS_PSK_WITH_AES_128_GCM_SHA256=>[
        "e"=>"AES-128-GCM",
        "h"=>"SHA256",
        "k"=>"PSK",
        "a"=>"PSK"
      ],
      self::TLS_PSK_WITH_AES_256_CBC_SHA=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA",
        "k"=>"PSK",
        "a"=>"PSK"
      ],
      self::TLS_PSK_WITH_AES_256_CBC_SHA384=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA384",
        "k"=>"PSK",
        "a"=>"PSK"
      ],
      self::TLS_PSK_WITH_AES_256_CCM=>[
        "e"=>"AES-256-CCM",
        "h"=>"SHA256",
        "k"=>"PSK",
        "a"=>"PSK"
      ],
      self::TLS_PSK_WITH_AES_256_CCM_8=>[
        "e"=>"AES-256-CCM-8",
        "h"=>"SHA256",
        "k"=>"PSK",
        "a"=>"PSK"
      ],
      self::TLS_PSK_WITH_AES_256_GCM_SHA384=>[
        "e"=>"AES-256-GCM",
        "h"=>"SHA384",
        "k"=>"PSK",
        "a"=>"PSK"
      ],
      self::TLS_PSK_WITH_ARIA_128_CBC_SHA256=>[
        "e"=>"ARIA-128-CBC",
        "h"=>"SHA256",
        "k"=>"PSK",
        "a"=>"PSK"
      ],
      self::TLS_PSK_WITH_ARIA_128_GCM_SHA256=>[
        "e"=>"ARIA-128-GCM",
        "h"=>"SHA256",
        "k"=>"PSK",
        "a"=>"PSK"
      ],
      self::TLS_PSK_WITH_ARIA_256_CBC_SHA384=>[
        "e"=>"ARIA-256-CBC",
        "h"=>"SHA384",
        "k"=>"PSK",
        "a"=>"PSK"
      ],
      self::TLS_PSK_WITH_ARIA_256_GCM_SHA384=>[
        "e"=>"ARIA-256-GCM",
        "h"=>"SHA384",
        "k"=>"PSK",
        "a"=>"PSK"
      ],
      self::TLS_PSK_WITH_CAMELLIA_128_CBC_SHA256=>[
        "e"=>"CAMELLIA-128-CBC",
        "h"=>"SHA256",
        "k"=>"PSK",
        "a"=>"PSK"
      ],
      self::TLS_PSK_WITH_CAMELLIA_128_GCM_SHA256=>[
        "e"=>"CAMELLIA-128-GCM",
        "h"=>"SHA256",
        "k"=>"PSK",
        "a"=>"PSK"
      ],
      self::TLS_PSK_WITH_CAMELLIA_256_CBC_SHA384=>[
        "e"=>"CAMELLIA-256-CBC",
        "h"=>"SHA384",
        "k"=>"PSK",
        "a"=>"PSK"
      ],
      self::TLS_PSK_WITH_CAMELLIA_256_GCM_SHA384=>[
        "e"=>"CAMELLIA-256-GCM",
        "h"=>"SHA384",
        "k"=>"PSK",
        "a"=>"PSK"
      ],
      self::TLS_PSK_WITH_CHACHA20_POLY1305_SHA256=>[
        "e"=>"CHACHA20-POLY1305",
        "h"=>"SHA256",
        "k"=>"PSK",
        "a"=>"PSK"
      ],
      self::TLS_PSK_WITH_NULL_SHA=>[
        "e"=>"NULL",
        "h"=>"SHA",
        "k"=>"PSK",
        "a"=>"PSK"
      ],
      self::TLS_PSK_WITH_NULL_SHA256=>[
        "e"=>"NULL",
        "h"=>"SHA256",
        "k"=>"PSK",
        "a"=>"PSK"
      ],
      self::TLS_PSK_WITH_NULL_SHA384=>[
        "e"=>"NULL",
        "h"=>"SHA384",
        "k"=>"PSK",
        "a"=>"PSK"
      ],
      self::TLS_PSK_WITH_RC4_128_SHA=>[
        "e"=>"RC4-128",
        "h"=>"SHA",
        "k"=>"PSK",
        "a"=>"PSK"
      ],
      self::TLS_RSA_EXPORT_WITH_DES40_CBC_SHA=>[
        "e"=>"DES40-CBC",
        "h"=>"SHA",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_EXPORT_WITH_RC2_CBC_40_MD5=>[
        "e"=>"RC2-CBC-40",
        "h"=>"MD5",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_EXPORT_WITH_RC4_40_MD5=>[
        "e"=>"RC4-40",
        "h"=>"MD5",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_PSK_WITH_3DES_EDE_CBC_SHA=>[
        "e"=>"3DES-EDE-CBC",
        "h"=>"SHA",
        "k"=>"RSA",
        "a"=>"PSK"
      ],
      self::TLS_RSA_PSK_WITH_AES_128_CBC_SHA=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA",
        "k"=>"RSA",
        "a"=>"PSK"
      ],
      self::TLS_RSA_PSK_WITH_AES_128_CBC_SHA256=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA256",
        "k"=>"RSA",
        "a"=>"PSK"
      ],
      self::TLS_RSA_PSK_WITH_AES_128_GCM_SHA256=>[
        "e"=>"AES-128-GCM",
        "h"=>"SHA256",
        "k"=>"RSA",
        "a"=>"PSK"
      ],
      self::TLS_RSA_PSK_WITH_AES_256_CBC_SHA=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA",
        "k"=>"RSA",
        "a"=>"PSK"
      ],
      self::TLS_RSA_PSK_WITH_AES_256_CBC_SHA384=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA384",
        "k"=>"RSA",
        "a"=>"PSK"
      ],
      self::TLS_RSA_PSK_WITH_AES_256_GCM_SHA384=>[
        "e"=>"AES-256-GCM",
        "h"=>"SHA384",
        "k"=>"RSA",
        "a"=>"PSK"
      ],
      self::TLS_RSA_PSK_WITH_ARIA_128_CBC_SHA256=>[
        "e"=>"ARIA-128-CBC",
        "h"=>"SHA256",
        "k"=>"RSA",
        "a"=>"PSK"
      ],
      self::TLS_RSA_PSK_WITH_ARIA_128_GCM_SHA256=>[
        "e"=>"ARIA-128-GCM",
        "h"=>"SHA256",
        "k"=>"RSA",
        "a"=>"PSK"
      ],
      self::TLS_RSA_PSK_WITH_ARIA_256_CBC_SHA384=>[
        "e"=>"ARIA-256-CBC",
        "h"=>"SHA384",
        "k"=>"RSA",
        "a"=>"PSK"
      ],
      self::TLS_RSA_PSK_WITH_ARIA_256_GCM_SHA384=>[
        "e"=>"ARIA-256-GCM",
        "h"=>"SHA384",
        "k"=>"RSA",
        "a"=>"PSK"
      ],
      self::TLS_RSA_PSK_WITH_CAMELLIA_128_CBC_SHA256=>[
        "e"=>"CAMELLIA-128-CBC",
        "h"=>"SHA256",
        "k"=>"RSA",
        "a"=>"PSK"
      ],
      self::TLS_RSA_PSK_WITH_CAMELLIA_128_GCM_SHA256=>[
        "e"=>"CAMELLIA-128-GCM",
        "h"=>"SHA256",
        "k"=>"RSA",
        "a"=>"PSK"
      ],
      self::TLS_RSA_PSK_WITH_CAMELLIA_256_CBC_SHA384=>[
        "e"=>"CAMELLIA-256-CBC",
        "h"=>"SHA384",
        "k"=>"RSA",
        "a"=>"PSK"
      ],
      self::TLS_RSA_PSK_WITH_CAMELLIA_256_GCM_SHA384=>[
        "e"=>"CAMELLIA-256-GCM",
        "h"=>"SHA384",
        "k"=>"RSA",
        "a"=>"PSK"
      ],
      self::TLS_RSA_PSK_WITH_CHACHA20_POLY1305_SHA256=>[
        "e"=>"CHACHA20-POLY1305",
        "h"=>"SHA256",
        "k"=>"RSA",
        "a"=>"PSK"
      ],
      self::TLS_RSA_PSK_WITH_NULL_SHA=>[
        "e"=>"NULL",
        "h"=>"SHA",
        "k"=>"RSA",
        "a"=>"PSK"
      ],
      self::TLS_RSA_PSK_WITH_NULL_SHA256=>[
        "e"=>"NULL",
        "h"=>"SHA256",
        "k"=>"RSA",
        "a"=>"PSK"
      ],
      self::TLS_RSA_PSK_WITH_NULL_SHA384=>[
        "e"=>"NULL",
        "h"=>"SHA384",
        "k"=>"RSA",
        "a"=>"PSK"
      ],
      self::TLS_RSA_PSK_WITH_RC4_128_SHA=>[
        "e"=>"RC4-128",
        "h"=>"SHA",
        "k"=>"RSA",
        "a"=>"PSK"
      ],
      self::TLS_RSA_WITH_3DES_EDE_CBC_SHA=>[
        "e"=>"3DES-EDE-CBC",
        "h"=>"SHA",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_WITH_AES_128_CBC_SHA=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_WITH_AES_128_CBC_SHA256=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA256",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_WITH_AES_128_CCM=>[
        "e"=>"AES-128-CCM",
        "h"=>"SHA256",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_WITH_AES_128_CCM_8=>[
        "e"=>"AES-128-CCM-8",
        "h"=>"SHA256",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_WITH_AES_128_GCM_SHA256=>[
        "e"=>"AES-128-GCM",
        "h"=>"SHA256",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_WITH_AES_256_CBC_SHA=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_WITH_AES_256_CBC_SHA256=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA256",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_WITH_AES_256_CCM=>[
        "e"=>"AES-256-CCM",
        "h"=>"SHA256",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_WITH_AES_256_CCM_8=>[
        "e"=>"AES-256-CCM-8",
        "h"=>"SHA256",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_WITH_AES_256_GCM_SHA384=>[
        "e"=>"AES-256-GCM",
        "h"=>"SHA384",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_WITH_ARIA_128_CBC_SHA256=>[
        "e"=>"ARIA-128-CBC",
        "h"=>"SHA256",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_WITH_ARIA_128_GCM_SHA256=>[
        "e"=>"ARIA-128-GCM",
        "h"=>"SHA256",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_WITH_ARIA_256_CBC_SHA384=>[
        "e"=>"ARIA-256-CBC",
        "h"=>"SHA384",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_WITH_ARIA_256_GCM_SHA384=>[
        "e"=>"ARIA-256-GCM",
        "h"=>"SHA384",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_WITH_CAMELLIA_128_CBC_SHA=>[
        "e"=>"CAMELLIA-128-CBC",
        "h"=>"SHA",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_WITH_CAMELLIA_128_CBC_SHA256=>[
        "e"=>"CAMELLIA-128-CBC",
        "h"=>"SHA256",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_WITH_CAMELLIA_128_GCM_SHA256=>[
        "e"=>"CAMELLIA-128-GCM",
        "h"=>"SHA256",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_WITH_CAMELLIA_256_CBC_SHA=>[
        "e"=>"CAMELLIA-256-CBC",
        "h"=>"SHA",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_WITH_CAMELLIA_256_CBC_SHA256=>[
        "e"=>"CAMELLIA-256-CBC",
        "h"=>"SHA256",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_WITH_CAMELLIA_256_GCM_SHA384=>[
        "e"=>"CAMELLIA-256-GCM",
        "h"=>"SHA384",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_WITH_DES_CBC_SHA=>[
        "e"=>"DES-CBC",
        "h"=>"SHA",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_WITH_IDEA_CBC_SHA=>[
        "e"=>"IDEA-CBC",
        "h"=>"SHA",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_WITH_NULL_MD5=>[
        "e"=>"NULL",
        "h"=>"MD5",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_WITH_NULL_SHA=>[
        "e"=>"NULL",
        "h"=>"SHA",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_WITH_NULL_SHA256=>[
        "e"=>"NULL",
        "h"=>"SHA256",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_WITH_RC4_128_MD5=>[
        "e"=>"RC4-128",
        "h"=>"MD5",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_WITH_RC4_128_SHA=>[
        "e"=>"RC4-128",
        "h"=>"SHA",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_RSA_WITH_SEED_CBC_SHA=>[
        "e"=>"SEED-CBC",
        "h"=>"SHA",
        "k"=>"RSA",
        "a"=>"RSA"
      ],
      self::TLS_SHA256_SHA256=>[
        "e"=>"NULL",
        "h"=>"SHA256",
        "k"=>"-",
        "a"=>"SHA256"
      ],
      self::TLS_SHA384_SHA384=>[
        "e"=>"NULL",
        "h"=>"SHA384",
        "k"=>"-",
        "a"=>"SHA384"
      ],
      self::TLS_SM4_CCM_SM3=>[
        "e"=>"SM4-CCM",
        "h"=>"SM3",
        "k"=>"-",
        "a"=>"-"
      ],
      self::TLS_SM4_GCM_SM3=>[
        "e"=>"SM4-GCM",
        "h"=>"SM3",
        "k"=>"-",
        "a"=>"-"
      ],
      self::TLS_SRP_SHA_DSS_WITH_3DES_EDE_CBC_SHA=>[
        "e"=>"3DES-EDE-CBC",
        "h"=>"SHA",
        "k"=>"SRP",
        "a"=>"SHA DSS"
      ],
      self::TLS_SRP_SHA_DSS_WITH_AES_128_CBC_SHA=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA",
        "k"=>"SRP",
        "a"=>"SHA DSS"
      ],
      self::TLS_SRP_SHA_DSS_WITH_AES_256_CBC_SHA=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA",
        "k"=>"SRP",
        "a"=>"SHA DSS"
      ],
      self::TLS_SRP_SHA_RSA_WITH_3DES_EDE_CBC_SHA=>[
        "e"=>"3DES-EDE-CBC",
        "h"=>"SHA",
        "k"=>"SRP",
        "a"=>"SHA RSA"
      ],
      self::TLS_SRP_SHA_RSA_WITH_AES_128_CBC_SHA=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA",
        "k"=>"SRP",
        "a"=>"SHA RSA"
      ],
      self::TLS_SRP_SHA_RSA_WITH_AES_256_CBC_SHA=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA",
        "k"=>"SRP",
        "a"=>"SHA RSA"
      ],
      self::TLS_SRP_SHA_WITH_3DES_EDE_CBC_SHA=>[
        "e"=>"3DES-EDE-CBC",
        "h"=>"SHA",
        "k"=>"SRP",
        "a"=>"SHA"
      ],
      self::TLS_SRP_SHA_WITH_AES_128_CBC_SHA=>[
        "e"=>"AES-128-CBC",
        "h"=>"SHA",
        "k"=>"SRP",
        "a"=>"SHA"
      ],
      self::TLS_SRP_SHA_WITH_AES_256_CBC_SHA=>[
        "e"=>"AES-256-CBC",
        "h"=>"SHA",
        "k"=>"SRP",
        "a"=>"SHA"
      ]
    };
  }
}

