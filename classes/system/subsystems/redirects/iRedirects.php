<?php
 interface iRedirects {public static function getInstance();public function add($v36cd38f49b9afa08222c0dc9ebfe35eb, $v42aefbae01d2dfd981f7da7d823d689e, $v9acb44549b41563697bb490144ec6258 = 301);public function getRedirectsIdBySource($v36cd38f49b9afa08222c0dc9ebfe35eb);public function getRedirectIdByTarget($v42aefbae01d2dfd981f7da7d823d689e);public function del($vb80bb7740288fda1f201890375a60c8f);public function redirectIfRequired($vf0183130c6c478a364b95e4325786eb9);public function init();};?>