<?php
 abstract class __emarket_stores {public function stores($v7552cd149af7495ee7d8225974e50f80, $v66f6181bcb4cff4cd38fbc804a036db6 = 'default') {if(!$v66f6181bcb4cff4cd38fbc804a036db6) $v86d4b67bdb05c1ad79d81da2e44743e7 = 'default';$vb81ca7c0ccaa77e7aa91936ab0070695 = umiHierarchy::getInstance();$v5891da2d64975cae48d175d1e001f5da = umiObjectsCollection::getInstance();list($v31912934b8f34be4364cc043cd8a0176, $vd268fd226c122b3da2fabee66e798225, $v5ad10ccde9b1728f3d06c1eb0b05ab0f) = def_module::loadTemplates("./tpls/emarket/stores/{$v66f6181bcb4cff4cd38fbc804a036db6}.tpl",    'stores_block', 'stores_block_empty', 'stores_item');$v7552cd149af7495ee7d8225974e50f80 = $this->analyzeRequiredPath($v7552cd149af7495ee7d8225974e50f80);if($v7552cd149af7495ee7d8225974e50f80 == false) {throw new publicException("Wrong element id given");}$v8e2dcfd7e7e24b1ca76c1193f645902b = $vb81ca7c0ccaa77e7aa91936ab0070695->getElement($v7552cd149af7495ee7d8225974e50f80);if($v8e2dcfd7e7e24b1ca76c1193f645902b instanceof iUmiHierarchyElement == false) {throw new publicException("Wrong element id given");}$vcc390b7f9f1b1e3716189f403087d426 = $v8e2dcfd7e7e24b1ca76c1193f645902b->stores_state;$vf1386a17eed513dff70798b0551dc170 = array();$v61af09f34bc001f3b6d9139687a723fd = array();$vfbb44b4487415b134bce9c790a27fe5e = 0;if(is_array($vcc390b7f9f1b1e3716189f403087d426)) foreach($vcc390b7f9f1b1e3716189f403087d426 as $v97cdcd2f6b5abe53c3867266cb5d7649) {$va8cfde6331bd59eb2ac96f8911c4b666 = $v5891da2d64975cae48d175d1e001f5da->getObject(getArrayKey($v97cdcd2f6b5abe53c3867266cb5d7649, 'rel'));if($va8cfde6331bd59eb2ac96f8911c4b666 instanceof iUmiObject) {$ve9f40e1f1d1658681dad2dac4ae0971e = (int) getArrayKey($v97cdcd2f6b5abe53c3867266cb5d7649, 'int');$vfbb44b4487415b134bce9c790a27fe5e += $ve9f40e1f1d1658681dad2dac4ae0971e;$v8cd892b7b97ef9489ae4479d3f4ef0fc = array('attribute:amount' => $ve9f40e1f1d1658681dad2dac4ae0971e);if($va8cfde6331bd59eb2ac96f8911c4b666->primary) {$v7f005c3fa691e77c52d3297cc2699072 = (int) $v8e2dcfd7e7e24b1ca76c1193f645902b->reserved;$v8cd892b7b97ef9489ae4479d3f4ef0fc['attribute:amount'] -= $v7f005c3fa691e77c52d3297cc2699072;$v8cd892b7b97ef9489ae4479d3f4ef0fc['attribute:reserved'] = $v7f005c3fa691e77c52d3297cc2699072;$v8cd892b7b97ef9489ae4479d3f4ef0fc['attribute:primary'] = 'primary';}$v8cd892b7b97ef9489ae4479d3f4ef0fc['item'] = $va8cfde6331bd59eb2ac96f8911c4b666;$v61af09f34bc001f3b6d9139687a723fd[] = $v8cd892b7b97ef9489ae4479d3f4ef0fc;$vf1386a17eed513dff70798b0551dc170[] = def_module::parseTemplate($v5ad10ccde9b1728f3d06c1eb0b05ab0f, array(      'store_id' => $va8cfde6331bd59eb2ac96f8911c4b666->id,      'amount' => $ve9f40e1f1d1658681dad2dac4ae0971e,      'name' => $va8cfde6331bd59eb2ac96f8911c4b666->name     ), false, $va8cfde6331bd59eb2ac96f8911c4b666->id);}}$result = array(    'stores' => array(     'attribute:total-amount' => $vfbb44b4487415b134bce9c790a27fe5e,     'nodes:store' => $v61af09f34bc001f3b6d9139687a723fd    )   );$result['void:total-amount'] = $vfbb44b4487415b134bce9c790a27fe5e;$result['void:items'] = $vf1386a17eed513dff70798b0551dc170;if(!$vfbb44b4487415b134bce9c790a27fe5e) return $vd268fd226c122b3da2fabee66e798225;return def_module::parseTemplate($v31912934b8f34be4364cc043cd8a0176, $result);}};?>