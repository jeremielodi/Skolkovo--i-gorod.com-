<?php
 abstract class __emarket_discounts {public function getAllDiscounts($vadceddddb69e6187bceace83aa4ab0f6 = false) {$v8be74552df93e31bbdd6b36ed74bdb6a = new selector('objects');$v8be74552df93e31bbdd6b36ed74bdb6a->types('object-type')->name('emarket', 'discount');$v8be74552df93e31bbdd6b36ed74bdb6a->where('is_active')->equals(true);if($vadceddddb69e6187bceace83aa4ab0f6) {$v8be74552df93e31bbdd6b36ed74bdb6a->where('discount_type_id')->equals($this->getDiscountTypeId($vadceddddb69e6187bceace83aa4ab0f6));}return $v8be74552df93e31bbdd6b36ed74bdb6a->result();}public function getDiscountTypeId($vadceddddb69e6187bceace83aa4ab0f6) {$v8be74552df93e31bbdd6b36ed74bdb6a = new selector('objects');$v8be74552df93e31bbdd6b36ed74bdb6a->types('object-type')->name('emarket', 'discount_type');$v8be74552df93e31bbdd6b36ed74bdb6a->where('codename')->equals($vadceddddb69e6187bceace83aa4ab0f6);$result = $v8be74552df93e31bbdd6b36ed74bdb6a->result();if(sizeof($result)) {list($vf8da6d91fed399a87569e1cf3ccb4a23) = $result;return $vf8da6d91fed399a87569e1cf3ccb4a23->id;}else return false;}public function discountInfo($ve1f1eeb708e15555efc136c5aee1f9bb, $v66f6181bcb4cff4cd38fbc804a036db6 = 'default') {if(!$v66f6181bcb4cff4cd38fbc804a036db6) $v66f6181bcb4cff4cd38fbc804a036db6 = 'default';list($v31912934b8f34be4364cc043cd8a0176, $vd268fd226c122b3da2fabee66e798225) = def_module::loadTemplates("./tpls/emarket/discounts/{$v66f6181bcb4cff4cd38fbc804a036db6}.tpl",     'discount_block', 'discount_block_empty');try {$ve2dc6c48c56de466f6d13781796abf3d = itemDiscount::get($ve1f1eeb708e15555efc136c5aee1f9bb);}catch (privateException $ve1671797c52e15f763380b45e841ec32) {$ve2dc6c48c56de466f6d13781796abf3d = null;}if($ve2dc6c48c56de466f6d13781796abf3d instanceof discount) {$vcaf9b6b99962bf5c2264824231d7a40c = array(     'attribute:id'  => $ve2dc6c48c56de466f6d13781796abf3d->id,     'attribute:name' => $ve2dc6c48c56de466f6d13781796abf3d->getName(),     'description'  => $ve2dc6c48c56de466f6d13781796abf3d->getValue('description')    );return def_module::parseTemplate($v31912934b8f34be4364cc043cd8a0176, $vcaf9b6b99962bf5c2264824231d7a40c, false, $ve2dc6c48c56de466f6d13781796abf3d->id);}else {return def_module::parseTemplate($vd268fd226c122b3da2fabee66e798225, array());}}};?>