<?php
class Any2UTF8 implements IGenericConversion {public function convert($_aArguments) {$v1cb251ec0d568de6a929b520c4aed8d1          = isset($_aArguments[0]) ? $_aArguments[0] : '';$v1803894f41a63302ad78951ffd9eb570 = rawurldecode($v1cb251ec0d568de6a929b520c4aed8d1);if ($v1803894f41a63302ad78951ffd9eb570) $v1cb251ec0d568de6a929b520c4aed8d1 = $v1803894f41a63302ad78951ffd9eb570;$v33628c49aa08100bec3d1d2f313ce35d = self::detectCharset($v1cb251ec0d568de6a929b520c4aed8d1);if (function_exists('iconv') && $v33628c49aa08100bec3d1d2f313ce35d !== 'UTF-8') {$v1803894f41a63302ad78951ffd9eb570 = @iconv($v33628c49aa08100bec3d1d2f313ce35d, 'UTF-8', $v1cb251ec0d568de6a929b520c4aed8d1);if ($v1803894f41a63302ad78951ffd9eb570) $v1cb251ec0d568de6a929b520c4aed8d1 = $v1803894f41a63302ad78951ffd9eb570;}return $v1cb251ec0d568de6a929b520c4aed8d1;}private static function winToLowercase($v19a97ad5524a2d14e58b104936effbde) {for($v865c0c0b4ab0e063e5caa3387c1a8741=0;$v865c0c0b4ab0e063e5caa3387c1a8741<strlen($v19a97ad5524a2d14e58b104936effbde);$v865c0c0b4ab0e063e5caa3387c1a8741++) {$v4a8a08f09d37b73795649038408b5f33 = ord($v19a97ad5524a2d14e58b104936effbde[$v865c0c0b4ab0e063e5caa3387c1a8741]);if ($v4a8a08f09d37b73795649038408b5f33 >= 0xC0 && $v4a8a08f09d37b73795649038408b5f33 <= 0xDF) {$v19a97ad5524a2d14e58b104936effbde[$v865c0c0b4ab0e063e5caa3387c1a8741] = chr($v4a8a08f09d37b73795649038408b5f33+32);}elseif ($v19a97ad5524a2d14e58b104936effbde[$v865c0c0b4ab0e063e5caa3387c1a8741] >= 0x41 && $v19a97ad5524a2d14e58b104936effbde[$v865c0c0b4ab0e063e5caa3387c1a8741] <= 0x5A) {$v19a97ad5524a2d14e58b104936effbde[$v865c0c0b4ab0e063e5caa3387c1a8741] = chr($v4a8a08f09d37b73795649038408b5f33+32);}}return $v19a97ad5524a2d14e58b104936effbde;}private static function detectCharset($v19a97ad5524a2d14e58b104936effbde) {if (preg_match("/[\x{0000}-\x{FFFF}]+/u", $v19a97ad5524a2d14e58b104936effbde)) return 'UTF-8';$va985177e18afdab154ab615657ef1514 = 'CP1251';if (!function_exists('iconv')) return $va985177e18afdab154ab615657ef1514;$vc8a02849a395786b0162365c9c8e285d = array(            'CP1251',            'KOI8-R',            'UTF-8',            'ISO-8859-5',            'MacCyrillic',            'CP866'        );include_once(dirname(__FILE__)."/__charssequences.ru.php");$v3b4eb583e408eeec917cebd6fcdb8231 = __charssequences_ru::getNonexistingWinRuTriplets();$v61997d97541d8ed395231051ba9f93c8 = __charssequences_ru::getNonexistingWinRuPairs();$v44bec6333080aa65d992566b7a608599 = array();foreach ($vc8a02849a395786b0162365c9c8e285d as $v61b313c7bcc97899233c5e78b4f76723=>$v6cc9818bcd124714280362bf6a8c953f) {if ($v6cc9818bcd124714280362bf6a8c953f !== 'CP1251') {$v1be66d66466bdfd503446f9b83e6ca1d = @iconv($v6cc9818bcd124714280362bf6a8c953f, 'CP1251', $v19a97ad5524a2d14e58b104936effbde);}else {$v1be66d66466bdfd503446f9b83e6ca1d = $v19a97ad5524a2d14e58b104936effbde;}if ($v1be66d66466bdfd503446f9b83e6ca1d && (strlen($v19a97ad5524a2d14e58b104936effbde)/strlen($v1be66d66466bdfd503446f9b83e6ca1d))<=3) {$v44bec6333080aa65d992566b7a608599[$v6cc9818bcd124714280362bf6a8c953f] = array('badtrios'=>0, 'badpairs'=>0, 'badchars'=>0, 'goodchars'=>0, 'length'=>0, 'goodindex'=>0);$v1be66d66466bdfd503446f9b83e6ca1d = str_replace(chr(0xB8), chr(0xE5), $v1be66d66466bdfd503446f9b83e6ca1d);$v1be66d66466bdfd503446f9b83e6ca1d = str_replace(chr(0xA8), chr(0xC5), $v1be66d66466bdfd503446f9b83e6ca1d);$v1be66d66466bdfd503446f9b83e6ca1d = self::winToLowercase($v1be66d66466bdfd503446f9b83e6ca1d);for ($v865c0c0b4ab0e063e5caa3387c1a8741=0;$v865c0c0b4ab0e063e5caa3387c1a8741<(strlen($v1be66d66466bdfd503446f9b83e6ca1d)-1);$v865c0c0b4ab0e063e5caa3387c1a8741++) {$v8e1a1a8110f9679803bd61eb65ca0b53 = ord($v1be66d66466bdfd503446f9b83e6ca1d[$v865c0c0b4ab0e063e5caa3387c1a8741]);if ($v8e1a1a8110f9679803bd61eb65ca0b53 < 0x20) {$v44bec6333080aa65d992566b7a608599[$v6cc9818bcd124714280362bf6a8c953f]['badchars'] += 1;}if (in_array(substr($v1be66d66466bdfd503446f9b83e6ca1d, $v865c0c0b4ab0e063e5caa3387c1a8741, 2), $v61997d97541d8ed395231051ba9f93c8)) $v44bec6333080aa65d992566b7a608599[$v6cc9818bcd124714280362bf6a8c953f]['badpairs'] += 1;if (in_array(substr($v1be66d66466bdfd503446f9b83e6ca1d, $v865c0c0b4ab0e063e5caa3387c1a8741, 3), $v3b4eb583e408eeec917cebd6fcdb8231)) $v44bec6333080aa65d992566b7a608599[$v6cc9818bcd124714280362bf6a8c953f]['badtrios'] += 1;}$va60569dde75a0ec079044ff2ed449f9f = intval(preg_match_all("/[\xE0-\xFF\x61-\x7A\-_ \"']/is", $v1be66d66466bdfd503446f9b83e6ca1d, $v4b7dc89bb242fbe8faa47551b9d04637));$v6f1d7bc67a08a9bd986cda3dd0c25d86 = strlen($v1be66d66466bdfd503446f9b83e6ca1d);$v44bec6333080aa65d992566b7a608599[$v6cc9818bcd124714280362bf6a8c953f]['goodchars'] = $va60569dde75a0ec079044ff2ed449f9f;$v44bec6333080aa65d992566b7a608599[$v6cc9818bcd124714280362bf6a8c953f]['length'] = $v6f1d7bc67a08a9bd986cda3dd0c25d86;$v1278ef8c077babe77af760a5d814d252 = $va60569dde75a0ec079044ff2ed449f9f/($v6f1d7bc67a08a9bd986cda3dd0c25d86/100);$v44bec6333080aa65d992566b7a608599[$v6cc9818bcd124714280362bf6a8c953f]['goodindex'] = ceil($v1278ef8c077babe77af760a5d814d252);}}$vd8e7be96f8ff830d1c6143dd30269102 = array();foreach ($v44bec6333080aa65d992566b7a608599 as $v6cc9818bcd124714280362bf6a8c953f=>$v5ec47b12eef9cc6baa6f0dd32303920f) {if ($v5ec47b12eef9cc6baa6f0dd32303920f['goodindex'] === 100 || ($v5ec47b12eef9cc6baa6f0dd32303920f['badchars'] === 0 && $v5ec47b12eef9cc6baa6f0dd32303920f['badpairs'] === 0 && $v5ec47b12eef9cc6baa6f0dd32303920f['badtrios'] === 0)) {if (!isset($vd8e7be96f8ff830d1c6143dd30269102[$v5ec47b12eef9cc6baa6f0dd32303920f['goodindex']])) $vd8e7be96f8ff830d1c6143dd30269102[$v5ec47b12eef9cc6baa6f0dd32303920f['goodindex']] = $v6cc9818bcd124714280362bf6a8c953f;}}if (count($vd8e7be96f8ff830d1c6143dd30269102)) {krsort($vd8e7be96f8ff830d1c6143dd30269102);foreach ($vd8e7be96f8ff830d1c6143dd30269102 as $vc26dfc4ef43010652336dd2acbd23a1f=>$v6cc9818bcd124714280362bf6a8c953f) {$va985177e18afdab154ab615657ef1514 = $v6cc9818bcd124714280362bf6a8c953f;break;}}return $va985177e18afdab154ab615657ef1514;}}?>
