<?php
 abstract class __dispatches extends baseModuleAdmin {public function dispatches_list() {$vb1444fb0c07653567ad325aa25d4e37a = regedit::getInstance();$vb1444fb0c07653567ad325aa25d4e37a->setVar("//modules/dispatches/default_method_admin", "lists");$this->redirect($this->pre_lang . '/admin/dispatches/lists/');}public function lists() {$this->setDataType("list");$this->setActionType("view");if($this->ifNotXmlMode()) return $this->doData();$vaa9f73eea60a006820d0f8768bc8a3fc = $this->per_page;$ve1ba980ce14a8c0d7e2779f895ab8695 = (int) getRequest('p');$v7a86c157ee9713c34fbd7a1ee40f0c5a = $vaa9f73eea60a006820d0f8768bc8a3fc * $ve1ba980ce14a8c0d7e2779f895ab8695;$v8be74552df93e31bbdd6b36ed74bdb6a = new selector('objects');$v8be74552df93e31bbdd6b36ed74bdb6a->types('object-type')->name('dispatches', 'dispatch');$v8be74552df93e31bbdd6b36ed74bdb6a->limit($v7a86c157ee9713c34fbd7a1ee40f0c5a, $vaa9f73eea60a006820d0f8768bc8a3fc);selectorHelper::detectFilters($v8be74552df93e31bbdd6b36ed74bdb6a);$this->setDataRange($vaa9f73eea60a006820d0f8768bc8a3fc, $v7a86c157ee9713c34fbd7a1ee40f0c5a);$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($v8be74552df93e31bbdd6b36ed74bdb6a->result, "objects");$this->setData($v8d777f385d3dfec8815d20f7496026dc, $v8be74552df93e31bbdd6b36ed74bdb6a->limit);return $this->doData();}public function subscribers() {$this->setDataType("list");$this->setActionType("view");if($this->ifNotXmlMode()) return $this->doData();$vaa9f73eea60a006820d0f8768bc8a3fc = $this->per_page;$ve1ba980ce14a8c0d7e2779f895ab8695 = (int) getRequest('p');$v7a86c157ee9713c34fbd7a1ee40f0c5a = $vaa9f73eea60a006820d0f8768bc8a3fc * $ve1ba980ce14a8c0d7e2779f895ab8695;$v8be74552df93e31bbdd6b36ed74bdb6a = new selector('objects');$v8be74552df93e31bbdd6b36ed74bdb6a->types('object-type')->name('dispatches', 'subscriber');$v8be74552df93e31bbdd6b36ed74bdb6a->limit($v7a86c157ee9713c34fbd7a1ee40f0c5a, $vaa9f73eea60a006820d0f8768bc8a3fc);selectorHelper::detectFilters($v8be74552df93e31bbdd6b36ed74bdb6a);$this->setDataRange($vaa9f73eea60a006820d0f8768bc8a3fc, $v7a86c157ee9713c34fbd7a1ee40f0c5a);$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($v8be74552df93e31bbdd6b36ed74bdb6a->result, "objects");$this->setData($v8d777f385d3dfec8815d20f7496026dc, $v8be74552df93e31bbdd6b36ed74bdb6a->limit);return $this->doData();}public function releases() {$this->setDataType("list");$this->setActionType("view");if($this->ifNotXmlMode()) return $this->doData();$vaa9f73eea60a006820d0f8768bc8a3fc = $this->per_page;$ve1ba980ce14a8c0d7e2779f895ab8695 = (int) getRequest('p');$v7a86c157ee9713c34fbd7a1ee40f0c5a = $vaa9f73eea60a006820d0f8768bc8a3fc * $ve1ba980ce14a8c0d7e2779f895ab8695;$v9dddf2a4f7d94594ec2ea98407a410e1 = $this->expectObject("param0");$v8be74552df93e31bbdd6b36ed74bdb6a = new selector('objects');$v8be74552df93e31bbdd6b36ed74bdb6a->types('object-type')->name('dispatches', 'release');$v8be74552df93e31bbdd6b36ed74bdb6a->limit($v7a86c157ee9713c34fbd7a1ee40f0c5a, $vaa9f73eea60a006820d0f8768bc8a3fc);selectorHelper::detectFilters($v8be74552df93e31bbdd6b36ed74bdb6a);$this->setDataRange($vaa9f73eea60a006820d0f8768bc8a3fc, $v7a86c157ee9713c34fbd7a1ee40f0c5a);$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($v8be74552df93e31bbdd6b36ed74bdb6a->result, "objects");$this->setData($v8d777f385d3dfec8815d20f7496026dc, $v8be74552df93e31bbdd6b36ed74bdb6a->limit);return $this->doData();}public function messages() {$v9d85c254b5062e518a134a61950999c3 = $this->per_page;$v7869befb76ea7c96c9dce0e116588ef9 = getRequest("param0");$vce063d025be0cfdf44429e33786d7a49 = umiObjectsCollection::getInstance()->getObject($v7869befb76ea7c96c9dce0e116588ef9);$vb07ccb573f1089c37768de99a4f112f4 = false;if ($vce063d025be0cfdf44429e33786d7a49 instanceof umiObject) {$vb07ccb573f1089c37768de99a4f112f4 = $this->getNewReleaseInstanceId($v7869befb76ea7c96c9dce0e116588ef9);}$result = $this->getReleaseMessages($vb07ccb573f1089c37768de99a4f112f4);$this->setDataType("list");$this->setActionType("view");$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($result, "objects");$this->setData($v8d777f385d3dfec8815d20f7496026dc);return $this->doData();}public function add() {$v599dcce2998a6b40b1e38e8c6006cb0a = (string) getRequest("param0");$v15d61712450a686a7f365adf4fef581f = (string) getRequest("param1");$this->setHeaderLabel("header-dispatches-add-" . $v599dcce2998a6b40b1e38e8c6006cb0a);$ve62e4d22f2d8630f6e44e2b7c3f70ddc = array("type" => $v599dcce2998a6b40b1e38e8c6006cb0a);if($v15d61712450a686a7f365adf4fef581f == "do") {$va8cfde6331bd59eb2ac96f8911c4b666 = $this->saveAddedObjectData($ve62e4d22f2d8630f6e44e2b7c3f70ddc);$vb60ed88355ac3f6898fd8a7ab1734d06 = umiObjectsCollection::getInstance()->getObject($va8cfde6331bd59eb2ac96f8911c4b666->getId());$vb60ed88355ac3f6898fd8a7ab1734d06->setValue("subscribe_date", time());$vb60ed88355ac3f6898fd8a7ab1734d06->commit();$this->chooseRedirect($this->pre_lang . '/admin/dispatches/edit/' . $va8cfde6331bd59eb2ac96f8911c4b666->getId() . "/");}$this->setDataType("form");$this->setActionType("create");$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($ve62e4d22f2d8630f6e44e2b7c3f70ddc, "object");$this->setData($v8d777f385d3dfec8815d20f7496026dc);return $this->doData();}public function edit() {$va8cfde6331bd59eb2ac96f8911c4b666 = $this->expectObject("param0");$v15d61712450a686a7f365adf4fef581f = (string) getRequest('param1');$this->setHeaderLabel("header-dispatches-edit-" . $this->getObjectTypeMethod($va8cfde6331bd59eb2ac96f8911c4b666));if($v15d61712450a686a7f365adf4fef581f == "do") {$this->saveEditedObjectData($va8cfde6331bd59eb2ac96f8911c4b666);$this->chooseRedirect();}$this->setDataType("form");$this->setActionType("modify");$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($va8cfde6331bd59eb2ac96f8911c4b666, "object");$v963cecbdfa91757f2c7a4a9e794f3da7 = $va8cfde6331bd59eb2ac96f8911c4b666->getTypeId();$v45ec2c05914946cd1a61498160b22e7d = umiObjectTypesCollection::getInstance()->getType($v963cecbdfa91757f2c7a4a9e794f3da7)->getHierarchyTypeId();$vc4b174241b773d2a96dfb1503c713026 = umiHierarchyTypesCollection::getInstance()->getType($v45ec2c05914946cd1a61498160b22e7d);if ($vc4b174241b773d2a96dfb1503c713026->getExt() == 'dispatch') {$v6ddfc58f41216767bf09678f7b4b625e = $this->getNewReleaseInstanceId($va8cfde6331bd59eb2ac96f8911c4b666->getId());$v406e3af87d7ac6081e90f7b10dea06a0 = $this->getReleaseMessages($v6ddfc58f41216767bf09678f7b4b625e);$v8d777f385d3dfec8815d20f7496026dc['object']['release'] = array();$v8d777f385d3dfec8815d20f7496026dc['object']['release']['nodes:message'] = $v406e3af87d7ac6081e90f7b10dea06a0;}$this->setData($v8d777f385d3dfec8815d20f7496026dc);return $this->doData();}public function del() {$v5891da2d64975cae48d175d1e001f5da = getRequest('element');if(!is_array($v5891da2d64975cae48d175d1e001f5da)) {$v5891da2d64975cae48d175d1e001f5da = Array($v5891da2d64975cae48d175d1e001f5da);}if(getRequest('param0')) {$v16b2b26000987faccb260b9d39df1269 = getRequest('param0');$va8cfde6331bd59eb2ac96f8911c4b666 = $this->expectObject($v16b2b26000987faccb260b9d39df1269, false, true);$v21ffce5b8a6cc8cc6a41448dd69623c9 = Array(     'object'  => $va8cfde6331bd59eb2ac96f8911c4b666,     'allowed-element-types' => Array('dispatch', "subscriber", "release", "message")    );$this->deleteObject($v21ffce5b8a6cc8cc6a41448dd69623c9);$this->chooseRedirect();}foreach($v5891da2d64975cae48d175d1e001f5da as $v16b2b26000987faccb260b9d39df1269) {$va8cfde6331bd59eb2ac96f8911c4b666 = $this->expectObject($v16b2b26000987faccb260b9d39df1269, false, true);$v21ffce5b8a6cc8cc6a41448dd69623c9 = Array(     'object'  => $va8cfde6331bd59eb2ac96f8911c4b666,     'allowed-element-types' => Array('dispatch', "subscriber", "release", "message")    );$this->deleteObject($v21ffce5b8a6cc8cc6a41448dd69623c9);}$this->setDataType("list");$this->setActionType("view");$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($v5891da2d64975cae48d175d1e001f5da, "objects");$this->setData($v8d777f385d3dfec8815d20f7496026dc);return $this->doData();}public function activity() {$v5891da2d64975cae48d175d1e001f5da = getRequest('object');if(!is_array($v5891da2d64975cae48d175d1e001f5da)) {$v5891da2d64975cae48d175d1e001f5da = Array($v5891da2d64975cae48d175d1e001f5da);}$v4264c638e0098acb172519b0436db099 = (bool) getRequest('active');foreach($v5891da2d64975cae48d175d1e001f5da as $v16b2b26000987faccb260b9d39df1269) {$va8cfde6331bd59eb2ac96f8911c4b666 = $this->expectObject($v16b2b26000987faccb260b9d39df1269, false, true);$va8cfde6331bd59eb2ac96f8911c4b666->setValue("is_active", $v4264c638e0098acb172519b0436db099);$va8cfde6331bd59eb2ac96f8911c4b666->commit();}$this->setDataType("list");$this->setActionType("view");$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($v5891da2d64975cae48d175d1e001f5da, "objects");$this->setData($v8d777f385d3dfec8815d20f7496026dc);return $this->doData();}private function renderDispatch($v48a1815cdd3ea285c80e708c16b439fc) {$vdccc8c8d061984a56d899361b4934477 = "";$v957a440fc90ceb51983c3285530dd8cc =  umiObjectsCollection::getInstance()->getObject($v48a1815cdd3ea285c80e708c16b439fc);$v21ffce5b8a6cc8cc6a41448dd69623c9 = array();if ($v957a440fc90ceb51983c3285530dd8cc instanceof umiObject) {$v21ffce5b8a6cc8cc6a41448dd69623c9['disp_name'] = $v957a440fc90ceb51983c3285530dd8cc->getName();$v21ffce5b8a6cc8cc6a41448dd69623c9['disp_description'] = $v957a440fc90ceb51983c3285530dd8cc->getValue('disp_description');$v1e5251de56218b8a0f79d899991ef284 = " ";$v251afd2e4311536b46be7120720b0934 = $v957a440fc90ceb51983c3285530dd8cc->GetValue('disp_last_release');if ($v251afd2e4311536b46be7120720b0934 instanceof umiDate) {$v1e5251de56218b8a0f79d899991ef284 = $v251afd2e4311536b46be7120720b0934->getFormattedDate("d.m.Y H:i");}$v21ffce5b8a6cc8cc6a41448dd69623c9['disp_last_release'] = $v1e5251de56218b8a0f79d899991ef284;$v21ffce5b8a6cc8cc6a41448dd69623c9['disp_id'] = $v48a1815cdd3ea285c80e708c16b439fc;$v21ffce5b8a6cc8cc6a41448dd69623c9['disp_subscribers'] = "";$vdccc8c8d061984a56d899361b4934477 = $this->parse_form("dispatches_list_row", $v21ffce5b8a6cc8cc6a41448dd69623c9);}return $vdccc8c8d061984a56d899361b4934477;}public function dispatch_del() {$v48a1815cdd3ea285c80e708c16b439fc = $_REQUEST['param0'];umiObjectsCollection::getInstance()->delObject($v48a1815cdd3ea285c80e708c16b439fc);$this->redirect($this->pre_lang . "/admin/dispatches/dispatches_list/");}public function getDatasetConfiguration($veca07335a33c5aeb5e1bc7c98b4b9d80 = '') {switch($veca07335a33c5aeb5e1bc7c98b4b9d80) {case 'lists':      $v89ab96b2cae2569ced36d70f6866f57d = 'lists';$va6b236ea114da1e02b0f9b90ce04b19b  = 'del';$v5f694956811487225d15e973ca38fbab  = umiObjectTypesCollection::getInstance()->getBaseType('dispatches', 'dispatch');$va4a918a45181164207929d52aec36aec = 'disp_description[168px]|disp_last_release[198px]';break;case 'subscribers' :      $v89ab96b2cae2569ced36d70f6866f57d = 'subscribers';$va6b236ea114da1e02b0f9b90ce04b19b  = 'del';$v5f694956811487225d15e973ca38fbab  = umiObjectTypesCollection::getInstance()->getBaseType('dispatches', 'subscriber');$va4a918a45181164207929d52aec36aec = 'subscriber_dispatches[172px]';break;case 'releases' :      $v89ab96b2cae2569ced36d70f6866f57d = 'releases';$va6b236ea114da1e02b0f9b90ce04b19b  = 'form_delete';$v5f694956811487225d15e973ca38fbab  = umiObjectTypesCollection::getInstance()->getBaseType('dispatches', 'release');$va4a918a45181164207929d52aec36aec = 'date[145px]';break;default:      $v89ab96b2cae2569ced36d70f6866f57d = 'messages';$va6b236ea114da1e02b0f9b90ce04b19b  = 'del';$v5f694956811487225d15e973ca38fbab  = umiObjectTypesCollection::getInstance()->getBaseType('dispatches', 'message');$va4a918a45181164207929d52aec36aec = 'msg_date[253px]';}return array(     'methods' => array(      array('title'=>getLabel('smc-load'), 'forload'=>true, 'module'=>'dispatches', '#__name'=>$v89ab96b2cae2569ced36d70f6866f57d),      array('title'=>getLabel('smc-delete'),       'module'=>'dispatches', '#__name'=>'del', 'aliases' => 'tree_delete_element,delete,del'),      array('title'=>getLabel('smc-activity'),    'module'=>'dispatches', '#__name'=>'activity', 'aliases' => 'tree_set_activity,activity'),     ),     'types' => array(      array('common' => 'true', 'id' => $v5f694956811487225d15e973ca38fbab)     ),     'stoplist' => array('disp_reference', 'new_relation', 'release_reference'),     'default' => $va4a918a45181164207929d52aec36aec   );}public function onCreateObject($ve1671797c52e15f763380b45e841ec32) {$va8cfde6331bd59eb2ac96f8911c4b666 = $ve1671797c52e15f763380b45e841ec32->getRef('object');$v726e8e4809d4c1b28a6549d86436a124 = umiObjectTypesCollection::getInstance()->getType($va8cfde6331bd59eb2ac96f8911c4b666->getTypeId());header("Content-type: text/plain");if($v726e8e4809d4c1b28a6549d86436a124->getModule() != "dispatches" || $v726e8e4809d4c1b28a6549d86436a124->getMethod() != "subscriber") {return;}if($ve1671797c52e15f763380b45e841ec32->getMode() == "before") {$v8be74552df93e31bbdd6b36ed74bdb6a = new selector('objects');$v8be74552df93e31bbdd6b36ed74bdb6a->types('object-type')->id($v726e8e4809d4c1b28a6549d86436a124->getId());$v8be74552df93e31bbdd6b36ed74bdb6a->where('name')->equals((string) getRequest('name'));$v8be74552df93e31bbdd6b36ed74bdb6a->limit(1, 1);if($v8be74552df93e31bbdd6b36ed74bdb6a->first) {umiObjectsCollection::getInstance()->delObject($v8be74552df93e31bbdd6b36ed74bdb6a->first->id);$this->errorRegisterFailPage($this->pre_lang . "/admin/dispatches/add/subscriber/");$this->errorNewMessage(getLabel('error-subscriber-exists'), true);}}}};?>
