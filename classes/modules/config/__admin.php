<?php
 abstract class __config extends baseModuleAdmin {public function main() {$vb1444fb0c07653567ad325aa25d4e37a = regedit::getInstance();$v2245023265ae4cf87d02c8b6ba991139 = mainConfiguration::getInstance();$v21ffce5b8a6cc8cc6a41448dd69623c9 = array(    "globals" => array(     "string:site_name" => NULL,     "email:admin_email" => NULL,     "string:keycode" => NULL,     "boolean:chache_browser" => NULL,     "boolean:disable_url_autocorrection" => NULL,     "boolean:disable_captcha" => NULL,     "int:max_img_filesize"  => NULL,     "status:upload_max_filesize" => NULL,     "boolean:allow-alt-name-with-module-collision" => NULL,     "boolean:allow-redirects-watch" => NULL    )   );$v79001f389eb5f5185f6945430cb57be1 = (int) ini_get('upload_max_filesize');$v15d61712450a686a7f365adf4fef581f = getRequest("param0");if($v15d61712450a686a7f365adf4fef581f == "do") {$v21ffce5b8a6cc8cc6a41448dd69623c9 = $this->expectParams($v21ffce5b8a6cc8cc6a41448dd69623c9);$vb1444fb0c07653567ad325aa25d4e37a->setVar("//settings/site_name", $v21ffce5b8a6cc8cc6a41448dd69623c9['globals']['string:site_name']);$vb1444fb0c07653567ad325aa25d4e37a->setVar("//settings/admin_email", $v21ffce5b8a6cc8cc6a41448dd69623c9['globals']['email:admin_email']);$vb1444fb0c07653567ad325aa25d4e37a->setVar("//settings/chache_browser", $v21ffce5b8a6cc8cc6a41448dd69623c9['globals']['boolean:chache_browser']);$vb1444fb0c07653567ad325aa25d4e37a->setVar("//settings/keycode", $v21ffce5b8a6cc8cc6a41448dd69623c9['globals']['string:keycode']);$vb1444fb0c07653567ad325aa25d4e37a->setVar("//settings/disable_url_autocorrection", $v21ffce5b8a6cc8cc6a41448dd69623c9['globals']['boolean:disable_url_autocorrection']);$v2245023265ae4cf87d02c8b6ba991139->set('anti-spam', 'captcha.enabled', !$v21ffce5b8a6cc8cc6a41448dd69623c9['globals']['boolean:disable_captcha']);$vb1444fb0c07653567ad325aa25d4e37a->setVar("//settings/max_img_filesize", $v21ffce5b8a6cc8cc6a41448dd69623c9['globals']['int:max_img_filesize']);$v2245023265ae4cf87d02c8b6ba991139->set('kernel', 'ignore-module-names-overwrite', $v21ffce5b8a6cc8cc6a41448dd69623c9['globals']['boolean:allow-alt-name-with-module-collision']);$v2245023265ae4cf87d02c8b6ba991139->set('seo', 'watch-redirects-history', $v21ffce5b8a6cc8cc6a41448dd69623c9['globals']['boolean:allow-redirects-watch']);$this->chooseRedirect();}$v21ffce5b8a6cc8cc6a41448dd69623c9['globals']['string:site_name'] = $vb1444fb0c07653567ad325aa25d4e37a->getVal("//settings/site_name");$v21ffce5b8a6cc8cc6a41448dd69623c9['globals']['email:admin_email'] = $vb1444fb0c07653567ad325aa25d4e37a->getVal("//settings/admin_email");$v21ffce5b8a6cc8cc6a41448dd69623c9['globals']['boolean:chache_browser'] = $vb1444fb0c07653567ad325aa25d4e37a->getVal("//settings/chache_browser");$v21ffce5b8a6cc8cc6a41448dd69623c9['globals']['string:keycode'] = $vb1444fb0c07653567ad325aa25d4e37a->getVal("//settings/keycode");$v21ffce5b8a6cc8cc6a41448dd69623c9['globals']['boolean:disable_url_autocorrection'] = $vb1444fb0c07653567ad325aa25d4e37a->getVal("//settings/disable_url_autocorrection");$v21ffce5b8a6cc8cc6a41448dd69623c9['globals']['boolean:disable_captcha'] = !$v2245023265ae4cf87d02c8b6ba991139->get('anti-spam', 'captcha.enabled');$v21ffce5b8a6cc8cc6a41448dd69623c9['globals']['status:upload_max_filesize'] = $v79001f389eb5f5185f6945430cb57be1;$ve6a7ab42343e8bc9131d89646abcb773 = $vb1444fb0c07653567ad325aa25d4e37a->getVal("//settings/max_img_filesize");$v21ffce5b8a6cc8cc6a41448dd69623c9['globals']['int:max_img_filesize'] = $ve6a7ab42343e8bc9131d89646abcb773 ? $ve6a7ab42343e8bc9131d89646abcb773 : $v79001f389eb5f5185f6945430cb57be1;$v21ffce5b8a6cc8cc6a41448dd69623c9['globals']['boolean:allow-alt-name-with-module-collision'] = $v2245023265ae4cf87d02c8b6ba991139->get('kernel', 'ignore-module-names-overwrite');$v21ffce5b8a6cc8cc6a41448dd69623c9['globals']['boolean:allow-redirects-watch'] = $v2245023265ae4cf87d02c8b6ba991139->get('seo', 'watch-redirects-history');$this->setDataType("settings");$this->setActionType("modify");$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($v21ffce5b8a6cc8cc6a41448dd69623c9, "settings");$this->setData($v8d777f385d3dfec8815d20f7496026dc);return $this->doData();}public function menu() {$vfca1bff8ad8b3a8585abfb0ad523ba42 = Array();$vb1444fb0c07653567ad325aa25d4e37a = regedit::getInstance();$v190408aaf635bfc91169b0a28058df89 = $vb1444fb0c07653567ad325aa25d4e37a->getList('//modules');$v8e8a1e3d35434a953f97985cb2eddba3 = Array(    'content'  => 1,    'news'   => 2,    'blogs20'  => 3,    'forum'   => 4,    'comments'  => 5,    'vote'   => 6,    'webforms'  => 7,    'photoalbum' => 8,    'faq'   => 9,    'dispatches' => 10,    'catalog'  => 11,    'eshop'   => 12,    'banners'  => 13,    'users'   => 14,    'stat'   => 15,    'seo'   => 16,    'trash'   => 17,    'config'  => 102,    'data'   => 101,    'backup'  => 103,    'autoupdate' => 104,    'webo'   => 105,    'search'  => 106,    'filemanager' => 107,   );$permissions = permissionsCollection::getInstance();$v0eb9b3af2e4a00837a1b1a854c9ea18c = Array();$vf526a47920762b5be73158ffa473ca5a = Array();foreach($v190408aaf635bfc91169b0a28058df89 as $v854203cccade0bbe21be239a208aea49) {list($v854203cccade0bbe21be239a208aea49) = $v854203cccade0bbe21be239a208aea49;if($permissions->isAllowedModule(false, $v854203cccade0bbe21be239a208aea49) == false) {continue;}$vb988295c268025b49dfb3df26171ddc3 = isset($v8e8a1e3d35434a953f97985cb2eddba3[$v854203cccade0bbe21be239a208aea49]) ? $v8e8a1e3d35434a953f97985cb2eddba3[$v854203cccade0bbe21be239a208aea49] : 99;$vf526a47920762b5be73158ffa473ca5a[] = $vb988295c268025b49dfb3df26171ddc3. "^" . $v854203cccade0bbe21be239a208aea49;}$vceb594c5f1b9a87761fe1885ffc65259 = $permissions->isAllowedMethod($permissions->getUserId(), "data", "trash");if(xslAdminTemplater::getCurrentSkinName() == "mac" && $vceb594c5f1b9a87761fe1885ffc65259 != false) {$vf526a47920762b5be73158ffa473ca5a[] = "999^trash";}natsort($vf526a47920762b5be73158ffa473ca5a);foreach($vf526a47920762b5be73158ffa473ca5a as $v35427b7ceaef040744e401a95c6cffaf) {$v854203cccade0bbe21be239a208aea49 ="";$vb988295c268025b49dfb3df26171ddc3 = "99";list($vb988295c268025b49dfb3df26171ddc3, $v854203cccade0bbe21be239a208aea49) = explode("^", $v35427b7ceaef040744e401a95c6cffaf);if(defined("CURRENT_VERSION_LINE")) {if(CURRENT_VERSION_LINE == "free" || CURRENT_VERSION_LINE == "lite" || CURRENT_VERSION_LINE == "freelance") {if($v854203cccade0bbe21be239a208aea49 == "data") {continue;}if(CURRENT_VERSION_LINE != "freelance") {if($v854203cccade0bbe21be239a208aea49 == "vote" || $v854203cccade0bbe21be239a208aea49 == "forum" || $v854203cccade0bbe21be239a208aea49 == "webforms") {continue;}}}}if(defined('DB_DRIVER') && DB_DRIVER=="xml") {if($v854203cccade0bbe21be239a208aea49 == 'search' || $v854203cccade0bbe21be239a208aea49 == 'stat') continue;}if(ulangStream::getLangPrefix() != "ru" && $v854203cccade0bbe21be239a208aea49 == "seo") {continue;}$v949b5b1d087c0c75e99b8bd0b05c4c4c = $vb1444fb0c07653567ad325aa25d4e37a->getVal("//modules/{$v854203cccade0bbe21be239a208aea49}/config");$v7abdda3251de25a51bf5fb15d7c3391d = cmsController::getInstance()->getCurrentModule();$vdb206b4902d295196025b8e70cbb0896 = cmsController::getInstance()->getCurrentMethod();$v69ba0c89abba8a3e9cc0c5e32be0d35d = Array();$v69ba0c89abba8a3e9cc0c5e32be0d35d['attribute:name'] = $v854203cccade0bbe21be239a208aea49;$v69ba0c89abba8a3e9cc0c5e32be0d35d['attribute:label'] = getLabel("module-" . $v854203cccade0bbe21be239a208aea49);$v69ba0c89abba8a3e9cc0c5e32be0d35d['attribute:priority']= $vb988295c268025b49dfb3df26171ddc3;if($v7abdda3251de25a51bf5fb15d7c3391d == $v854203cccade0bbe21be239a208aea49 && !($vdb206b4902d295196025b8e70cbb0896 == 'mainpage')) {$v69ba0c89abba8a3e9cc0c5e32be0d35d['attribute:active'] = "active";}if($v949b5b1d087c0c75e99b8bd0b05c4c4c && system_is_allowed($v7abdda3251de25a51bf5fb15d7c3391d, "config")) {$v69ba0c89abba8a3e9cc0c5e32be0d35d['attribute:config'] = "config";}$v0eb9b3af2e4a00837a1b1a854c9ea18c[] = $v69ba0c89abba8a3e9cc0c5e32be0d35d;}$vfca1bff8ad8b3a8585abfb0ad523ba42['items'] = Array("nodes:item" => $v0eb9b3af2e4a00837a1b1a854c9ea18c);return $vfca1bff8ad8b3a8585abfb0ad523ba42;}public function modules() {$v0eb9b3af2e4a00837a1b1a854c9ea18c = Array();$vb1444fb0c07653567ad325aa25d4e37a = regedit::getInstance();$vf526a47920762b5be73158ffa473ca5a = $vb1444fb0c07653567ad325aa25d4e37a->getList("//modules");foreach($vf526a47920762b5be73158ffa473ca5a as $v854203cccade0bbe21be239a208aea49) {list($v854203cccade0bbe21be239a208aea49) = $v854203cccade0bbe21be239a208aea49;if(defined("CURRENT_VERSION_LINE")) {if(CURRENT_VERSION_LINE == "free" || CURRENT_VERSION_LINE == "lite" || CURRENT_VERSION_LINE == "freelance") {if($v854203cccade0bbe21be239a208aea49 == "data") {continue;}if(CURRENT_VERSION_LINE != "freelance") {if($v854203cccade0bbe21be239a208aea49 == "vote" || $v854203cccade0bbe21be239a208aea49 == "forum" || $v854203cccade0bbe21be239a208aea49 == "webforms") {continue;}}}}if(defined('DB_DRIVER') && DB_DRIVER=="xml") {if($v854203cccade0bbe21be239a208aea49 == 'search' || $v854203cccade0bbe21be239a208aea49 == 'stat') continue;}$v0eb9b3af2e4a00837a1b1a854c9ea18c[] = $v854203cccade0bbe21be239a208aea49;}$this->setDataType("list");$this->setActionType("view");$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($v0eb9b3af2e4a00837a1b1a854c9ea18c, "modules");$this->setData($v8d777f385d3dfec8815d20f7496026dc);return $this->doData();}public function add_module_do() {if(CURRENT_VERSION_LINE == "free" || CURRENT_VERSION_LINE == "lite" || CURRENT_VERSION_LINE == "freelance") {throw new publicAdminLicenseLimitException(getLabel('error-license-limit'));}$v8b1dc169bf460ee884fceef66c6607d6 = cmsController::getInstance();$vc22d45567638173f6f7c953f54077fbd = getRequest('module_path');$v52a43e48ec4649dee819dadabcab1bde = '';if(preg_match("/\/modules\/(\S+)\//", $vc22d45567638173f6f7c953f54077fbd, $vc68271a63ddbc431c307beb7d2918275)) {$v52a43e48ec4649dee819dadabcab1bde = getArrayKey($vc68271a63ddbc431c307beb7d2918275, 1);}if (!preg_match("/.\.php$/", $vc22d45567638173f6f7c953f54077fbd )){$vc22d45567638173f6f7c953f54077fbd .= "/install.php";}$v8b1dc169bf460ee884fceef66c6607d6->installModule($vc22d45567638173f6f7c953f54077fbd);if($v52a43e48ec4649dee819dadabcab1bde == 'geoip') {self::switchGroupsActivity('city_targeting', true);}$this->chooseRedirect($this->pre_lang . "/admin/config/modules/");}public function del_module() {if(CURRENT_VERSION_LINE == "free" || CURRENT_VERSION_LINE == "lite" || CURRENT_VERSION_LINE == "freelance") {throw new publicAdminLicenseLimitException(getLabel('error-license-limit'));}$v2a997852f29a185971f7f89a86866cfe = array('config', 'content', 'users', 'data');$v42aefbae01d2dfd981f7da7d823d689e = getRequest('param0');if(in_array($v42aefbae01d2dfd981f7da7d823d689e, $v2a997852f29a185971f7f89a86866cfe)) {throw new publicAdminException(getLabel("error-can-not-delete-{$v42aefbae01d2dfd981f7da7d823d689e}-module"));}$v22884db148f0ffb0d830ba431102b0b5 = cmsController::getInstance()->getModule($v42aefbae01d2dfd981f7da7d823d689e);if($v22884db148f0ffb0d830ba431102b0b5 instanceof def_module) {$v22884db148f0ffb0d830ba431102b0b5->uninstall();}if($v42aefbae01d2dfd981f7da7d823d689e == 'geoip') {self::switchGroupsActivity('city_targeting', false);}$this->chooseRedirect($this->pre_lang . "/admin/config/modules/");}};?>