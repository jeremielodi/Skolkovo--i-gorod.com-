<?php
 abstract class __sysevents_forum {public function onDispatchChanges(iUmiEventPoint $v08f45f9db776a9ce1d42a07c69f03946) {$v39f17319be96f2b5889115ba057e5c2a = "default";try {list($v2f016a0cfafc98ac189d9df4d41c26a6, $va8fff2d53a21c548c5e47df213652d1b) = $this->loadTemplates("./tpls/forum/mails/{$v39f17319be96f2b5889115ba057e5c2a}.tpl", "mail_subject", "mail_message");}catch (publicException $ve1671797c52e15f763380b45e841ec32) {return false;}$v6c607ba1bcc107ac5aec8a076a6f9950 = $v08f45f9db776a9ce1d42a07c69f03946->getParam("topic_id");$vf1e054d2ff3c3118c12f9bab2c0ab1a7 = $v08f45f9db776a9ce1d42a07c69f03946->getParam("message_id");$vf88bb1d04d753de8fa60289e410bfe58 = umiObjectTypesCollection::getInstance()->getBaseType("users", "user");$v2fd66a7675a708183a7b973fa45e8aae = umiObjectTypesCollection::getInstance()->getType($vf88bb1d04d753de8fa60289e410bfe58);$v31da844434156cc6d6ee82b9fd2153c1 = $v2fd66a7675a708183a7b973fa45e8aae->getFieldId("subscribed_pages");if($v31da844434156cc6d6ee82b9fd2153c1 == false) {return false;}$v770c309c1aed0fbfabad24a3d5933129 = new umiSelection;$v770c309c1aed0fbfabad24a3d5933129->setObjectTypeFilter();$v770c309c1aed0fbfabad24a3d5933129->addObjectType($vf88bb1d04d753de8fa60289e410bfe58);$v770c309c1aed0fbfabad24a3d5933129->setPropertyFilter();$v770c309c1aed0fbfabad24a3d5933129->addPropertyFilterEqual($v31da844434156cc6d6ee82b9fd2153c1, $v6c607ba1bcc107ac5aec8a076a6f9950);$v242ce12d964f3c99336424f73158a1d4 = umiSelectionsParser::runSelection($v770c309c1aed0fbfabad24a3d5933129);if(sizeof($v242ce12d964f3c99336424f73158a1d4) == 0) {return false;}$vfca1bff8ad8b3a8585abfb0ad523ba42 = Array();$v2f016a0cfafc98ac189d9df4d41c26a6 = $this->parseTemplate($v2f016a0cfafc98ac189d9df4d41c26a6, $vfca1bff8ad8b3a8585abfb0ad523ba42, $vf1e054d2ff3c3118c12f9bab2c0ab1a7);$vbbcc628c10fbf240184e7b6bc87f7a36 = regedit::getInstance()->getVal("//settings/email_from");$v1579e27cf6cc6ee460997dddda104543 = regedit::getInstance()->getVal("//settings/fio_from");$v5e1cc51f1171dfa25c10bc755c1974d8 = new umiMail();$v5e1cc51f1171dfa25c10bc755c1974d8->setFrom($vbbcc628c10fbf240184e7b6bc87f7a36, $v1579e27cf6cc6ee460997dddda104543);$v5e1cc51f1171dfa25c10bc755c1974d8->setSubject($v2f016a0cfafc98ac189d9df4d41c26a6);foreach($v242ce12d964f3c99336424f73158a1d4 as $v7ad6e70c936a7223ff2f1663258f4a0a) {$v9bd9b155de95a332b631bf020b5bed18 = clone $v5e1cc51f1171dfa25c10bc755c1974d8;$v9fe0bb93b257b012f0c9427fb1d48ffd = umiObjectsCollection::getInstance()->getObject($v7ad6e70c936a7223ff2f1663258f4a0a);$v35ec6659876b3c997f58d5b7446d0aac = $v9fe0bb93b257b012f0c9427fb1d48ffd->getValue('e-mail');umiHierarchy::getInstance()->forceAbsolutePath(true);$vfca1bff8ad8b3a8585abfb0ad523ba42['unsubscribe_link'] = umiHierarchy::getInstance()->getPathById($v6c607ba1bcc107ac5aec8a076a6f9950) . "?unsubscribe=" . base64_encode($v7ad6e70c936a7223ff2f1663258f4a0a);$v0c4f5984b06bc99f4e00a8b9b20917c0 = $this->parseTemplate($va8fff2d53a21c548c5e47df213652d1b, $vfca1bff8ad8b3a8585abfb0ad523ba42, $vf1e054d2ff3c3118c12f9bab2c0ab1a7);$v5e1cc51f1171dfa25c10bc755c1974d8->setContent($v0c4f5984b06bc99f4e00a8b9b20917c0);umiHierarchy::getInstance()->forceAbsolutePath(false);if(umiMail::checkEmail($v35ec6659876b3c997f58d5b7446d0aac)) {$vf6b706a466ccddf8b6aefe7db01877b1 = $v9fe0bb93b257b012f0c9427fb1d48ffd->getValue('lname') . " ". $v9fe0bb93b257b012f0c9427fb1d48ffd->getValue('fname') . " " . $v9fe0bb93b257b012f0c9427fb1d48ffd->getValue('father_name');$v9bd9b155de95a332b631bf020b5bed18->addRecipient($v35ec6659876b3c997f58d5b7446d0aac, $vf6b706a466ccddf8b6aefe7db01877b1);$v9bd9b155de95a332b631bf020b5bed18->commit();$v9bd9b155de95a332b631bf020b5bed18->send();}else {continue;}}return true;}public function onAddTopicToDispatch(iUmiEventPoint $v08f45f9db776a9ce1d42a07c69f03946) {$v6198270de3ca609e23bf2d366296b4fd = regedit::getInstance()->getVal("//modules/forum/dispatch_id");if(!$v6198270de3ca609e23bf2d366296b4fd) return false;$vadf5d1a74df1589306cd6dfe81be0d16 = cmsController::getInstance()->getModule('dispatches');if(!$vadf5d1a74df1589306cd6dfe81be0d16) {return false;}$v6c607ba1bcc107ac5aec8a076a6f9950 = (int) $v08f45f9db776a9ce1d42a07c69f03946->getParam('topic_id');$v9209dadc41e828c02b17f29290e773e4 = umiHierarchy::getInstance()->getElement($v6c607ba1bcc107ac5aec8a076a6f9950);if($v9209dadc41e828c02b17f29290e773e4 instanceof umiHierarchyElement) {$vb790175058e05911758cdaedd66fe5d9 = (string) getRequest('title');$v4db516ba913a71d13c8507f0026ebd0e = (string) getRequest('body');$v10c4b55f31b64898e699a5a4f7b48d17 = umiHierarchyTypesCollection::getInstance()->getTypeByName("dispatches", "message")->getId();$v78eeb37a9161c69d9b97bf9b09a50018 =  umiObjectTypesCollection::getInstance()->getTypeByHierarchyTypeId($v10c4b55f31b64898e699a5a4f7b48d17);$v615f76a008a7453051904597fd1612a6 = umiObjectTypesCollection::getInstance()->getType($v78eeb37a9161c69d9b97bf9b09a50018);$v5a28b2421441ac06a23bea9d97780282 = umiObjectsCollection::getInstance()->addObject($vb790175058e05911758cdaedd66fe5d9, $v78eeb37a9161c69d9b97bf9b09a50018);$v598dfd8e6f953e47ae5f63cf8e022c5e = umiObjectsCollection::getInstance()->getObject($v5a28b2421441ac06a23bea9d97780282);if ($v598dfd8e6f953e47ae5f63cf8e022c5e instanceof umiObject) {$v6ddfc58f41216767bf09678f7b4b625e = $vadf5d1a74df1589306cd6dfe81be0d16->getNewReleaseInstanceId($v6198270de3ca609e23bf2d366296b4fd);$v598dfd8e6f953e47ae5f63cf8e022c5e->setValue('release_reference', $v6ddfc58f41216767bf09678f7b4b625e);$v598dfd8e6f953e47ae5f63cf8e022c5e->setValue('header', $vb790175058e05911758cdaedd66fe5d9);$v598dfd8e6f953e47ae5f63cf8e022c5e->setValue('body', $v4db516ba913a71d13c8507f0026ebd0e);$v598dfd8e6f953e47ae5f63cf8e022c5e->commit();return true;}else {return false;}}else {return false;}}};?>