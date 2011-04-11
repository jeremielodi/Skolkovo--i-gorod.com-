<?php
 class template extends umiEntinty implements iUmiEntinty, iTemplate {private $filename, $title, $domain_id, $lang_id, $is_default;protected $store_type = "template";public function getFilename() {return $this->filename;}public function getTitle() {return $this->title;}public function getDomainId() {return $this->domain_id;}public function getLangId() {return $this->lang_id;}public function getIsDefault() {return $this->is_default;}public function setFilename($v435ed7e9f07f740abf511a62c00eef6e) {$this->filename = $v435ed7e9f07f740abf511a62c00eef6e;$this->setIsUpdated();}public function setTitle($vd5d3db1765287eef77d7927cc956f50a) {$this->title = $vd5d3db1765287eef77d7927cc956f50a;$this->setIsUpdated();}public function setDomainId($v662cbf1253ac7d8750ed9190c52163e5) {$ve4e46deb7f9cc58c7abfb32e5570b6f3 = domainsCollection::getInstance();if($ve4e46deb7f9cc58c7abfb32e5570b6f3->isExists($v662cbf1253ac7d8750ed9190c52163e5)) {$this->domain_id = (int) $v662cbf1253ac7d8750ed9190c52163e5;$this->setIsUpdated();return true;}else {return false;}}public function setLangId($v78e6dd7a49f5b0cb2106a3a434dd5c86) {$v5a05866850c28651fe234659f6c92ada = langsCollection::getInstance();if($v5a05866850c28651fe234659f6c92ada->isExists($v78e6dd7a49f5b0cb2106a3a434dd5c86)) {$this->lang_id = (int) $v78e6dd7a49f5b0cb2106a3a434dd5c86;$this->setIsUpdated();return true;}else {return false;}}public function setIsDefault($vf62baf4c4ead98d50d516eca0ac5a746) {$this->is_default = (bool) $vf62baf4c4ead98d50d516eca0ac5a746;$this->setIsUpdated();}public function getUsedPages() {$vac5c74b64b4b8352ef2f181affb5ac2a = "SELECT h.id, o.name FROM cms3_hierarchy h, cms3_objects o WHERE h.tpl_id = '{$this->id}' AND o.id = h.obj_id AND h.is_deleted = '0' AND h.domain_id = '{$this->domain_id}'";$result = l_mysql_query($vac5c74b64b4b8352ef2f181affb5ac2a);$v9b207167e5381c47682c6b4f58a623fb = array();while(list($vb80bb7740288fda1f201890375a60c8f, $vb068931cc450442b63f5b3d276ea4297) = mysql_fetch_row($result)) {$v9b207167e5381c47682c6b4f58a623fb[] = Array($vb80bb7740288fda1f201890375a60c8f, $vb068931cc450442b63f5b3d276ea4297);}return $v9b207167e5381c47682c6b4f58a623fb;}public function setUsedPages($vb3b32a2d422265cd25c3323ed0157f81) {if(is_null($vb3b32a2d422265cd25c3323ed0157f81)) return false;$v3822e54d799ece2cf6bec7120d8a3a9f = templatesCollection::getInstance()->getDefaultTemplate($this->domain_id, $this->lang_id)->getId();$vac5c74b64b4b8352ef2f181affb5ac2a = "UPDATE cms3_hierarchy SET tpl_id = '{$v3822e54d799ece2cf6bec7120d8a3a9f}' WHERE tpl_id = '{$this->id}' AND is_deleted = '0' AND domain_id = '{$this->domain_id}'";l_mysql_query($vac5c74b64b4b8352ef2f181affb5ac2a);$vb99eb979e6f6efabc396f777b503f7e7 = cacheFrontend::getInstance();$vb99eb979e6f6efabc396f777b503f7e7->flush();$vb81ca7c0ccaa77e7aa91936ab0070695 = umiHierarchy::getInstance();if(!is_array($vb3b32a2d422265cd25c3323ed0157f81)) return false;if(is_array($vb3b32a2d422265cd25c3323ed0157f81)&&!empty($vb3b32a2d422265cd25c3323ed0157f81)) {foreach($vb3b32a2d422265cd25c3323ed0157f81 as $v7057e8409c7c531a1a6e9ac3df4ed549) {$v71860c77c6745379b0d44304d66b6a13 = $vb81ca7c0ccaa77e7aa91936ab0070695->getElement($v7057e8409c7c531a1a6e9ac3df4ed549);if($v71860c77c6745379b0d44304d66b6a13 instanceof iUmiHierarchyElement) {$v71860c77c6745379b0d44304d66b6a13->setTplId($this->id);$v71860c77c6745379b0d44304d66b6a13->commit();unset($v71860c77c6745379b0d44304d66b6a13);$vb81ca7c0ccaa77e7aa91936ab0070695->unloadElement($v7057e8409c7c531a1a6e9ac3df4ed549);}}}return true;}protected function loadInfo($vf1965a857bc285d26fe22023aa5ab50d = false) {if($vf1965a857bc285d26fe22023aa5ab50d === false) {$vac5c74b64b4b8352ef2f181affb5ac2a = "SELECT id, filename, title, domain_id, lang_id, is_default FROM cms3_templates WHERE id = '{$this->id}'";$result = l_mysql_query($vac5c74b64b4b8352ef2f181affb5ac2a);$vf1965a857bc285d26fe22023aa5ab50d = mysql_fetch_row($result);}if(list($vb80bb7740288fda1f201890375a60c8f, $v435ed7e9f07f740abf511a62c00eef6e, $vd5d3db1765287eef77d7927cc956f50a, $v662cbf1253ac7d8750ed9190c52163e5, $v78e6dd7a49f5b0cb2106a3a434dd5c86, $vf62baf4c4ead98d50d516eca0ac5a746) = $vf1965a857bc285d26fe22023aa5ab50d) {$this->filename = $v435ed7e9f07f740abf511a62c00eef6e;$this->title = $vd5d3db1765287eef77d7927cc956f50a;$this->domain_id = (int) $v662cbf1253ac7d8750ed9190c52163e5;$this->lang_id = (int) $v78e6dd7a49f5b0cb2106a3a434dd5c86;$this->is_default = (bool) $vf62baf4c4ead98d50d516eca0ac5a746;return true;}else return false;}protected function save() {$v435ed7e9f07f740abf511a62c00eef6e = self::filterInputString($this->filename);$vd5d3db1765287eef77d7927cc956f50a = self::filterInputString($this->title);$v662cbf1253ac7d8750ed9190c52163e5 = (int) $this->domain_id;$v78e6dd7a49f5b0cb2106a3a434dd5c86 =  (int) $this->lang_id;$vf62baf4c4ead98d50d516eca0ac5a746 = (int) $this->is_default;$vac5c74b64b4b8352ef2f181affb5ac2a = "UPDATE cms3_templates SET filename = '{$v435ed7e9f07f740abf511a62c00eef6e}', title = '{$vd5d3db1765287eef77d7927cc956f50a}', domain_id = '{$v662cbf1253ac7d8750ed9190c52163e5}', lang_id = '{$v78e6dd7a49f5b0cb2106a3a434dd5c86}', is_default = '{$vf62baf4c4ead98d50d516eca0ac5a746}' WHERE id = '{$this->id}'";$result = l_mysql_query($vac5c74b64b4b8352ef2f181affb5ac2a);return true;}}?>