<?php
 class discountRestriction extends baseRestriction implements iNormalizeInRestriction {protected $errorMessage = 'restriction-error-discount-size';public function validate($v2063c1608d6e0baf80249c42e2be5804) {return ($v2063c1608d6e0baf80249c42e2be5804 >= 0) && ($v2063c1608d6e0baf80249c42e2be5804 <= 100);}public function normalizeIn($v2063c1608d6e0baf80249c42e2be5804) {$v2063c1608d6e0baf80249c42e2be5804 = (double) $v2063c1608d6e0baf80249c42e2be5804;if($v2063c1608d6e0baf80249c42e2be5804 > 100) $v2063c1608d6e0baf80249c42e2be5804 = 100;if($v2063c1608d6e0baf80249c42e2be5804 < 0) $v2063c1608d6e0baf80249c42e2be5804 = 0;return $v2063c1608d6e0baf80249c42e2be5804;}};?>