<?php
 abstract class __exchange extends baseModuleAdmin {public function import() {$this->setDataType("list");$this->setActionType("view");$vaa9f73eea60a006820d0f8768bc8a3fc = 20;$ve1ba980ce14a8c0d7e2779f895ab8695 = (int) getRequest('p');$v7a86c157ee9713c34fbd7a1ee40f0c5a = $vaa9f73eea60a006820d0f8768bc8a3fc * $ve1ba980ce14a8c0d7e2779f895ab8695;$v8be74552df93e31bbdd6b36ed74bdb6a = new selector('objects');$v8be74552df93e31bbdd6b36ed74bdb6a->types('object-type')->name('exchange', 'import');$v8be74552df93e31bbdd6b36ed74bdb6a->limit($v7a86c157ee9713c34fbd7a1ee40f0c5a, $vaa9f73eea60a006820d0f8768bc8a3fc);selectorHelper::detectFilters($v8be74552df93e31bbdd6b36ed74bdb6a);$this->setDataRange($vaa9f73eea60a006820d0f8768bc8a3fc, $v7a86c157ee9713c34fbd7a1ee40f0c5a);$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($v8be74552df93e31bbdd6b36ed74bdb6a->result, "objects");$this->setData($v8d777f385d3dfec8815d20f7496026dc, $v8be74552df93e31bbdd6b36ed74bdb6a->length);return $this->doData();}public function export() {$this->setDataType("list");$this->setActionType("view");$vaa9f73eea60a006820d0f8768bc8a3fc = 20;$ve1ba980ce14a8c0d7e2779f895ab8695 = (int) getRequest('p');$v7a86c157ee9713c34fbd7a1ee40f0c5a = $vaa9f73eea60a006820d0f8768bc8a3fc * $ve1ba980ce14a8c0d7e2779f895ab8695;$v8be74552df93e31bbdd6b36ed74bdb6a = new selector('objects');$v8be74552df93e31bbdd6b36ed74bdb6a->types('object-type')->name('exchange', 'export');$v8be74552df93e31bbdd6b36ed74bdb6a->limit($v7a86c157ee9713c34fbd7a1ee40f0c5a, $vaa9f73eea60a006820d0f8768bc8a3fc);selectorHelper::detectFilters($v8be74552df93e31bbdd6b36ed74bdb6a);$this->setDataRange($vaa9f73eea60a006820d0f8768bc8a3fc, $v7a86c157ee9713c34fbd7a1ee40f0c5a);$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($v8be74552df93e31bbdd6b36ed74bdb6a->result, "objects");$this->setData($v8d777f385d3dfec8815d20f7496026dc, $v8be74552df93e31bbdd6b36ed74bdb6a->length);return $this->doData();}public function add() {$v599dcce2998a6b40b1e38e8c6006cb0a = (string) getRequest('param0');$v15d61712450a686a7f365adf4fef581f = (string) getRequest('param1');$this->setHeaderLabel("header-exchange-add-" . $v599dcce2998a6b40b1e38e8c6006cb0a);$ve62e4d22f2d8630f6e44e2b7c3f70ddc = array(    'type'     => $v599dcce2998a6b40b1e38e8c6006cb0a,    'allowed-element-types' => array('import', 'export')   );if($v15d61712450a686a7f365adf4fef581f == "do") {$va8cfde6331bd59eb2ac96f8911c4b666 = $this->saveAddedObjectData($ve62e4d22f2d8630f6e44e2b7c3f70ddc);$this->chooseRedirect($this->pre_lang . '/admin/exchange/edit/' . $va8cfde6331bd59eb2ac96f8911c4b666->getId() . '/');}$this->setDataType("form");$this->setActionType("create");$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($ve62e4d22f2d8630f6e44e2b7c3f70ddc, "object");$this->setData($v8d777f385d3dfec8815d20f7496026dc);return $this->doData();}public function edit() {$va8cfde6331bd59eb2ac96f8911c4b666 = $this->expectObject("param0", true);$v15d61712450a686a7f365adf4fef581f = (string) getRequest('param1');$v16b2b26000987faccb260b9d39df1269 = $va8cfde6331bd59eb2ac96f8911c4b666->getId();$this->setHeaderLabel("header-exchange-edit-" . $this->getObjectTypeMethod($va8cfde6331bd59eb2ac96f8911c4b666));$ve62e4d22f2d8630f6e44e2b7c3f70ddc = Array("object" => $va8cfde6331bd59eb2ac96f8911c4b666,    "allowed-element-types" => Array('import', 'export')   );if($v15d61712450a686a7f365adf4fef581f == "do") {$va8cfde6331bd59eb2ac96f8911c4b666 = $this->saveEditedObjectData($ve62e4d22f2d8630f6e44e2b7c3f70ddc);$v16b2b26000987faccb260b9d39df1269 = $va8cfde6331bd59eb2ac96f8911c4b666->getId();$this->chooseRedirect();}$this->setDataType("form");$this->setActionType("modify");$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($ve62e4d22f2d8630f6e44e2b7c3f70ddc, "object");$this->setData($v8d777f385d3dfec8815d20f7496026dc);return $this->doData();}public function del() {$v5891da2d64975cae48d175d1e001f5da = getRequest('element');if(!is_array($v5891da2d64975cae48d175d1e001f5da)) {$v5891da2d64975cae48d175d1e001f5da = Array($v5891da2d64975cae48d175d1e001f5da);}foreach($v5891da2d64975cae48d175d1e001f5da as $v16b2b26000987faccb260b9d39df1269) {$va8cfde6331bd59eb2ac96f8911c4b666 = $this->expectObject($v16b2b26000987faccb260b9d39df1269, false, true);$v21ffce5b8a6cc8cc6a41448dd69623c9 = Array(     'object'  => $va8cfde6331bd59eb2ac96f8911c4b666,     'allowed-element-types' => Array('import', 'export')    );$this->deleteObject($v21ffce5b8a6cc8cc6a41448dd69623c9);}$this->setDataType("list");$this->setActionType("view");$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($v5891da2d64975cae48d175d1e001f5da, "objects");$this->setData($v8d777f385d3dfec8815d20f7496026dc);return $this->doData();}public function getDatasetConfiguration($veca07335a33c5aeb5e1bc7c98b4b9d80 = '') {switch($veca07335a33c5aeb5e1bc7c98b4b9d80) {case 'export' :      $v89ab96b2cae2569ced36d70f6866f57d = 'export';$va6b236ea114da1e02b0f9b90ce04b19b  = 'del';$v5f694956811487225d15e973ca38fbab  = umiObjectTypesCollection::getInstance()->getBaseType('exchange', 'export');$va4a918a45181164207929d52aec36aec = 'format[200px]';break;default:      $v89ab96b2cae2569ced36d70f6866f57d = 'import';$va6b236ea114da1e02b0f9b90ce04b19b  = 'del';$v5f694956811487225d15e973ca38fbab  = umiObjectTypesCollection::getInstance()->getBaseType('exchange', 'import');$va4a918a45181164207929d52aec36aec = 'format[200px]';break;}return array(     'methods' => array(      array('title'=>getLabel('smc-load'), 'forload'=>true, 'module'=>'exchange', '#__name'=>$v89ab96b2cae2569ced36d70f6866f57d),      array('title'=>getLabel('smc-delete'),       'module'=>'exchange', '#__name'=>'del', 'aliases' => 'tree_delete_element,delete,del')     ),     'types' => array(      array('common' => 'true', 'id' => $v5f694956811487225d15e973ca38fbab)     ),     'stoplist' => array(''),     'default' => $va4a918a45181164207929d52aec36aec   );}}?>