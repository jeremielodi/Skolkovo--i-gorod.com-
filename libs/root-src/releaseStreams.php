<?php
 define("STAT_DISABLE", true);define("VIA_HTTP_SCHEME", true);require CURRENT_WORKING_DIR . "/libs/root-src/standalone.php";$v7f2db423a49b305459147332fb01cf87 = outputBuffer::current('HTTPOutputBuffer');$v7f2db423a49b305459147332fb01cf87->charset('utf-8');$vf89d031dd797ede6d0dd3e82f382813f = array('ulang', 'utype');$v41323917ef8089432959a3c33269debf = (string) getRequest('scheme');$vd6fe1d0be6347b8ef2427fa629c04485 = (string) getRequest('path');$v2245023265ae4cf87d02c8b6ba991139 = mainConfiguration::getInstance();$permissions = permissionsCollection::getInstance();$v5891da2d64975cae48d175d1e001f5da = umiObjectsCollection::getInstance();$v7f2db423a49b305459147332fb01cf87->contentType('text/xml');if(!isAllowedScheme($v41323917ef8089432959a3c33269debf)) streamHTTPError('unkown-scheme', $v41323917ef8089432959a3c33269debf);if($vb23e6236e6e587d9078c094102782ecc = getServer('REQUEST_URI')) {preg_match("/\/(" . implode("|", $v2245023265ae4cf87d02c8b6ba991139->get('streams', 'enable')) . "):?\/{0,2}(.*)?/i", $vb23e6236e6e587d9078c094102782ecc, $vc68271a63ddbc431c307beb7d2918275);$vd6fe1d0be6347b8ef2427fa629c04485 = $vc68271a63ddbc431c307beb7d2918275[2];$_SERVER['REQUEST_URI'] = '/' . $v41323917ef8089432959a3c33269debf . '/' . $vd6fe1d0be6347b8ef2427fa629c04485;}$v37a5809f9a759faa7a2db401d89ce84e = strpos($vd6fe1d0be6347b8ef2427fa629c04485, '.json') !== false;$v7f2db423a49b305459147332fb01cf87->contentType($v37a5809f9a759faa7a2db401d89ce84e ? 'text/javascript' : 'text/xml');if(!$v2245023265ae4cf87d02c8b6ba991139->get('streams', $v41323917ef8089432959a3c33269debf . '.http.allow') && !in_array($v41323917ef8089432959a3c33269debf, $vf89d031dd797ede6d0dd3e82f382813f)) {streamHTTPError('http-disabled', $v41323917ef8089432959a3c33269debf);}if(!in_array($v41323917ef8089432959a3c33269debf, $vf89d031dd797ede6d0dd3e82f382813f)) {$v1f2336095bf38856942bbbe249659031 = $v2245023265ae4cf87d02c8b6ba991139->get('streams', $v41323917ef8089432959a3c33269debf . '.http.permissions');if($v1f2336095bf38856942bbbe249659031 && $v1f2336095bf38856942bbbe249659031 != 'all') {$v8e44f0089b076e18a718eb9ca3d94674 = $permissions->getUserId();$vee11cbb19052e40b07aac0ca060c23ee = $v5891da2d64975cae48d175d1e001f5da->getObject($v8e44f0089b076e18a718eb9ca3d94674);$v1471e4e05a4db95d353cc867fe317314 = $vee11cbb19052e40b07aac0ca060c23ee->groups;$vca02d1555c813b1b1ad637654c0fe111 = $permissions->isSv($v8e44f0089b076e18a718eb9ca3d94674);switch($v1f2336095bf38856942bbbe249659031) {case 'sv': break;case 'admin':     $vca02d1555c813b1b1ad637654c0fe111 = $permissions->isAdmin() || $vca02d1555c813b1b1ad637654c0fe111;break;case 'auth':     $vca02d1555c813b1b1ad637654c0fe111 = $permissions->isAuth() || $vca02d1555c813b1b1ad637654c0fe111;break;default: {$vbf516925bb37a8544c8ee19a24e15c05 = split(",", $v1f2336095bf38856942bbbe249659031);foreach($vbf516925bb37a8544c8ee19a24e15c05 as $vb80bb7740288fda1f201890375a60c8f) {$vb80bb7740288fda1f201890375a60c8f = trim($vb80bb7740288fda1f201890375a60c8f);if(is_numeric($vb80bb7740288fda1f201890375a60c8f) && ($vb80bb7740288fda1f201890375a60c8f == $v8e44f0089b076e18a718eb9ca3d94674) || (is_array($v1471e4e05a4db95d353cc867fe317314) && in_array($vb80bb7740288fda1f201890375a60c8f, $v1471e4e05a4db95d353cc867fe317314))) {$vca02d1555c813b1b1ad637654c0fe111 = true;break;}}}}if(!$vca02d1555c813b1b1ad637654c0fe111) streamHTTPError('http-not-allowed', $v41323917ef8089432959a3c33269debf);}}if($v41323917ef8089432959a3c33269debf == 'ulang') {$v7f2db423a49b305459147332fb01cf87->contentType('text/plain');if(strpos(getServer('HTTP_USER_AGENT'), "MSIE") !== false) {$v7f2db423a49b305459147332fb01cf87->option('compression', false);}}else {xslTemplater::getInstance()->init();}if($result = file_get_contents($v41323917ef8089432959a3c33269debf . "://" . $vd6fe1d0be6347b8ef2427fa629c04485)) {$v7f2db423a49b305459147332fb01cf87->push($result);$v7f2db423a49b305459147332fb01cf87->end();}else {streamHTTPError();}function isAllowedScheme($v41323917ef8089432959a3c33269debf) {static $vc3268be37cf338b439db5ca3c383b0bb = null;if(is_null($vc3268be37cf338b439db5ca3c383b0bb)) {$vc3268be37cf338b439db5ca3c383b0bb = mainConfiguration::getInstance()->get('streams', 'enable');}return in_array($v41323917ef8089432959a3c33269debf, $vc3268be37cf338b439db5ca3c383b0bb);}function streamHTTPError($v0279985cdca9ad2836b5dc949af215c8 = false, $v41323917ef8089432959a3c33269debf = false) {$v7f2db423a49b305459147332fb01cf87 = outputBuffer::current();switch($v0279985cdca9ad2836b5dc949af215c8) {case 'unkown-scheme': {$v2fd84b5465dfec4624d9e8c86a313776 = <<<XML
<error><![CDATA[Unknown scheme "{$v41323917ef8089432959a3c33269debf}"]]></error>
XML;    break;}case 'http-disabled': {$v2fd84b5465dfec4624d9e8c86a313776 = <<<XML
<udata generation-time="0.0"><error><![CDATA[Protocol "{$v41323917ef8089432959a3c33269debf}://" is not allowed on this site]]></error></udata>
XML;    break;}case 'http-not-allowed': {$v2fd84b5465dfec4624d9e8c86a313776 = <<<XML
<udata generation-time="0.0"><error><![CDATA[You don't have permissions to call protocol "{$v41323917ef8089432959a3c33269debf}://" via HTTP]]></error></udata>
XML;    break;}default: {$v2fd84b5465dfec4624d9e8c86a313776 = <<<XML
<udata generation-time="0.0"><error><![CDATA[Requested resource not found]]></error></udata>
XML;   }}$v7f2db423a49b305459147332fb01cf87->push($v2fd84b5465dfec4624d9e8c86a313776);$v7f2db423a49b305459147332fb01cf87->end();}?>