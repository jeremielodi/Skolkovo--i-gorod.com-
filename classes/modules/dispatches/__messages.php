<?php
 abstract class __messages_messages {public function getReleaseMessages($v6ddfc58f41216767bf09678f7b4b625e = false) {$v10c4b55f31b64898e699a5a4f7b48d17 = umiHierarchyTypesCollection::getInstance()->getTypeByName("dispatches", "message")->getId();$v78eeb37a9161c69d9b97bf9b09a50018 =  umiObjectTypesCollection::getInstance()->getTypeByHierarchyTypeId($v10c4b55f31b64898e699a5a4f7b48d17);$v615f76a008a7453051904597fd1612a6 = umiObjectTypesCollection::getInstance()->getType($v78eeb37a9161c69d9b97bf9b09a50018);$v8be74552df93e31bbdd6b36ed74bdb6a = new selector('objects');$v8be74552df93e31bbdd6b36ed74bdb6a->types('object-type')->name('dispatches', 'message');if($v6ddfc58f41216767bf09678f7b4b625e) {$v8be74552df93e31bbdd6b36ed74bdb6a->where('release_reference')->equals($v6ddfc58f41216767bf09678f7b4b625e);}selectorHelper::detectFilters($v8be74552df93e31bbdd6b36ed74bdb6a);return $v8be74552df93e31bbdd6b36ed74bdb6a->result;}public function add_message() {$v599dcce2998a6b40b1e38e8c6006cb0a = "message";$v1a8cfdf75630ae33c282570d9d430fc7 = (int) getRequest("param0");$v15d61712450a686a7f365adf4fef581f = (string) getRequest("param1");$ve62e4d22f2d8630f6e44e2b7c3f70ddc = Array("type" => $v599dcce2998a6b40b1e38e8c6006cb0a);if($v15d61712450a686a7f365adf4fef581f == "do") {$va8cfde6331bd59eb2ac96f8911c4b666 = $this->saveAddedObjectData($ve62e4d22f2d8630f6e44e2b7c3f70ddc);$va8cfde6331bd59eb2ac96f8911c4b666->setValue('release_reference', $this->getNewReleaseInstanceId($v1a8cfdf75630ae33c282570d9d430fc7));$this->chooseRedirect($this->pre_lang . '/admin/dispatches/edit/' . $va8cfde6331bd59eb2ac96f8911c4b666->getId() . "/");}$this->setDataType("form");$this->setActionType("create");$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($ve62e4d22f2d8630f6e44e2b7c3f70ddc, "object");$this->setData($v8d777f385d3dfec8815d20f7496026dc);return $this->doData();}};?>