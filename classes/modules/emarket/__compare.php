<?php
 abstract class __emarket_compare {public function compare($v66f6181bcb4cff4cd38fbc804a036db6 = "default", $v5987a208797b7768e7eb388f58b3bd27 = '') {if($this->breakMe()) return;if(!$v66f6181bcb4cff4cd38fbc804a036db6) $v66f6181bcb4cff4cd38fbc804a036db6 = "default";list(    $v364f9b183bd2dd9e0beb45c754830a6c, $v28d65bb7a643774ada22f54ca0679289, $v42efb8fb1fbdce5f9019ce18a41c4bf2, $v7f346848ba10316c15355cee5670da55,     $ve6a2fd7211958cfe50efa4d14bd332f5, $ve8aad1bbba0265511b0e0e24052f245e, $v69f5bc47bd43873b8375db0101e55306, $v8f49a0d912887ba42278a8161a8cd034   ) = $this->loadTemplates(    "./tpls/emarket/compare/{$v66f6181bcb4cff4cd38fbc804a036db6}.tpl", "compare_block", "compare_block_empty", "compare_block_header",     "compare_block_header_item", "compare_block_line", "compare_block_line_item", "compare_list_block",     "compare_list_block_line"   );$v6a7f245843454cf4f28ad7c5e2572aa2 = $this->getCompareElements();if(sizeof($v6a7f245843454cf4f28ad7c5e2572aa2) == 0) return $v28d65bb7a643774ada22f54ca0679289;$vb81ca7c0ccaa77e7aa91936ab0070695 = umiHierarchy::getInstance();$vfca1bff8ad8b3a8585abfb0ad523ba42 = array();$v691d502cfd0e0626cd3b058e5682ad1c = array();$v4340fd73e75df7a9d9e45902a59ba3a4 = array();$v446d802df793202d5634ddd813cbfdbf = array();foreach($v6a7f245843454cf4f28ad7c5e2572aa2 as $v7057e8409c7c531a1a6e9ac3df4ed549) {$v8e2dcfd7e7e24b1ca76c1193f645902b = $vb81ca7c0ccaa77e7aa91936ab0070695->getElement($v7057e8409c7c531a1a6e9ac3df4ed549);if(!$v8e2dcfd7e7e24b1ca76c1193f645902b) continue;$ve253bed1357afcefc5fadfbc92f9eb97 = array(     'attribute:id'  => $v7057e8409c7c531a1a6e9ac3df4ed549,     'attribute:link' => $vb81ca7c0ccaa77e7aa91936ab0070695->getPathById($v7057e8409c7c531a1a6e9ac3df4ed549),     'node:title'  => $v8e2dcfd7e7e24b1ca76c1193f645902b->getName()    );$v691d502cfd0e0626cd3b058e5682ad1c[] = $this->parseTemplate($v7f346848ba10316c15355cee5670da55, $ve253bed1357afcefc5fadfbc92f9eb97, $v7057e8409c7c531a1a6e9ac3df4ed549);}$v446d802df793202d5634ddd813cbfdbf['subnodes:items'] = $v691d502cfd0e0626cd3b058e5682ad1c;$v4340fd73e75df7a9d9e45902a59ba3a4 = $this->parseTemplate($v42efb8fb1fbdce5f9019ce18a41c4bf2, $v446d802df793202d5634ddd813cbfdbf);$vd05b6ed7d2345020440df396d6da7f73 = array();foreach($v6a7f245843454cf4f28ad7c5e2572aa2 as $v7057e8409c7c531a1a6e9ac3df4ed549) {$vd05b6ed7d2345020440df396d6da7f73 = array_merge($vd05b6ed7d2345020440df396d6da7f73, $this->getComparableFields($v7057e8409c7c531a1a6e9ac3df4ed549,$v5987a208797b7768e7eb388f58b3bd27));}$v980da98409d058c365664ff7ea33dd6b = array();$vce66a74096151864746dd3d857a8b9a8 = 0;foreach($vd05b6ed7d2345020440df396d6da7f73 as $v73f329f154a663bfda020aadcdd0b775 => $v06e3d36fa30cea095545139854ad1fb9) {$v133479bebf56554d434d59f53992e221 = $v06e3d36fa30cea095545139854ad1fb9->getTitle();$v691d502cfd0e0626cd3b058e5682ad1c = array();$va6f44905b97227bd7df36e3e4f66c585 = true;foreach($v6a7f245843454cf4f28ad7c5e2572aa2 as $v7057e8409c7c531a1a6e9ac3df4ed549) {$v8e2dcfd7e7e24b1ca76c1193f645902b = $vb81ca7c0ccaa77e7aa91936ab0070695->getElement($v7057e8409c7c531a1a6e9ac3df4ed549);$ve253bed1357afcefc5fadfbc92f9eb97 = array(      'attribute:id'  => $v7057e8409c7c531a1a6e9ac3df4ed549,      'void:name'   => $v73f329f154a663bfda020aadcdd0b775,      'void:field_name' => $v73f329f154a663bfda020aadcdd0b775,      'value'    => $v8e2dcfd7e7e24b1ca76c1193f645902b->getObject()->getPropByName($v73f329f154a663bfda020aadcdd0b775)     );if($va6f44905b97227bd7df36e3e4f66c585 && $v8e2dcfd7e7e24b1ca76c1193f645902b->$v73f329f154a663bfda020aadcdd0b775) $va6f44905b97227bd7df36e3e4f66c585 = false;$v691d502cfd0e0626cd3b058e5682ad1c[] = $this->parseTemplate($ve8aad1bbba0265511b0e0e24052f245e, $ve253bed1357afcefc5fadfbc92f9eb97, $v7057e8409c7c531a1a6e9ac3df4ed549);}if($va6f44905b97227bd7df36e3e4f66c585) continue;$vce66a74096151864746dd3d857a8b9a8++;$v69ba0c89abba8a3e9cc0c5e32be0d35d = array(     'attribute:title' => $v133479bebf56554d434d59f53992e221,     'attribute:name' => $v73f329f154a663bfda020aadcdd0b775,     'attribute:type' => $v06e3d36fa30cea095545139854ad1fb9->getFieldType()->getDataType(),     'attribute:par'  => intval($vce66a74096151864746dd3d857a8b9a8 / 2 == ceil($vce66a74096151864746dd3d857a8b9a8 / 2)),     'subnodes:values' => $v69ba0c89abba8a3e9cc0c5e32be0d35d['void:items'] = $v691d502cfd0e0626cd3b058e5682ad1c    );$v980da98409d058c365664ff7ea33dd6b[] = $this->parseTemplate($ve6a2fd7211958cfe50efa4d14bd332f5, $v69ba0c89abba8a3e9cc0c5e32be0d35d);}$vfca1bff8ad8b3a8585abfb0ad523ba42['headers'] = $v4340fd73e75df7a9d9e45902a59ba3a4;$vfca1bff8ad8b3a8585abfb0ad523ba42['void:lines'] = $vfca1bff8ad8b3a8585abfb0ad523ba42['void:fields'] = $v980da98409d058c365664ff7ea33dd6b;$vfca1bff8ad8b3a8585abfb0ad523ba42['fields'] = array();$vfca1bff8ad8b3a8585abfb0ad523ba42['fields']['nodes:field'] = $v980da98409d058c365664ff7ea33dd6b;return $this->parseTemplate($v364f9b183bd2dd9e0beb45c754830a6c, $vfca1bff8ad8b3a8585abfb0ad523ba42);}public function getCompareElements() {static $v6a7f245843454cf4f28ad7c5e2572aa2;if(is_array($v6a7f245843454cf4f28ad7c5e2572aa2)) {return $v6a7f245843454cf4f28ad7c5e2572aa2;}if(!is_array(getSession("compare_list"))) {$_SESSION['compare_list'] = array();}if(is_array(getRequest('compare_list'))) {$_SESSION['compare_list'] = getRequest('compare_list');}$v6a7f245843454cf4f28ad7c5e2572aa2 = getSession("compare_list");$v6a7f245843454cf4f28ad7c5e2572aa2 = array_unique($v6a7f245843454cf4f28ad7c5e2572aa2);return $v6a7f245843454cf4f28ad7c5e2572aa2;}public function getComparableFields($v7057e8409c7c531a1a6e9ac3df4ed549, $v5987a208797b7768e7eb388f58b3bd27 = '') {$v8e2dcfd7e7e24b1ca76c1193f645902b = umiHierarchy::getInstance()->getElement($v7057e8409c7c531a1a6e9ac3df4ed549);if(!$v8e2dcfd7e7e24b1ca76c1193f645902b) return false;$v94757cae63fd3e398c0811a976dd6bbe = $v8e2dcfd7e7e24b1ca76c1193f645902b->getObject()->getTypeId();$v599dcce2998a6b40b1e38e8c6006cb0a = umiObjectTypesCollection::getInstance()->getType($v94757cae63fd3e398c0811a976dd6bbe);if(empty($v5987a208797b7768e7eb388f58b3bd27)) {$vd05b6ed7d2345020440df396d6da7f73 = $v599dcce2998a6b40b1e38e8c6006cb0a->getAllFields(true);}else {$v5987a208797b7768e7eb388f58b3bd27 = trim($v5987a208797b7768e7eb388f58b3bd27);$v5987a208797b7768e7eb388f58b3bd27 = strlen($v5987a208797b7768e7eb388f58b3bd27) ? split(" ", $v5987a208797b7768e7eb388f58b3bd27) : array();$v2aa86268c6c4553c5ee14cca0bb0a10e =  $v599dcce2998a6b40b1e38e8c6006cb0a->getFieldsGroupsList();$vd05b6ed7d2345020440df396d6da7f73 = array();foreach($v2aa86268c6c4553c5ee14cca0bb0a10e as $vdb0f6f37ebeb6ea09489124345af2a45) {if(!$vdb0f6f37ebeb6ea09489124345af2a45->getIsActive()) continue;if(!in_array($vdb0f6f37ebeb6ea09489124345af2a45->getName(), $v5987a208797b7768e7eb388f58b3bd27)) {continue;}$vd05b6ed7d2345020440df396d6da7f73 = array_merge($vd05b6ed7d2345020440df396d6da7f73,$vdb0f6f37ebeb6ea09489124345af2a45->getFields());}}$v9b207167e5381c47682c6b4f58a623fb = array();foreach($vd05b6ed7d2345020440df396d6da7f73 as $v06e3d36fa30cea095545139854ad1fb9) {if(!$v06e3d36fa30cea095545139854ad1fb9->getIsVisible()) continue;if(($v73f329f154a663bfda020aadcdd0b775 = $v06e3d36fa30cea095545139854ad1fb9->getName()) == "price") continue;$v9b207167e5381c47682c6b4f58a623fb[$v73f329f154a663bfda020aadcdd0b775] = $v06e3d36fa30cea095545139854ad1fb9;}return $v9b207167e5381c47682c6b4f58a623fb;}public function addToCompare() {$this->add_to_compare(getRequest("param0"));$this->redirect(getServer('HTTP_REFERER'));}public function jsonAddToCompareList() {$v65b002304ab8df0d8ac6327c5d9d545a = xslTemplater::getInstance()->setIsInited(false);$v7057e8409c7c531a1a6e9ac3df4ed549 = getRequest("param0");list($v0b152a65774284901d6c7c78d9ef9f6b, $v810f50fe8fe6b3990f42003ef2d559f0) = $this->loadTemplates("./tpls/emarket/compare/default.tpl", "json_add_to_compare", "json_compare_already_exists");$v66f6181bcb4cff4cd38fbc804a036db6 = $this->add_to_compare($v7057e8409c7c531a1a6e9ac3df4ed549) ? $v0b152a65774284901d6c7c78d9ef9f6b : $v810f50fe8fe6b3990f42003ef2d559f0;$vfca1bff8ad8b3a8585abfb0ad523ba42 = array('id' => $v7057e8409c7c531a1a6e9ac3df4ed549);header("Content-type: text/javascript; charset=utf-8");$this->flush($this->parseTemplate($v66f6181bcb4cff4cd38fbc804a036db6, $vfca1bff8ad8b3a8585abfb0ad523ba42, $v7057e8409c7c531a1a6e9ac3df4ed549));}public function removeFromCompare() {$this->remove_from_compare(getRequest("param0"));$vc66c00ae9f18fc0c67d8973bd07dc4cd = getServer('HTTP_REFERER');if(stristr(getServer('HTTP_USER_AGENT'), 'msie')) {$vc66c00ae9f18fc0c67d8973bd07dc4cd = preg_replace(array("/\b\d{10,}\b/", "/&{2,}/", "/&$/"), array("", "&", ""), $vc66c00ae9f18fc0c67d8973bd07dc4cd);$vc66c00ae9f18fc0c67d8973bd07dc4cd.= (strstr($vc66c00ae9f18fc0c67d8973bd07dc4cd, "?") ? "&" : "?") . time();$vc66c00ae9f18fc0c67d8973bd07dc4cd = str_replace("?&", "?", $vc66c00ae9f18fc0c67d8973bd07dc4cd);}$this->redirect($vc66c00ae9f18fc0c67d8973bd07dc4cd);}public function jsonRemoveFromCompare() {$v7057e8409c7c531a1a6e9ac3df4ed549 = getRequest("param0");$this->remove_from_compare($v7057e8409c7c531a1a6e9ac3df4ed549);list($v66f6181bcb4cff4cd38fbc804a036db6) = $this->loadTemplates("./tpls/emarket/compare/default.tpl", "json_remove_from_compare");$vfca1bff8ad8b3a8585abfb0ad523ba42 = array('id' => $v7057e8409c7c531a1a6e9ac3df4ed549);header("Content-type: text/javascript; charset=utf-8");$this->flush($v66f6181bcb4cff4cd38fbc804a036db6, $vfca1bff8ad8b3a8585abfb0ad523ba42, $v7057e8409c7c531a1a6e9ac3df4ed549);}public function resetCompareList() {$this->reset_compare($v7057e8409c7c531a1a6e9ac3df4ed549);$this->redirect(getServer('HTTP_REFERER'));}public function jsonResetCompareList() {$this->reset_compare();list($v66f6181bcb4cff4cd38fbc804a036db6) = $this->loadTemplates("./tpls/emarket/compare/default.tpl", "json_reset_compare_list");header("Content-type: text/javascript; charset=utf-8");$this->flush($v66f6181bcb4cff4cd38fbc804a036db6);}public function getCompareList($v66f6181bcb4cff4cd38fbc804a036db6 = "default") {if(!$v66f6181bcb4cff4cd38fbc804a036db6) $v9bac42c0e81d9e00acf49b4891e82f36 = "default";list($v364f9b183bd2dd9e0beb45c754830a6c, $v28d65bb7a643774ada22f54ca0679289, $ve6a2fd7211958cfe50efa4d14bd332f5, $vf20a0fbd0ce374c7cb76095eac325dc0) = $this->loadTemplates("./tpls/emarket/compare/{$v66f6181bcb4cff4cd38fbc804a036db6}.tpl", "compare_list_block", "compare_list_block_empty", "compare_list_block_line", "compare_list_block_link");$vfca1bff8ad8b3a8585abfb0ad523ba42 = array();$v6a7f245843454cf4f28ad7c5e2572aa2 = $this->getCompareElements();if(sizeof($v6a7f245843454cf4f28ad7c5e2572aa2) == 0) {$vfca1bff8ad8b3a8585abfb0ad523ba42['void:max_elements'] = $this->iMaxCompareElements ? $this->iMaxCompareElements : "не ограничено";if ($this->iMaxCompareElements) {$vfca1bff8ad8b3a8585abfb0ad523ba42['attribute:max-elements'] = $this->iMaxCompareElements;}return $this->parseTemplate($v28d65bb7a643774ada22f54ca0679289, $vfca1bff8ad8b3a8585abfb0ad523ba42);}$v691d502cfd0e0626cd3b058e5682ad1c = "";$vb81ca7c0ccaa77e7aa91936ab0070695 = umiHierarchy::getInstance();foreach($v6a7f245843454cf4f28ad7c5e2572aa2 as $v7057e8409c7c531a1a6e9ac3df4ed549) {$v65c10911d8b8591219a21ebacf46da01 = $vb81ca7c0ccaa77e7aa91936ab0070695->getElement($v7057e8409c7c531a1a6e9ac3df4ed549);if ($v65c10911d8b8591219a21ebacf46da01 instanceof iUmiHierarchyElement) {$v69ba0c89abba8a3e9cc0c5e32be0d35d = array();$v69ba0c89abba8a3e9cc0c5e32be0d35d['attribute:id'] = $v7057e8409c7c531a1a6e9ac3df4ed549;$v69ba0c89abba8a3e9cc0c5e32be0d35d['node:value'] = $v65c10911d8b8591219a21ebacf46da01->getName();$v69ba0c89abba8a3e9cc0c5e32be0d35d['attribute:link'] = umiHierarchy::getInstance()->getPathById($v7057e8409c7c531a1a6e9ac3df4ed549);$v69ba0c89abba8a3e9cc0c5e32be0d35d['xlink:href'] = 'upage://' . $v7057e8409c7c531a1a6e9ac3df4ed549;$v691d502cfd0e0626cd3b058e5682ad1c[] = $this->parseTemplate($ve6a2fd7211958cfe50efa4d14bd332f5, $v69ba0c89abba8a3e9cc0c5e32be0d35d, $v7057e8409c7c531a1a6e9ac3df4ed549);}}$vfca1bff8ad8b3a8585abfb0ad523ba42['compare_link'] = (sizeof($v6a7f245843454cf4f28ad7c5e2572aa2) >= 2) ? $vf20a0fbd0ce374c7cb76095eac325dc0 : "";$vfca1bff8ad8b3a8585abfb0ad523ba42['void:max_elements'] = $this->iMaxCompareElements ? $this->iMaxCompareElements : "не ограничено";if ($this->iMaxCompareElements) {$vfca1bff8ad8b3a8585abfb0ad523ba42['attribute:max-elements'] = $this->iMaxCompareElements;}$vfca1bff8ad8b3a8585abfb0ad523ba42['subnodes:items'] = $v691d502cfd0e0626cd3b058e5682ad1c;return $this->parseTemplate($v364f9b183bd2dd9e0beb45c754830a6c, $vfca1bff8ad8b3a8585abfb0ad523ba42);}public function reset_compare() {$_SESSION['compare_list'] = array();}public function add_to_compare($v7057e8409c7c531a1a6e9ac3df4ed549) {if(!is_array($_SESSION['compare_list'])) {$_SESSION['compare_list'] = array();}if ($this->iMaxCompareElements && count($_SESSION['compare_list']) >= $this->iMaxCompareElements) {return false;}$v161c9aaa4fe035e7b2f465bc59f3ab45 = new umiEventPoint("emarket_add_to_compare");$v161c9aaa4fe035e7b2f465bc59f3ab45->setMode("before");$v161c9aaa4fe035e7b2f465bc59f3ab45->setParam("element_id", $v7057e8409c7c531a1a6e9ac3df4ed549);$v161c9aaa4fe035e7b2f465bc59f3ab45->setParam("compare_list", $_SESSION['compare_list']);$this->setEventPoint($v161c9aaa4fe035e7b2f465bc59f3ab45);if(!in_array($v7057e8409c7c531a1a6e9ac3df4ed549, $_SESSION['compare_list'])) {$_SESSION['compare_list'][] = $v7057e8409c7c531a1a6e9ac3df4ed549;$v161c9aaa4fe035e7b2f465bc59f3ab45 = new umiEventPoint("emarket_add_to_compare");$v161c9aaa4fe035e7b2f465bc59f3ab45->setMode("after");$v161c9aaa4fe035e7b2f465bc59f3ab45->setParam("element_id", $v7057e8409c7c531a1a6e9ac3df4ed549);$v161c9aaa4fe035e7b2f465bc59f3ab45->setParam("compare_list", $_SESSION['compare_list']);$this->setEventPoint($v161c9aaa4fe035e7b2f465bc59f3ab45);return true;}return false;}public function remove_from_compare($v7057e8409c7c531a1a6e9ac3df4ed549) {if(!is_array($_SESSION['compare_list'])) {$_SESSION['compare_list'] = array();return;}if(in_array($v7057e8409c7c531a1a6e9ac3df4ed549, $_SESSION['compare_list'])) {unset($_SESSION['compare_list'][array_search($v7057e8409c7c531a1a6e9ac3df4ed549, $_SESSION['compare_list'])]);}}public function getCompareLink($v7552cd149af7495ee7d8225974e50f80 = null, $v66f6181bcb4cff4cd38fbc804a036db6 = 'default') {if(!$v7552cd149af7495ee7d8225974e50f80) return;if(!$v66f6181bcb4cff4cd38fbc804a036db6) $v66f6181bcb4cff4cd38fbc804a036db6 = "default";list($v7ec8dc4663488e7d40f795b96d3a5781, $v7be1933347a8bd217925c46e427d15db) = def_module::loadTemplates("./tpls/emarket/compare/{$v66f6181bcb4cff4cd38fbc804a036db6}.tpl", 'add_link', 'del_link');$v6a7f245843454cf4f28ad7c5e2572aa2 = $this->getCompareElements();$vd57dae14cf044e7585516cc4602207bc = in_array($v7552cd149af7495ee7d8225974e50f80, $v6a7f245843454cf4f28ad7c5e2572aa2);$v0d1a7db3358cda90ba29cd86161c36b5 = $this->pre_lang . '/emarket/addToCompare/' . $v7552cd149af7495ee7d8225974e50f80 . '/';$vbfc83ec8ae2f65ca345527540f21a07d = $this->pre_lang . '/emarket/removeFromCompare/' . $v7552cd149af7495ee7d8225974e50f80 . '/';$vfca1bff8ad8b3a8585abfb0ad523ba42 = array(    'add-link' => $vd57dae14cf044e7585516cc4602207bc ? null : $v0d1a7db3358cda90ba29cd86161c36b5,    'del-link' => $vd57dae14cf044e7585516cc4602207bc ? $vbfc83ec8ae2f65ca345527540f21a07d : null   );return def_module::parseTemplate(($vd57dae14cf044e7585516cc4602207bc ? $v7be1933347a8bd217925c46e427d15db : $v7ec8dc4663488e7d40f795b96d3a5781), $vfca1bff8ad8b3a8585abfb0ad523ba42, $v7552cd149af7495ee7d8225974e50f80);}};?>