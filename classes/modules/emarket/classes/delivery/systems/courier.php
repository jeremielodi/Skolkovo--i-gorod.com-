<?php
 class courierDelivery extends delivery {public function validate(order $v70a17ffa722a3985b86d30b034ad06d7) {return true;}public function getDeliveryPrice(order $v70a17ffa722a3985b86d30b034ad06d7) {$v6bcea55d951e611b908a7f464d99c0f9 = $this->object->price;$v459c84753d2c80467134363b9797d40b = $this->object->order_min_price;$v25446c4f944226558d332b92e66a5e56 = $v70a17ffa722a3985b86d30b034ad06d7->getActualPrice();return ($v25446c4f944226558d332b92e66a5e56 < $v459c84753d2c80467134363b9797d40b) ? $v6bcea55d951e611b908a7f464d99c0f9 : 0;}};?>