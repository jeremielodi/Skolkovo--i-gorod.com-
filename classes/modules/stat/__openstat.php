<?php
abstract class __stat_openstat extends baseModuleAdmin {public function openstatCampaigns() {$v3086f2e00ea19967e011c652edfc2884 = getRequest('param0');$this->updateFilter();$v7982b1e077e535e00dc62cf8d6e9a455 = cmsController::getInstance()->getCurrentDomain()->getHost();$v23a2cbb13502e40ff869bbfa3211fc9b = cmsController::getInstance()->getCurrentLang()->getPrefix();$v5430f956c571aa9e86e91947b5da11a2 = '/'.$v23a2cbb13502e40ff869bbfa3211fc9b.'/admin/stat/'.__FUNCTION__;$v4062f8ff37e55691af3f19fac2155cf9 = '';$v9549dd6065d019211460c59a86dd6536 = new statisticFactory(dirname(__FILE__) . '/classes');$v9549dd6065d019211460c59a86dd6536->isValid('openstatCampaigns');$ve98d2f001da5678b39482efbdf5770dc = $v9549dd6065d019211460c59a86dd6536->get('openstatCampaigns');$ve98d2f001da5678b39482efbdf5770dc->setStart($this->from_time);$ve98d2f001da5678b39482efbdf5770dc->setFinish($this->to_time);$ve98d2f001da5678b39482efbdf5770dc->setDomain($this->domain);$ve98d2f001da5678b39482efbdf5770dc->setUser($this->user);$ve98d2f001da5678b39482efbdf5770dc->setLimit($this->items_per_page);if ($v3086f2e00ea19967e011c652edfc2884 === 'xml') {$result = $ve98d2f001da5678b39482efbdf5770dc->get();$v03f1bcf4bdfde045733bb97482344c55 = 0;$v58048d5700b450e117e35a9c095fa5cb = $result['summ'];$v233762765fbf2a8381bb11dac5c21b8f = $result['total'];$va985177e18afdab154ab615657ef1514 = "";$va985177e18afdab154ab615657ef1514 .= "<"."?xml version=\"1.0\" encoding=\"utf-8\"?".">\n";$va985177e18afdab154ab615657ef1514 .= <<<END
				<statistics><report name="openstatCampaigns" title="Все рекламные кампании" host="{$v7982b1e077e535e00dc62cf8d6e9a455}" lang="{$v23a2cbb13502e40ff869bbfa3211fc9b}"  timerange_start="{$this->from_time}" timerange_finish="{$this->to_time}">
				<table>
					<column field="name" title="Имя кампании" prefix="" valueSuffix="" />
					<column field="cnt" title="Переходов абс." prefix="" valueSuffix="" />
					<column field="rel" title="Переходов отн." prefix="" valueSuffix="%" />
				</table>
				<chart type="pie">
						<argument />
						<value field="cnt" />
						<caption field="name" />
				</chart>
				<data>
END;    foreach($result['all'] as $vcaf9b6b99962bf5c2264824231d7a40c) {$v02f23ea9e3029ddaa616ddb1af52ada9 = $vcaf9b6b99962bf5c2264824231d7a40c['abs'];$v03f1bcf4bdfde045733bb97482344c55 += $v02f23ea9e3029ddaa616ddb1af52ada9;$va140ee0297c98eb2fcdcffb026609e8d = $vcaf9b6b99962bf5c2264824231d7a40c['rel'];$vfc19ae0e7cb9076cc4077381bbe0b168 = $vcaf9b6b99962bf5c2264824231d7a40c['name'];$v8c1604c64857e79a748c27062fedf5a2 = $vcaf9b6b99962bf5c2264824231d7a40c['campaign_id'];$vcd51f0f2700d4b40bc1da2c3cb7b8b41 = '/'.$v23a2cbb13502e40ff869bbfa3211fc9b.'/admin/stat/openstatServicesByCampaign/'.$v8c1604c64857e79a748c27062fedf5a2;$v2b9331d042732a4c71ed6b1975fe04c4 = htmlspecialchars($vfc19ae0e7cb9076cc4077381bbe0b168);$vf986318032e24b859ae2c67396837856 = $v02f23ea9e3029ddaa616ddb1af52ada9;$vcbf015ca5cca5fca7485bcc8a9e5fee6 = round($va140ee0297c98eb2fcdcffb026609e8d, 1);$ve334be05f2d25b295e8542a58661ed67= htmlspecialchars($vcd51f0f2700d4b40bc1da2c3cb7b8b41);$va985177e18afdab154ab615657ef1514 .= <<<END
						<row name="{$v2b9331d042732a4c71ed6b1975fe04c4}" cnt="{$vf986318032e24b859ae2c67396837856}" rel="{$vcbf015ca5cca5fca7485bcc8a9e5fee6}" uri="{$ve334be05f2d25b295e8542a58661ed67}"  />
END;    }$vbbc1d718fe0a068b8d46f0b73cc73264 = ($v58048d5700b450e117e35a9c095fa5cb - $v03f1bcf4bdfde045733bb97482344c55);if ($vbbc1d718fe0a068b8d46f0b73cc73264 > 0) {$v48f808cccfc49046f79e38536b7537a7 = round($vbbc1d718fe0a068b8d46f0b73cc73264/($v58048d5700b450e117e35a9c095fa5cb/100), 1);$va985177e18afdab154ab615657ef1514 .= <<<END
						<row name="Прочее" cnt="{$vbbc1d718fe0a068b8d46f0b73cc73264}" rel="{$v48f808cccfc49046f79e38536b7537a7}" uri=""  />
END;    }$va985177e18afdab154ab615657ef1514 .= "</data>\n";$va985177e18afdab154ab615657ef1514 .= "</report></statistics>";header("Content-type: text/xml; charset=utf-8");header("Content-length: ".strlen($va985177e18afdab154ab615657ef1514));$this->flush($va985177e18afdab154ab615657ef1514);return "";}else {$v21ffce5b8a6cc8cc6a41448dd69623c9 = array();$v21ffce5b8a6cc8cc6a41448dd69623c9['filter'] = $this->getFilterPanel();$v21ffce5b8a6cc8cc6a41448dd69623c9['ReportOpenstatCampaigns']['flash:report']  = "url=".$v5430f956c571aa9e86e91947b5da11a2."/xml/".$v4062f8ff37e55691af3f19fac2155cf9;$this->setDataType("settings");$this->setActionType("view");$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($v21ffce5b8a6cc8cc6a41448dd69623c9, 'settings');$this->setData($v8d777f385d3dfec8815d20f7496026dc);return $this->doData();}}public function openstatCampaignsBySource() {$v7104764af16315c1757b119f0e04119a = getRequest('param0');$v3086f2e00ea19967e011c652edfc2884 = getRequest('param1');$ve98d2f001da5678b39482efbdf5770dc->setParams(array('source_id'=>$v7104764af16315c1757b119f0e04119a));}public function openstatServices() {$v3086f2e00ea19967e011c652edfc2884 = getRequest('param0');$this->updateFilter();$v7982b1e077e535e00dc62cf8d6e9a455 = cmsController::getInstance()->getCurrentDomain()->getHost();$v23a2cbb13502e40ff869bbfa3211fc9b = cmsController::getInstance()->getCurrentLang()->getPrefix();$v5430f956c571aa9e86e91947b5da11a2 = '/'.$v23a2cbb13502e40ff869bbfa3211fc9b.'/admin/stat/'.__FUNCTION__;$v4062f8ff37e55691af3f19fac2155cf9 = '';$v9549dd6065d019211460c59a86dd6536 = new statisticFactory(dirname(__FILE__) . '/classes');$v9549dd6065d019211460c59a86dd6536->isValid('openstatServices');$ve98d2f001da5678b39482efbdf5770dc = $v9549dd6065d019211460c59a86dd6536->get('openstatServices');$ve98d2f001da5678b39482efbdf5770dc->setStart($this->from_time);$ve98d2f001da5678b39482efbdf5770dc->setFinish($this->to_time);$ve98d2f001da5678b39482efbdf5770dc->setDomain($this->domain);$ve98d2f001da5678b39482efbdf5770dc->setUser($this->user);$ve98d2f001da5678b39482efbdf5770dc->setLimit($this->items_per_page);if ($v3086f2e00ea19967e011c652edfc2884 === 'xml') {$result = $ve98d2f001da5678b39482efbdf5770dc->get();$v03f1bcf4bdfde045733bb97482344c55 = 0;$v58048d5700b450e117e35a9c095fa5cb = $result['summ'];$v233762765fbf2a8381bb11dac5c21b8f = $result['total'];$va985177e18afdab154ab615657ef1514 = "";$va985177e18afdab154ab615657ef1514 .= "<"."?xml version=\"1.0\" encoding=\"utf-8\"?".">\n";$va985177e18afdab154ab615657ef1514 .= <<<END
				<statistics><report name="openstatServices" title="Все рекламные ресурсы" host="{$v7982b1e077e535e00dc62cf8d6e9a455}" lang="{$v23a2cbb13502e40ff869bbfa3211fc9b}"  timerange_start="{$this->from_time}" timerange_finish="{$this->to_time}">
				<table>
					<column field="name" title="Рекламный ресурс" prefix="" valueSuffix="" />
					<column field="cnt" title="Переходов абс." prefix="" valueSuffix="" />
					<column field="rel" title="Переходов отн." prefix="" valueSuffix="%" />
				</table>
				<chart type="pie">
						<argument />
						<value field="cnt" />
						<caption field="name" />
				</chart>
				<data>
END;    foreach($result['all'] as $vcaf9b6b99962bf5c2264824231d7a40c) {$v02f23ea9e3029ddaa616ddb1af52ada9 = $vcaf9b6b99962bf5c2264824231d7a40c['abs'];$v03f1bcf4bdfde045733bb97482344c55 += $v02f23ea9e3029ddaa616ddb1af52ada9;$va140ee0297c98eb2fcdcffb026609e8d = $vcaf9b6b99962bf5c2264824231d7a40c['rel'];$vfc19ae0e7cb9076cc4077381bbe0b168 = $vcaf9b6b99962bf5c2264824231d7a40c['name'];$v8c1604c64857e79a748c27062fedf5a2 = $vcaf9b6b99962bf5c2264824231d7a40c['service_id'];$vcd51f0f2700d4b40bc1da2c3cb7b8b41 = '/'.$v23a2cbb13502e40ff869bbfa3211fc9b.'/admin/stat/openstatAdsByService/'.$v8c1604c64857e79a748c27062fedf5a2;$v2b9331d042732a4c71ed6b1975fe04c4 = htmlspecialchars($vfc19ae0e7cb9076cc4077381bbe0b168);$vf986318032e24b859ae2c67396837856 = $v02f23ea9e3029ddaa616ddb1af52ada9;$vcbf015ca5cca5fca7485bcc8a9e5fee6 = round($va140ee0297c98eb2fcdcffb026609e8d, 1);$ve334be05f2d25b295e8542a58661ed67= htmlspecialchars($vcd51f0f2700d4b40bc1da2c3cb7b8b41);$va985177e18afdab154ab615657ef1514 .= <<<END
						<row name="{$v2b9331d042732a4c71ed6b1975fe04c4}" cnt="{$vf986318032e24b859ae2c67396837856}" rel="{$vcbf015ca5cca5fca7485bcc8a9e5fee6}" uri="{$ve334be05f2d25b295e8542a58661ed67}"  />
END;    }$vbbc1d718fe0a068b8d46f0b73cc73264 = ($v58048d5700b450e117e35a9c095fa5cb - $v03f1bcf4bdfde045733bb97482344c55);if ($vbbc1d718fe0a068b8d46f0b73cc73264 > 0) {$v48f808cccfc49046f79e38536b7537a7 = round($vbbc1d718fe0a068b8d46f0b73cc73264/($v58048d5700b450e117e35a9c095fa5cb/100), 1);$va985177e18afdab154ab615657ef1514 .= <<<END
						<row name="Прочее" cnt="{$vbbc1d718fe0a068b8d46f0b73cc73264}" rel="{$v48f808cccfc49046f79e38536b7537a7}" uri=""  />
END;    }$va985177e18afdab154ab615657ef1514 .= "</data>\n";$va985177e18afdab154ab615657ef1514 .= "</report></statistics>";header("Content-type: text/xml; charset=utf-8");header("Content-length: ".strlen($va985177e18afdab154ab615657ef1514));$this->flush($va985177e18afdab154ab615657ef1514);return "";}else {$v21ffce5b8a6cc8cc6a41448dd69623c9 = array();$v21ffce5b8a6cc8cc6a41448dd69623c9['filter'] = $this->getFilterPanel();$v21ffce5b8a6cc8cc6a41448dd69623c9['ReportOpenstatServices']['flash:report']  = "url=".$v5430f956c571aa9e86e91947b5da11a2."/xml/".$v4062f8ff37e55691af3f19fac2155cf9;$this->setDataType("settings");$this->setActionType("view");$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($v21ffce5b8a6cc8cc6a41448dd69623c9, 'settings');$this->setData($v8d777f385d3dfec8815d20f7496026dc);return $this->doData();}}public function openstatServicesByCampaign() {$v7f09301190cf8a20392c03010548dcb5 = getRequest('param0');$v3086f2e00ea19967e011c652edfc2884 = getRequest('param1');$this->updateFilter();$v7982b1e077e535e00dc62cf8d6e9a455 = cmsController::getInstance()->getCurrentDomain()->getHost();$v23a2cbb13502e40ff869bbfa3211fc9b = cmsController::getInstance()->getCurrentLang()->getPrefix();$v5430f956c571aa9e86e91947b5da11a2 = '/'.$v23a2cbb13502e40ff869bbfa3211fc9b.'/admin/stat/'.__FUNCTION__;$v4062f8ff37e55691af3f19fac2155cf9 = '';$v9549dd6065d019211460c59a86dd6536 = new statisticFactory(dirname(__FILE__) . '/classes');$v9549dd6065d019211460c59a86dd6536->isValid('openstatServices');$ve98d2f001da5678b39482efbdf5770dc = $v9549dd6065d019211460c59a86dd6536->get('openstatServices');$ve98d2f001da5678b39482efbdf5770dc->setParams(array('campaign_id'=>intval($v7f09301190cf8a20392c03010548dcb5)));$ve98d2f001da5678b39482efbdf5770dc->setStart($this->from_time);$ve98d2f001da5678b39482efbdf5770dc->setFinish($this->to_time);$ve98d2f001da5678b39482efbdf5770dc->setDomain($this->domain);$ve98d2f001da5678b39482efbdf5770dc->setUser($this->user);$ve98d2f001da5678b39482efbdf5770dc->setLimit($this->items_per_page);if ($v3086f2e00ea19967e011c652edfc2884 === 'xml') {$result = $ve98d2f001da5678b39482efbdf5770dc->get();$v03f1bcf4bdfde045733bb97482344c55 = 0;$v58048d5700b450e117e35a9c095fa5cb = $result['summ'];$v233762765fbf2a8381bb11dac5c21b8f = $result['total'];$va985177e18afdab154ab615657ef1514 = "";$va985177e18afdab154ab615657ef1514 .= "<"."?xml version=\"1.0\" encoding=\"utf-8\"?".">\n";$va985177e18afdab154ab615657ef1514 .= <<<END
				<statistics><report name="openstatServicesByCampaign" title="Рекламные ресурсы кампании" host="{$v7982b1e077e535e00dc62cf8d6e9a455}" lang="{$v23a2cbb13502e40ff869bbfa3211fc9b}"  timerange_start="{$this->from_time}" timerange_finish="{$this->to_time}">
				<table>
					<column field="name" title="Рекламный ресурс" prefix="" valueSuffix="" />
					<column field="cnt" title="Переходов абс." prefix="" valueSuffix="" />
					<column field="rel" title="Переходов отн." prefix="" valueSuffix="%" />
				</table>
				<chart type="pie">
						<argument />
						<value field="cnt" />
						<caption field="name" />
				</chart>
				<data>
END;    foreach($result['all'] as $vcaf9b6b99962bf5c2264824231d7a40c) {$v02f23ea9e3029ddaa616ddb1af52ada9 = $vcaf9b6b99962bf5c2264824231d7a40c['abs'];$v03f1bcf4bdfde045733bb97482344c55 += $v02f23ea9e3029ddaa616ddb1af52ada9;$va140ee0297c98eb2fcdcffb026609e8d = $vcaf9b6b99962bf5c2264824231d7a40c['rel'];$vfc19ae0e7cb9076cc4077381bbe0b168 = $vcaf9b6b99962bf5c2264824231d7a40c['name'];$v8c1604c64857e79a748c27062fedf5a2 = $vcaf9b6b99962bf5c2264824231d7a40c['service_id'];$vcd51f0f2700d4b40bc1da2c3cb7b8b41 = '/'.$v23a2cbb13502e40ff869bbfa3211fc9b.'/admin/stat/openstatAdsByService/'.$v8c1604c64857e79a748c27062fedf5a2;$v2b9331d042732a4c71ed6b1975fe04c4 = htmlspecialchars($vfc19ae0e7cb9076cc4077381bbe0b168);$vf986318032e24b859ae2c67396837856 = $v02f23ea9e3029ddaa616ddb1af52ada9;$vcbf015ca5cca5fca7485bcc8a9e5fee6 = round($va140ee0297c98eb2fcdcffb026609e8d, 1);$ve334be05f2d25b295e8542a58661ed67= htmlspecialchars($vcd51f0f2700d4b40bc1da2c3cb7b8b41);$va985177e18afdab154ab615657ef1514 .= <<<END
						<row name="{$v2b9331d042732a4c71ed6b1975fe04c4}" cnt="{$vf986318032e24b859ae2c67396837856}" rel="{$vcbf015ca5cca5fca7485bcc8a9e5fee6}" uri="{$ve334be05f2d25b295e8542a58661ed67}"  />
END;    }$vbbc1d718fe0a068b8d46f0b73cc73264 = ($v58048d5700b450e117e35a9c095fa5cb - $v03f1bcf4bdfde045733bb97482344c55);if ($vbbc1d718fe0a068b8d46f0b73cc73264 > 0) {$v48f808cccfc49046f79e38536b7537a7 = round($vbbc1d718fe0a068b8d46f0b73cc73264/($v58048d5700b450e117e35a9c095fa5cb/100), 1);$va985177e18afdab154ab615657ef1514 .= <<<END
						<row name="Прочее" cnt="{$vbbc1d718fe0a068b8d46f0b73cc73264}" rel="{$v48f808cccfc49046f79e38536b7537a7}" uri=""  />
END;    }$va985177e18afdab154ab615657ef1514 .= "</data>\n";$va985177e18afdab154ab615657ef1514 .= "</report></statistics>";header("Content-type: text/xml; charset=utf-8");header("Content-length: ".strlen($va985177e18afdab154ab615657ef1514));$this->flush($va985177e18afdab154ab615657ef1514);return "";}else {$v21ffce5b8a6cc8cc6a41448dd69623c9 = array();$v21ffce5b8a6cc8cc6a41448dd69623c9['filter'] = $this->getFilterPanel();$v21ffce5b8a6cc8cc6a41448dd69623c9['ReportOpenstatServicesByCampaig']['flash:report']  = "url=".$v5430f956c571aa9e86e91947b5da11a2."/xml/".$v4062f8ff37e55691af3f19fac2155cf9;$this->setDataType("settings");$this->setActionType("view");$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($v21ffce5b8a6cc8cc6a41448dd69623c9, 'settings');$this->setData($v8d777f385d3dfec8815d20f7496026dc);return $this->doData();}}public function openstatServicesBySource() {$v7104764af16315c1757b119f0e04119a = getRequest('param0');$v3086f2e00ea19967e011c652edfc2884 = getRequest('param1');$this->updateFilter();$v7982b1e077e535e00dc62cf8d6e9a455 = cmsController::getInstance()->getCurrentDomain()->getHost();$v23a2cbb13502e40ff869bbfa3211fc9b = cmsController::getInstance()->getCurrentLang()->getPrefix();$v5430f956c571aa9e86e91947b5da11a2 = '/'.$v23a2cbb13502e40ff869bbfa3211fc9b.'/admin/stat/'.__FUNCTION__;$v4062f8ff37e55691af3f19fac2155cf9 = '';$v9549dd6065d019211460c59a86dd6536 = new statisticFactory(dirname(__FILE__) . '/classes');$v9549dd6065d019211460c59a86dd6536->isValid('openstatServices');$ve98d2f001da5678b39482efbdf5770dc = $v9549dd6065d019211460c59a86dd6536->get('openstatServices');$ve98d2f001da5678b39482efbdf5770dc->setParams(array('source_id'=>intval($v7104764af16315c1757b119f0e04119a)));$ve98d2f001da5678b39482efbdf5770dc->setStart($this->from_time);$ve98d2f001da5678b39482efbdf5770dc->setFinish($this->to_time);$ve98d2f001da5678b39482efbdf5770dc->setDomain($this->domain);$ve98d2f001da5678b39482efbdf5770dc->setUser($this->user);$ve98d2f001da5678b39482efbdf5770dc->setLimit($this->items_per_page);if ($v3086f2e00ea19967e011c652edfc2884 === 'xml') {$result = $ve98d2f001da5678b39482efbdf5770dc->get();$v03f1bcf4bdfde045733bb97482344c55 = 0;$v58048d5700b450e117e35a9c095fa5cb = $result['summ'];$v233762765fbf2a8381bb11dac5c21b8f = $result['total'];$va985177e18afdab154ab615657ef1514 = "";$va985177e18afdab154ab615657ef1514 .= "<"."?xml version=\"1.0\" encoding=\"utf-8\"?".">\n";$va985177e18afdab154ab615657ef1514 .= <<<END
				<statistics><report name="openstatServicesBySource" title="Рекламные ресурсы место объявления" host="{$v7982b1e077e535e00dc62cf8d6e9a455}" lang="{$v23a2cbb13502e40ff869bbfa3211fc9b}"  timerange_start="{$this->from_time}" timerange_finish="{$this->to_time}">
				<table>
					<column field="name" title="Рекламный ресурс" prefix="" valueSuffix="" />
					<column field="cnt" title="Переходов абс." prefix="" valueSuffix="" />
					<column field="rel" title="Переходов отн." prefix="" valueSuffix="%" />
				</table>
				<chart type="pie">
						<argument />
						<value field="cnt" />
						<caption field="name" />
				</chart>
				<data>
END;    foreach($result['all'] as $vcaf9b6b99962bf5c2264824231d7a40c) {$v02f23ea9e3029ddaa616ddb1af52ada9 = $vcaf9b6b99962bf5c2264824231d7a40c['abs'];$v03f1bcf4bdfde045733bb97482344c55 += $v02f23ea9e3029ddaa616ddb1af52ada9;$va140ee0297c98eb2fcdcffb026609e8d = $vcaf9b6b99962bf5c2264824231d7a40c['rel'];$vfc19ae0e7cb9076cc4077381bbe0b168 = $vcaf9b6b99962bf5c2264824231d7a40c['name'];$v8c1604c64857e79a748c27062fedf5a2 = $vcaf9b6b99962bf5c2264824231d7a40c['service_id'];$vcd51f0f2700d4b40bc1da2c3cb7b8b41 = '/'.$v23a2cbb13502e40ff869bbfa3211fc9b.'/admin/stat/openstatAdsByService/'.$v8c1604c64857e79a748c27062fedf5a2;$v2b9331d042732a4c71ed6b1975fe04c4 = htmlspecialchars($vfc19ae0e7cb9076cc4077381bbe0b168);$vf986318032e24b859ae2c67396837856 = $v02f23ea9e3029ddaa616ddb1af52ada9;$vcbf015ca5cca5fca7485bcc8a9e5fee6 = round($va140ee0297c98eb2fcdcffb026609e8d, 1);$ve334be05f2d25b295e8542a58661ed67= htmlspecialchars($vcd51f0f2700d4b40bc1da2c3cb7b8b41);$va985177e18afdab154ab615657ef1514 .= <<<END
						<row name="{$v2b9331d042732a4c71ed6b1975fe04c4}" cnt="{$vf986318032e24b859ae2c67396837856}" rel="{$vcbf015ca5cca5fca7485bcc8a9e5fee6}" uri="{$ve334be05f2d25b295e8542a58661ed67}"  />
END;    }$vbbc1d718fe0a068b8d46f0b73cc73264 = ($v58048d5700b450e117e35a9c095fa5cb - $v03f1bcf4bdfde045733bb97482344c55);if ($vbbc1d718fe0a068b8d46f0b73cc73264 > 0) {$v48f808cccfc49046f79e38536b7537a7 = round($vbbc1d718fe0a068b8d46f0b73cc73264/($v58048d5700b450e117e35a9c095fa5cb/100), 1);$va985177e18afdab154ab615657ef1514 .= <<<END
						<row name="Прочее" cnt="{$vbbc1d718fe0a068b8d46f0b73cc73264}" rel="{$v48f808cccfc49046f79e38536b7537a7}" uri=""  />
END;    }$va985177e18afdab154ab615657ef1514 .= "</data>\n";$va985177e18afdab154ab615657ef1514 .= "</report></statistics>";header("Content-type: text/xml; charset=utf-8");header("Content-length: ".strlen($va985177e18afdab154ab615657ef1514));$this->flush($va985177e18afdab154ab615657ef1514);return "";}else {$v21ffce5b8a6cc8cc6a41448dd69623c9 = array();$v21ffce5b8a6cc8cc6a41448dd69623c9['filter'] = $this->getFilterPanel();$v21ffce5b8a6cc8cc6a41448dd69623c9['ReportOpenstatServicesBySource']['flash:report']  = "url=".$v5430f956c571aa9e86e91947b5da11a2."/xml/".$v4062f8ff37e55691af3f19fac2155cf9;$this->setDataType("settings");$this->setActionType("view");$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($v21ffce5b8a6cc8cc6a41448dd69623c9, 'settings');$this->setData($v8d777f385d3dfec8815d20f7496026dc);return $this->doData();}}public function openstatSources() {$v3086f2e00ea19967e011c652edfc2884 = getRequest('param0');$this->updateFilter();$v7982b1e077e535e00dc62cf8d6e9a455 = cmsController::getInstance()->getCurrentDomain()->getHost();$v23a2cbb13502e40ff869bbfa3211fc9b = cmsController::getInstance()->getCurrentLang()->getPrefix();$v5430f956c571aa9e86e91947b5da11a2 = '/'.$v23a2cbb13502e40ff869bbfa3211fc9b.'/admin/stat/'.__FUNCTION__;$v4062f8ff37e55691af3f19fac2155cf9 = '';$v9549dd6065d019211460c59a86dd6536 = new statisticFactory(dirname(__FILE__) . '/classes');$v9549dd6065d019211460c59a86dd6536->isValid('openstatSources');$ve98d2f001da5678b39482efbdf5770dc = $v9549dd6065d019211460c59a86dd6536->get('openstatSources');$ve98d2f001da5678b39482efbdf5770dc->setStart($this->from_time);$ve98d2f001da5678b39482efbdf5770dc->setFinish($this->to_time);$ve98d2f001da5678b39482efbdf5770dc->setDomain($this->domain);$ve98d2f001da5678b39482efbdf5770dc->setUser($this->user);$ve98d2f001da5678b39482efbdf5770dc->setLimit($this->items_per_page);if ($v3086f2e00ea19967e011c652edfc2884 === 'xml') {$result = $ve98d2f001da5678b39482efbdf5770dc->get();$v03f1bcf4bdfde045733bb97482344c55 = 0;$v58048d5700b450e117e35a9c095fa5cb = $result['summ'];$v233762765fbf2a8381bb11dac5c21b8f = $result['total'];$va985177e18afdab154ab615657ef1514 = "";$va985177e18afdab154ab615657ef1514 .= "<"."?xml version=\"1.0\" encoding=\"utf-8\"?".">\n";$va985177e18afdab154ab615657ef1514 .= <<<END
				<statistics><report name="openstatSources" title="Все рекламные места объявлений" host="{$v7982b1e077e535e00dc62cf8d6e9a455}" lang="{$v23a2cbb13502e40ff869bbfa3211fc9b}"  timerange_start="{$this->from_time}" timerange_finish="{$this->to_time}">
				<table>
					<column field="name" title="Рекламное место" prefix="" valueSuffix="" />
					<column field="cnt" title="Переходов абс." prefix="" valueSuffix="" />
					<column field="rel" title="Переходов отн." prefix="" valueSuffix="%" />
				</table>
				<chart type="pie">
						<argument />
						<value field="cnt" />
						<caption field="name" />
				</chart>
				<data>
END;    foreach($result['all'] as $vcaf9b6b99962bf5c2264824231d7a40c) {$v02f23ea9e3029ddaa616ddb1af52ada9 = $vcaf9b6b99962bf5c2264824231d7a40c['abs'];$v03f1bcf4bdfde045733bb97482344c55 += $v02f23ea9e3029ddaa616ddb1af52ada9;$va140ee0297c98eb2fcdcffb026609e8d = $vcaf9b6b99962bf5c2264824231d7a40c['rel'];$vfc19ae0e7cb9076cc4077381bbe0b168 = $vcaf9b6b99962bf5c2264824231d7a40c['name'];$v8c1604c64857e79a748c27062fedf5a2 = $vcaf9b6b99962bf5c2264824231d7a40c['source_id'];$vcd51f0f2700d4b40bc1da2c3cb7b8b41 = '/'.$v23a2cbb13502e40ff869bbfa3211fc9b.'/admin/stat/openstatServicesBySource/'.$v8c1604c64857e79a748c27062fedf5a2;$v2b9331d042732a4c71ed6b1975fe04c4 = htmlspecialchars($vfc19ae0e7cb9076cc4077381bbe0b168);$vf986318032e24b859ae2c67396837856 = $v02f23ea9e3029ddaa616ddb1af52ada9;$vcbf015ca5cca5fca7485bcc8a9e5fee6 = round($va140ee0297c98eb2fcdcffb026609e8d, 1);$ve334be05f2d25b295e8542a58661ed67= htmlspecialchars($vcd51f0f2700d4b40bc1da2c3cb7b8b41);$va985177e18afdab154ab615657ef1514 .= <<<END
						<row name="{$v2b9331d042732a4c71ed6b1975fe04c4}" cnt="{$vf986318032e24b859ae2c67396837856}" rel="{$vcbf015ca5cca5fca7485bcc8a9e5fee6}" uri="{$ve334be05f2d25b295e8542a58661ed67}"  />
END;    }$vbbc1d718fe0a068b8d46f0b73cc73264 = ($v58048d5700b450e117e35a9c095fa5cb - $v03f1bcf4bdfde045733bb97482344c55);if ($vbbc1d718fe0a068b8d46f0b73cc73264 > 0) {$v48f808cccfc49046f79e38536b7537a7 = round($vbbc1d718fe0a068b8d46f0b73cc73264/($v58048d5700b450e117e35a9c095fa5cb/100), 1);$va985177e18afdab154ab615657ef1514 .= <<<END
						<row name="Прочее" cnt="{$vbbc1d718fe0a068b8d46f0b73cc73264}" rel="{$v48f808cccfc49046f79e38536b7537a7}" uri=""  />
END;    }$va985177e18afdab154ab615657ef1514 .= "</data>\n";$va985177e18afdab154ab615657ef1514 .= "</report></statistics>";header("Content-type: text/xml; charset=utf-8");header("Content-length: ".strlen($va985177e18afdab154ab615657ef1514));$this->flush($va985177e18afdab154ab615657ef1514);return "";}else {$v21ffce5b8a6cc8cc6a41448dd69623c9 = array();$v21ffce5b8a6cc8cc6a41448dd69623c9['filter'] = $this->getFilterPanel();$v21ffce5b8a6cc8cc6a41448dd69623c9['ReportOpenstatSources']['flash:report']  = "url=".$v5430f956c571aa9e86e91947b5da11a2."/xml/".$v4062f8ff37e55691af3f19fac2155cf9;$this->setDataType("settings");$this->setActionType("view");$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($v21ffce5b8a6cc8cc6a41448dd69623c9, 'settings');$this->setData($v8d777f385d3dfec8815d20f7496026dc);return $this->doData();}}public function openstatAds() {$v3086f2e00ea19967e011c652edfc2884 = getRequest('param0');$this->updateFilter();$v7982b1e077e535e00dc62cf8d6e9a455 = cmsController::getInstance()->getCurrentDomain()->getHost();$v23a2cbb13502e40ff869bbfa3211fc9b = cmsController::getInstance()->getCurrentLang()->getPrefix();$v5430f956c571aa9e86e91947b5da11a2 = '/'.$v23a2cbb13502e40ff869bbfa3211fc9b.'/admin/stat/'.__FUNCTION__;$v4062f8ff37e55691af3f19fac2155cf9 = '';$v9549dd6065d019211460c59a86dd6536 = new statisticFactory(dirname(__FILE__) . '/classes');$v9549dd6065d019211460c59a86dd6536->isValid('openstatAds');$ve98d2f001da5678b39482efbdf5770dc = $v9549dd6065d019211460c59a86dd6536->get('openstatAds');$ve98d2f001da5678b39482efbdf5770dc->setStart($this->from_time);$ve98d2f001da5678b39482efbdf5770dc->setFinish($this->to_time);$ve98d2f001da5678b39482efbdf5770dc->setDomain($this->domain);$ve98d2f001da5678b39482efbdf5770dc->setUser($this->user);$ve98d2f001da5678b39482efbdf5770dc->setLimit($this->items_per_page);if ($v3086f2e00ea19967e011c652edfc2884 === 'xml') {$result = $ve98d2f001da5678b39482efbdf5770dc->get();$v03f1bcf4bdfde045733bb97482344c55 = 0;$v58048d5700b450e117e35a9c095fa5cb = $result['summ'];$v233762765fbf2a8381bb11dac5c21b8f = $result['total'];$va985177e18afdab154ab615657ef1514 = "";$va985177e18afdab154ab615657ef1514 .= "<"."?xml version=\"1.0\" encoding=\"utf-8\"?".">\n";$va985177e18afdab154ab615657ef1514 .= <<<END
				<statistics><report name="openstatAds" title="Все рекламные объявления" host="{$v7982b1e077e535e00dc62cf8d6e9a455}" lang="{$v23a2cbb13502e40ff869bbfa3211fc9b}"  timerange_start="{$this->from_time}" timerange_finish="{$this->to_time}">
				<table>
					<column field="name" title="Рекламное объявление" prefix="" valueSuffix="" />
					<column field="cnt" title="Переходов абс." prefix="" valueSuffix="" />
					<column field="rel" title="Переходов отн." prefix="" valueSuffix="%" />
				</table>
				<chart type="pie">
						<argument />
						<value field="cnt" />
						<caption field="name" />
				</chart>
				<data>
END;    foreach($result['all'] as $vcaf9b6b99962bf5c2264824231d7a40c) {$v02f23ea9e3029ddaa616ddb1af52ada9 = $vcaf9b6b99962bf5c2264824231d7a40c['abs'];$v03f1bcf4bdfde045733bb97482344c55 += $v02f23ea9e3029ddaa616ddb1af52ada9;$va140ee0297c98eb2fcdcffb026609e8d = $vcaf9b6b99962bf5c2264824231d7a40c['rel'];$vfc19ae0e7cb9076cc4077381bbe0b168 = $vcaf9b6b99962bf5c2264824231d7a40c['name'];$vcd51f0f2700d4b40bc1da2c3cb7b8b41 = "";$v2b9331d042732a4c71ed6b1975fe04c4 = htmlspecialchars($vfc19ae0e7cb9076cc4077381bbe0b168);$vf986318032e24b859ae2c67396837856 = $v02f23ea9e3029ddaa616ddb1af52ada9;$vcbf015ca5cca5fca7485bcc8a9e5fee6 = round($va140ee0297c98eb2fcdcffb026609e8d, 1);$ve334be05f2d25b295e8542a58661ed67= htmlspecialchars($vcd51f0f2700d4b40bc1da2c3cb7b8b41);$va985177e18afdab154ab615657ef1514 .= <<<END
						<row name="{$v2b9331d042732a4c71ed6b1975fe04c4}" cnt="{$vf986318032e24b859ae2c67396837856}" rel="{$vcbf015ca5cca5fca7485bcc8a9e5fee6}" uri="{$ve334be05f2d25b295e8542a58661ed67}"  />
END;    }$vbbc1d718fe0a068b8d46f0b73cc73264 = ($v58048d5700b450e117e35a9c095fa5cb - $v03f1bcf4bdfde045733bb97482344c55);if ($vbbc1d718fe0a068b8d46f0b73cc73264 > 0) {$v48f808cccfc49046f79e38536b7537a7 = round($vbbc1d718fe0a068b8d46f0b73cc73264/($v58048d5700b450e117e35a9c095fa5cb/100), 1);$va985177e18afdab154ab615657ef1514 .= <<<END
						<row name="Прочее" cnt="{$vbbc1d718fe0a068b8d46f0b73cc73264}" rel="{$v48f808cccfc49046f79e38536b7537a7}" uri=""  />
END;    }$va985177e18afdab154ab615657ef1514 .= "</data>\n";$va985177e18afdab154ab615657ef1514 .= "</report></statistics>";header("Content-type: text/xml; charset=utf-8");header("Content-length: ".strlen($va985177e18afdab154ab615657ef1514));$this->flush($va985177e18afdab154ab615657ef1514);return "";}else {$v21ffce5b8a6cc8cc6a41448dd69623c9 = array();$v21ffce5b8a6cc8cc6a41448dd69623c9['filter'] = $this->getFilterPanel();$v21ffce5b8a6cc8cc6a41448dd69623c9['ReportOpenstatAds']['flash:report']  = "url=".$v5430f956c571aa9e86e91947b5da11a2."/xml/".$v4062f8ff37e55691af3f19fac2155cf9;$this->setDataType("settings");$this->setActionType("view");$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($v21ffce5b8a6cc8cc6a41448dd69623c9, 'settings');$this->setData($v8d777f385d3dfec8815d20f7496026dc);return $this->doData();}}public function openstatAdsByCampaign() {}public function openstatAdsByService() {$v423474cdd7c0cef5ab1ea89cf9bbe199 = intval(getRequest('param0'));$v3086f2e00ea19967e011c652edfc2884 = getRequest('param1');$this->updateFilter();$v7982b1e077e535e00dc62cf8d6e9a455 = cmsController::getInstance()->getCurrentDomain()->getHost();$v23a2cbb13502e40ff869bbfa3211fc9b = cmsController::getInstance()->getCurrentLang()->getPrefix();$v5430f956c571aa9e86e91947b5da11a2 = '/'.$v23a2cbb13502e40ff869bbfa3211fc9b.'/admin/stat/'.__FUNCTION__;$v4062f8ff37e55691af3f19fac2155cf9 = '';$v9549dd6065d019211460c59a86dd6536 = new statisticFactory(dirname(__FILE__) . '/classes');$v9549dd6065d019211460c59a86dd6536->isValid('openstatAds');$ve98d2f001da5678b39482efbdf5770dc = $v9549dd6065d019211460c59a86dd6536->get('openstatAds');$ve98d2f001da5678b39482efbdf5770dc->setParams(array('service_id'=>$v423474cdd7c0cef5ab1ea89cf9bbe199));$ve98d2f001da5678b39482efbdf5770dc->setStart($this->from_time);$ve98d2f001da5678b39482efbdf5770dc->setFinish($this->to_time);$ve98d2f001da5678b39482efbdf5770dc->setDomain($this->domain);$ve98d2f001da5678b39482efbdf5770dc->setUser($this->user);$ve98d2f001da5678b39482efbdf5770dc->setLimit($this->items_per_page);if ($v3086f2e00ea19967e011c652edfc2884 === 'xml') {$result = $ve98d2f001da5678b39482efbdf5770dc->get();$v03f1bcf4bdfde045733bb97482344c55 = 0;$v58048d5700b450e117e35a9c095fa5cb = $result['summ'];$v233762765fbf2a8381bb11dac5c21b8f = $result['total'];$va985177e18afdab154ab615657ef1514 = "";$va985177e18afdab154ab615657ef1514 .= "<"."?xml version=\"1.0\" encoding=\"utf-8\"?".">\n";$va985177e18afdab154ab615657ef1514 .= <<<END
				<statistics><report name="openstatAdsByService" title="Рекламные объявления ресурса" host="{$v7982b1e077e535e00dc62cf8d6e9a455}" lang="{$v23a2cbb13502e40ff869bbfa3211fc9b}"  timerange_start="{$this->from_time}" timerange_finish="{$this->to_time}">
				<table>
					<column field="name" title="Рекламное объявление" prefix="" valueSuffix="" />
					<column field="cnt" title="Переходов абс." prefix="" valueSuffix="" />
					<column field="rel" title="Переходов отн." prefix="" valueSuffix="%" />
				</table>
				<chart type="pie">
						<argument />
						<value field="cnt" />
						<caption field="name" />
				</chart>
				<data>
END;    foreach($result['all'] as $vcaf9b6b99962bf5c2264824231d7a40c) {$v02f23ea9e3029ddaa616ddb1af52ada9 = $vcaf9b6b99962bf5c2264824231d7a40c['abs'];$v03f1bcf4bdfde045733bb97482344c55 += $v02f23ea9e3029ddaa616ddb1af52ada9;$va140ee0297c98eb2fcdcffb026609e8d = $vcaf9b6b99962bf5c2264824231d7a40c['rel'];$vfc19ae0e7cb9076cc4077381bbe0b168 = $vcaf9b6b99962bf5c2264824231d7a40c['name'];$vcd51f0f2700d4b40bc1da2c3cb7b8b41 = "";$v2b9331d042732a4c71ed6b1975fe04c4 = htmlspecialchars($vfc19ae0e7cb9076cc4077381bbe0b168);$vf986318032e24b859ae2c67396837856 = $v02f23ea9e3029ddaa616ddb1af52ada9;$vcbf015ca5cca5fca7485bcc8a9e5fee6 = round($va140ee0297c98eb2fcdcffb026609e8d, 1);$ve334be05f2d25b295e8542a58661ed67= htmlspecialchars($vcd51f0f2700d4b40bc1da2c3cb7b8b41);$va985177e18afdab154ab615657ef1514 .= <<<END
						<row name="{$v2b9331d042732a4c71ed6b1975fe04c4}" cnt="{$vf986318032e24b859ae2c67396837856}" rel="{$vcbf015ca5cca5fca7485bcc8a9e5fee6}" uri="{$ve334be05f2d25b295e8542a58661ed67}"  />
END;    }$vbbc1d718fe0a068b8d46f0b73cc73264 = ($v58048d5700b450e117e35a9c095fa5cb - $v03f1bcf4bdfde045733bb97482344c55);if ($vbbc1d718fe0a068b8d46f0b73cc73264 > 0) {$v48f808cccfc49046f79e38536b7537a7 = round($vbbc1d718fe0a068b8d46f0b73cc73264/($v58048d5700b450e117e35a9c095fa5cb/100), 1);$va985177e18afdab154ab615657ef1514 .= <<<END
						<row name="Прочее" cnt="{$vbbc1d718fe0a068b8d46f0b73cc73264}" rel="{$v48f808cccfc49046f79e38536b7537a7}" uri=""  />
END;    }$va985177e18afdab154ab615657ef1514 .= "</data>\n";$va985177e18afdab154ab615657ef1514 .= "</report></statistics>";header("Content-type: text/xml; charset=utf-8");header("Content-length: ".strlen($va985177e18afdab154ab615657ef1514));$this->flush($va985177e18afdab154ab615657ef1514);return "";}else {$v21ffce5b8a6cc8cc6a41448dd69623c9 = array();$v21ffce5b8a6cc8cc6a41448dd69623c9['filter'] = $this->getFilterPanel();$v21ffce5b8a6cc8cc6a41448dd69623c9['ReportOpenstatAdsByService']['flash:report']  = "url=".$v5430f956c571aa9e86e91947b5da11a2."/xml/".$v4062f8ff37e55691af3f19fac2155cf9;$this->setDataType("settings");$this->setActionType("view");$v8d777f385d3dfec8815d20f7496026dc = $this->prepareData($v21ffce5b8a6cc8cc6a41448dd69623c9, 'settings');$this->setData($v8d777f385d3dfec8815d20f7496026dc);return $this->doData();}}public function openstatAdsBySource() {}}?>