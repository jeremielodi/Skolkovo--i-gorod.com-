<?php
class ranges {public function __construct() {$this->days = Array(   'понедельник'    => 0,   'вторник'    => 1,   'среда'        => 2,   'четверг'    => 3,   'пятница'    => 4,   'суббота'    => 5,   'восскресенье'    => 6,   'пн'        => 0,   'пон'        => 0,   'вт'        => 1,   'ср'        => 2,   'срд'        => 2,   'чт'        => 3,   'чет'        => 3,   'пт'        => 4,   'птн'        => 4,   'сб'        => 5,   'вс'        => 6);$this->months = Array(   'январь'    => 0,   'февраль'    => 1,   'март'        => 2,   'апрель'    => 3,   'май'        => 4,   'июнь'        => 5,   'июль'        => 6,   'август'    => 7,   'сентябрь'    => 8,   'октябрь'    => 9,   'ноябрь'    => 10,   'декабрь'    => 11,   'янв'    => 0,   'ян'    => 0,   'фев'    => 1,   'фв'    => 1,   'мар'    => 2,   'апр'    => 3,   'ап'    => 3,   'май'    => 4,   'июнь'        => 5,   'ин'        => 5,   'июль'        => 6,   'ил'        => 6,   'август'    => 7,   'авг'    => 7,   'сент'    => 8,   'сен'    => 8,   'окт'    => 9,   'ок'    => 9,   'нбр'    => 10,   'дек'    => 11);}public function get($v341be97d9aff90c9978347f66f945b77 = "", $v15d61712450a686a7f365adf4fef581f = 0) {$v341be97d9aff90c9978347f66f945b77 = $this->prepareStr($v341be97d9aff90c9978347f66f945b77, $v15d61712450a686a7f365adf4fef581f);return $this->str2range($v341be97d9aff90c9978347f66f945b77);}private function prepareStr($v341be97d9aff90c9978347f66f945b77 = "", $v15d61712450a686a7f365adf4fef581f = 0) {switch($v15d61712450a686a7f365adf4fef581f) {case 0: {return str_replace(array_keys($this->days), array_values($this->days), $v341be97d9aff90c9978347f66f945b77);break;}case 1: {return str_replace(array_keys($this->months), array_values($this->months), $v341be97d9aff90c9978347f66f945b77);break;}}}private function str2range($v03c7c0ace395d80182db07ae2c30f034) {$v03c7c0ace395d80182db07ae2c30f034 = preg_replace("/ +/", " ", $v03c7c0ace395d80182db07ae2c30f034);$v03c7c0ace395d80182db07ae2c30f034 = preg_replace("/ - /", "-", $v03c7c0ace395d80182db07ae2c30f034);$v03c7c0ace395d80182db07ae2c30f034 = preg_replace("/! /", "!", $v03c7c0ace395d80182db07ae2c30f034);if(preg_match_all("/(?!!)(\d+)(?!\-)/", $v03c7c0ace395d80182db07ae2c30f034, $vcc92747bf6da4d917e6e0b0356cd5133)) {$vcc92747bf6da4d917e6e0b0356cd5133 = $vcc92747bf6da4d917e6e0b0356cd5133[1];}if(preg_match_all("/!(\d+)(?!\-)/", $v03c7c0ace395d80182db07ae2c30f034, $v2c8e6355b8c15bc4c2707142268a1d8a)) {$v2c8e6355b8c15bc4c2707142268a1d8a = $v2c8e6355b8c15bc4c2707142268a1d8a[1];}if(preg_match_all("/(?!!)(\d+\-\d+)/", $v03c7c0ace395d80182db07ae2c30f034, $v37b19816109a32106d109e83bbb3c97d)) {$v37b19816109a32106d109e83bbb3c97d = $v37b19816109a32106d109e83bbb3c97d[0];}if(preg_match_all("/!(\d+\-\d+)/", $v03c7c0ace395d80182db07ae2c30f034, $v42ea0dce5802c9119056fe8b8f8a39ea)) {$v42ea0dce5802c9119056fe8b8f8a39ea = $v42ea0dce5802c9119056fe8b8f8a39ea[1];}$v9b207167e5381c47682c6b4f58a623fb = Array();$v7dabf5c198b0bab2eaa42bb03a113e55 = sizeof($v42ea0dce5802c9119056fe8b8f8a39ea);for($v865c0c0b4ab0e063e5caa3387c1a8741 = 0;$v865c0c0b4ab0e063e5caa3387c1a8741  < $v7dabf5c198b0bab2eaa42bb03a113e55;$v865c0c0b4ab0e063e5caa3387c1a8741++) {if(is_array($v42ea0dce5802c9119056fe8b8f8a39ea[$v865c0c0b4ab0e063e5caa3387c1a8741])) continue;list($vd98a07f84921b24ee30f86fd8cd85c3c, $v01b6e20344b68835c5ed1ddedf20d531) = split("-", $v42ea0dce5802c9119056fe8b8f8a39ea[$v865c0c0b4ab0e063e5caa3387c1a8741]);if($vd98a07f84921b24ee30f86fd8cd85c3c <= $v01b6e20344b68835c5ed1ddedf20d531) {for($v7b8b965ad4bca0e41ab51de7b31363a1 = $vd98a07f84921b24ee30f86fd8cd85c3c;$v7b8b965ad4bca0e41ab51de7b31363a1 <= $v01b6e20344b68835c5ed1ddedf20d531;$v7b8b965ad4bca0e41ab51de7b31363a1++) {$v2c8e6355b8c15bc4c2707142268a1d8a[] = $v7b8b965ad4bca0e41ab51de7b31363a1;}}else {for($v7b8b965ad4bca0e41ab51de7b31363a1 = $vd98a07f84921b24ee30f86fd8cd85c3c;$v7b8b965ad4bca0e41ab51de7b31363a1 <= 31;$v7b8b965ad4bca0e41ab51de7b31363a1++) {$v2c8e6355b8c15bc4c2707142268a1d8a[] = $v7b8b965ad4bca0e41ab51de7b31363a1;}for($v7b8b965ad4bca0e41ab51de7b31363a1 = 1;$v7b8b965ad4bca0e41ab51de7b31363a1 <= $v01b6e20344b68835c5ed1ddedf20d531;$v7b8b965ad4bca0e41ab51de7b31363a1++) {$v2c8e6355b8c15bc4c2707142268a1d8a[] = $v7b8b965ad4bca0e41ab51de7b31363a1;}}}$v7dabf5c198b0bab2eaa42bb03a113e55 = sizeof($v37b19816109a32106d109e83bbb3c97d);for($v865c0c0b4ab0e063e5caa3387c1a8741 = 0;$v865c0c0b4ab0e063e5caa3387c1a8741 < $v7dabf5c198b0bab2eaa42bb03a113e55;$v865c0c0b4ab0e063e5caa3387c1a8741++) {if(is_array($v37b19816109a32106d109e83bbb3c97d[$v865c0c0b4ab0e063e5caa3387c1a8741])) continue;list($vd98a07f84921b24ee30f86fd8cd85c3c, $v01b6e20344b68835c5ed1ddedf20d531) = split("-", $v37b19816109a32106d109e83bbb3c97d[$v865c0c0b4ab0e063e5caa3387c1a8741]);if($vd98a07f84921b24ee30f86fd8cd85c3c <= $v01b6e20344b68835c5ed1ddedf20d531) {for($v7b8b965ad4bca0e41ab51de7b31363a1 = $vd98a07f84921b24ee30f86fd8cd85c3c;$v7b8b965ad4bca0e41ab51de7b31363a1 <= $v01b6e20344b68835c5ed1ddedf20d531;$v7b8b965ad4bca0e41ab51de7b31363a1++) {if(!in_array((int) $v7b8b965ad4bca0e41ab51de7b31363a1, $v2c8e6355b8c15bc4c2707142268a1d8a))      $v9b207167e5381c47682c6b4f58a623fb[] = (int) $v7b8b965ad4bca0e41ab51de7b31363a1;}}else {for($v7b8b965ad4bca0e41ab51de7b31363a1 = $vd98a07f84921b24ee30f86fd8cd85c3c;$v7b8b965ad4bca0e41ab51de7b31363a1 <= 31;$v7b8b965ad4bca0e41ab51de7b31363a1++) {if(!in_array((int) $v7b8b965ad4bca0e41ab51de7b31363a1, $v2c8e6355b8c15bc4c2707142268a1d8a))      $v9b207167e5381c47682c6b4f58a623fb[] = (int) $v7b8b965ad4bca0e41ab51de7b31363a1;}for($v7b8b965ad4bca0e41ab51de7b31363a1 = 1;$v7b8b965ad4bca0e41ab51de7b31363a1 <= $v01b6e20344b68835c5ed1ddedf20d531;$v7b8b965ad4bca0e41ab51de7b31363a1++) {if(!in_array((int) $v7b8b965ad4bca0e41ab51de7b31363a1, $v2c8e6355b8c15bc4c2707142268a1d8a))      $v9b207167e5381c47682c6b4f58a623fb[] = (int) $v7b8b965ad4bca0e41ab51de7b31363a1;}}}$v7dabf5c198b0bab2eaa42bb03a113e55 = sizeof($vcc92747bf6da4d917e6e0b0356cd5133);for($v865c0c0b4ab0e063e5caa3387c1a8741 = 0;$v865c0c0b4ab0e063e5caa3387c1a8741 < $v7dabf5c198b0bab2eaa42bb03a113e55;$v865c0c0b4ab0e063e5caa3387c1a8741++) {if(!in_array((int) $vcc92747bf6da4d917e6e0b0356cd5133[$v865c0c0b4ab0e063e5caa3387c1a8741], $v2c8e6355b8c15bc4c2707142268a1d8a) && !in_array((int) $vcc92747bf6da4d917e6e0b0356cd5133[$v865c0c0b4ab0e063e5caa3387c1a8741], $v9b207167e5381c47682c6b4f58a623fb) && !empty($vcc92747bf6da4d917e6e0b0356cd5133[$v865c0c0b4ab0e063e5caa3387c1a8741]))    $v9b207167e5381c47682c6b4f58a623fb[] = (int) $vcc92747bf6da4d917e6e0b0356cd5133[$v865c0c0b4ab0e063e5caa3387c1a8741];}return $v9b207167e5381c47682c6b4f58a623fb;}}?>