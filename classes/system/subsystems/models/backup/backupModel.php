<?php
 class backupModel extends singleton implements iBackupModel {protected function __construct() {}public static function getInstance() {return parent::getInstance(__CLASS__);}public function getChanges($vf33a4e939ffe21234596860b7249c246 = false, $vcd5b6c7221daa58d6e8c27bd85d9df56 = "", $v4f808c2668c4318a25f5068ad02f465f = "") {if(!regedit::getInstance()->getVal("modules/backup/enabled")) {return false;}$v21ffce5b8a6cc8cc6a41448dd69623c9 = array();if(!$vcd5b6c7221daa58d6e8c27bd85d9df56) {$vcd5b6c7221daa58d6e8c27bd85d9df56 = "content";}if(!$v4f808c2668c4318a25f5068ad02f465f) {$v4f808c2668c4318a25f5068ad02f465f = "edit_page_do";}$vaa9f73eea60a006820d0f8768bc8a3fc = (int) regedit::getInstance()->getVal("//modules/backup/max_save_actions");$vaa9f73eea60a006820d0f8768bc8a3fc -= 1;$vcd5b6c7221daa58d6e8c27bd85d9df56 = mysql_real_escape_string($vcd5b6c7221daa58d6e8c27bd85d9df56);$v4f808c2668c4318a25f5068ad02f465f = mysql_real_escape_string($v4f808c2668c4318a25f5068ad02f465f);$vf33a4e939ffe21234596860b7249c246 = (int) $vf33a4e939ffe21234596860b7249c246;$vac5c74b64b4b8352ef2f181affb5ac2a = "SELECT id, ctime, changed_module, user_id, is_active FROM cms_backup WHERE param='" . $vf33a4e939ffe21234596860b7249c246 . "' GROUP BY param0 ORDER BY ctime DESC";$result = l_mysql_query($vac5c74b64b4b8352ef2f181affb5ac2a);$v4a8a08f09d37b73795649038408b5f33 = 0;$vdf347a373b8f92aa0ae3dd920a5ec2f6 = Array();while(list($v5de09a8d1a309a8103bba960e16f1ab4, $v8c1eddb947fad440954f3c703d4df808, $vcd5b6c7221daa58d6e8c27bd85d9df56, $ve8701ad48ba05a91604e480dd60899a3, $v4264c638e0098acb172519b0436db099) = mysql_fetch_row($result)) {$v8bc182b015e0e0749de8158e4343b3da = Array();$v8bc182b015e0e0749de8158e4343b3da['attribute:changetime'] = $v8c1eddb947fad440954f3c703d4df808;$v8bc182b015e0e0749de8158e4343b3da['attribute:user-id'] = $ve8701ad48ba05a91604e480dd60899a3;if(strlen($vcd5b6c7221daa58d6e8c27bd85d9df56) == 0) {$v8bc182b015e0e0749de8158e4343b3da['attribute:is-void'] = true;}if($v4264c638e0098acb172519b0436db099) {$v8bc182b015e0e0749de8158e4343b3da['attribute:active'] = "active";}$v8bc182b015e0e0749de8158e4343b3da['date'] = new umiDate($v8c1eddb947fad440954f3c703d4df808);$v8bc182b015e0e0749de8158e4343b3da['author'] = selector::get('object')->id($ve8701ad48ba05a91604e480dd60899a3);$v8bc182b015e0e0749de8158e4343b3da['link'] = "/admin/backup/rollback/{$v5de09a8d1a309a8103bba960e16f1ab4}/";$vdf347a373b8f92aa0ae3dd920a5ec2f6[] = $v8bc182b015e0e0749de8158e4343b3da;}$v21ffce5b8a6cc8cc6a41448dd69623c9['nodes:revision'] = $vdf347a373b8f92aa0ae3dd920a5ec2f6;return $v21ffce5b8a6cc8cc6a41448dd69623c9;}public function save($vf33a4e939ffe21234596860b7249c246 = "", $vad0c3358f1a712601256bfc6e9ee9830 = "", $v05dd82e678780573a4af462d35d7f06d = "") {if(!regedit::getInstance()->getVal("//modules/backup/enabled")) return false;if(getRequest('rollbacked')) return false;$v8b1dc169bf460ee884fceef66c6607d6 = cmsController::getInstance();if(!$vad0c3358f1a712601256bfc6e9ee9830) $vad0c3358f1a712601256bfc6e9ee9830 = $v8b1dc169bf460ee884fceef66c6607d6->getCurrentModule();$v05dd82e678780573a4af462d35d7f06d = $v8b1dc169bf460ee884fceef66c6607d6->getCurrentMethod();$v1d0c3e03c46ba6aa6adb5394fecfc396 = ($v8b1dc169bf460ee884fceef66c6607d6->getModule('users')) ? $v1d0c3e03c46ba6aa6adb5394fecfc396 = $v8b1dc169bf460ee884fceef66c6607d6->getModule('users')->user_id : 0;$v8c1eddb947fad440954f3c703d4df808 = time();if(!$vad0c3358f1a712601256bfc6e9ee9830) {$vad0c3358f1a712601256bfc6e9ee9830 = getRequest('module');}if(!$v05dd82e678780573a4af462d35d7f06d) {$v05dd82e678780573a4af462d35d7f06d = getRequest('method');}foreach($_REQUEST as $v7efdfc94655a25dcea3ec85e9bb703fa => $vde3ec0aa2234aa1e3ee275bbc715c6c9) {if($v7efdfc94655a25dcea3ec85e9bb703fa == "save-mode") continue;$_temp[$v7efdfc94655a25dcea3ec85e9bb703fa] = (!is_array($vde3ec0aa2234aa1e3ee275bbc715c6c9)) ? base64_encode($vde3ec0aa2234aa1e3ee275bbc715c6c9) : $vde3ec0aa2234aa1e3ee275bbc715c6c9;}if(isset($_temp['data']['new'])) {$v8e2dcfd7e7e24b1ca76c1193f645902b = umiHierarchy::getInstance()->getElement($vf33a4e939ffe21234596860b7249c246);if($v8e2dcfd7e7e24b1ca76c1193f645902b instanceof umiHierarchyElement) {$_temp['data'][$v8e2dcfd7e7e24b1ca76c1193f645902b->getObjectId()] = $_temp['data']['new'];unset($_temp['data']['new']);}}$vab4d0a658aef644a039b90c2067b45c0 = serialize($_temp);$vab4d0a658aef644a039b90c2067b45c0 = mysql_real_escape_string($vab4d0a658aef644a039b90c2067b45c0);$vac5c74b64b4b8352ef2f181affb5ac2a = "UPDATE cms_backup SET is_active='0' WHERE param='" . $vf33a4e939ffe21234596860b7249c246 . "'";l_mysql_query($vac5c74b64b4b8352ef2f181affb5ac2a);$vac5c74b64b4b8352ef2f181affb5ac2a = <<<SQL
INSERT INTO cms_backup (ctime, changed_module, changed_method, param, param0, user_id, is_active) 
				VALUES('{$v8c1eddb947fad440954f3c703d4df808}', '{$vad0c3358f1a712601256bfc6e9ee9830}', '{$v05dd82e678780573a4af462d35d7f06d}', '{$vf33a4e939ffe21234596860b7249c246}', '{$vab4d0a658aef644a039b90c2067b45c0}', '{$v1d0c3e03c46ba6aa6adb5394fecfc396}', '1')
SQL;   l_mysql_query($vac5c74b64b4b8352ef2f181affb5ac2a);$vaa9f73eea60a006820d0f8768bc8a3fc = regedit::getInstance()->getVal("//modules/backup/max_save_actions");$vac5c74b64b4b8352ef2f181affb5ac2a = "SELECT COUNT(*) FROM cms_backup WHERE param='" . $vf33a4e939ffe21234596860b7249c246 . "' ORDER BY ctime DESC";$result = l_mysql_query($vac5c74b64b4b8352ef2f181affb5ac2a);list($vaacd38cfef1bec4d335a62835fda0839) = mysql_fetch_row($result);$vb37057aff71d268f8b562c7dd23453a6 = regedit::getInstance()->getVal("//modules/backup/max_timelimit");$v626726e60bd1215f36719a308a25b798 = $vaacd38cfef1bec4d335a62835fda0839 - $vaa9f73eea60a006820d0f8768bc8a3fc;if($v626726e60bd1215f36719a308a25b798 < 0) {$v626726e60bd1215f36719a308a25b798 = 0;}$vac5c74b64b4b8352ef2f181affb5ac2a = "DELETE FROM cms_backup WHERE param='" . $vf33a4e939ffe21234596860b7249c246 . "' ORDER BY ctime ASC LIMIT " . ($v626726e60bd1215f36719a308a25b798);l_mysql_query($vac5c74b64b4b8352ef2f181affb5ac2a);$v305d28898e362717b3ad3d0181c15636=$vb37057aff71d268f8b562c7dd23453a6*3600*24;$vac5c74b64b4b8352ef2f181affb5ac2a="DELETE FROM cms_backup WHERE param='" . $vf33a4e939ffe21234596860b7249c246 . "' AND (".time()."-ctime)>".$v305d28898e362717b3ad3d0181c15636." ORDER BY ctime ASC";l_mysql_query($vac5c74b64b4b8352ef2f181affb5ac2a);return true;}public function rollback($v5de09a8d1a309a8103bba960e16f1ab4) {if(!regedit::getInstance()->getVal("//modules/backup/enabled")) {return false;}$v5de09a8d1a309a8103bba960e16f1ab4 = (int) $v5de09a8d1a309a8103bba960e16f1ab4;$vac5c74b64b4b8352ef2f181affb5ac2a = "SELECT param, param0, changed_module, changed_method FROM cms_backup WHERE id='$v5de09a8d1a309a8103bba960e16f1ab4' LIMIT 1";$result = l_mysql_query($vac5c74b64b4b8352ef2f181affb5ac2a);if(list($v7057e8409c7c531a1a6e9ac3df4ed549, $v8d777f385d3dfec8815d20f7496026dc, $vcd5b6c7221daa58d6e8c27bd85d9df56, $v4f808c2668c4318a25f5068ad02f465f) = mysql_fetch_row($result)) {$vdec2d7edd1187a6ec1061702b907a633 = $v7057e8409c7c531a1a6e9ac3df4ed549;$vac5c74b64b4b8352ef2f181affb5ac2a = "UPDATE cms_backup SET is_active='0' WHERE param='" . $vdec2d7edd1187a6ec1061702b907a633 . "'";l_mysql_query($vac5c74b64b4b8352ef2f181affb5ac2a);$vac5c74b64b4b8352ef2f181affb5ac2a = "UPDATE cms_backup SET is_active='1' WHERE id='" . $v5de09a8d1a309a8103bba960e16f1ab4 . "'";l_mysql_query($vac5c74b64b4b8352ef2f181affb5ac2a);$_temp = unserialize($v8d777f385d3dfec8815d20f7496026dc);$_REQUEST = Array();foreach($_temp as $v7efdfc94655a25dcea3ec85e9bb703fa => $vde3ec0aa2234aa1e3ee275bbc715c6c9) {if(!is_array($vde3ec0aa2234aa1e3ee275bbc715c6c9)) {$vde3ec0aa2234aa1e3ee275bbc715c6c9 = base64_decode($vde3ec0aa2234aa1e3ee275bbc715c6c9);}else {foreach($vde3ec0aa2234aa1e3ee275bbc715c6c9 as $v865c0c0b4ab0e063e5caa3387c1a8741 => $v9e3669d19b675bd57058fd4664205d2a) {$vde3ec0aa2234aa1e3ee275bbc715c6c9[$v865c0c0b4ab0e063e5caa3387c1a8741] = $v9e3669d19b675bd57058fd4664205d2a;}}$_REQUEST[$v7efdfc94655a25dcea3ec85e9bb703fa] = $vde3ec0aa2234aa1e3ee275bbc715c6c9;$_POST[$v7efdfc94655a25dcea3ec85e9bb703fa] = $vde3ec0aa2234aa1e3ee275bbc715c6c9;}$_REQUEST['rollbacked'] = true;$_REQUEST['save-mode'] = getLabel('label-save');if($vd4354742148a6751285cf836bd208112 = cmsController::getInstance()->getModule($vcd5b6c7221daa58d6e8c27bd85d9df56)) {$v8e2dcfd7e7e24b1ca76c1193f645902b = umiHierarchy::getInstance()->getElement($v7057e8409c7c531a1a6e9ac3df4ed549);if($v8e2dcfd7e7e24b1ca76c1193f645902b instanceof umiHierarchyElement) {$v807765384d9d5527da8848df14a4f02f = $vd4354742148a6751285cf836bd208112->getEditLink($v7057e8409c7c531a1a6e9ac3df4ed549, $v8e2dcfd7e7e24b1ca76c1193f645902b->getMethod());if(sizeof($v807765384d9d5527da8848df14a4f02f) >= 2) {$v6e8e7b349ee8e52e4f20489290e3ac27 = $v807765384d9d5527da8848df14a4f02f[1];$_REQUEST['referer'] = $v6e8e7b349ee8e52e4f20489290e3ac27;$v6e8e7b349ee8e52e4f20489290e3ac27 = trim($v6e8e7b349ee8e52e4f20489290e3ac27, "/") . "/do";if(preg_match("/admin\/[A-z]+\/([^\/]+)\//", $v6e8e7b349ee8e52e4f20489290e3ac27, $vc68271a63ddbc431c307beb7d2918275)) {if(isset($vc68271a63ddbc431c307beb7d2918275[1])) {$v4f808c2668c4318a25f5068ad02f465f = $vc68271a63ddbc431c307beb7d2918275[1];}}$_REQUEST['path'] = $v6e8e7b349ee8e52e4f20489290e3ac27;$_REQUEST['param0'] = $v7057e8409c7c531a1a6e9ac3df4ed549;$_REQUEST['param1'] = "do";}}return $vd4354742148a6751285cf836bd208112->cms_callMethod($v4f808c2668c4318a25f5068ad02f465f, Array());}else {throw new requreMoreAdminPermissionsException("You can't rollback this action. No permission to this module.");}}}public function addLogMessage($v7552cd149af7495ee7d8225974e50f80) {if(!regedit::getInstance()->getVal("//modules/backup/enabled")) {return false;}$v8b1dc169bf460ee884fceef66c6607d6 = cmsController::getInstance();$v1d0c3e03c46ba6aa6adb5394fecfc396 = ($v8b1dc169bf460ee884fceef66c6607d6->getModule('users')) ? $v8b1dc169bf460ee884fceef66c6607d6->getModule('users')->user_id : 0;$v07cc694b9b3fc636710fa08b6922c42b = time();$veca07335a33c5aeb5e1bc7c98b4b9d80 = (int) $v7552cd149af7495ee7d8225974e50f80;$vac5c74b64b4b8352ef2f181affb5ac2a = "INSERT INTO cms_backup (ctime, param, user_id, param0) VALUES('{$v07cc694b9b3fc636710fa08b6922c42b}', '{$veca07335a33c5aeb5e1bc7c98b4b9d80}', '{$v1d0c3e03c46ba6aa6adb5394fecfc396}', '{$v07cc694b9b3fc636710fa08b6922c42b}')";mysql_query($vac5c74b64b4b8352ef2f181affb5ac2a);}public function fakeBackup($v7552cd149af7495ee7d8225974e50f80) {$v8e2dcfd7e7e24b1ca76c1193f645902b = selector::get('page')->id($v7552cd149af7495ee7d8225974e50f80);if(is_null($v8e2dcfd7e7e24b1ca76c1193f645902b)) return false;$v539f42cd378873bb0f9889eff317bafa = $_REQUEST;$va8cfde6331bd59eb2ac96f8911c4b666 = $v8e2dcfd7e7e24b1ca76c1193f645902b->getObject();$v599dcce2998a6b40b1e38e8c6006cb0a = selector::get('object-type')->id($va8cfde6331bd59eb2ac96f8911c4b666->getTypeId());$_REQUEST['name'] = $v8e2dcfd7e7e24b1ca76c1193f645902b->name;$_REQUEST['alt-name'] = $v8e2dcfd7e7e24b1ca76c1193f645902b->altName;$_REQUEST['active'] = $v8e2dcfd7e7e24b1ca76c1193f645902b->isActive;foreach($v599dcce2998a6b40b1e38e8c6006cb0a->getAllFields() as $v06e3d36fa30cea095545139854ad1fb9) {$v972bf3f05d14ffbdb817bef60638ff00 = $v06e3d36fa30cea095545139854ad1fb9->getName();$v2063c1608d6e0baf80249c42e2be5804 = $this->fakeBackupValue($va8cfde6331bd59eb2ac96f8911c4b666, $v06e3d36fa30cea095545139854ad1fb9);if(is_null($v2063c1608d6e0baf80249c42e2be5804)) continue;$_REQUEST['data'][$va8cfde6331bd59eb2ac96f8911c4b666->id][$v972bf3f05d14ffbdb817bef60638ff00] = $v2063c1608d6e0baf80249c42e2be5804;}$this->save($v7552cd149af7495ee7d8225974e50f80, $v8e2dcfd7e7e24b1ca76c1193f645902b->getModule());$_REQUEST = $v539f42cd378873bb0f9889eff317bafa;}protected function fakeBackupValue(iUmiObject $va8cfde6331bd59eb2ac96f8911c4b666,  iUmiField $v06e3d36fa30cea095545139854ad1fb9) {$v2063c1608d6e0baf80249c42e2be5804 = $va8cfde6331bd59eb2ac96f8911c4b666->getValue($v06e3d36fa30cea095545139854ad1fb9->getName());switch($v06e3d36fa30cea095545139854ad1fb9->getDataType()) {case 'file':    case 'img_file':    case 'swf_file':     return ($v2063c1608d6e0baf80249c42e2be5804 instanceof iUmiFile) ? $v2063c1608d6e0baf80249c42e2be5804->getFilePath() : '';case 'boolean':     return $v2063c1608d6e0baf80249c42e2be5804 ? '1' : '0';case 'date':     return ($v2063c1608d6e0baf80249c42e2be5804 instanceof umiDate) ? $v2063c1608d6e0baf80249c42e2be5804->getFormattedDate('U') : NULL;case 'tags':     return is_array($v2063c1608d6e0baf80249c42e2be5804) ? implode(", ", $v2063c1608d6e0baf80249c42e2be5804) : NULL;default:     return (string) $v2063c1608d6e0baf80249c42e2be5804;}}};?>