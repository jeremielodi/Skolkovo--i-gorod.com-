<?php
 class content extends def_module {public function __construct() {parent::__construct();if(cmsController::getInstance()->getCurrentMode() == "admin") {cmsController::getInstance()->getModule('users');$v7513817107edd8b1833da90a2411cb3e = $this->getConfigTabs();if ($v7513817107edd8b1833da90a2411cb3e) {$v7513817107edd8b1833da90a2411cb3e->add("config");$v7513817107edd8b1833da90a2411cb3e->add("seo");$v7513817107edd8b1833da90a2411cb3e->add("content_control");$v7513817107edd8b1833da90a2411cb3e->add("tickets");}$this->__loadLib("__admin.php");$this->__implement("__content");$this->__loadLib("__custom_adm.php");$this->__implement("__custom_adm_content");$this->__loadLib("__imanager.php");$this->__implement("__imanager_content");}else {$this->__loadLib("__custom.php");$this->__implement("__custom_content");$this->__loadLib("__tickets.php");$this->__implement("__tickets_content");}$this->__loadLib("__json.php");$this->__implement("__json_content");$this->__loadLib("__lib.php");$this->__implement("__lib_content");$this->__loadLib("__events.php");$this->__implement("__content_events");$this->__loadLib("__editor.php");$this->__implement("__editor_content");}public function __call($v57ce7e19634b56aee8bf32d68eea7db4, $vc2d7489ba5880f051da2745a2dbcabf9) {if (!method_exists($this, $v57ce7e19634b56aee8bf32d68eea7db4)) {$v3eb666854798ad61ae9105ef63cfc99c = "";$v074580f03c427f8e0282e4c81909ddac = '';$v036ca49858591a42522a5120a3338d92 = '';$v812c342988bda380c1d0c3f65c76ff21 = array();$v6da648158add0c53655351ff6ac29a12 = preg_match("/[A-Z_]/", $v57ce7e19634b56aee8bf32d68eea7db4, $v812c342988bda380c1d0c3f65c76ff21);if ($v6da648158add0c53655351ff6ac29a12) {$v3eb666854798ad61ae9105ef63cfc99c = $v812c342988bda380c1d0c3f65c76ff21[0];$vdf8f64181d5d811b8d42d9b0d9bbc143 = strpos($v57ce7e19634b56aee8bf32d68eea7db4, $v3eb666854798ad61ae9105ef63cfc99c);$v074580f03c427f8e0282e4c81909ddac = substr($v57ce7e19634b56aee8bf32d68eea7db4, 0, $vdf8f64181d5d811b8d42d9b0d9bbc143)."/";$v036ca49858591a42522a5120a3338d92 = substr($v57ce7e19634b56aee8bf32d68eea7db4, 0, $vdf8f64181d5d811b8d42d9b0d9bbc143+($v3eb666854798ad61ae9105ef63cfc99c === "_" ? 1 : 0));}$vf6e479395ebe95370e53c983d363cfdb = "__".$v57ce7e19634b56aee8bf32d68eea7db4;if (!class_exists($vf6e479395ebe95370e53c983d363cfdb)) {$vbc3a9aac998107c6dfec66508437c0e6 = "methods/".$v074580f03c427f8e0282e4c81909ddac."__".$v57ce7e19634b56aee8bf32d68eea7db4.".lib.php";$this->__loadLib($vbc3a9aac998107c6dfec66508437c0e6);$this->__implement($vf6e479395ebe95370e53c983d363cfdb);}$v4c4a223164f4e9affea9457a77b146ef = "__".$v57ce7e19634b56aee8bf32d68eea7db4."_";if (!class_exists($v4c4a223164f4e9affea9457a77b146ef)) {$v31100ecc14ab63b8d6d04d63e5951dd9 = "methods/".$v074580f03c427f8e0282e4c81909ddac."__".$v57ce7e19634b56aee8bf32d68eea7db4."_".cmsController::getInstance()->getCurrentMode().".lib.php";$this->__loadLib($v31100ecc14ab63b8d6d04d63e5951dd9);$this->__implement($v4c4a223164f4e9affea9457a77b146ef);}}return parent::__call($v57ce7e19634b56aee8bf32d68eea7db4, $vc2d7489ba5880f051da2745a2dbcabf9);}public function content($v7552cd149af7495ee7d8225974e50f80 = false) {if($this->breakMe()) return;$v8b1dc169bf460ee884fceef66c6607d6 = cmsController::getInstance();if(!$v7552cd149af7495ee7d8225974e50f80) $v7552cd149af7495ee7d8225974e50f80 = $v8b1dc169bf460ee884fceef66c6607d6->getCurrentElementId();$vb81ca7c0ccaa77e7aa91936ab0070695 = umiHierarchy::getInstance();$v8e2dcfd7e7e24b1ca76c1193f645902b = $vb81ca7c0ccaa77e7aa91936ab0070695->getElement($v7552cd149af7495ee7d8225974e50f80);if($v8e2dcfd7e7e24b1ca76c1193f645902b instanceof iUmiHierarchyElement) {templater::pushEditable("content", "", $v7552cd149af7495ee7d8225974e50f80);return $v8e2dcfd7e7e24b1ca76c1193f645902b->content;}else {return $this->gen404();}}public function gen404($v66f6181bcb4cff4cd38fbc804a036db6 = 'default') {if(!$v66f6181bcb4cff4cd38fbc804a036db6) $v66f6181bcb4cff4cd38fbc804a036db6 = 'default';$v7f2db423a49b305459147332fb01cf87 = outputBuffer::current();$v7f2db423a49b305459147332fb01cf87->status('404 Not Found');$this->setHeader('%content_error_404_header%');list($v31912934b8f34be4364cc043cd8a0176) = def_module::loadTemplates("./tpls/content/not_found/{$v66f6181bcb4cff4cd38fbc804a036db6}.tpl", 'block');return $v31912934b8f34be4364cc043cd8a0176 ? $v31912934b8f34be4364cc043cd8a0176 : '%content_usesitemap%';}public function menu($va0943a2dd0d64d8c46367a675eacbf67 = "default", $v5d9978db1eb3e8f9014c39453ef8fa4a = 10, $v0db3209e1adc6d67be435a81baf9a66e = false) {$v8b1dc169bf460ee884fceef66c6607d6 = cmsController::getInstance();$vb81ca7c0ccaa77e7aa91936ab0070695 = umiHierarchy::getInstance();if($v0db3209e1adc6d67be435a81baf9a66e) {if(!is_numeric($v0db3209e1adc6d67be435a81baf9a66e)) {$v0db3209e1adc6d67be435a81baf9a66e = $vb81ca7c0ccaa77e7aa91936ab0070695->getIdByPath($v0db3209e1adc6d67be435a81baf9a66e);}$v93872234d2fa49c3991981bbea5a638c = $vb81ca7c0ccaa77e7aa91936ab0070695->getPathById($v0db3209e1adc6d67be435a81baf9a66e, false, true);}else {$v0db3209e1adc6d67be435a81baf9a66e = 0;$v93872234d2fa49c3991981bbea5a638c = $v8b1dc169bf460ee884fceef66c6607d6->pre_lang . "/";}$this->parents = $this->get_parents($v8b1dc169bf460ee884fceef66c6607d6->getCurrentElementId());if(!xslTemplater::getInstance()->getIsInited()) {if(!file_exists(CURRENT_WORKING_DIR . "/tpls/content/menu/" . $va0943a2dd0d64d8c46367a675eacbf67 . ".tpl")) {return "%core_error_notemplate%";}$this->__loadLib($va0943a2dd0d64d8c46367a675eacbf67 . ".tpl", "tpls/content/menu/", "FORMS");}$vfed36e93a0509e20f2dc96cbbd85b678 = $this->FORMS;return $this->build_menu($v0db3209e1adc6d67be435a81baf9a66e, $vfed36e93a0509e20f2dc96cbbd85b678, 0, $v93872234d2fa49c3991981bbea5a638c, $v5d9978db1eb3e8f9014c39453ef8fa4a);}public function sitemap($v66f6181bcb4cff4cd38fbc804a036db6 = "default", $v5d9978db1eb3e8f9014c39453ef8fa4a = false, $v493b3ba44710462b951bfdd836ba1cb2 = false) {if($this->breakMe()) return;$vb81ca7c0ccaa77e7aa91936ab0070695 = umiHierarchy::getInstance();$v8b1dc169bf460ee884fceef66c6607d6 = cmsController::getInstance();if(!$v5d9978db1eb3e8f9014c39453ef8fa4a) $v5d9978db1eb3e8f9014c39453ef8fa4a = getRequest('param0');if(!$v5d9978db1eb3e8f9014c39453ef8fa4a) $v5d9978db1eb3e8f9014c39453ef8fa4a = 4;if(!$v493b3ba44710462b951bfdd836ba1cb2) $v493b3ba44710462b951bfdd836ba1cb2 = (int) getRequest('param1');if(!$v493b3ba44710462b951bfdd836ba1cb2) $v493b3ba44710462b951bfdd836ba1cb2 = 0;if($v8b1dc169bf460ee884fceef66c6607d6->getCurrentMethod() == "sitemap") {$this->setHeader("%content_sitemap%");}$v21d00db91b1fbca409885116aae0bdb4 = $vb81ca7c0ccaa77e7aa91936ab0070695->getChilds($v493b3ba44710462b951bfdd836ba1cb2, false, false, $v5d9978db1eb3e8f9014c39453ef8fa4a - 1);return $this->gen_sitemap($v66f6181bcb4cff4cd38fbc804a036db6, $v21d00db91b1fbca409885116aae0bdb4, $v5d9978db1eb3e8f9014c39453ef8fa4a - 1);}public function get_page_url($v7057e8409c7c531a1a6e9ac3df4ed549, $v89af6e01f53aba67b622b1969ca8588a = false) {$v89af6e01f53aba67b622b1969ca8588a = (bool) $v89af6e01f53aba67b622b1969ca8588a;return umiHierarchy::getInstance()->getPathById($v7057e8409c7c531a1a6e9ac3df4ed549, $v89af6e01f53aba67b622b1969ca8588a);}public function get_page_id($v572d4e421e5e6b9bc11d815e8a027112) {$vb81ca7c0ccaa77e7aa91936ab0070695 = umiHierarchy::getInstance();$v7552cd149af7495ee7d8225974e50f80 = $vb81ca7c0ccaa77e7aa91936ab0070695->getIdByPath($v572d4e421e5e6b9bc11d815e8a027112);if($v7552cd149af7495ee7d8225974e50f80) return $v7552cd149af7495ee7d8225974e50f80;else {throw new publicException(getLabel('error-page-does-not-exist', null, $v572d4e421e5e6b9bc11d815e8a027112));}}public function redirect($v572d4e421e5e6b9bc11d815e8a027112 = "") {if(is_numeric($v572d4e421e5e6b9bc11d815e8a027112)) {$v572d4e421e5e6b9bc11d815e8a027112 = $this->get_page_url($v572d4e421e5e6b9bc11d815e8a027112);}parent::redirect($v572d4e421e5e6b9bc11d815e8a027112);}public function insert($v7552cd149af7495ee7d8225974e50f80) {$vb81ca7c0ccaa77e7aa91936ab0070695 = umiHierarchy::getInstance();$v8b1dc169bf460ee884fceef66c6607d6 = cmsController::getInstance();$v50d644c42a9f32486af6d339527e1020 = $v8b1dc169bf460ee884fceef66c6607d6->getCurrentElementId();$v7552cd149af7495ee7d8225974e50f80 = trim($v7552cd149af7495ee7d8225974e50f80);if(!$v7552cd149af7495ee7d8225974e50f80) return "%content_error_insert_null%";$v7552cd149af7495ee7d8225974e50f80 = (int) is_numeric($v7552cd149af7495ee7d8225974e50f80) ? $v7552cd149af7495ee7d8225974e50f80 : $vb81ca7c0ccaa77e7aa91936ab0070695->getIdByPath($v7552cd149af7495ee7d8225974e50f80);if($v7552cd149af7495ee7d8225974e50f80 == $v50d644c42a9f32486af6d339527e1020) return "%content_error_insert_recursy%";if(!$v7552cd149af7495ee7d8225974e50f80) return;if($v8e2dcfd7e7e24b1ca76c1193f645902b = $vb81ca7c0ccaa77e7aa91936ab0070695->getElement($v7552cd149af7495ee7d8225974e50f80)) {templater::pushEditable("content", "", $v7552cd149af7495ee7d8225974e50f80);return $v8e2dcfd7e7e24b1ca76c1193f645902b->content;}}public function get_parents($v7552cd149af7495ee7d8225974e50f80) {return umiHierarchy::getInstance()->getAllParents($v7552cd149af7495ee7d8225974e50f80, true);}public function getEditLink($v7552cd149af7495ee7d8225974e50f80, $vb8910fa4dc8f637c214b8e9094ef35b9) {return array(    $this->pre_lang . "/admin/content/add/{$v7552cd149af7495ee7d8225974e50f80}/page/",    $this->pre_lang . "/admin/content/edit/{$v7552cd149af7495ee7d8225974e50f80}/"   );}private function gen_sitemap($v66f6181bcb4cff4cd38fbc804a036db6 = "default", $v21d00db91b1fbca409885116aae0bdb4, $v5d9978db1eb3e8f9014c39453ef8fa4a) {$vb81ca7c0ccaa77e7aa91936ab0070695 = umiHierarchy::getInstance();list($v364f9b183bd2dd9e0beb45c754830a6c, $v839bf4ce4f682ac29d72f21f39abbd61) = def_module::loadTemplates("tpls/content/sitemap/{$v66f6181bcb4cff4cd38fbc804a036db6}.tpl", "block", "item");$vfca1bff8ad8b3a8585abfb0ad523ba42 = array();$v691d502cfd0e0626cd3b058e5682ad1c = array();if(is_array($v21d00db91b1fbca409885116aae0bdb4)) {foreach($v21d00db91b1fbca409885116aae0bdb4 as $v7552cd149af7495ee7d8225974e50f80 => $vadce578d04ed03c31f6ac59451fcf8e4) {if($v8e2dcfd7e7e24b1ca76c1193f645902b = $vb81ca7c0ccaa77e7aa91936ab0070695->getElement($v7552cd149af7495ee7d8225974e50f80)) {$ve253bed1357afcefc5fadfbc92f9eb97 = array(       'attribute:id'  => $v7552cd149af7495ee7d8225974e50f80,       'attribute:link' => $v8e2dcfd7e7e24b1ca76c1193f645902b->link,       'attribute:name' => $v8e2dcfd7e7e24b1ca76c1193f645902b->name,       'xlink:href'  => ("upage://" . $v7552cd149af7495ee7d8225974e50f80)      );if(($v5d9978db1eb3e8f9014c39453ef8fa4a > 0) && $v8e2dcfd7e7e24b1ca76c1193f645902b->show_submenu) {$ve253bed1357afcefc5fadfbc92f9eb97['nodes:items'] = $ve253bed1357afcefc5fadfbc92f9eb97['void:sub_items'] = (sizeof($vadce578d04ed03c31f6ac59451fcf8e4) && is_array($vadce578d04ed03c31f6ac59451fcf8e4)) ? $this->gen_sitemap("default", $vadce578d04ed03c31f6ac59451fcf8e4, ($v5d9978db1eb3e8f9014c39453ef8fa4a - 1)) : "";}else {$ve253bed1357afcefc5fadfbc92f9eb97['sub_items'] = "";}$v691d502cfd0e0626cd3b058e5682ad1c[] = self::parseTemplate($v839bf4ce4f682ac29d72f21f39abbd61, $ve253bed1357afcefc5fadfbc92f9eb97, $v7552cd149af7495ee7d8225974e50f80);$vb81ca7c0ccaa77e7aa91936ab0070695->unloadElement($v7552cd149af7495ee7d8225974e50f80);}else {continue;}}}$vfca1bff8ad8b3a8585abfb0ad523ba42['subnodes:items'] = $v691d502cfd0e0626cd3b058e5682ad1c;return self::parseTemplate($v364f9b183bd2dd9e0beb45c754830a6c, $vfca1bff8ad8b3a8585abfb0ad523ba42, 0);}private function getMenuTemplates($vfed36e93a0509e20f2dc96cbbd85b678, $veb9f0591980fdb0fafa3f8e08024387b) {$v4ec1b477cd0232b832c1899905ec51a4 = "_level" . $veb9f0591980fdb0fafa3f8e08024387b;$v14511f2f5564650d129ca7cabc333278 = getArrayKey($vfed36e93a0509e20f2dc96cbbd85b678, "menu_block" . $v4ec1b477cd0232b832c1899905ec51a4);$v6438c669e0d0de98e6929c2cc0fac474 = getArrayKey($vfed36e93a0509e20f2dc96cbbd85b678, "menu_line" . $v4ec1b477cd0232b832c1899905ec51a4);$v5973b5940b0de0f2e92ffd7dbdd2424e = (array_key_exists("menu_line" . $v4ec1b477cd0232b832c1899905ec51a4 . "_a", $vfed36e93a0509e20f2dc96cbbd85b678)) ? $vfed36e93a0509e20f2dc96cbbd85b678["menu_line" . $v4ec1b477cd0232b832c1899905ec51a4 . "_a"] : $v6438c669e0d0de98e6929c2cc0fac474;$v30727f82fbed748e9eb383ed4d3ee593 = (array_key_exists("menu_line" . $v4ec1b477cd0232b832c1899905ec51a4 . "_in", $vfed36e93a0509e20f2dc96cbbd85b678)) ? $vfed36e93a0509e20f2dc96cbbd85b678["menu_line" . $v4ec1b477cd0232b832c1899905ec51a4 . "_in"] : $v6438c669e0d0de98e6929c2cc0fac474;$va2f2ed4f8ebc2cbb4c21a29dc40ab61d = getArrayKey($vfed36e93a0509e20f2dc96cbbd85b678, "menu_class" . $v4ec1b477cd0232b832c1899905ec51a4 . "");$vdd4fe1e02e39479e677a73eabb3f0460 = getArrayKey($vfed36e93a0509e20f2dc96cbbd85b678, "menu_class" . $v4ec1b477cd0232b832c1899905ec51a4 . "_last");if(!$v14511f2f5564650d129ca7cabc333278) {switch($veb9f0591980fdb0fafa3f8e08024387b) {case 1: $v4ec1b477cd0232b832c1899905ec51a4 = "_fl";break;case 2: $v4ec1b477cd0232b832c1899905ec51a4 = "_sl";break;}$v14511f2f5564650d129ca7cabc333278 = getArrayKey($vfed36e93a0509e20f2dc96cbbd85b678, 'menu_block' . $v4ec1b477cd0232b832c1899905ec51a4);$v6438c669e0d0de98e6929c2cc0fac474 = getArrayKey($vfed36e93a0509e20f2dc96cbbd85b678, 'menu_line' . $v4ec1b477cd0232b832c1899905ec51a4);$v5973b5940b0de0f2e92ffd7dbdd2424e = (array_key_exists("menu_line" . $v4ec1b477cd0232b832c1899905ec51a4 . "_a", $vfed36e93a0509e20f2dc96cbbd85b678)) ? $vfed36e93a0509e20f2dc96cbbd85b678["menu_line" . $v4ec1b477cd0232b832c1899905ec51a4 . "_a"] : $v6438c669e0d0de98e6929c2cc0fac474;$v30727f82fbed748e9eb383ed4d3ee593 = (array_key_exists("menu_line" . $v4ec1b477cd0232b832c1899905ec51a4 . "_in", $vfed36e93a0509e20f2dc96cbbd85b678)) ? $vfed36e93a0509e20f2dc96cbbd85b678["menu_line" . $v4ec1b477cd0232b832c1899905ec51a4 . "_in"] : $v6438c669e0d0de98e6929c2cc0fac474;}if(!($va0f0bc95016c862498bbad29d1f4d9d4 = getArrayKey($vfed36e93a0509e20f2dc96cbbd85b678, 'separator' . $v4ec1b477cd0232b832c1899905ec51a4))) {$va0f0bc95016c862498bbad29d1f4d9d4 = getArrayKey($vfed36e93a0509e20f2dc96cbbd85b678, 'separator');}if(!($v4abdea593a963d868ca559190f31bad6 = getArrayKey($vfed36e93a0509e20f2dc96cbbd85b678, 'separator_last' . $v4ec1b477cd0232b832c1899905ec51a4))) {$v4abdea593a963d868ca559190f31bad6 = getArrayKey($vfed36e93a0509e20f2dc96cbbd85b678, 'separator_last');}return array($v14511f2f5564650d129ca7cabc333278, $v6438c669e0d0de98e6929c2cc0fac474, $v5973b5940b0de0f2e92ffd7dbdd2424e, $v30727f82fbed748e9eb383ed4d3ee593, $va0f0bc95016c862498bbad29d1f4d9d4, $v4abdea593a963d868ca559190f31bad6, $va2f2ed4f8ebc2cbb4c21a29dc40ab61d, $vdd4fe1e02e39479e677a73eabb3f0460);}private function build_menu($v1a63c8004d716c8b91f5b7af780555b9, &$vfed36e93a0509e20f2dc96cbbd85b678, $veb9f0591980fdb0fafa3f8e08024387b = 0, $v70276c196cd4d9b478acc27a150b10ea = "/", $v5d9978db1eb3e8f9014c39453ef8fa4a = 10) {static $v459e4045d3d33ee250e9ccb69194b26d = array();$vb81ca7c0ccaa77e7aa91936ab0070695 = umiHierarchy::getInstance();$v8b1dc169bf460ee884fceef66c6607d6 = cmsController::getInstance();list(    $v364f9b183bd2dd9e0beb45c754830a6c, $vb1c0ed8b2e25638833f73a19e1954309, $v926dfff7e49a89693d6ca73263726e4f, $vf268868bd3d74b867ab0f3e382106f7c, $va0f0bc95016c862498bbad29d1f4d9d4, $v4abdea593a963d868ca559190f31bad6, $va2f2ed4f8ebc2cbb4c21a29dc40ab61d, $vdd4fe1e02e39479e677a73eabb3f0460   ) = $this->getMenuTemplates($vfed36e93a0509e20f2dc96cbbd85b678, ($veb9f0591980fdb0fafa3f8e08024387b + 1));if(isset($v459e4045d3d33ee250e9ccb69194b26d[$v1a63c8004d716c8b91f5b7af780555b9])) {$result = $v459e4045d3d33ee250e9ccb69194b26d[$v1a63c8004d716c8b91f5b7af780555b9];}else {$vadce578d04ed03c31f6ac59451fcf8e4 = $vb81ca7c0ccaa77e7aa91936ab0070695->getChilds($v1a63c8004d716c8b91f5b7af780555b9, false, false, 1);if($vadce578d04ed03c31f6ac59451fcf8e4 === false) $vadce578d04ed03c31f6ac59451fcf8e4 = array();$result = array_keys($vadce578d04ed03c31f6ac59451fcf8e4);$v459e4045d3d33ee250e9ccb69194b26d[$v1a63c8004d716c8b91f5b7af780555b9] = $result;}if($v1a63c8004d716c8b91f5b7af780555b9 && ($v70276c196cd4d9b478acc27a150b10ea == $this->pre_lang . "/")) {$vcfd97b41b5113a74e154b5f982cfa367 = true;}else {$vcfd97b41b5113a74e154b5f982cfa367 = false;}$v980da98409d058c365664ff7ea33dd6b = array();$v443d09d9106553683717126479f61f75 = array();$v4a8a08f09d37b73795649038408b5f33 = 0;$vfa816edb83e95bf0c8da580bdfd491ef = array();foreach($result as $v7057e8409c7c531a1a6e9ac3df4ed549) {$v8e2dcfd7e7e24b1ca76c1193f645902b = $vb81ca7c0ccaa77e7aa91936ab0070695->getElement($v7057e8409c7c531a1a6e9ac3df4ed549);if($v8e2dcfd7e7e24b1ca76c1193f645902b && $v8e2dcfd7e7e24b1ca76c1193f645902b->isActive && $v8e2dcfd7e7e24b1ca76c1193f645902b->isVisible) {$vfa816edb83e95bf0c8da580bdfd491ef[$v7057e8409c7c531a1a6e9ac3df4ed549] = $v8e2dcfd7e7e24b1ca76c1193f645902b;}}$result = $vfa816edb83e95bf0c8da580bdfd491ef;unset($vfa816edb83e95bf0c8da580bdfd491ef);$v7dabf5c198b0bab2eaa42bb03a113e55 = sizeof($result);if($vcfd97b41b5113a74e154b5f982cfa367) {$va4f09cfeea7392a1f6df6a3de5c3bc9e = $vb81ca7c0ccaa77e7aa91936ab0070695->getElement($v1a63c8004d716c8b91f5b7af780555b9);if($va4f09cfeea7392a1f6df6a3de5c3bc9e) {$v70276c196cd4d9b478acc27a150b10ea = $vb81ca7c0ccaa77e7aa91936ab0070695->getPathById($v1a63c8004d716c8b91f5b7af780555b9) . $va4f09cfeea7392a1f6df6a3de5c3bc9e->getAltName() . '/';}}$v50d644c42a9f32486af6d339527e1020 = $v8b1dc169bf460ee884fceef66c6607d6->getCurrentElementId();$v0aa69e9db589a70874071a201859b27d = $vb81ca7c0ccaa77e7aa91936ab0070695->getAllParents($v50d644c42a9f32486af6d339527e1020, true);foreach($result as $v7057e8409c7c531a1a6e9ac3df4ed549 => $v8e2dcfd7e7e24b1ca76c1193f645902b) {$v1cb251ec0d568de6a929b520c4aed8d1 = $v8e2dcfd7e7e24b1ca76c1193f645902b->getName();$v2a304a1348456ccd2234cd71a81bd338 = $v70276c196cd4d9b478acc27a150b10ea . $v8e2dcfd7e7e24b1ca76c1193f645902b->getAltName() . "/";if($vf268868bd3d74b867ab0f3e382106f7c && $vf268868bd3d74b867ab0f3e382106f7c != $vb1c0ed8b2e25638833f73a19e1954309) {if ($v5d9978db1eb3e8f9014c39453ef8fa4a > 1 && $this->isInPath($v7057e8409c7c531a1a6e9ac3df4ed549, $vfed36e93a0509e20f2dc96cbbd85b678, ($veb9f0591980fdb0fafa3f8e08024387b + 1), $v2a304a1348456ccd2234cd71a81bd338, $v5d9978db1eb3e8f9014c39453ef8fa4a - 1)) {$v4264c638e0098acb172519b0436db099 = true;$v6438c669e0d0de98e6929c2cc0fac474 = $vf268868bd3d74b867ab0f3e382106f7c;}else {$v4264c638e0098acb172519b0436db099 = (in_array($v7057e8409c7c531a1a6e9ac3df4ed549, $v0aa69e9db589a70874071a201859b27d) !== false);$v6438c669e0d0de98e6929c2cc0fac474 = ($v4264c638e0098acb172519b0436db099) ? $v926dfff7e49a89693d6ca73263726e4f : $vb1c0ed8b2e25638833f73a19e1954309;}}else {$v4264c638e0098acb172519b0436db099 = (in_array($v7057e8409c7c531a1a6e9ac3df4ed549, $v0aa69e9db589a70874071a201859b27d) !== false);$v6438c669e0d0de98e6929c2cc0fac474 = ($v4264c638e0098acb172519b0436db099) ? $v926dfff7e49a89693d6ca73263726e4f : $vb1c0ed8b2e25638833f73a19e1954309;}if(strstr($v6438c669e0d0de98e6929c2cc0fac474, "%sub_menu%") && $v5d9978db1eb3e8f9014c39453ef8fa4a > 1) {if($v8e2dcfd7e7e24b1ca76c1193f645902b->getValue("show_submenu") && ($v4264c638e0098acb172519b0436db099 || $v8e2dcfd7e7e24b1ca76c1193f645902b->getValue("is_expanded"))) {$v31999a061af4e0a5b1aa74a256bc1a5c = $this->build_menu($v7057e8409c7c531a1a6e9ac3df4ed549, $vfed36e93a0509e20f2dc96cbbd85b678, ($veb9f0591980fdb0fafa3f8e08024387b + 1), $v2a304a1348456ccd2234cd71a81bd338, $v5d9978db1eb3e8f9014c39453ef8fa4a - 1);}else $v31999a061af4e0a5b1aa74a256bc1a5c = "";}else $v31999a061af4e0a5b1aa74a256bc1a5c = "";if($v8e2dcfd7e7e24b1ca76c1193f645902b->getIsDefault()) {$v2a304a1348456ccd2234cd71a81bd338 = $v8e2dcfd7e7e24b1ca76c1193f645902b->link;}$ve253bed1357afcefc5fadfbc92f9eb97 = array();$ve253bed1357afcefc5fadfbc92f9eb97['attribute:id'] = $v7057e8409c7c531a1a6e9ac3df4ed549;$ve253bed1357afcefc5fadfbc92f9eb97['attribute:link'] = $v2a304a1348456ccd2234cd71a81bd338;$ve253bed1357afcefc5fadfbc92f9eb97['xlink:href'] = "upage://" . $v7057e8409c7c531a1a6e9ac3df4ed549;$ve253bed1357afcefc5fadfbc92f9eb97['node:text'] = $v1cb251ec0d568de6a929b520c4aed8d1;$ve253bed1357afcefc5fadfbc92f9eb97['void:num'] = ($v4a8a08f09d37b73795649038408b5f33+1);$ve253bed1357afcefc5fadfbc92f9eb97['subnodes:sub_menu'] = $v31999a061af4e0a5b1aa74a256bc1a5c;$ve253bed1357afcefc5fadfbc92f9eb97['void:separator'] = (($v7dabf5c198b0bab2eaa42bb03a113e55 == ($v4a8a08f09d37b73795649038408b5f33 + 1)) && $v4abdea593a963d868ca559190f31bad6) ? $v4abdea593a963d868ca559190f31bad6 : $va0f0bc95016c862498bbad29d1f4d9d4;if($v4264c638e0098acb172519b0436db099) {$ve253bed1357afcefc5fadfbc92f9eb97['attribute:status'] = "active";}$ve253bed1357afcefc5fadfbc92f9eb97['class'] = ($v7dabf5c198b0bab2eaa42bb03a113e55 > ($v4a8a08f09d37b73795649038408b5f33 + 1)) ? $va2f2ed4f8ebc2cbb4c21a29dc40ab61d : $vdd4fe1e02e39479e677a73eabb3f0460;$v443d09d9106553683717126479f61f75[] = self::parseTemplate($v6438c669e0d0de98e6929c2cc0fac474, $ve253bed1357afcefc5fadfbc92f9eb97, $v7057e8409c7c531a1a6e9ac3df4ed549);$v4a8a08f09d37b73795649038408b5f33++;$vb81ca7c0ccaa77e7aa91936ab0070695->unloadElement($v7057e8409c7c531a1a6e9ac3df4ed549);}if($v7dabf5c198b0bab2eaa42bb03a113e55 == 0) {}$vfca1bff8ad8b3a8585abfb0ad523ba42 = array(    'subnodes:items' => $v443d09d9106553683717126479f61f75,    'void:lines'  => $v443d09d9106553683717126479f61f75,    'id'    => $v1a63c8004d716c8b91f5b7af780555b9   );return self::parseTemplate($v364f9b183bd2dd9e0beb45c754830a6c, $vfca1bff8ad8b3a8585abfb0ad523ba42, $v1a63c8004d716c8b91f5b7af780555b9);}private function isInPath($va6eb4816205178e88dad66a16a19ff45) {$vb81ca7c0ccaa77e7aa91936ab0070695 = umiHierarchy::getInstance();$v8b1dc169bf460ee884fceef66c6607d6 = cmsController::getInstance();$v50d644c42a9f32486af6d339527e1020 = $v8b1dc169bf460ee884fceef66c6607d6->getCurrentElementId();$ve087db8c7a56c2d9b91ea55d2892c3f8 = false;foreach(array_keys($vb81ca7c0ccaa77e7aa91936ab0070695->getChilds($va6eb4816205178e88dad66a16a19ff45)) as $v7552cd149af7495ee7d8225974e50f80) {$v8e2dcfd7e7e24b1ca76c1193f645902b = $vb81ca7c0ccaa77e7aa91936ab0070695->getElement($v7552cd149af7495ee7d8225974e50f80);if(!$v8e2dcfd7e7e24b1ca76c1193f645902b || !$v8e2dcfd7e7e24b1ca76c1193f645902b->getIsActive()) continue;$ve087db8c7a56c2d9b91ea55d2892c3f8 |= (in_array($v7552cd149af7495ee7d8225974e50f80, $vb81ca7c0ccaa77e7aa91936ab0070695->getAllParents($v50d644c42a9f32486af6d339527e1020, true)) !== false);}return $ve087db8c7a56c2d9b91ea55d2892c3f8;}};?>