<?php
 class orderPriceDiscountRule extends discountRule implements orderDiscountRule {public function validateOrder(order $v70a17ffa722a3985b86d30b034ad06d7) {$v25446c4f944226558d332b92e66a5e56 = $v70a17ffa722a3985b86d30b034ad06d7->getOriginalPrice();if($this->minimum && ($v25446c4f944226558d332b92e66a5e56 < $this->minimum)) {return false;}if($this->maximum && ($v25446c4f944226558d332b92e66a5e56 > $this->maximum)) {return false;}return true;}};?>