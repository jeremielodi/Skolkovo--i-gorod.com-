<?php
abstract class __eventsHandlers {public function onCloneElement(iUmiEventPoint $v161c9aaa4fe035e7b2f465bc59f3ab45) {if($v161c9aaa4fe035e7b2f465bc59f3ab45->getMode() == 'after') {$vb81ca7c0ccaa77e7aa91936ab0070695 = umiHierarchy::getInstance();$v7552cd149af7495ee7d8225974e50f80 = $v161c9aaa4fe035e7b2f465bc59f3ab45->getParam('newElementId');$v8e2dcfd7e7e24b1ca76c1193f645902b   = $vb81ca7c0ccaa77e7aa91936ab0070695->getElement($v7552cd149af7495ee7d8225974e50f80);if($v8e2dcfd7e7e24b1ca76c1193f645902b &&       $v8e2dcfd7e7e24b1ca76c1193f645902b->getTypeId() == umiHierarchyTypesCollection::getInstance()->getTypeByName('vote', 'poll')->getId()) {$vdb6d9b451b818ccc9a449383f2f0c450 = umiObjectsCollection::getInstance();$vab4acc08709aae5e2d14e4c7ec0543e6 = $v8e2dcfd7e7e24b1ca76c1193f645902b->getValue('answers');$vbe4e0a5e67bc6fc4a48516382cd1181d = array();foreach($vab4acc08709aae5e2d14e4c7ec0543e6 as $v6f2b19de0cfc20a49d5b52d51dc1129e) {if($v9a98b9a3de3f6052e0df166b41dc8165 = $vdb6d9b451b818ccc9a449383f2f0c450->cloneObject($v6f2b19de0cfc20a49d5b52d51dc1129e)) {$vbe4e0a5e67bc6fc4a48516382cd1181d[] = $v9a98b9a3de3f6052e0df166b41dc8165;$va363b8d13575101a0226e8d0d054f2e7       = $vdb6d9b451b818ccc9a449383f2f0c450->getObject($v9a98b9a3de3f6052e0df166b41dc8165);$va363b8d13575101a0226e8d0d054f2e7->setValue('poll_rel', $v7552cd149af7495ee7d8225974e50f80);$va363b8d13575101a0226e8d0d054f2e7->setValue('count', 0);$va363b8d13575101a0226e8d0d054f2e7->commit();}}$v8e2dcfd7e7e24b1ca76c1193f645902b->setValue('answers', $vbe4e0a5e67bc6fc4a48516382cd1181d);$v8e2dcfd7e7e24b1ca76c1193f645902b->commit();}}}};?>
