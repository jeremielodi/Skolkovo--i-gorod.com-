<?php
 abstract class atomicAction implements iAtomicAction {protected $params = Array(), $name, $title = "", $callback, $enviroment = Array(),   $transaction, $afterHibernate = false;public function __construct($vb068931cc450442b63f5b3d276ea4297, transaction $vf4d5b76a2418eba4baeabc1ed9142b54) {$this->name = (string) $vb068931cc450442b63f5b3d276ea4297;$this->transaction = $vf4d5b76a2418eba4baeabc1ed9142b54;}public function getName() {return $vb068931cc450442b63f5b3d276ea4297;}public function setTitle($vd5d3db1765287eef77d7927cc956f50a) {$this->title = (string) $vd5d3db1765287eef77d7927cc956f50a;}public function getTitle() {return $this->title;}public function setParams($v21ffce5b8a6cc8cc6a41448dd69623c9) {if(is_array($v21ffce5b8a6cc8cc6a41448dd69623c9)) {$this->params = $v21ffce5b8a6cc8cc6a41448dd69623c9;return true;}else {return false;}}public function addParam($vb068931cc450442b63f5b3d276ea4297, $v2063c1608d6e0baf80249c42e2be5804) {$this->params[$vb068931cc450442b63f5b3d276ea4297] = $v2063c1608d6e0baf80249c42e2be5804;}protected function replaceParams($v341be97d9aff90c9978347f66f945b77) {foreach($this->params as $vb068931cc450442b63f5b3d276ea4297 => $v2063c1608d6e0baf80249c42e2be5804) {$v341be97d9aff90c9978347f66f945b77 = str_replace("{" . $vb068931cc450442b63f5b3d276ea4297 . "}", $v2063c1608d6e0baf80249c42e2be5804, $v341be97d9aff90c9978347f66f945b77);}return $v341be97d9aff90c9978347f66f945b77;}public static function getSourceFilePath($vb35f75a8f71e57273061dd1a7e1c2ae5, $vefe90a8e604a7c840e88d03a67f6b7d8 = false) {if($vefe90a8e604a7c840e88d03a67f6b7d8) {$v6a2a431fe8b621037ea949531c28551d = SYS_KERNEL_PATH . "subsystems/manifest/actions/" . $vefe90a8e604a7c840e88d03a67f6b7d8 . "/" . $vb35f75a8f71e57273061dd1a7e1c2ae5 . ".php";}else {$v6a2a431fe8b621037ea949531c28551d = SYS_KERNEL_PATH . "subsystems/manifest/actions/" . $vb35f75a8f71e57273061dd1a7e1c2ae5 . ".php";}return $v6a2a431fe8b621037ea949531c28551d;}public static function load($vb35f75a8f71e57273061dd1a7e1c2ae5, transaction $vf4d5b76a2418eba4baeabc1ed9142b54, $vefe90a8e604a7c840e88d03a67f6b7d8 = false) {$v6a2a431fe8b621037ea949531c28551d = self::getSourceFilePath($vb35f75a8f71e57273061dd1a7e1c2ae5, $vefe90a8e604a7c840e88d03a67f6b7d8);$v26b2a720f7b8c9bd8d3999c52da409d0 = $vb35f75a8f71e57273061dd1a7e1c2ae5 . "Action";if(file_exists($v6a2a431fe8b621037ea949531c28551d)) {include_once $v6a2a431fe8b621037ea949531c28551d;if(class_exists($v26b2a720f7b8c9bd8d3999c52da409d0)) {return new $v26b2a720f7b8c9bd8d3999c52da409d0($vb35f75a8f71e57273061dd1a7e1c2ae5, $vf4d5b76a2418eba4baeabc1ed9142b54);}}throw new Exception("Can't load action \"{$vb35f75a8f71e57273061dd1a7e1c2ae5}\"");}public function getParam($v3c6e0b8a9c15224a8228b9a98ca1531d) {return isset($this->params[$v3c6e0b8a9c15224a8228b9a98ca1531d]) ? $this->params[$v3c6e0b8a9c15224a8228b9a98ca1531d] : NULL;}public function setCallback(iManifestCallback $v924a8ceeac17f54d3be3f8cdf1c04eb2) {$this->callback = $v924a8ceeac17f54d3be3f8cdf1c04eb2;}public function setEnviroment($v5764d408d9c26d3223713035dfd22457) {if(is_array($v5764d408d9c26d3223713035dfd22457)) {$this->enviroment = $v5764d408d9c26d3223713035dfd22457;}else {throw new Exception("Expected array as first param");}}public function getTransaction() {return $this->transaction;}public function hibernate($vbbf3128f7f0ca6f7d2379ef475d2b6e6 = true) {$ve70c4df10ef0983b9c8c31bd06b2a2c3 = ($vbbf3128f7f0ca6f7d2379ef475d2b6e6 && $this->afterHibernate);$this->afterHibernate = false;if($ve70c4df10ef0983b9c8c31bd06b2a2c3) {@ob_clean();return false;}$ve2942a04780e223b215eb8b663cf5353 = &$this->getTransaction()->getManifest()->hibernationsCount;if(--$ve2942a04780e223b215eb8b663cf5353 < 0) {return false;}$this->afterHibernate = true;$v7f5cb74af5d7f4b82200738fdbdc5a45 = $this->getTransaction()->getManifest();return $v7f5cb74af5d7f4b82200738fdbdc5a45->hibernate();}public function refresh() {if(isset($_REQUEST['manifest-refresh-try'])) {$v080f651e3fcca17df3a47c2cecfcb880 = (int) $_REQUEST['manifest-refresh-try'];}else {$v080f651e3fcca17df3a47c2cecfcb880 = 0;}parse_str($_SERVER['QUERY_STRING'], $v1b1cc7f086b3f074da452bc3129981eb);$v1b1cc7f086b3f074da452bc3129981eb['manifest-refresh-try'] = ++$v080f651e3fcca17df3a47c2cecfcb880;$v572d4e421e5e6b9bc11d815e8a027112 = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'] . "?" . http_build_query($v1b1cc7f086b3f074da452bc3129981eb);header("Location: {$v572d4e421e5e6b9bc11d815e8a027112}");exit();}protected function mysql_query($vac5c74b64b4b8352ef2f181affb5ac2a) {$result = mysql_query($vac5c74b64b4b8352ef2f181affb5ac2a);if($v56bd7107802ebe56c6918992f0608ec6 = mysql_error()) {mysql_query("ROLLBACK");throw new Exception("Query \"$vac5c74b64b4b8352ef2f181affb5ac2a\" raised error \"{$v56bd7107802ebe56c6918992f0608ec6}\"");}else {return $result;}}protected function getEnviromentValue($v3c6e0b8a9c15224a8228b9a98ca1531d) {if(isset($this->enviroment[$v3c6e0b8a9c15224a8228b9a98ca1531d])) {return $this->enviroment[$v3c6e0b8a9c15224a8228b9a98ca1531d];}else {return NULL;}}};?>