<?php
 abstract class __content extends baseModuleAdmin {public function tickets () {$this->setDataType("list");$this->setActionType("view");if($this->ifNotXmlMode()) return $this->doData();$vaa9f73eea60a006820d0f8768bc8a3fc = 20;$ve1ba980ce14a8c0d7e2779f895ab8695 = getRequest('p');$v7a86c157ee9713c34fbd7a1ee40f0c5a = $ve1ba980ce14a8c0d7e2779f895ab8695 * $vaa9f73eea60a006820d0f8768bc8a3fc;$v8be74552df93e31bbdd6b36ed74bdb6a = new selector('objects');$v8be74552df93e31bbdd6b36ed74bdb6a->types('object-type')->name('content', 'ticket');$v8be74552df93e31bbdd6b36ed74bdb6a->limit($v7a86c157ee9713c34fbd7a1ee40f0c5a, $vaa9f73eea60a006820d0f8768bc8a3fc);selectorHelper::detectFilters($v8be74552df93e31bbdd6b36ed74bdb6a);if(isset($_REQUEST['order_filter']['name'])) {$_REQUEST['order_filter']['message'] = $_REQUEST['order_filter']['name'];unset($_REQUEST['order_filter']['name']);}$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($v8be74552df93e31bbdd6b36ed74bdb6a->result, "objects");$this->setData($v8d777f385d3dfec8815d20f7496026dc, $v8be74552df93e31bbdd6b36ed74bdb6a->length);$this->setDataRangeByPerPage($vaa9f73eea60a006820d0f8768bc8a3fc, $ve1ba980ce14a8c0d7e2779f895ab8695);return $this->doData();}public function del_ticket() {$v5891da2d64975cae48d175d1e001f5da = getRequest('element');if(!is_array($v5891da2d64975cae48d175d1e001f5da)) {$v5891da2d64975cae48d175d1e001f5da = Array($v5891da2d64975cae48d175d1e001f5da);}foreach($v5891da2d64975cae48d175d1e001f5da as $v16b2b26000987faccb260b9d39df1269) {$va8cfde6331bd59eb2ac96f8911c4b666 = $this->expectObject($v16b2b26000987faccb260b9d39df1269, false, true);$v21ffce5b8a6cc8cc6a41448dd69623c9 = Array(     'object'  => $va8cfde6331bd59eb2ac96f8911c4b666,     'allowed-element-types' => Array('ticket')    );$this->deleteObject($v21ffce5b8a6cc8cc6a41448dd69623c9);}$this->setDataType("list");$this->setActionType("view");$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($v5891da2d64975cae48d175d1e001f5da, "objects");$this->setData($v8d777f385d3dfec8815d20f7496026dc);return $this->doData();}public function sitetree() {$ve4e46deb7f9cc58c7abfb32e5570b6f3 = domainsCollection::getInstance()->getList();$permissions = permissionsCollection::getInstance();$ve8701ad48ba05a91604e480dd60899a3 = $permissions->getUserId();$this->setDataType("list");$this->setActionType("view");foreach($ve4e46deb7f9cc58c7abfb32e5570b6f3 as $v865c0c0b4ab0e063e5caa3387c1a8741 => $vad5f82e879a9c5d6b5b442eb37e50551) {$v662cbf1253ac7d8750ed9190c52163e5 = $vad5f82e879a9c5d6b5b442eb37e50551->getId();if(!$permissions->isAllowedDomain($ve8701ad48ba05a91604e480dd60899a3, $v662cbf1253ac7d8750ed9190c52163e5)) {unset($ve4e46deb7f9cc58c7abfb32e5570b6f3[$v865c0c0b4ab0e063e5caa3387c1a8741]);}}$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($ve4e46deb7f9cc58c7abfb32e5570b6f3, "domains");$this->setData($v8d777f385d3dfec8815d20f7496026dc, sizeof($ve4e46deb7f9cc58c7abfb32e5570b6f3));return $this->doData();}public function add() {$vd0e45878043844ffc41aac437e86b602 = $this->expectElement("param0");$v599dcce2998a6b40b1e38e8c6006cb0a = (string) getRequest("param1");$v15d61712450a686a7f365adf4fef581f = (string) getRequest("param2");if(defined("CURRENT_VERSION_LINE")) {if(CURRENT_VERSION_LINE == "free") {$ve2942a04780e223b215eb8b663cf5353 = umiHierarchy::getInstance()->getElementsCount("content");if($ve2942a04780e223b215eb8b663cf5353 >= 10) {throw new publicAdminPageLimitException(getLabel('error-free-max-pages'));}}}$ve62e4d22f2d8630f6e44e2b7c3f70ddc = array( "type" => $v599dcce2998a6b40b1e38e8c6006cb0a,      "parent" => $vd0e45878043844ffc41aac437e86b602,      "allowed-element-types" => array('page', ''));if($v15d61712450a686a7f365adf4fef581f == "do") {$this->saveAddedElementData($ve62e4d22f2d8630f6e44e2b7c3f70ddc);$this->chooseRedirect();}$this->setDataType("form");$this->setActionType("create");$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($ve62e4d22f2d8630f6e44e2b7c3f70ddc, "page");$this->setData($v8d777f385d3dfec8815d20f7496026dc);return $this->doData();}public function edit() {$v8e2dcfd7e7e24b1ca76c1193f645902b = $this->expectElement("param0");$v15d61712450a686a7f365adf4fef581f = (string) getRequest('param1');$ve62e4d22f2d8630f6e44e2b7c3f70ddc = array( "element" => $v8e2dcfd7e7e24b1ca76c1193f645902b,        "allowed-element-types" => array('page', '')   );if($v15d61712450a686a7f365adf4fef581f == "do") {$this->saveEditedElementData($ve62e4d22f2d8630f6e44e2b7c3f70ddc);$this->chooseRedirect();}$this->setDataType("form");$this->setActionType("modify");$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($ve62e4d22f2d8630f6e44e2b7c3f70ddc, "page");$this->setData($v8d777f385d3dfec8815d20f7496026dc);return $this->doData();}public function config() {$ve4e46deb7f9cc58c7abfb32e5570b6f3 = domainsCollection::getInstance()->getList();$v78e6dd7a49f5b0cb2106a3a434dd5c86 = cmsController::getInstance()->getCurrentLang()->getId();$v15d61712450a686a7f365adf4fef581f = (string) getRequest('param0');$result = Array();foreach($ve4e46deb7f9cc58c7abfb32e5570b6f3 as $vad5f82e879a9c5d6b5b442eb37e50551) {$v67b3dba8bc6778101892eb77249db32e = $vad5f82e879a9c5d6b5b442eb37e50551->getHost();$v662cbf1253ac7d8750ed9190c52163e5 = $vad5f82e879a9c5d6b5b442eb37e50551->getId();$result[$v67b3dba8bc6778101892eb77249db32e] = Array();$vfed36e93a0509e20f2dc96cbbd85b678 = templatesCollection::getInstance()->getTemplatesList($v662cbf1253ac7d8750ed9190c52163e5, $v78e6dd7a49f5b0cb2106a3a434dd5c86);foreach($vfed36e93a0509e20f2dc96cbbd85b678 as $v66f6181bcb4cff4cd38fbc804a036db6) {$result[$v67b3dba8bc6778101892eb77249db32e][] = $v66f6181bcb4cff4cd38fbc804a036db6;}}if($v15d61712450a686a7f365adf4fef581f == "do") {$this->saveEditedList("templates", $result);$this->chooseRedirect();}$this->setDataType("list");$this->setActionType("modify");$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($result, "templates");$this->setData($v8d777f385d3dfec8815d20f7496026dc);return $this->doData();}public function del() {$v8e2dcfd7e7e24b1ca76c1193f645902b = $this->expectElement('param0');$v21ffce5b8a6cc8cc6a41448dd69623c9 = Array(    "element" => $v8e2dcfd7e7e24b1ca76c1193f645902b,    "allowed-element-types" => Array('page', '')   );$this->deleteElement($v21ffce5b8a6cc8cc6a41448dd69623c9);$this->chooseRedirect();}public function seo() {$vb1444fb0c07653567ad325aa25d4e37a = regedit::getInstance();$ve4e46deb7f9cc58c7abfb32e5570b6f3 = domainsCollection::getInstance()->getList();$v78e6dd7a49f5b0cb2106a3a434dd5c86 = cmsController::getInstance()->getCurrentLang()->getId();$v21ffce5b8a6cc8cc6a41448dd69623c9 = Array();foreach($ve4e46deb7f9cc58c7abfb32e5570b6f3 as $vad5f82e879a9c5d6b5b442eb37e50551) {$v662cbf1253ac7d8750ed9190c52163e5 = $vad5f82e879a9c5d6b5b442eb37e50551->getId();$v4fa417eaf48a8e2612e57fc7865bfc19 = $vad5f82e879a9c5d6b5b442eb37e50551->getHost();$vd90727b246a54fba377da573f3f615f1 = Array();$vd90727b246a54fba377da573f3f615f1['status:domain'] = $v4fa417eaf48a8e2612e57fc7865bfc19;$vd90727b246a54fba377da573f3f615f1['string:title-' . $v662cbf1253ac7d8750ed9190c52163e5] = $vb1444fb0c07653567ad325aa25d4e37a->getVal("//settings/title_prefix/{$v78e6dd7a49f5b0cb2106a3a434dd5c86}/{$v662cbf1253ac7d8750ed9190c52163e5}");$vd90727b246a54fba377da573f3f615f1['string:keywords-' . $v662cbf1253ac7d8750ed9190c52163e5] = $vb1444fb0c07653567ad325aa25d4e37a->getVal("//settings/meta_keywords/{$v78e6dd7a49f5b0cb2106a3a434dd5c86}/{$v662cbf1253ac7d8750ed9190c52163e5}");$vd90727b246a54fba377da573f3f615f1['string:description-' . $v662cbf1253ac7d8750ed9190c52163e5] = $vb1444fb0c07653567ad325aa25d4e37a->getVal("//settings/meta_description/{$v78e6dd7a49f5b0cb2106a3a434dd5c86}/{$v662cbf1253ac7d8750ed9190c52163e5}");$v21ffce5b8a6cc8cc6a41448dd69623c9[$v4fa417eaf48a8e2612e57fc7865bfc19] = $vd90727b246a54fba377da573f3f615f1;}$v15d61712450a686a7f365adf4fef581f = (string) getRequest('param0');if($v15d61712450a686a7f365adf4fef581f == "do") {$v21ffce5b8a6cc8cc6a41448dd69623c9 = $this->expectParams($v21ffce5b8a6cc8cc6a41448dd69623c9);foreach($ve4e46deb7f9cc58c7abfb32e5570b6f3 as $vad5f82e879a9c5d6b5b442eb37e50551) {$v662cbf1253ac7d8750ed9190c52163e5 = $vad5f82e879a9c5d6b5b442eb37e50551->getId();$v4fa417eaf48a8e2612e57fc7865bfc19 = $vad5f82e879a9c5d6b5b442eb37e50551->getHost();$vd5d3db1765287eef77d7927cc956f50a = $v21ffce5b8a6cc8cc6a41448dd69623c9[$v4fa417eaf48a8e2612e57fc7865bfc19]['string:title-' . $v662cbf1253ac7d8750ed9190c52163e5];$v59aeb2c9970b7b25be2fab2317e31fcb = $v21ffce5b8a6cc8cc6a41448dd69623c9[$v4fa417eaf48a8e2612e57fc7865bfc19]['string:keywords-' . $v662cbf1253ac7d8750ed9190c52163e5];$v67daf92c833c41c95db874e18fcb2786 = $v21ffce5b8a6cc8cc6a41448dd69623c9[$v4fa417eaf48a8e2612e57fc7865bfc19]['string:description-' . $v662cbf1253ac7d8750ed9190c52163e5];$vb1444fb0c07653567ad325aa25d4e37a->setVal("//settings/title_prefix/{$v78e6dd7a49f5b0cb2106a3a434dd5c86}/{$v662cbf1253ac7d8750ed9190c52163e5}", $vd5d3db1765287eef77d7927cc956f50a);$vb1444fb0c07653567ad325aa25d4e37a->setVal("//settings/meta_keywords/{$v78e6dd7a49f5b0cb2106a3a434dd5c86}/{$v662cbf1253ac7d8750ed9190c52163e5}", $v59aeb2c9970b7b25be2fab2317e31fcb);$vb1444fb0c07653567ad325aa25d4e37a->setVal("//settings/meta_description/{$v78e6dd7a49f5b0cb2106a3a434dd5c86}/{$v662cbf1253ac7d8750ed9190c52163e5}", $v67daf92c833c41c95db874e18fcb2786);}$this->chooseRedirect();}$this->setDataType('settings');$this->setActionType('modify');$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($v21ffce5b8a6cc8cc6a41448dd69623c9, 'settings');$this->setData($v8d777f385d3dfec8815d20f7496026dc);return $this->doData();}public function tpl_edit() {$vd02e12eb6d6c3f6ebd763197df01e211 = (int) getRequest('param0');$v66f6181bcb4cff4cd38fbc804a036db6 = templatesCollection::getInstance()->getTemplate($vd02e12eb6d6c3f6ebd763197df01e211);$v15d61712450a686a7f365adf4fef581f = (string) getRequest('param1');if($v15d61712450a686a7f365adf4fef581f == "do") {$this->saveEditedTemplateData($v66f6181bcb4cff4cd38fbc804a036db6);$this->chooseRedirect();}$this->setDataType('form');$this->setActionType('modify');$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($v66f6181bcb4cff4cd38fbc804a036db6, 'template');$this->setData($v8d777f385d3dfec8815d20f7496026dc);return $this->doData();}public function systemLockPage($v64c40185760732c5cfa71ef1451cdbf7){if ($v8a5bf3fcd88f3eb1320cfce519c8b68b = $v64c40185760732c5cfa71ef1451cdbf7->getRef("element")){$v8e44f0089b076e18a718eb9ca3d94674 = $v64c40185760732c5cfa71ef1451cdbf7->getParam("user_id");$v31e6b624e5c05c45b0f1e8a7f59801ba = $v64c40185760732c5cfa71ef1451cdbf7->getParam("lock_time");$v8a2c76c90da3802fc2f3d7b0b1f2a77a = &$v8a5bf3fcd88f3eb1320cfce519c8b68b->getObject();$v8a2c76c90da3802fc2f3d7b0b1f2a77a->setValue("locktime", $v31e6b624e5c05c45b0f1e8a7f59801ba);$v8a2c76c90da3802fc2f3d7b0b1f2a77a->setValue("lockuser", $v8e44f0089b076e18a718eb9ca3d94674);$v8a2c76c90da3802fc2f3d7b0b1f2a77a->commit();}}public function systemUnlockPage($v64c40185760732c5cfa71ef1451cdbf7){if ($v8a5bf3fcd88f3eb1320cfce519c8b68b = $v64c40185760732c5cfa71ef1451cdbf7->getRef("element")){$v8e44f0089b076e18a718eb9ca3d94674 = $v64c40185760732c5cfa71ef1451cdbf7->getParam("user_id");$v8a2c76c90da3802fc2f3d7b0b1f2a77a = $v8a5bf3fcd88f3eb1320cfce519c8b68b->getObject();$v8a2c76c90da3802fc2f3d7b0b1f2a77a->setValue("locktime", null);$v8a2c76c90da3802fc2f3d7b0b1f2a77a->setValue("lockuser", null);$v8a2c76c90da3802fc2f3d7b0b1f2a77a->commit();}}public function systemIsLockedById($v7057e8409c7c531a1a6e9ac3df4ed549, $ve8701ad48ba05a91604e480dd60899a3){$v8a5bf3fcd88f3eb1320cfce519c8b68b = umiHierarchy::getElement($v7057e8409c7c531a1a6e9ac3df4ed549);$v8a2c76c90da3802fc2f3d7b0b1f2a77a = $v8a5bf3fcd88f3eb1320cfce519c8b68b->getObject();$v31e6b624e5c05c45b0f1e8a7f59801ba = $v8a2c76c90da3802fc2f3d7b0b1f2a77a->getValue("locktime");if ($v31e6b624e5c05c45b0f1e8a7f59801ba == null){return false;}$vfd394e0fa409a6f15ee8c54a0f069f5e = $v8a2c76c90da3802fc2f3d7b0b1f2a77a->getValue("lockuser");$vd5034fb9092631c8a2869ebb11b5c591 = regedit::getInstance()->getVal("//settings/lock_duration");if (($v31e6b624e5c05c45b0f1e8a7f59801ba->timestamp + $vd5034fb9092631c8a2869ebb11b5c591) > time() && $vfd394e0fa409a6f15ee8c54a0f069f5e!=$ve8701ad48ba05a91604e480dd60899a3){return true;}else{return false;}}public function systemWhoLocked($v7057e8409c7c531a1a6e9ac3df4ed549){$v8a5bf3fcd88f3eb1320cfce519c8b68b = umiHierarchy::getElement($v7057e8409c7c531a1a6e9ac3df4ed549);$v8a2c76c90da3802fc2f3d7b0b1f2a77a = $v8a5bf3fcd88f3eb1320cfce519c8b68b->getObject();return $v8a2c76c90da3802fc2f3d7b0b1f2a77a->getValue("lock_user");}public function systemUnlockAll() {$v186ba0d5990f6e43e7ad46f0dbaa47fb = cmsController::getInstance()->getModule("users");if (!$v186ba0d5990f6e43e7ad46f0dbaa47fb->isSv()){throw new publicAdminException(getLabel('error-can-unlock-not-sv'));}$v8be74552df93e31bbdd6b36ed74bdb6a = new umiSelection();$v8be74552df93e31bbdd6b36ed74bdb6a->forceHierarchyTable(true);$result = umiSelectionsParser::runSelection($v8be74552df93e31bbdd6b36ed74bdb6a);foreach ($result as $v1a63c8004d716c8b91f5b7af780555b9){$v8a5bf3fcd88f3eb1320cfce519c8b68b = umiHierarchy::getInstance()->getElement($v1a63c8004d716c8b91f5b7af780555b9);$v8a2c76c90da3802fc2f3d7b0b1f2a77a = $v8a5bf3fcd88f3eb1320cfce519c8b68b->getObject();$v8a2c76c90da3802fc2f3d7b0b1f2a77a->setValue("locktime", null);$v8a2c76c90da3802fc2f3d7b0b1f2a77a->setValue("lockuser", null);$v8a2c76c90da3802fc2f3d7b0b1f2a77a->commit();$v8a5bf3fcd88f3eb1320cfce519c8b68b->commit();}}public function unlockAll () {$this->systemUnlockAll();$this->chooseRedirect();}public function unlockPage($va6eb4816205178e88dad66a16a19ff45) {$v8e2dcfd7e7e24b1ca76c1193f645902b = umiHierarchy::getInstance()->getElement($va6eb4816205178e88dad66a16a19ff45);if($v8e2dcfd7e7e24b1ca76c1193f645902b instanceof umiHierarchyElement) {$v727b3bbb6592a51f98907dbc49f0606b = $v8e2dcfd7e7e24b1ca76c1193f645902b->getObject();$v727b3bbb6592a51f98907dbc49f0606b->setValue("locktime", 0);$v727b3bbb6592a51f98907dbc49f0606b->setValue("lockuser", 0);$v727b3bbb6592a51f98907dbc49f0606b->commit();}}public function unlock_page() {$va6eb4816205178e88dad66a16a19ff45 = getRequest("param0");if (cmsController::getInstance()->getModule("users")->isSv) {throw new publicAdminException(getLabel('error-can-unlock-not-sv'));}$this->unlockPage($va6eb4816205178e88dad66a16a19ff45);}public function content_control() {$v15d61712450a686a7f365adf4fef581f = getRequest("param0");$vb1444fb0c07653567ad325aa25d4e37a = regedit::getInstance();$v21ffce5b8a6cc8cc6a41448dd69623c9 = Array (     "content_config" => Array (      "bool:lock_pages" => false,      "int:lock_duration" => 0,      "bool:expiration_control" => false     )   );if ($v15d61712450a686a7f365adf4fef581f == "do") {$v21ffce5b8a6cc8cc6a41448dd69623c9 = $this->expectParams($v21ffce5b8a6cc8cc6a41448dd69623c9);$vb1444fb0c07653567ad325aa25d4e37a->setVar("//settings/lock_pages", $v21ffce5b8a6cc8cc6a41448dd69623c9['content_config']['bool:lock_pages']);$vb1444fb0c07653567ad325aa25d4e37a->setVar("//settings/lock_duration", $v21ffce5b8a6cc8cc6a41448dd69623c9['content_config']['int:lock_duration']);$vb1444fb0c07653567ad325aa25d4e37a->setVar("//settings/expiration_control", $v21ffce5b8a6cc8cc6a41448dd69623c9['content_config']['bool:expiration_control']);$this->switchGroupsActivity('svojstva_publikacii', (bool) $v21ffce5b8a6cc8cc6a41448dd69623c9['content_config']['bool:expiration_control']);$this->chooseRedirect();}$v21ffce5b8a6cc8cc6a41448dd69623c9['content_config']['bool:lock_pages'] = $vb1444fb0c07653567ad325aa25d4e37a->getVal("//settings/lock_pages");$v21ffce5b8a6cc8cc6a41448dd69623c9['content_config']['int:lock_duration'] = $vb1444fb0c07653567ad325aa25d4e37a->getVal("//settings/lock_duration");$v21ffce5b8a6cc8cc6a41448dd69623c9['content_config']['bool:expiration_control'] = $vb1444fb0c07653567ad325aa25d4e37a->getVal("//settings/expiration_control");$this->setDataType("settings");$this->setActionType("modify");$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($v21ffce5b8a6cc8cc6a41448dd69623c9, "settings");$this->setData($v8d777f385d3dfec8815d20f7496026dc);return $this->doData();}public function getDatasetConfiguration($veca07335a33c5aeb5e1bc7c98b4b9d80 = '') {$v89ab96b2cae2569ced36d70f6866f57d = 'load_tree_node';$vbd269368d92362975c0ab1bb7b461813 = 'tree_delete_element';$v563fed1e7a872ba48d0597845ec0d1c1 = 'tree_set_activity';if($veca07335a33c5aeb5e1bc7c98b4b9d80 == "tickets") {$v89ab96b2cae2569ced36d70f6866f57d = 'tickets';$vbd269368d92362975c0ab1bb7b461813 = 'del_ticket';$v563fed1e7a872ba48d0597845ec0d1c1 = 'none';}$result = array(     'methods' => array(      array('title'=>getLabel('smc-load'), 'forload'=>true,     'module'=>'content', '#__name'=>$v89ab96b2cae2569ced36d70f6866f57d),      array('title'=>getLabel('smc-delete'),           'module'=>'content', '#__name'=>$vbd269368d92362975c0ab1bb7b461813, 'aliases' => 'tree_delete_element,delete,del'),      array('title'=>getLabel('smc-activity'),    'module'=>'content', '#__name'=>$v563fed1e7a872ba48d0597845ec0d1c1, 'aliases' => 'tree_set_activity,activity'),      array('title'=>getLabel('smc-copy'), 'module'=>'content', '#__name'=>'tree_copy_element'),      array('title'=>getLabel('smc-move'),       'module'=>'content', '#__name'=>'tree_move_element'),      array('title'=>getLabel('smc-change-template'),        'module'=>'content', '#__name'=>'change_template'),      array('title'=>getLabel('smc-change-lang'),       'module'=>'content', '#__name'=>'move_to_lang'))   );if($veca07335a33c5aeb5e1bc7c98b4b9d80 == "tickets") {$result['types'] = array(     array('common' => 'true', 'id' => 'ticket')    );$result['stoplist'] = array('title', 'h1', 'meta_keywords', 'meta_descriptions', 'menu_pic_ua', 'menu_pic_a', 'header_pic', 'more_params', 'robots_deny', 'is_unindexed', 'store_amounts', 'locktime', 'lockuser', 'avatar', 'userpic', 'user_settings_data', 'user_dock', 'orders_refs', 'activate_code', 'password', 'message');$result['default'] = 'url[312px]|user_id[147px]';}return $result;}public function getObjectEditLink($v16b2b26000987faccb260b9d39df1269, $v599dcce2998a6b40b1e38e8c6006cb0a) {return false;}};?>
