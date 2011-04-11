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
END;
						<row name="{$v2b9331d042732a4c71ed6b1975fe04c4}" cnt="{$vf986318032e24b859ae2c67396837856}" rel="{$vcbf015ca5cca5fca7485bcc8a9e5fee6}" uri="{$ve334be05f2d25b295e8542a58661ed67}"  />
END;
						<row name="Прочее" cnt="{$vbbc1d718fe0a068b8d46f0b73cc73264}" rel="{$v48f808cccfc49046f79e38536b7537a7}" uri=""  />
END;
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
END;
						<row name="{$v2b9331d042732a4c71ed6b1975fe04c4}" cnt="{$vf986318032e24b859ae2c67396837856}" rel="{$vcbf015ca5cca5fca7485bcc8a9e5fee6}" uri="{$ve334be05f2d25b295e8542a58661ed67}"  />
END;
						<row name="Прочее" cnt="{$vbbc1d718fe0a068b8d46f0b73cc73264}" rel="{$v48f808cccfc49046f79e38536b7537a7}" uri=""  />
END;
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
END;
						<row name="{$v2b9331d042732a4c71ed6b1975fe04c4}" cnt="{$vf986318032e24b859ae2c67396837856}" rel="{$vcbf015ca5cca5fca7485bcc8a9e5fee6}" uri="{$ve334be05f2d25b295e8542a58661ed67}"  />
END;
						<row name="Прочее" cnt="{$vbbc1d718fe0a068b8d46f0b73cc73264}" rel="{$v48f808cccfc49046f79e38536b7537a7}" uri=""  />
END;
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
END;
						<row name="{$v2b9331d042732a4c71ed6b1975fe04c4}" cnt="{$vf986318032e24b859ae2c67396837856}" rel="{$vcbf015ca5cca5fca7485bcc8a9e5fee6}" uri="{$ve334be05f2d25b295e8542a58661ed67}"  />
END;
						<row name="Прочее" cnt="{$vbbc1d718fe0a068b8d46f0b73cc73264}" rel="{$v48f808cccfc49046f79e38536b7537a7}" uri=""  />
END;
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
END;
						<row name="{$v2b9331d042732a4c71ed6b1975fe04c4}" cnt="{$vf986318032e24b859ae2c67396837856}" rel="{$vcbf015ca5cca5fca7485bcc8a9e5fee6}" uri="{$ve334be05f2d25b295e8542a58661ed67}"  />
END;
						<row name="Прочее" cnt="{$vbbc1d718fe0a068b8d46f0b73cc73264}" rel="{$v48f808cccfc49046f79e38536b7537a7}" uri=""  />
END;
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
END;
						<row name="{$v2b9331d042732a4c71ed6b1975fe04c4}" cnt="{$vf986318032e24b859ae2c67396837856}" rel="{$vcbf015ca5cca5fca7485bcc8a9e5fee6}" uri="{$ve334be05f2d25b295e8542a58661ed67}"  />
END;
						<row name="Прочее" cnt="{$vbbc1d718fe0a068b8d46f0b73cc73264}" rel="{$v48f808cccfc49046f79e38536b7537a7}" uri=""  />
END;
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
END;
						<row name="{$v2b9331d042732a4c71ed6b1975fe04c4}" cnt="{$vf986318032e24b859ae2c67396837856}" rel="{$vcbf015ca5cca5fca7485bcc8a9e5fee6}" uri="{$ve334be05f2d25b295e8542a58661ed67}"  />
END;
						<row name="Прочее" cnt="{$vbbc1d718fe0a068b8d46f0b73cc73264}" rel="{$v48f808cccfc49046f79e38536b7537a7}" uri=""  />
END;