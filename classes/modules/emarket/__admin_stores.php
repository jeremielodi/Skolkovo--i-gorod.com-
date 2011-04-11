<?php
 abstract class __emarket_admin_stores extends baseModuleAdmin {public function stores() {$this->setDataType("list");$this->setActionType("view");if($this->ifNotXmlMode()) return $this->doData();$vaa9f73eea60a006820d0f8768bc8a3fc = 50;$ve1ba980ce14a8c0d7e2779f895ab8695 = (int) getRequest('p');$v7a86c157ee9713c34fbd7a1ee40f0c5a = $ve1ba980ce14a8c0d7e2779f895ab8695 * $vaa9f73eea60a006820d0f8768bc8a3fc;$v8be74552df93e31bbdd6b36ed74bdb6a = new selector('objects');$v8be74552df93e31bbdd6b36ed74bdb6a->types('object-type')->name('emarket', 'store');$v8be74552df93e31bbdd6b36ed74bdb6a->limit($v7a86c157ee9713c34fbd7a1ee40f0c5a, $vaa9f73eea60a006820d0f8768bc8a3fc);selectorHelper::detectFilters($v8be74552df93e31bbdd6b36ed74bdb6a);$this->setDataRange($vaa9f73eea60a006820d0f8768bc8a3fc, $v7a86c157ee9713c34fbd7a1ee40f0c5a);$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($v8be74552df93e31bbdd6b36ed74bdb6a->result, "objects");$this->setData($v8d777f385d3dfec8815d20f7496026dc, $v8be74552df93e31bbdd6b36ed74bdb6a->length);return $this->doData();}public function store_add() {$v15d61712450a686a7f365adf4fef581f = (string) getRequest('param0');$ve62e4d22f2d8630f6e44e2b7c3f70ddc = array(    'type' => 'store',    'allowed-element-types' => array('store')   );if($v15d61712450a686a7f365adf4fef581f == "do") {$this->saveAddedObjectData($ve62e4d22f2d8630f6e44e2b7c3f70ddc);$this->chooseRedirect();}$this->setDataType("form");$this->setActionType("create");$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($ve62e4d22f2d8630f6e44e2b7c3f70ddc, "object");$this->setData($v8d777f385d3dfec8815d20f7496026dc);return $this->doData();}public function store_edit() {$va8cfde6331bd59eb2ac96f8911c4b666 = $this->expectObject('param0');$v15d61712450a686a7f365adf4fef581f = (string) getRequest('param1');$ve62e4d22f2d8630f6e44e2b7c3f70ddc = array(    'object' => $va8cfde6331bd59eb2ac96f8911c4b666,    'allowed-element-types' => array('store')   );if($v15d61712450a686a7f365adf4fef581f == "do") {$this->saveEditedObjectData($ve62e4d22f2d8630f6e44e2b7c3f70ddc);$this->chooseRedirect();}$this->setDataType("form");$this->setActionType("modify");$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($ve62e4d22f2d8630f6e44e2b7c3f70ddc, "object");$this->setData($v8d777f385d3dfec8815d20f7496026dc);return $this->doData();}public function onOrderPropChange(iUmiEventPoint $ve1671797c52e15f763380b45e841ec32) {if($ve1671797c52e15f763380b45e841ec32->getMode() != 'after') return;$v46b9e6004c49d9cc040029c197cab278 = $ve1671797c52e15f763380b45e841ec32->getParam('property');$vf5e638cc78dd325906c1298a0c21fb6b = $ve1671797c52e15f763380b45e841ec32->getRef('entity');if($vf5e638cc78dd325906c1298a0c21fb6b instanceof iUmiObject && $v46b9e6004c49d9cc040029c197cab278 == 'status_id') {$v599dcce2998a6b40b1e38e8c6006cb0a = selector::get('object-type')->id($vf5e638cc78dd325906c1298a0c21fb6b->getTypeId());if($v599dcce2998a6b40b1e38e8c6006cb0a && $v599dcce2998a6b40b1e38e8c6006cb0a->getMethod() == 'order') {$v9acb44549b41563697bb490144ec6258 = selector::get('object')->id($ve1671797c52e15f763380b45e841ec32->getParam('newValue'));if(($v9acb44549b41563697bb490144ec6258 instanceof iUmiObject) && $v9acb44549b41563697bb490144ec6258->codename) {$v70a17ffa722a3985b86d30b034ad06d7 = order::get($vf5e638cc78dd325906c1298a0c21fb6b->id);switch($v9acb44549b41563697bb490144ec6258->codename) {case 'waiting': {$v70a17ffa722a3985b86d30b034ad06d7->reserve();break;}case 'canceled': {$v70a17ffa722a3985b86d30b034ad06d7->unreserve();break;}case 'ready': {$v70a17ffa722a3985b86d30b034ad06d7->writeOff();break;}}$v70a17ffa722a3985b86d30b034ad06d7->commit();}}}}public function onOrderDelete(iUmiEventPoint $ve1671797c52e15f763380b45e841ec32) {if($ve1671797c52e15f763380b45e841ec32->getMode() != 'before') return;$va8cfde6331bd59eb2ac96f8911c4b666 = $ve1671797c52e15f763380b45e841ec32->getRef('object');if($va8cfde6331bd59eb2ac96f8911c4b666 instanceof iUmiObject) {$v599dcce2998a6b40b1e38e8c6006cb0a = selector::get('object-type')->id($va8cfde6331bd59eb2ac96f8911c4b666->getTypeId());if($v599dcce2998a6b40b1e38e8c6006cb0a && $v599dcce2998a6b40b1e38e8c6006cb0a->getMethod() == 'order') {$v70a17ffa722a3985b86d30b034ad06d7 = order::get($va8cfde6331bd59eb2ac96f8911c4b666->id);$v70a17ffa722a3985b86d30b034ad06d7->unreserve();$v70a17ffa722a3985b86d30b034ad06d7->commit();}}}}?>