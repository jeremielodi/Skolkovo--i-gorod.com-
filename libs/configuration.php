<?php
 class mainConfiguration {private static $instance = null;private $ini    = array();private $edited = false;private function __construct() {if(!is_readable(CONFIG_INI_PATH)) {throw new Exception("Can't find configuration file");}$this->ini = parse_ini_file(CONFIG_INI_PATH, true);}public function __destruct() {if($this->edited) {$this->writeIni();}}public static function getInstance() {if(!self::$instance) {self::$instance = new mainConfiguration();}return self::$instance;}public function getParsedIni() {return $this->ini;}public function get($v73d5342eba070f636ac3246f319bf77f, $ve04aa5104d082e4a51d241391941ba26) {if(isset($this->ini[$v73d5342eba070f636ac3246f319bf77f]) &&      isset($this->ini[$v73d5342eba070f636ac3246f319bf77f][$ve04aa5104d082e4a51d241391941ba26])) {$v2063c1608d6e0baf80249c42e2be5804 = $this->ini[$v73d5342eba070f636ac3246f319bf77f][$ve04aa5104d082e4a51d241391941ba26];$v2063c1608d6e0baf80249c42e2be5804 = $this->unescapeValue($v2063c1608d6e0baf80249c42e2be5804);return $v2063c1608d6e0baf80249c42e2be5804;}else return null;}public function set($v73d5342eba070f636ac3246f319bf77f, $ve04aa5104d082e4a51d241391941ba26, $v2063c1608d6e0baf80249c42e2be5804) {if(!isset($this->ini[$v73d5342eba070f636ac3246f319bf77f])) {$this->ini[$v73d5342eba070f636ac3246f319bf77f] = array();}if($v2063c1608d6e0baf80249c42e2be5804 === null && isset($this->ini[$v73d5342eba070f636ac3246f319bf77f][$ve04aa5104d082e4a51d241391941ba26])) {unset($this->ini[$v73d5342eba070f636ac3246f319bf77f][$ve04aa5104d082e4a51d241391941ba26]);}else {$this->ini[$v73d5342eba070f636ac3246f319bf77f][$ve04aa5104d082e4a51d241391941ba26] = $v2063c1608d6e0baf80249c42e2be5804;}$this->edited = true;}public function getList($v73d5342eba070f636ac3246f319bf77f) {if(isset($this->ini[$v73d5342eba070f636ac3246f319bf77f]) && is_array($this->ini[$v73d5342eba070f636ac3246f319bf77f])) {return array_keys($this->ini[$v73d5342eba070f636ac3246f319bf77f]);}return null;}public function includeParam($v3c6e0b8a9c15224a8228b9a98ca1531d, array $v21ffce5b8a6cc8cc6a41448dd69623c9 =  null) {static $v50e5261d8bca7ae22f750db5a5e38482 = Array();$vd6fe1d0be6347b8ef2427fa629c04485 = $this->get('includes', $v3c6e0b8a9c15224a8228b9a98ca1531d);if(strpos($vd6fe1d0be6347b8ef2427fa629c04485, "{") !== false) {if(class_exists('cmsController') && !sizeof($v50e5261d8bca7ae22f750db5a5e38482)) {$v8b1dc169bf460ee884fceef66c6607d6 = cmsController::getInstance();if($v7572559ca86e781ba8fe8073a0b725c6 = $v8b1dc169bf460ee884fceef66c6607d6->getCurrentLang()) {$v50e5261d8bca7ae22f750db5a5e38482['lang'] = $v8b1dc169bf460ee884fceef66c6607d6->getCurrentLang()->getPrefix();}if($v7572559ca86e781ba8fe8073a0b725c6 = $v8b1dc169bf460ee884fceef66c6607d6->getCurrentLang()) {$v50e5261d8bca7ae22f750db5a5e38482['domain'] = $v8b1dc169bf460ee884fceef66c6607d6->getCurrentDomain()->getHost();}}$v21ffce5b8a6cc8cc6a41448dd69623c9 = (is_null($v21ffce5b8a6cc8cc6a41448dd69623c9)) ? $v50e5261d8bca7ae22f750db5a5e38482 : array_merge($v21ffce5b8a6cc8cc6a41448dd69623c9, $v50e5261d8bca7ae22f750db5a5e38482);foreach($v21ffce5b8a6cc8cc6a41448dd69623c9 as $v865c0c0b4ab0e063e5caa3387c1a8741 => $v9e3669d19b675bd57058fd4664205d2a) $vd6fe1d0be6347b8ef2427fa629c04485 = str_replace('{' . $v865c0c0b4ab0e063e5caa3387c1a8741 . '}', $v9e3669d19b675bd57058fd4664205d2a,  $vd6fe1d0be6347b8ef2427fa629c04485);}if(substr($vd6fe1d0be6347b8ef2427fa629c04485, 0, 2) == "~/") {$vd6fe1d0be6347b8ef2427fa629c04485 = CURRENT_WORKING_DIR . substr($vd6fe1d0be6347b8ef2427fa629c04485, 1);}return $vd6fe1d0be6347b8ef2427fa629c04485;}private function writeIni() {$vf45acc4a1a9cdb4fdf92ffb1ce8b7b2b = "";foreach($this->ini as $v594ee3c471d60af7fcbd5c817e19b259 => $v73d5342eba070f636ac3246f319bf77f) {if(empty($v73d5342eba070f636ac3246f319bf77f)) continue;$vf45acc4a1a9cdb4fdf92ffb1ce8b7b2b .= "[{$v594ee3c471d60af7fcbd5c817e19b259}]\n";foreach($v73d5342eba070f636ac3246f319bf77f as $vb068931cc450442b63f5b3d276ea4297 => $v2063c1608d6e0baf80249c42e2be5804) {if(is_array($v2063c1608d6e0baf80249c42e2be5804)) {foreach($v2063c1608d6e0baf80249c42e2be5804 as $v2d79067f0fcb37a2c56a7c466f56f0ae) {$v2d79067f0fcb37a2c56a7c466f56f0ae = ($v2d79067f0fcb37a2c56a7c466f56f0ae !== '') ? '"' . $v2d79067f0fcb37a2c56a7c466f56f0ae . '"' : '';$vf45acc4a1a9cdb4fdf92ffb1ce8b7b2b .= "{$vb068931cc450442b63f5b3d276ea4297}[] = {$v2d79067f0fcb37a2c56a7c466f56f0ae}\n";}}else {$v2063c1608d6e0baf80249c42e2be5804 = ($v2063c1608d6e0baf80249c42e2be5804 !== '') ? '"' . $v2063c1608d6e0baf80249c42e2be5804 . '"' : '';$vf45acc4a1a9cdb4fdf92ffb1ce8b7b2b .= "{$vb068931cc450442b63f5b3d276ea4297} = {$v2063c1608d6e0baf80249c42e2be5804}\n";}}$vf45acc4a1a9cdb4fdf92ffb1ce8b7b2b .= "\n";}file_put_contents(CONFIG_INI_PATH, $vf45acc4a1a9cdb4fdf92ffb1ce8b7b2b);}private function unescapeValue($v2063c1608d6e0baf80249c42e2be5804) {if(is_array($v2063c1608d6e0baf80249c42e2be5804)) {foreach($v2063c1608d6e0baf80249c42e2be5804 as $v865c0c0b4ab0e063e5caa3387c1a8741 => $v9e3669d19b675bd57058fd4664205d2a) {$v2063c1608d6e0baf80249c42e2be5804[$v865c0c0b4ab0e063e5caa3387c1a8741] = $this->unescapeValue($v9e3669d19b675bd57058fd4664205d2a);}return $v2063c1608d6e0baf80249c42e2be5804;}if(strlen($v2063c1608d6e0baf80249c42e2be5804) >= 2 && substr($v2063c1608d6e0baf80249c42e2be5804, 0, 1) == "'" && substr($v2063c1608d6e0baf80249c42e2be5804, -1, 1) == "'") {$v2063c1608d6e0baf80249c42e2be5804 = substr($v2063c1608d6e0baf80249c42e2be5804, 1, strlen($v2063c1608d6e0baf80249c42e2be5804) - 2);}return $v2063c1608d6e0baf80249c42e2be5804;}};?>