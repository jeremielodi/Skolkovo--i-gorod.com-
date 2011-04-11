<?php
 class xmlExporter implements iXmlExporter {const VERSION = "2.0";const ROOT_PAGE_TYPE_ID = 3;protected $source_id, $source_name;protected $types, $elements, $branches, $objects;protected $exported_types = array(), $exported_elements = array(), $exported_objects = array();protected $limit, $offset, $position = 0, $break = false;protected $translator;protected $doc;protected $root;protected $meta_container, $types_container, $pages_container, $objects_container;public function __construct($vaf721e88e6c0a612be51c329cb2bc12a, $vd80c2a24a1dcebf784b89d42f66190a2 = false, $v280a2c0751382c95213aa3fd1475f90d = 0) {$this->relations = umiImportRelations::getInstance();$this->source_name = $vaf721e88e6c0a612be51c329cb2bc12a;$this->source_id = $this->relations->addNewSource($vaf721e88e6c0a612be51c329cb2bc12a);$this->limit = is_numeric($vd80c2a24a1dcebf784b89d42f66190a2) ? $vd80c2a24a1dcebf784b89d42f66190a2 : false;$this->offset = (int) $v280a2c0751382c95213aa3fd1475f90d;$v9a09b4dfda82e3e665e31092d1c3ec8d = new DOMDocument("1.0", "utf-8");$v9a09b4dfda82e3e665e31092d1c3ec8d->formatOutput = XML_FORMAT_OUTPUT;$v63a9f0ea7bb98050796b649e85481845 = $v9a09b4dfda82e3e665e31092d1c3ec8d->createElement("umidump");$v63a9f0ea7bb98050796b649e85481845->setAttribute('xmlns:xlink', 'http://www.w3.org/TR/xlink');$v0cc175b9c0f1b6a831c399e269772661 = $v9a09b4dfda82e3e665e31092d1c3ec8d->createAttribute("version");$v0cc175b9c0f1b6a831c399e269772661->appendChild($v9a09b4dfda82e3e665e31092d1c3ec8d->createTextNode(self::VERSION));$v63a9f0ea7bb98050796b649e85481845->appendChild($v0cc175b9c0f1b6a831c399e269772661);$v9a09b4dfda82e3e665e31092d1c3ec8d->appendChild($v63a9f0ea7bb98050796b649e85481845);$this->translator = new xmlTranslator($v9a09b4dfda82e3e665e31092d1c3ec8d);$this->doc = $v9a09b4dfda82e3e665e31092d1c3ec8d;$this->root = $v63a9f0ea7bb98050796b649e85481845;}public function addElements($v6a7f245843454cf4f28ad7c5e2572aa2) {foreach ($v6a7f245843454cf4f28ad7c5e2572aa2 as $v65c10911d8b8591219a21ebacf46da01) {if ($v65c10911d8b8591219a21ebacf46da01 instanceof umiHierarchyElement) $v65c10911d8b8591219a21ebacf46da01 = $v65c10911d8b8591219a21ebacf46da01->getId();$this->elements[] = $v65c10911d8b8591219a21ebacf46da01;}}public function addBranches($v92ec19ffde05e15769b1bb3ee05ad745) {foreach ($v92ec19ffde05e15769b1bb3ee05ad745 as $v65c10911d8b8591219a21ebacf46da01) {if ($v65c10911d8b8591219a21ebacf46da01 instanceof umiHierarchyElement) $v65c10911d8b8591219a21ebacf46da01 = $v65c10911d8b8591219a21ebacf46da01->getId();$this->branches[] = $v65c10911d8b8591219a21ebacf46da01;}}public function addObjects($v5891da2d64975cae48d175d1e001f5da) {foreach ($v5891da2d64975cae48d175d1e001f5da as $vbe8f80182e0c983916da7338c2c1c040) {if ($vbe8f80182e0c983916da7338c2c1c040 instanceof umiObject) $vbe8f80182e0c983916da7338c2c1c040 = $vbe8f80182e0c983916da7338c2c1c040->getId();if ($vbe8f80182e0c983916da7338c2c1c040) $this->objects[] = $vbe8f80182e0c983916da7338c2c1c040;}}public function addTypes($vd14a8022b085f9ef19d479cbdd581127) {foreach ($vd14a8022b085f9ef19d479cbdd581127 as $v599dcce2998a6b40b1e38e8c6006cb0a) {if ($v599dcce2998a6b40b1e38e8c6006cb0a instanceof umiObjectType) $v599dcce2998a6b40b1e38e8c6006cb0a = $v599dcce2998a6b40b1e38e8c6006cb0a->getId();$this->types[] = $v599dcce2998a6b40b1e38e8c6006cb0a;}}public function execute() {$this->createGrid();if ($this->types) $this->exportTypes();if ($this->elements) $this->exportElements();if ($this->branches) $this->exportBranches();if ($this->objects) $this->exportObjects();$v8277e0910d750195b448797616e091ad = $this->doc;$v6f8f57715090da2632453988d9a1501b = $this->meta_container;if ($this->limit) {$v83878c91171338902e0fe0fb97a8c47a = $v8277e0910d750195b448797616e091ad->createElement("parts");$vd95679752134a2d9eb61dbd7b91c4bcc = $v8277e0910d750195b448797616e091ad->createElement("offset");$vd95679752134a2d9eb61dbd7b91c4bcc->appendChild($v8277e0910d750195b448797616e091ad->createTextNode($this->offset));$v83878c91171338902e0fe0fb97a8c47a->appendChild($vd95679752134a2d9eb61dbd7b91c4bcc);$v2db95e8e1a9267b7a1188556b2013b33 = $v8277e0910d750195b448797616e091ad->createElement("limit");$v2db95e8e1a9267b7a1188556b2013b33->appendChild($v8277e0910d750195b448797616e091ad->createTextNode($this->limit));$v83878c91171338902e0fe0fb97a8c47a->appendChild($v2db95e8e1a9267b7a1188556b2013b33);if (!$this->break) {$v4a8a08f09d37b73795649038408b5f33 = $v8277e0910d750195b448797616e091ad->createElement("complete");$v4a8a08f09d37b73795649038408b5f33->appendChild($v8277e0910d750195b448797616e091ad->createTextNode("1"));$v83878c91171338902e0fe0fb97a8c47a->appendChild($v4a8a08f09d37b73795649038408b5f33);}$v6f8f57715090da2632453988d9a1501b->appendChild($v83878c91171338902e0fe0fb97a8c47a);}if (count($this->branches)) {$v92ec19ffde05e15769b1bb3ee05ad745 = array();foreach ($this->branches as $v09fd5b139469053e6cd6e28cf8725337) {$v92ec19ffde05e15769b1bb3ee05ad745[] =  isset($this->exported_elements[$v09fd5b139469053e6cd6e28cf8725337]) ? $this->exported_elements[$v09fd5b139469053e6cd6e28cf8725337] : $v09fd5b139469053e6cd6e28cf8725337;}$v7b8b965ad4bca0e41ab51de7b31363a1 = $v8277e0910d750195b448797616e091ad->createElement('branches');$this->translateEntity(array('nodes:id' => $v92ec19ffde05e15769b1bb3ee05ad745), $v7b8b965ad4bca0e41ab51de7b31363a1);$v6f8f57715090da2632453988d9a1501b->appendChild($v7b8b965ad4bca0e41ab51de7b31363a1);}return $this->doc;}protected function createDateSection($vd7e6d55ba379a13d08c25d15faf2a23b, DOMElement $v5f0b6ebc4bea10285ba2b8a6ce78b863) {$v8277e0910d750195b448797616e091ad = $this->doc;$v5fc732311905cb27e82d67f4f6511f7f = new umiDate($vd7e6d55ba379a13d08c25d15faf2a23b);$v7b8b965ad4bca0e41ab51de7b31363a1 = $v8277e0910d750195b448797616e091ad->createElement('timestamp');$v7b8b965ad4bca0e41ab51de7b31363a1->appendChild($v8277e0910d750195b448797616e091ad->createTextNode($v5fc732311905cb27e82d67f4f6511f7f->getFormattedDate("U")));$v5f0b6ebc4bea10285ba2b8a6ce78b863->appendChild($v7b8b965ad4bca0e41ab51de7b31363a1);$v7b8b965ad4bca0e41ab51de7b31363a1 = $v8277e0910d750195b448797616e091ad->createElement('rfc');$v7b8b965ad4bca0e41ab51de7b31363a1->appendChild($v8277e0910d750195b448797616e091ad->createTextNode($v5fc732311905cb27e82d67f4f6511f7f->getFormattedDate("r")));$v5f0b6ebc4bea10285ba2b8a6ce78b863->appendChild($v7b8b965ad4bca0e41ab51de7b31363a1);$v7b8b965ad4bca0e41ab51de7b31363a1 = $v8277e0910d750195b448797616e091ad->createElement('utc');$v7b8b965ad4bca0e41ab51de7b31363a1->appendChild($v8277e0910d750195b448797616e091ad->createTextNode($v5fc732311905cb27e82d67f4f6511f7f->getFormattedDate(DATE_ATOM)));$v5f0b6ebc4bea10285ba2b8a6ce78b863->appendChild($v7b8b965ad4bca0e41ab51de7b31363a1);return $v5f0b6ebc4bea10285ba2b8a6ce78b863;}protected function createGrid() {$v8277e0910d750195b448797616e091ad = $this->doc;$v6f8f57715090da2632453988d9a1501b = $v8277e0910d750195b448797616e091ad->createElement("meta");$v8b1dc169bf460ee884fceef66c6607d6 = cmsController::getInstance();$vb1444fb0c07653567ad325aa25d4e37a = regedit::getInstance();$vad5f82e879a9c5d6b5b442eb37e50551 = $v8b1dc169bf460ee884fceef66c6607d6->getCurrentDomain();$v7572559ca86e781ba8fe8073a0b725c6 = $v8b1dc169bf460ee884fceef66c6607d6->getCurrentLang();$v7b8b965ad4bca0e41ab51de7b31363a1 = $v8277e0910d750195b448797616e091ad->createElement('site-name');$v7b8b965ad4bca0e41ab51de7b31363a1->appendChild($v8277e0910d750195b448797616e091ad->createCDATASection($vb1444fb0c07653567ad325aa25d4e37a->getVal("//settings/site_name")));$v6f8f57715090da2632453988d9a1501b->appendChild($v7b8b965ad4bca0e41ab51de7b31363a1);$v7b8b965ad4bca0e41ab51de7b31363a1 = $v8277e0910d750195b448797616e091ad->createElement('domain');$v7b8b965ad4bca0e41ab51de7b31363a1->appendChild($v8277e0910d750195b448797616e091ad->createCDATASection($vad5f82e879a9c5d6b5b442eb37e50551->getHost()));$v6f8f57715090da2632453988d9a1501b->appendChild($v7b8b965ad4bca0e41ab51de7b31363a1);$v7b8b965ad4bca0e41ab51de7b31363a1 = $v8277e0910d750195b448797616e091ad->createElement('lang');$v7b8b965ad4bca0e41ab51de7b31363a1->appendChild($v8277e0910d750195b448797616e091ad->createCDATASection($v7572559ca86e781ba8fe8073a0b725c6->getPrefix()));$v6f8f57715090da2632453988d9a1501b->appendChild($v7b8b965ad4bca0e41ab51de7b31363a1);$v7b8b965ad4bca0e41ab51de7b31363a1 = $v8277e0910d750195b448797616e091ad->createElement('source-name');$v3a6d0284e743dc4a9b86f97d6dd1a3bf = strlen($this->source_name) ? $this->source_name : md5($vad5f82e879a9c5d6b5b442eb37e50551->getId() . $v7572559ca86e781ba8fe8073a0b725c6->getId());$v7b8b965ad4bca0e41ab51de7b31363a1->appendChild($v8277e0910d750195b448797616e091ad->createCDATASection($v3a6d0284e743dc4a9b86f97d6dd1a3bf));$v6f8f57715090da2632453988d9a1501b->appendChild($v7b8b965ad4bca0e41ab51de7b31363a1);$v7b8b965ad4bca0e41ab51de7b31363a1 = $v8277e0910d750195b448797616e091ad->createElement('generate-time');$this->createDateSection(time(), $v7b8b965ad4bca0e41ab51de7b31363a1);$v6f8f57715090da2632453988d9a1501b->appendChild($v7b8b965ad4bca0e41ab51de7b31363a1);$this->root->appendChild($v6f8f57715090da2632453988d9a1501b);$this->meta_container = $v6f8f57715090da2632453988d9a1501b;$this->types_container = $v8277e0910d750195b448797616e091ad->createElement('types');$this->root->appendChild($this->types_container);$this->pages_container = $v8277e0910d750195b448797616e091ad->createElement('pages');$this->root->appendChild($this->pages_container);$this->objects_container = $v8277e0910d750195b448797616e091ad->createElement('objects');$this->root->appendChild($this->objects_container);}protected function translateEntity($vf5e638cc78dd325906c1298a0c21fb6b, $v5f0b6ebc4bea10285ba2b8a6ce78b863) {$result = $this->translator->chooseTranslator($v5f0b6ebc4bea10285ba2b8a6ce78b863, $vf5e638cc78dd325906c1298a0c21fb6b, true);}protected function exportType($v94757cae63fd3e398c0811a976dd6bbe) {$v599dcce2998a6b40b1e38e8c6006cb0a = umiObjectTypesCollection::getInstance()->getType($v94757cae63fd3e398c0811a976dd6bbe);if (!$v599dcce2998a6b40b1e38e8c6006cb0a instanceof umiObjectType) return false;if (isset($this->exported_types[$v94757cae63fd3e398c0811a976dd6bbe])) return;$v2e3c048401582f4247d7ccac43657d2d = $v599dcce2998a6b40b1e38e8c6006cb0a->getParentId();if ($v2e3c048401582f4247d7ccac43657d2d) {$this->exportType($v2e3c048401582f4247d7ccac43657d2d);}$v4a8a08f09d37b73795649038408b5f33 = $this->doc->createElement('type');$this->types_container->appendChild($v4a8a08f09d37b73795649038408b5f33);$this->translateEntity($v599dcce2998a6b40b1e38e8c6006cb0a, $v4a8a08f09d37b73795649038408b5f33);$va240be392fd0549ece5558553983d79b = $this->relations->getOldTypeIdRelation($this->source_id, $v94757cae63fd3e398c0811a976dd6bbe);if (!$va240be392fd0549ece5558553983d79b) {$va240be392fd0549ece5558553983d79b = ($v94757cae63fd3e398c0811a976dd6bbe == self::ROOT_PAGE_TYPE_ID) ? '{root-pages-type}' : $v94757cae63fd3e398c0811a976dd6bbe;$this->relations->setTypeIdRelation($this->source_id, $va240be392fd0549ece5558553983d79b, $v94757cae63fd3e398c0811a976dd6bbe);}$v4a8a08f09d37b73795649038408b5f33->setAttribute('id', $va240be392fd0549ece5558553983d79b);$v2e3c048401582f4247d7ccac43657d2d = $v599dcce2998a6b40b1e38e8c6006cb0a->getParentId();if ($v2e3c048401582f4247d7ccac43657d2d) {$vd3fbb9ff0b93cc92c5414344402a74bb = $this->relations->getOldTypeIdRelation($this->source_id, $v2e3c048401582f4247d7ccac43657d2d);if ($vd3fbb9ff0b93cc92c5414344402a74bb === false) {$vd3fbb9ff0b93cc92c5414344402a74bb = ($v2e3c048401582f4247d7ccac43657d2d == self::ROOT_PAGE_TYPE_ID) ? '{root-pages-type}' : $v2e3c048401582f4247d7ccac43657d2d;$this->relations->setTypeIdRelation($this->source_id, $vd3fbb9ff0b93cc92c5414344402a74bb, $v2e3c048401582f4247d7ccac43657d2d);}$v4a8a08f09d37b73795649038408b5f33->setAttribute('parent-id', $vd3fbb9ff0b93cc92c5414344402a74bb);}$v3643b86326b2ffcc0a085b4dd3a4309b = new DOMXPath($this->doc);$v1a13105b7e4eb5fb2e7c9515ac06aa48 = $v3643b86326b2ffcc0a085b4dd3a4309b->evaluate("fieldgroups/group", $v4a8a08f09d37b73795649038408b5f33);foreach ($v1a13105b7e4eb5fb2e7c9515ac06aa48 as $vdb0f6f37ebeb6ea09489124345af2a45) {$v0e939a4ffd3aacd724dd3b50147b4353 = intval($vdb0f6f37ebeb6ea09489124345af2a45->getAttribute('id'));$veeeb23fbd23e52a6a6ff78b9f18cbc4e = $vdb0f6f37ebeb6ea09489124345af2a45->getAttribute('name');$v8b5117d64adac4ccbb2c8948d9112c5b = $this->relations->getOldGroupName($this->source_id, $v94757cae63fd3e398c0811a976dd6bbe, $v0e939a4ffd3aacd724dd3b50147b4353);if ($v8b5117d64adac4ccbb2c8948d9112c5b === false) {$this->relations->setGroupIdRelation($this->source_id, $v94757cae63fd3e398c0811a976dd6bbe, $veeeb23fbd23e52a6a6ff78b9f18cbc4e, $v0e939a4ffd3aacd724dd3b50147b4353);}else {$vdb0f6f37ebeb6ea09489124345af2a45->setAttribute('name', $v8b5117d64adac4ccbb2c8948d9112c5b);}}$v1a13105b7e4eb5fb2e7c9515ac06aa48 = $v3643b86326b2ffcc0a085b4dd3a4309b->evaluate("fieldgroups/group/field", $v4a8a08f09d37b73795649038408b5f33);foreach ($v1a13105b7e4eb5fb2e7c9515ac06aa48 as $v06e3d36fa30cea095545139854ad1fb9) {$v3aabf39f2d943fa886d86dcbbee4d910 = intval($v06e3d36fa30cea095545139854ad1fb9->getAttribute('id'));$v73f329f154a663bfda020aadcdd0b775 = $v06e3d36fa30cea095545139854ad1fb9->getAttribute('name');$v528ca8fdf35a8b13b093b5786a22c0bf = $this->relations->getOldFieldName($this->source_id, $v94757cae63fd3e398c0811a976dd6bbe, $v3aabf39f2d943fa886d86dcbbee4d910);if ($v528ca8fdf35a8b13b093b5786a22c0bf === false) {$this->relations->setFieldIdRelation($this->source_id, $v94757cae63fd3e398c0811a976dd6bbe, $v73f329f154a663bfda020aadcdd0b775, $v3aabf39f2d943fa886d86dcbbee4d910);}else {$v06e3d36fa30cea095545139854ad1fb9->setAttribute('name', $v528ca8fdf35a8b13b093b5786a22c0bf);}}$this->exported_types[$v94757cae63fd3e398c0811a976dd6bbe] = $va240be392fd0549ece5558553983d79b;}protected function exportTypes() {foreach ($this->types as $v599dcce2998a6b40b1e38e8c6006cb0a) {$this->exportType($v599dcce2998a6b40b1e38e8c6006cb0a);}}protected function exportBranches() {foreach ($this->branches as $v9603a224b40d7b67210b78f2e390d00f) {if ($this->break) break;$this->exportBranch($v9603a224b40d7b67210b78f2e390d00f);}}protected function exportBranch($v7057e8409c7c531a1a6e9ac3df4ed549) {$v9603a224b40d7b67210b78f2e390d00f = umiHierarchy::getInstance()->getElement($v7057e8409c7c531a1a6e9ac3df4ed549);if (!$v9603a224b40d7b67210b78f2e390d00f instanceof umiHierarchyElement) return false;$this->exportElement($v7057e8409c7c531a1a6e9ac3df4ed549);$vadce578d04ed03c31f6ac59451fcf8e4 = umiHierarchy::getInstance()->getChilds($v9603a224b40d7b67210b78f2e390d00f->getId(), true, true, 1);foreach ($vadce578d04ed03c31f6ac59451fcf8e4 as $vf36263a38d7de5cdaa953c1e2b2f79b5 => $vfa816edb83e95bf0c8da580bdfd491ef) {if ($this->break) return;$this->exportElement($vf36263a38d7de5cdaa953c1e2b2f79b5);$this->exportBranch($vf36263a38d7de5cdaa953c1e2b2f79b5);}}protected function exportElement($v7057e8409c7c531a1a6e9ac3df4ed549) {if (isset($this->exported_elements[$v7057e8409c7c531a1a6e9ac3df4ed549])) return;if ($this->limit) {if ($this->position < $this->offset) {$this->position++;return;}if ($this->position >= $this->offset + $this->limit - 1) $this->break = true;}$this->position++;$v8e2dcfd7e7e24b1ca76c1193f645902b = umiHierarchy::getInstance()->getElement($v7057e8409c7c531a1a6e9ac3df4ed549);if (!$v8e2dcfd7e7e24b1ca76c1193f645902b instanceof umiHierarchyElement) return false;$v94757cae63fd3e398c0811a976dd6bbe = $v8e2dcfd7e7e24b1ca76c1193f645902b->getObjectTypeId();$this->exportType($v94757cae63fd3e398c0811a976dd6bbe);$v4a8a08f09d37b73795649038408b5f33 = $this->doc->createElement('page');$this->pages_container->appendChild($v4a8a08f09d37b73795649038408b5f33);$this->translateEntity($v8e2dcfd7e7e24b1ca76c1193f645902b, $v4a8a08f09d37b73795649038408b5f33);$vd02e12eb6d6c3f6ebd763197df01e211   = $v8e2dcfd7e7e24b1ca76c1193f645902b->getTplId();$vf9bdb7221804d6d17b654ec67c5a0735  = templatesCollection::getInstance()->getTemplate($vd02e12eb6d6c3f6ebd763197df01e211)->getFilename();$v557c9fc3c1f769c263ae2d3113ff1501 = $this->doc->createElement('template');$v557c9fc3c1f769c263ae2d3113ff1501->setAttribute("id", $vd02e12eb6d6c3f6ebd763197df01e211);$v557c9fc3c1f769c263ae2d3113ff1501->appendChild($this->doc->createTextNode($vf9bdb7221804d6d17b654ec67c5a0735));$v4a8a08f09d37b73795649038408b5f33->appendChild($v557c9fc3c1f769c263ae2d3113ff1501);$v13fba93b98196f2395dec474c9ba27e5 = $this->relations->getOldIdRelation($this->source_id, $v7057e8409c7c531a1a6e9ac3df4ed549);if ($v13fba93b98196f2395dec474c9ba27e5 === false) {$this->relations->setIdRelation($this->source_id, $v7057e8409c7c531a1a6e9ac3df4ed549, $v7057e8409c7c531a1a6e9ac3df4ed549);$v13fba93b98196f2395dec474c9ba27e5 = $v7057e8409c7c531a1a6e9ac3df4ed549;}else {$v4a8a08f09d37b73795649038408b5f33->setAttribute('id', $v13fba93b98196f2395dec474c9ba27e5);}$v6be379826b20cc58475f636e33f4606b = $v8e2dcfd7e7e24b1ca76c1193f645902b->getParentId();if ($v6be379826b20cc58475f636e33f4606b) {$v65dce76bfdfbc3dfd9962e8d154dab64 = $this->relations->getOldIdRelation($this->source_id, $v6be379826b20cc58475f636e33f4606b);if ($v65dce76bfdfbc3dfd9962e8d154dab64 === false) {$this->relations->setIdRelation($this->source_id, $v6be379826b20cc58475f636e33f4606b, $v6be379826b20cc58475f636e33f4606b);}else {$v4a8a08f09d37b73795649038408b5f33->setAttribute('parentId', $v65dce76bfdfbc3dfd9962e8d154dab64);}}$v3643b86326b2ffcc0a085b4dd3a4309b = new DOMXPath($this->doc);if (isset($this->exported_types[$v94757cae63fd3e398c0811a976dd6bbe])) {$v4a8a08f09d37b73795649038408b5f33->setAttribute('type-id', $this->exported_types[$v94757cae63fd3e398c0811a976dd6bbe]);}$v1a13105b7e4eb5fb2e7c9515ac06aa48 = $v3643b86326b2ffcc0a085b4dd3a4309b->evaluate("properties/group", $v4a8a08f09d37b73795649038408b5f33);foreach ($v1a13105b7e4eb5fb2e7c9515ac06aa48 as $vdb0f6f37ebeb6ea09489124345af2a45) {$v0e939a4ffd3aacd724dd3b50147b4353 = intval($vdb0f6f37ebeb6ea09489124345af2a45->getAttribute('id'));$v8b5117d64adac4ccbb2c8948d9112c5b = $this->relations->getOldGroupName($this->source_id, $v94757cae63fd3e398c0811a976dd6bbe, $v0e939a4ffd3aacd724dd3b50147b4353);if ($v8b5117d64adac4ccbb2c8948d9112c5b) {$vdb0f6f37ebeb6ea09489124345af2a45->setAttribute('name', $v8b5117d64adac4ccbb2c8948d9112c5b);}}$v1a13105b7e4eb5fb2e7c9515ac06aa48 = $v3643b86326b2ffcc0a085b4dd3a4309b->evaluate("properties/group/property", $v4a8a08f09d37b73795649038408b5f33);foreach ($v1a13105b7e4eb5fb2e7c9515ac06aa48 as $v06e3d36fa30cea095545139854ad1fb9) {$v3aabf39f2d943fa886d86dcbbee4d910 = intval($v06e3d36fa30cea095545139854ad1fb9->getAttribute('id'));$v528ca8fdf35a8b13b093b5786a22c0bf = $this->relations->getOldFieldName($this->source_id, $v94757cae63fd3e398c0811a976dd6bbe, $v3aabf39f2d943fa886d86dcbbee4d910);if ($v528ca8fdf35a8b13b093b5786a22c0bf) {$v06e3d36fa30cea095545139854ad1fb9->setAttribute('name', $v528ca8fdf35a8b13b093b5786a22c0bf);}}$this->exported_elements[$v7057e8409c7c531a1a6e9ac3df4ed549] = $v13fba93b98196f2395dec474c9ba27e5;}protected function exportObject($vaf31437ce61345f416579830a98c91e5) {if (in_array($vaf31437ce61345f416579830a98c91e5, $this->exported_objects)) return;$this->exported_objects[] = $vaf31437ce61345f416579830a98c91e5;if ($this->limit) {if ($this->position < $this->offset) {$this->position++;return;}if ($this->position >= $this->offset + $this->limit - 1) $this->break = true;}$this->position++;$va8cfde6331bd59eb2ac96f8911c4b666 = umiObjectsCollection::getInstance()->getObject($vaf31437ce61345f416579830a98c91e5);if (!$va8cfde6331bd59eb2ac96f8911c4b666 instanceof umiObject) return false;$v94757cae63fd3e398c0811a976dd6bbe = $va8cfde6331bd59eb2ac96f8911c4b666->getTypeId();$this->exportType($v94757cae63fd3e398c0811a976dd6bbe);$v4a8a08f09d37b73795649038408b5f33 = $this->doc->createElement('object');$this->objects_container->appendChild($v4a8a08f09d37b73795649038408b5f33);$this->translateEntity($va8cfde6331bd59eb2ac96f8911c4b666, $v4a8a08f09d37b73795649038408b5f33);$vdad7dfa79a52fb5c76dff4c6bc0ddfe4 = $this->relations->getOldObjectIdRelation($this->source_id, $vaf31437ce61345f416579830a98c91e5);if ($vdad7dfa79a52fb5c76dff4c6bc0ddfe4 === false) {$this->relations->setObjectIdRelation($this->source_id, $vaf31437ce61345f416579830a98c91e5, $vaf31437ce61345f416579830a98c91e5);}else {$v4a8a08f09d37b73795649038408b5f33->setAttribute('id', $vdad7dfa79a52fb5c76dff4c6bc0ddfe4);}$v3643b86326b2ffcc0a085b4dd3a4309b = new DOMXPath($this->doc);if (isset($this->exported_types[$v94757cae63fd3e398c0811a976dd6bbe])) {$v4a8a08f09d37b73795649038408b5f33->setAttribute('type-id', $this->exported_types[$v94757cae63fd3e398c0811a976dd6bbe]);}$v1a13105b7e4eb5fb2e7c9515ac06aa48 = $v3643b86326b2ffcc0a085b4dd3a4309b->evaluate("properties/group", $v4a8a08f09d37b73795649038408b5f33);foreach ($v1a13105b7e4eb5fb2e7c9515ac06aa48 as $vdb0f6f37ebeb6ea09489124345af2a45) {$v0e939a4ffd3aacd724dd3b50147b4353 = intval($vdb0f6f37ebeb6ea09489124345af2a45->getAttribute('id'));$v8b5117d64adac4ccbb2c8948d9112c5b = $this->relations->getOldGroupName($this->source_id, $v94757cae63fd3e398c0811a976dd6bbe, $v0e939a4ffd3aacd724dd3b50147b4353);if ($v8b5117d64adac4ccbb2c8948d9112c5b) {$vdb0f6f37ebeb6ea09489124345af2a45->setAttribute('name', $v8b5117d64adac4ccbb2c8948d9112c5b);}}$v1a13105b7e4eb5fb2e7c9515ac06aa48 = $v3643b86326b2ffcc0a085b4dd3a4309b->evaluate("properties/group/property", $v4a8a08f09d37b73795649038408b5f33);foreach ($v1a13105b7e4eb5fb2e7c9515ac06aa48 as $v06e3d36fa30cea095545139854ad1fb9) {$v3aabf39f2d943fa886d86dcbbee4d910 = intval($v06e3d36fa30cea095545139854ad1fb9->getAttribute('id'));$v528ca8fdf35a8b13b093b5786a22c0bf = $this->relations->getOldFieldName($this->source_id, $v94757cae63fd3e398c0811a976dd6bbe, $v3aabf39f2d943fa886d86dcbbee4d910);if ($v528ca8fdf35a8b13b093b5786a22c0bf) {$v06e3d36fa30cea095545139854ad1fb9->setAttribute('name', $v528ca8fdf35a8b13b093b5786a22c0bf);}}}protected function exportElements() {foreach ($this->elements as $v7057e8409c7c531a1a6e9ac3df4ed549) {if ($this->break) return;$this->exportElement($v7057e8409c7c531a1a6e9ac3df4ed549);}}protected function exportObjects() {foreach ($this->objects as $vaf31437ce61345f416579830a98c91e5) {if ($this->break) return;$this->exportObject($vaf31437ce61345f416579830a98c91e5);}}}?>