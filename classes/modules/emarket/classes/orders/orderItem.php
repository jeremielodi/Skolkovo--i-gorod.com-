<?php
 class orderItem extends umiObjectProxy {protected $price, $totalOriginalPrice, $totalActualPrice, $amount, $discount, $itemElement, $isDigital = false;public static function get($v16b2b26000987faccb260b9d39df1269) {$v5891da2d64975cae48d175d1e001f5da = umiObjectsCollection::getInstance();$va8cfde6331bd59eb2ac96f8911c4b666 = $v5891da2d64975cae48d175d1e001f5da->getObject($v16b2b26000987faccb260b9d39df1269);if($va8cfde6331bd59eb2ac96f8911c4b666 instanceof iUmiObject == false) {throw new privateException("Couldn't load order item object #{$v16b2b26000987faccb260b9d39df1269}");}$v6f65638723a69dfa99474478b83b7b17 = "";if($va8cfde6331bd59eb2ac96f8911c4b666->item_type_id) {$v6f65638723a69dfa99474478b83b7b17 = objectProxyHelper::getClassPrefixByType($va8cfde6331bd59eb2ac96f8911c4b666->item_type_id);objectProxyHelper::includeClass('emarket/classes/orders/items/', $v6f65638723a69dfa99474478b83b7b17);}$v6f66e878c62db60568a3487869695820 = $v6f65638723a69dfa99474478b83b7b17 ? ($v6f65638723a69dfa99474478b83b7b17 . 'OrderItem') : 'orderItem';return new $v6f66e878c62db60568a3487869695820($va8cfde6331bd59eb2ac96f8911c4b666);}public static function create($v7552cd149af7495ee7d8225974e50f80, $ve6b2bddc46213b656cf181bcb00f302d = false) {$v0e8133eb006c0f85ed9444ae07a60842 = umiObjectTypesCollection::getInstance();$v5891da2d64975cae48d175d1e001f5da = umiObjectsCollection::getInstance();$vfcaea7edd270964cc145ea48e4367d43 = cmsController::getInstance()->getModule('emarket');$v6301cee35ea764a1e241978f93f01069 = $v0e8133eb006c0f85ed9444ae07a60842->getBaseType('emarket', 'order_item');$vb81ca7c0ccaa77e7aa91936ab0070695 = umiHierarchy::getInstance();$v16b2b26000987faccb260b9d39df1269 = $v5891da2d64975cae48d175d1e001f5da->addObject('', $v6301cee35ea764a1e241978f93f01069);$va8cfde6331bd59eb2ac96f8911c4b666 = $v5891da2d64975cae48d175d1e001f5da->getObject($v16b2b26000987faccb260b9d39df1269);if($va8cfde6331bd59eb2ac96f8911c4b666 instanceof iUmiObject == false) {throw new coreException("Couldn't load order item object #{$v16b2b26000987faccb260b9d39df1269}");}$v8e2dcfd7e7e24b1ca76c1193f645902b = $vb81ca7c0ccaa77e7aa91936ab0070695->getElement($v7552cd149af7495ee7d8225974e50f80);if($v8e2dcfd7e7e24b1ca76c1193f645902b instanceof iUmiHierarchyElement == false) {throw new publicException("Page #{$v7552cd149af7495ee7d8225974e50f80} not found");}$v78a5eb43deef9a7b5b9ce157b9d52ac4 = $vfcaea7edd270964cc145ea48e4367d43->getPrice($v8e2dcfd7e7e24b1ca76c1193f645902b, true);$va8cfde6331bd59eb2ac96f8911c4b666->item_price = $v78a5eb43deef9a7b5b9ce157b9d52ac4;$va8cfde6331bd59eb2ac96f8911c4b666->item_amount = 0;$v42bc560c8ed52f7b0637133e74d40279 = self::getItemTypeId($v8e2dcfd7e7e24b1ca76c1193f645902b->getObjectTypeId());$va8cfde6331bd59eb2ac96f8911c4b666->item_type_id = $v42bc560c8ed52f7b0637133e74d40279;$va8cfde6331bd59eb2ac96f8911c4b666->item_link = $v8e2dcfd7e7e24b1ca76c1193f645902b;$va8cfde6331bd59eb2ac96f8911c4b666->name = $v8e2dcfd7e7e24b1ca76c1193f645902b->name;return self::get($va8cfde6331bd59eb2ac96f8911c4b666->getId());}public function remove() {$v5891da2d64975cae48d175d1e001f5da = umiObjectsCollection::getInstance();if($this->object instanceof umiObject) {$v5891da2d64975cae48d175d1e001f5da->delObject($this->object->getId());}}public function getName() {return $this->object->getName();}public function getAmount() {return $this->amount;}public function setAmount($ve9f40e1f1d1658681dad2dac4ae0971e) {$this->amount = (int) $ve9f40e1f1d1658681dad2dac4ae0971e;}public function getTotalOriginalPrice() {return $this->totalOriginalPrice;}public function getTotalActualPrice() {return $this->totalActualPrice;}public function getItemPrice() {return $this->price;}public function getIsDigital() {return $this->isDigital;}public function getItemElement() {$va978acc8a7ae15f49f58f3495f0d85ba = $this->object->item_link;if(is_array($va978acc8a7ae15f49f58f3495f0d85ba) && sizeof($va978acc8a7ae15f49f58f3495f0d85ba)) {list($v447b7147e84be512208dcc0995d67ebc) = $va978acc8a7ae15f49f58f3495f0d85ba;return $v447b7147e84be512208dcc0995d67ebc;}else $this->delete();return null;}public function getDiscount() {return $this->discount;}public function setDiscount(itemDiscount $ve2dc6c48c56de466f6d13781796abf3d = null) {$this->discount = $ve2dc6c48c56de466f6d13781796abf3d;}public function refresh() {$ve2dc6c48c56de466f6d13781796abf3d = $this->discount;if($ve2dc6c48c56de466f6d13781796abf3d instanceof itemDiscount == false) {if($v8e2dcfd7e7e24b1ca76c1193f645902b = $this->getItemElement()) {$ve2dc6c48c56de466f6d13781796abf3d = itemDiscount::search($v8e2dcfd7e7e24b1ca76c1193f645902b);$this->setDiscount($ve2dc6c48c56de466f6d13781796abf3d);}}$ve17a86842c778a847d43171bd78fefc4 = $this->getItemPrice() * $this->amount;if($ve2dc6c48c56de466f6d13781796abf3d instanceof itemDiscount) {$vcd1250bd0a6989d8fd4abe947325343a = $ve2dc6c48c56de466f6d13781796abf3d->recalcPrice($ve17a86842c778a847d43171bd78fefc4);}else {$vcd1250bd0a6989d8fd4abe947325343a = $ve17a86842c778a847d43171bd78fefc4;}$this->totalOriginalPrice = $ve17a86842c778a847d43171bd78fefc4;$this->totalActualPrice = $vcd1250bd0a6989d8fd4abe947325343a;$this->commit();}public function commit() {$va8cfde6331bd59eb2ac96f8911c4b666 = $this->object;$va8cfde6331bd59eb2ac96f8911c4b666->item_price = $this->price;$va8cfde6331bd59eb2ac96f8911c4b666->item_total_original_price = $this->totalOriginalPrice;$va8cfde6331bd59eb2ac96f8911c4b666->item_total_price = $this->totalActualPrice;$va8cfde6331bd59eb2ac96f8911c4b666->item_amount = $this->amount;$va8cfde6331bd59eb2ac96f8911c4b666->item_discount_id = ($this->discount ? $this->discount->getId() : false);$va8cfde6331bd59eb2ac96f8911c4b666->item_link = $this->itemElement;parent::commit();}protected function __construct(umiObject $va8cfde6331bd59eb2ac96f8911c4b666) {parent::__construct($va8cfde6331bd59eb2ac96f8911c4b666);$ve2dc6c48c56de466f6d13781796abf3d = $this->getDiscount();$this->price = (float) $va8cfde6331bd59eb2ac96f8911c4b666->item_price;$this->totalOriginalPrice = (float) $va8cfde6331bd59eb2ac96f8911c4b666->item_total_original_price;$this->totalActualPrice = (float) $va8cfde6331bd59eb2ac96f8911c4b666->item_total_price;$this->amount = (int) $va8cfde6331bd59eb2ac96f8911c4b666->item_amount;$this->discount = itemDiscount::get($va8cfde6331bd59eb2ac96f8911c4b666->item_discount_id);$this->itemElement = $va8cfde6331bd59eb2ac96f8911c4b666->item_link;}protected function searchDiscount() {$v8e2dcfd7e7e24b1ca76c1193f645902b = $this->getItemElement();if($v8e2dcfd7e7e24b1ca76c1193f645902b instanceof iUmiHierarchyElement) {$ve2dc6c48c56de466f6d13781796abf3d = itemDiscount::search($v8e2dcfd7e7e24b1ca76c1193f645902b);if($ve2dc6c48c56de466f6d13781796abf3d instanceof discount) {return $ve2dc6c48c56de466f6d13781796abf3d;}}return null;}protected function getElementPrice() {$v8e2dcfd7e7e24b1ca76c1193f645902b = $this->object->item_link;if(sizeof($v8e2dcfd7e7e24b1ca76c1193f645902b) && $v8e2dcfd7e7e24b1ca76c1193f645902b[0] instanceof iUmiHierarchyElement) {$vfcaea7edd270964cc145ea48e4367d43 = cmsController::getInstance()->getModule('emarket');return $vfcaea7edd270964cc145ea48e4367d43->getPrice($v8e2dcfd7e7e24b1ca76c1193f645902b[0]);}else return null;}private static function getItemTypeId($v6301cee35ea764a1e241978f93f01069) {if($v851f5ac9941d720844d143ed9cfcf60a = self::getClassPrefix($v6301cee35ea764a1e241978f93f01069))  {$v8be74552df93e31bbdd6b36ed74bdb6a = new selector('objects');$v8be74552df93e31bbdd6b36ed74bdb6a->types('object-type')->name('emarket', 'item_type');$v8be74552df93e31bbdd6b36ed74bdb6a->where('class_name')->equals($v851f5ac9941d720844d143ed9cfcf60a);return $v8be74552df93e31bbdd6b36ed74bdb6a->first ? $v8be74552df93e31bbdd6b36ed74bdb6a->first->id : null;}else return null;}private static function getClassPrefix($v6301cee35ea764a1e241978f93f01069) {static $v0fea6a13c52b4d4725368f24b045ca84 = array();if(isset($v0fea6a13c52b4d4725368f24b045ca84[$v6301cee35ea764a1e241978f93f01069])) return $v0fea6a13c52b4d4725368f24b045ca84[$v6301cee35ea764a1e241978f93f01069];$v726e8e4809d4c1b28a6549d86436a124 = selector::get('object-type')->id($v6301cee35ea764a1e241978f93f01069);$v735e5189fad047c92ac9f292e73ed303 = self::getClassPrefixes();foreach($v735e5189fad047c92ac9f292e73ed303 as $v851f5ac9941d720844d143ed9cfcf60a => $vb71a97a0f96cb8b238309d23a188ae98) {foreach($vb71a97a0f96cb8b238309d23a188ae98 as $v599dcce2998a6b40b1e38e8c6006cb0a => $vf09cc7ee3a9a93273f4b80601cafb00c) {foreach($vf09cc7ee3a9a93273f4b80601cafb00c as $v2063c1608d6e0baf80249c42e2be5804) {if($v599dcce2998a6b40b1e38e8c6006cb0a == 'fields' && $v726e8e4809d4c1b28a6549d86436a124->getFieldId($v2063c1608d6e0baf80249c42e2be5804)) {return $v0fea6a13c52b4d4725368f24b045ca84[$v6301cee35ea764a1e241978f93f01069] = $v851f5ac9941d720844d143ed9cfcf60a;}if($v599dcce2998a6b40b1e38e8c6006cb0a == 'groups' && $v726e8e4809d4c1b28a6549d86436a124->getFieldsGroupByName($v2063c1608d6e0baf80249c42e2be5804)) {return $v0fea6a13c52b4d4725368f24b045ca84[$v6301cee35ea764a1e241978f93f01069] = $v851f5ac9941d720844d143ed9cfcf60a;}}}}return $v0fea6a13c52b4d4725368f24b045ca84[$v6301cee35ea764a1e241978f93f01069] = '';}private static function getClassPrefixes() {static $result = null;if(is_array($result)) {return $result;}$result = array();$vab4d0a658aef644a039b90c2067b45c0 = 'emarket.order-types.';$v2db95e8e1a9267b7a1188556b2013b33 = strlen($vab4d0a658aef644a039b90c2067b45c0);$v2245023265ae4cf87d02c8b6ba991139 = mainConfiguration::getInstance();$v93da65a9fd0004d9477aeac024e08e15 = $v2245023265ae4cf87d02c8b6ba991139->getList('modules');foreach($v93da65a9fd0004d9477aeac024e08e15 as $vef3e30e070f70244fd6578d88a6b77ac) {if(substr($vef3e30e070f70244fd6578d88a6b77ac, 0, $v2db95e8e1a9267b7a1188556b2013b33) != $vab4d0a658aef644a039b90c2067b45c0) continue;$vd9ac5417caf1890dac9ae6969f54635b = split('\.', substr($vef3e30e070f70244fd6578d88a6b77ac, $v2db95e8e1a9267b7a1188556b2013b33));if(sizeof($vd9ac5417caf1890dac9ae6969f54635b) != 2) continue;list($v6f65638723a69dfa99474478b83b7b17, $vb96763b95160cc0943be0de4743a115b) = $vd9ac5417caf1890dac9ae6969f54635b;$v2063c1608d6e0baf80249c42e2be5804 = $v2245023265ae4cf87d02c8b6ba991139->get('modules', $vef3e30e070f70244fd6578d88a6b77ac);$result[$v6f65638723a69dfa99474478b83b7b17][$vb96763b95160cc0943be0de4743a115b] = $v2063c1608d6e0baf80249c42e2be5804;}return $result;}};?>