<?php
 abstract class __cache_config extends baseModuleAdmin {public function cache() {$vb1444fb0c07653567ad325aa25d4e37a = regedit::getInstance();$v2e5d8aa3dfa8ef34ca5131d20f9dad51 = self::getStaticCacheSettings();$vb351f169aa4de744bebb57a44ab20e93 = cacheFrontend::getPriorityEnginesList(true);$vc4dce96179a957998852741746a6beab = cacheFrontend::getInstance()->getCurrentCacheEngineName();$va07f9b4b87b6b9701683ccfc93d20d60 = array(getLabel('cache-engine-none'));foreach($vb351f169aa4de744bebb57a44ab20e93 as $v6257d4194dfc0a2e1468b01b77ca82b0) {$va07f9b4b87b6b9701683ccfc93d20d60[$v6257d4194dfc0a2e1468b01b77ca82b0] = getLabel("cache-engine-" . $v6257d4194dfc0a2e1468b01b77ca82b0);}$va07f9b4b87b6b9701683ccfc93d20d60['value'] = $vc4dce96179a957998852741746a6beab;$v23cbe50c0c2c6880f2b57cdf104469b5 = $vc4dce96179a957998852741746a6beab ? getLabel("cache-engine-" . $vc4dce96179a957998852741746a6beab) : getLabel('cache-engine-none');$v21ffce5b8a6cc8cc6a41448dd69623c9 = array(    'engine' => array(     'status:current-engine' => $v23cbe50c0c2c6880f2b57cdf104469b5,     'select:engines' => $va07f9b4b87b6b9701683ccfc93d20d60    ),        'static' => array(     'boolean:enabled' => NULL,     'select:expire'  => Array(      'short'  => getLabel('cache-static-short'),      'normal' => getLabel('cache-static-normal'),      'long'  => getLabel('cache-static-long')     ),     'boolean:ignore-stat' => NULL    )   );if(!defined('DB_DRIVER') || DB_DRIVER == 'mysql') {$v2dfd0c6675b8259b44785982a0cd4d88 = $this->getDatabaseReport();if($v2dfd0c6675b8259b44785982a0cd4d88) {$v21ffce5b8a6cc8cc6a41448dd69623c9['branching']['status:branch'] = $this->getDatabaseReport();}}if($v2e5d8aa3dfa8ef34ca5131d20f9dad51['expire'] == false) {unset($v21ffce5b8a6cc8cc6a41448dd69623c9['static']['select:expire']);unset($v21ffce5b8a6cc8cc6a41448dd69623c9['static']['boolean:ignore-stat']);}if($vc4dce96179a957998852741746a6beab) {$v21ffce5b8a6cc8cc6a41448dd69623c9['engine']['status:reset'] = true;}$v15d61712450a686a7f365adf4fef581f = (string) getRequest('param0');if($v15d61712450a686a7f365adf4fef581f == 'do') {if(defined("CURRENT_VERSION_LINE")) {if(CURRENT_VERSION_LINE == "demo") {}}$v21ffce5b8a6cc8cc6a41448dd69623c9 = $this->expectParams($v21ffce5b8a6cc8cc6a41448dd69623c9);if(!isset($v21ffce5b8a6cc8cc6a41448dd69623c9['static']['select:expire'])) {$v21ffce5b8a6cc8cc6a41448dd69623c9['static']['select:expire'] = "normal";$v21ffce5b8a6cc8cc6a41448dd69623c9['static']['boolean:ignore-stat'] = false;}$v2e5d8aa3dfa8ef34ca5131d20f9dad51 = Array(     'enabled' => $v21ffce5b8a6cc8cc6a41448dd69623c9['static']['boolean:enabled'],     'expire' => $v21ffce5b8a6cc8cc6a41448dd69623c9['static']['select:expire'],     'ignore-stat' => $v21ffce5b8a6cc8cc6a41448dd69623c9['static']['boolean:ignore-stat']    );self::setStaticCacheSettings($v2e5d8aa3dfa8ef34ca5131d20f9dad51);cacheFrontend::getInstance()->switchCacheEngine($v21ffce5b8a6cc8cc6a41448dd69623c9['engine']['select:engines']);$this->chooseRedirect($this->pre_lang . "/admin/config/cache/");}else if ($v15d61712450a686a7f365adf4fef581f == "reset") {cacheFrontend::getInstance()->flush();$this->chooseRedirect($this->pre_lang . "/admin/config/cache/");}$v2e5d8aa3dfa8ef34ca5131d20f9dad51 = self::getStaticCacheSettings();$v21ffce5b8a6cc8cc6a41448dd69623c9['static']['boolean:enabled'] = $v2e5d8aa3dfa8ef34ca5131d20f9dad51['enabled'];$v21ffce5b8a6cc8cc6a41448dd69623c9['static']['select:expire']['value'] = $v2e5d8aa3dfa8ef34ca5131d20f9dad51['expire'];$v21ffce5b8a6cc8cc6a41448dd69623c9['static']['boolean:ignore-stat'] = $v2e5d8aa3dfa8ef34ca5131d20f9dad51['ignore-stat'];if($v2e5d8aa3dfa8ef34ca5131d20f9dad51['expire'] == false) {unset($v21ffce5b8a6cc8cc6a41448dd69623c9['static']['select:expire']);unset($v21ffce5b8a6cc8cc6a41448dd69623c9['static']['boolean:ignore-stat']);}$this->setDataType("settings");$this->setActionType("modify");$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($v21ffce5b8a6cc8cc6a41448dd69623c9, "settings");$this->setData($v8d777f385d3dfec8815d20f7496026dc);return $this->doData();}public static function getStaticCacheSettings() {$v2245023265ae4cf87d02c8b6ba991139 = mainConfiguration::getInstance();$va10311459433adf322f2590a4987c423 = $v2245023265ae4cf87d02c8b6ba991139->get('cache', 'static.enabled');return $va10311459433adf322f2590a4987c423 ? $v2e5d8aa3dfa8ef34ca5131d20f9dad51 = array(    'enabled'  => $va10311459433adf322f2590a4987c423,    'expire'  => $v2245023265ae4cf87d02c8b6ba991139->get('cache', 'static.mode'),    'ignore-stat' => $v2245023265ae4cf87d02c8b6ba991139->get('cache', 'static.ignore-stat')   ) : array('enabled' => false, 'expire' => false, 'ignore-stat' => false);}public static function setStaticCacheSettings($v2e5d8aa3dfa8ef34ca5131d20f9dad51) {if(!is_array($v2e5d8aa3dfa8ef34ca5131d20f9dad51)) return false;$v2245023265ae4cf87d02c8b6ba991139 = mainConfiguration::getInstance();$v2245023265ae4cf87d02c8b6ba991139->set('cache', 'static.enabled', getArrayKey($v2e5d8aa3dfa8ef34ca5131d20f9dad51, 'enabled'));$v2245023265ae4cf87d02c8b6ba991139->set('cache', 'static.mode', getArrayKey($v2e5d8aa3dfa8ef34ca5131d20f9dad51, 'expire'));$v2245023265ae4cf87d02c8b6ba991139->set('cache', 'static.ignore-stat', getArrayKey($v2e5d8aa3dfa8ef34ca5131d20f9dad51, 'ignore-stat'));}};?>