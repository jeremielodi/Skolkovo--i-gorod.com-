<?php
 interface iUmiMail {public function __construct($v66f6181bcb4cff4cd38fbc804a036db6 = "default");public function __destruct();public function addRecipient($v3c902d39aefa7bdd0ecdc8125687558f, $vcbe68b5b4552d80902d63d0a9c579603 = false);public function setFrom($v1469975c8e7f6b2f32ecfe7c5edbe14a, $v67acb9f4729fd8c96f4bed4a9706d424 = false);public function setContent($va5374bce6e736150046560d951958df7);public function setTxtContent($va9cdadb3209df7e7f81aa1f3b9aaf4f0);public function setSubject($v91d0ec3aa1d816cd02252fce49fe36c8);public function setPriorityLevel($v663867bc4d0e1027f706e5a3ec22be9c = "normal");public function setImportanceLevel($v2df432418ba248b9b13f388bd107ecb2 = "normal");public function getHeaders($vf28cf985778b731802febf0cd05df0c2 = array(), $v57c13771c665e3e754d45cf1f203bdae = false);public function attachFile(umiFile $v8c7dd922ad47494fc02c388e12c00eac);public function commit();public function send();public static function clearFilesCache();public static function checkEmail($v334da1fb3c2b33d4704b6bd30080bfd1);};interface iUmiMimePart {public function __construct($vc32e13633ba3c3faea1235c6bf43328c, $v2dd5b0c609fb5581aa2297e86ebd6f48);public static function quotedPrintableEncode($v1420021a3913b3124c49929ac583bfba , $vd1ce0855e11471cd5649fcb5a2258ea0 = 76);public function addMixedPart();public function addAlternativePart();public function addRelatedPart();public function addTextPart($v15fda7fe509db172563b55549dd9697a);public function addHtmlPart($vbdfc3e7a3c325bf42bd373138608b279);public function addHtmlImagePart($vaf931fce3ed10a376eb1cd947f8efbc0);public function addAttachmentPart($v3d4621d9cc912a5fea4701512419d75a);public function encodePart();};?>