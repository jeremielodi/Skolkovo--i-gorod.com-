<?php
 interface iDomain {public function getIsDefault();public function setIsDefault($ve558e63f3083922542d8745224a66eea);public function addMirrow($vbe5301edeed9917bd552fa98fa1c1766);public function delMirrow($vb240b3b51bcbee2838ac4e9835f9ef51);public function getMirrowId($vbe5301edeed9917bd552fa98fa1c1766);public function getMirrow($vb240b3b51bcbee2838ac4e9835f9ef51);public function getMirrowsList();public function delAllMirrows();public function isMirrowExists($vb240b3b51bcbee2838ac4e9835f9ef51);public function getDefaultLangId();public function setDefaultLangId($vf585b7f018bb4ced15a03683a733e50b);};interface iDomainMirrow {public function getHost();public function setHost($v67b3dba8bc6778101892eb77249db32e);};interface iDomainsCollection {public function addDomain($v67b3dba8bc6778101892eb77249db32e, $va840f33f4bf1f6686232b6ca1c12384e, $ve558e63f3083922542d8745224a66eea = false);public function delDomain($v72ee76c5c29383b7c9f9225c1fa4d10b);public function getDomain($v72ee76c5c29383b7c9f9225c1fa4d10b);public function getDefaultDomain();public function setDefaultDomain($v72ee76c5c29383b7c9f9225c1fa4d10b);public function getDomainId($v67b3dba8bc6778101892eb77249db32e, $vaa852eb4a7729f6a309496b84a01631b = true);public function getList();};interface iLang {public function getTitle();public function setTitle($vd5d3db1765287eef77d7927cc956f50a);public function getPrefix();public function setPrefix($v851f5ac9941d720844d143ed9cfcf60a);public function getIsDefault();public function setIsDefault($ve558e63f3083922542d8745224a66eea);};interface iLangsCollection {public function addLang($v851f5ac9941d720844d143ed9cfcf60a, $vd5d3db1765287eef77d7927cc956f50a, $ve558e63f3083922542d8745224a66eea = false);public function delLang($vf585b7f018bb4ced15a03683a733e50b);public function getDefaultLang();public function setDefault($vf585b7f018bb4ced15a03683a733e50b);public function getLangId($v851f5ac9941d720844d143ed9cfcf60a);public function getLang($vf585b7f018bb4ced15a03683a733e50b);public function getList();public function getAssocArray();};interface iTemplate {public function getFilename();public function setFilename($v435ed7e9f07f740abf511a62c00eef6e);public function getTitle();public function setTitle($vd5d3db1765287eef77d7927cc956f50a);public function getDomainId();public function setDomainId($v72ee76c5c29383b7c9f9225c1fa4d10b);public function getLangId();public function setLangId($vf585b7f018bb4ced15a03683a733e50b);public function getIsDefault();public function setIsDefault($ve558e63f3083922542d8745224a66eea);public function getUsedPages();public function setUsedPages($v70cc97e695e61c16cbbc6297b3865289);};interface iTemplatesCollection {public function addTemplate($v435ed7e9f07f740abf511a62c00eef6e, $vd5d3db1765287eef77d7927cc956f50a, $v72ee76c5c29383b7c9f9225c1fa4d10b = false, $vf585b7f018bb4ced15a03683a733e50b = false, $ve558e63f3083922542d8745224a66eea = false);public function delTemplate($v3200a31fc05da4e9d5a0465c36822e2f);public function getDefaultTemplate($v662cbf1253ac7d8750ed9190c52163e5 = false, $v78e6dd7a49f5b0cb2106a3a434dd5c86 = false);public function setDefaultTemplate($v74f5356453a69e438e0f58ef93103cc0, $v662cbf1253ac7d8750ed9190c52163e5 = false, $v78e6dd7a49f5b0cb2106a3a434dd5c86 = false);public function getTemplatesList($v72ee76c5c29383b7c9f9225c1fa4d10b, $vf585b7f018bb4ced15a03683a733e50b);public function getTemplate($v3200a31fc05da4e9d5a0465c36822e2f);};interface iUmiHierarchy {public function addElement($va722790b49e8eb1f37a1c672326ec501, $vacf567c9c3d6cf7c6e2cc0ce108e0631, $vb068931cc450442b63f5b3d276ea4297, $vd84ff935144e00c3e1d395c2379aca47, $v6301cee35ea764a1e241978f93f01069 = false, $v72ee76c5c29383b7c9f9225c1fa4d10b = false, $vf585b7f018bb4ced15a03683a733e50b = false, $v3200a31fc05da4e9d5a0465c36822e2f = false);public function getElement($v7552cd149af7495ee7d8225974e50f80, $ve70325c72e806c33fd52022dd9c07eb2 = false, $vbeaf7e25161be5ef9784e550ab4fc891 = false);public function delElement($v7552cd149af7495ee7d8225974e50f80);public function copyElement($v7552cd149af7495ee7d8225974e50f80, $v05ea772b3414e6a459bc1b52cc830436, $v5972c4d2dc988e33130281251a6f282a = false);public function cloneElement($v7552cd149af7495ee7d8225974e50f80, $v05ea772b3414e6a459bc1b52cc830436, $v5972c4d2dc988e33130281251a6f282a = false);public function getDeletedList();public function restoreElement($v7552cd149af7495ee7d8225974e50f80);public function removeDeletedElement($v7552cd149af7495ee7d8225974e50f80);public function removeDeletedAll();public function getParent($v7552cd149af7495ee7d8225974e50f80);public function getAllParents($v970489db8d4f274439de776cfb2f36c2, $vd990c45185b59769adb599de6227718d = false);public function getChilds($v7552cd149af7495ee7d8225974e50f80, $v6ca4142a47386791b174d9cd8d1841ee = true, $vbc8c7a7f95968293eac2b176cc1a21b5 = true, $v12a055bf01a31369fe81ac35d85c7bc1 = 0, $vacf567c9c3d6cf7c6e2cc0ce108e0631 = false, $v72ee76c5c29383b7c9f9225c1fa4d10b = false);public function getChildsCount($v7552cd149af7495ee7d8225974e50f80, $v6ca4142a47386791b174d9cd8d1841ee = true, $vbc8c7a7f95968293eac2b176cc1a21b5 = true, $v12a055bf01a31369fe81ac35d85c7bc1 = 0, $vacf567c9c3d6cf7c6e2cc0ce108e0631 = false, $v72ee76c5c29383b7c9f9225c1fa4d10b = false);public function getPathById($v7552cd149af7495ee7d8225974e50f80, $v5cd943c36b800237522c35155d898244 = false, $vbc9ecd0be77ceffa51fc6918c714e5d3 = false);public function getIdByPath($v4a20784bb5bad10b0f5c941a900f0c04, $v4ee7832bcc23d41fa74f84e483f1859e = false, &$v5f51e765b4dc9821bb184fe18370ab8d = 0);public static function compareStrings($v34b577be20fbc15477aadb9a08101ff9, $v91c0c59c8f6fc9aa2dc99a89f2fd0ab5);public static function convertAltName($vd84ff935144e00c3e1d395c2379aca47);public static function getTimeStamp();public function getDefaultElementId($vf585b7f018bb4ced15a03683a733e50b = false, $v72ee76c5c29383b7c9f9225c1fa4d10b = false);public function moveBefore($v7552cd149af7495ee7d8225974e50f80, $va722790b49e8eb1f37a1c672326ec501, $v2862c7667bfa3eb6b4c6fa1de2bd8826 = false);public function moveFirst($v7552cd149af7495ee7d8225974e50f80, $va722790b49e8eb1f37a1c672326ec501);public function getDominantTypeId($v7552cd149af7495ee7d8225974e50f80);public function addUpdatedElementId($v7552cd149af7495ee7d8225974e50f80);public function getUpdatedElements();public function unloadElement($v7552cd149af7495ee7d8225974e50f80);public function getElementsCount($v22884db148f0ffb0d830ba431102b0b5, $vea9f6aca279138c58f705c8d4cb4b8ce = "");public function forceAbsolutePath($vf9448cc5666e281bc210298b60567801 = true);public function getObjectInstances($v16b2b26000987faccb260b9d39df1269, $vfc9bd216c399e5612672290fa3f0cbe2 = false, $v1200c36ada21fb70df10f131f49eaf3d = false);public function getLastUpdatedElements($vaa9f73eea60a006820d0f8768bc8a3fc, $v9a5e73d67afbd1b69ff848efe5e73442 = 0);public function checkIsVirtual($v8e67e94f87e92070a0874d1de3ff8f6a);};interface iUmiHierarchyElement {public function getIsDeleted();public function setIsDeleted($va18b1057c4327b9cc46abc9fcf952bd8 = false);public function getIsActive();public function setIsActive($v367e854225a0810977297b3bedb2f309 = true);public function getIsVisible();public function setIsVisible($v19fad0416b4b101ab72faccf4c323024 = true);public function getTypeId();public function setTypeId($v5f694956811487225d15e973ca38fbab);public function getLangId();public function setLangId($vf585b7f018bb4ced15a03683a733e50b);public function getTplId();public function setTplId($vdfae309a35c166d21d4a1ab377b78a47);public function getDomainId();public function setDomainId($v72ee76c5c29383b7c9f9225c1fa4d10b);public function getUpdateTime();public function setUpdateTime($v87a3cb5c3554b2d9d8a1a773ad0936be = 0);public function getOrd();public function setOrd($v8bef1cc20ada3bef55fdf132cb2a1cb9);public function getRel();public function setRel($vd5d4bb9b2c282937ee64b1fb0495ef08);public function getObject();public function setObject(umiObject $va8cfde6331bd59eb2ac96f8911c4b666);public function setAltName($v0330da281541887f65b0a60066351c91, $v9081405e153955c7c08554c483e264cb = true);public function getAltName();public function setIsDefault($ve558e63f3083922542d8745224a66eea = true);public function getIsDefault();public function getParentId();public function getValue($v46b9e6004c49d9cc040029c197cab278, $v21ffce5b8a6cc8cc6a41448dd69623c9 = NULL);public function setValue($v46b9e6004c49d9cc040029c197cab278, $vafd40dce490ea113be83c89ca7f3052d);public function getFieldId($vc5b8d76e52be996ffe6ea3b9a19f1fed);public function getName();public function setName($vb068931cc450442b63f5b3d276ea4297);public function getObjectTypeId();public function getHierarchyType();public function getObjectId();public function getModule();public function getMethod();};interface iUmiHierarchyType {public function getName();public function setName($vb068931cc450442b63f5b3d276ea4297);public function getTitle();public function setTitle($vd5d3db1765287eef77d7927cc956f50a);public function getExt();public function setExt($vabf77184f55403d75b9d51d79162a7ca);};interface iUmiHierarchyTypesCollection {public function addType($vb068931cc450442b63f5b3d276ea4297, $vd5d3db1765287eef77d7927cc956f50a, $vabf77184f55403d75b9d51d79162a7ca = "");public function getType($v5f694956811487225d15e973ca38fbab);public function delType($v5f694956811487225d15e973ca38fbab);public function getTypeByName($v84aa805a9d919179ab8f8b24376e2ed7, $va93d60b62600196e433071e75061f398 = false);public function getTypesList();};?>