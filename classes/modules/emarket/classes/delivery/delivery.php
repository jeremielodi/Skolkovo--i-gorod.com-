<?php
 abstract class delivery extends umiObjectProxy {final public static function create(umiObject $v3e86cae856680f7ae31686ad753ce0e4) {$v5891da2d64975cae48d175d1e001f5da = umiObjectsCollection::getInstance();$v16b2b26000987faccb260b9d39df1269 = $v5891da2d64975cae48d175d1e001f5da->addObject('', $v3e86cae856680f7ae31686ad753ce0e4->delivery_type_id);$va8cfde6331bd59eb2ac96f8911c4b666 = $v5891da2d64975cae48d175d1e001f5da->getObject($v16b2b26000987faccb260b9d39df1269);if($va8cfde6331bd59eb2ac96f8911c4b666 instanceof umiObject) {$va8cfde6331bd59eb2ac96f8911c4b666->setValue('delivery_type_id', $v3e86cae856680f7ae31686ad753ce0e4->getId());$va8cfde6331bd59eb2ac96f8911c4b666->commit();return self::get($v16b2b26000987faccb260b9d39df1269);}else {return false;}}final public static function get($v16b2b26000987faccb260b9d39df1269) {if($v16b2b26000987faccb260b9d39df1269 instanceof iUmiObject) {$va8cfde6331bd59eb2ac96f8911c4b666 = $v16b2b26000987faccb260b9d39df1269;}else {$v5891da2d64975cae48d175d1e001f5da = umiObjectsCollection::getInstance();$va8cfde6331bd59eb2ac96f8911c4b666 = $v5891da2d64975cae48d175d1e001f5da->getObject($v16b2b26000987faccb260b9d39df1269);if($va8cfde6331bd59eb2ac96f8911c4b666 instanceof iUmiObject == false) {throw new coreException("Couldn't load order item object #{$v16b2b26000987faccb260b9d39df1269}");}}$v6f65638723a69dfa99474478b83b7b17 = objectProxyHelper::getClassPrefixByType($va8cfde6331bd59eb2ac96f8911c4b666->delivery_type_id);objectProxyHelper::includeClass('emarket/classes/delivery/systems/', $v6f65638723a69dfa99474478b83b7b17);$v6f66e878c62db60568a3487869695820 = $v6f65638723a69dfa99474478b83b7b17 . 'Delivery';return new $v6f66e878c62db60568a3487869695820($va8cfde6331bd59eb2ac96f8911c4b666);}final public static function getList() {$v8be74552df93e31bbdd6b36ed74bdb6a = new selector('objects');$v8be74552df93e31bbdd6b36ed74bdb6a->types('object-type')->name('emarket', 'delivery');return $v8be74552df93e31bbdd6b36ed74bdb6a->result();}abstract public function validate(order $v70a17ffa722a3985b86d30b034ad06d7);abstract public function getDeliveryPrice(order $v70a17ffa722a3985b86d30b034ad06d7);};?>