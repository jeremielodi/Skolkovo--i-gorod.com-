<?php
 class adminModuleTabs implements iAdminModuleTabs {private $type;private $tabs = array();public function __construct($v599dcce2998a6b40b1e38e8c6006cb0a = 'common') {if ($v599dcce2998a6b40b1e38e8c6006cb0a == 'common' || $v599dcce2998a6b40b1e38e8c6006cb0a == 'config') {$this->type = $v599dcce2998a6b40b1e38e8c6006cb0a;}else {throw new coreException("Tabs type \"{$v599dcce2998a6b40b1e38e8c6006cb0a}\" is unknown.");}}public function add($vddaa6e8c8c412299272e183087b8f7b6, $v9299da2529c98fccce0e32b476ba3266 = array()) {$this->tabs[$vddaa6e8c8c412299272e183087b8f7b6] = $v9299da2529c98fccce0e32b476ba3266;}public function get($vddaa6e8c8c412299272e183087b8f7b6) {if (isset($this->tabs[$vddaa6e8c8c412299272e183087b8f7b6])) {return $this->tabs[$vddaa6e8c8c412299272e183087b8f7b6];}return false;}public function getTabNameByAlias($vea9f6aca279138c58f705c8d4cb4b8ce) {if (isset($this->tabs[$vea9f6aca279138c58f705c8d4cb4b8ce])) return $vea9f6aca279138c58f705c8d4cb4b8ce;foreach ($this->tabs as $v0db3fbcce639f7d6f75a8f42d981861b => $v9299da2529c98fccce0e32b476ba3266) {if (in_array($vea9f6aca279138c58f705c8d4cb4b8ce, $v9299da2529c98fccce0e32b476ba3266)) return $v0db3fbcce639f7d6f75a8f42d981861b;}return false;}public function remove($vddaa6e8c8c412299272e183087b8f7b6) {if (isset($this->tabs[$vddaa6e8c8c412299272e183087b8f7b6])) {unset($this->tabs[$vddaa6e8c8c412299272e183087b8f7b6]);return true;}return false;}public function getAll() {return (sizeof($this->tabs) > 1) ? $this->tabs : array();}};?>