<?php
abstract class __stat_sections extends baseModuleAdmin {public function sectionHits() {$v3086f2e00ea19967e011c652edfc2884 = getRequest('param0');$v7982b1e077e535e00dc62cf8d6e9a455 = cmsController::getInstance()->getCurrentDomain()->getHost();$v23a2cbb13502e40ff869bbfa3211fc9b = cmsController::getInstance()->getCurrentLang()->getPrefix();$v5430f956c571aa9e86e91947b5da11a2 = '/'.$v23a2cbb13502e40ff869bbfa3211fc9b.'/admin/stat/'.__FUNCTION__;$v4062f8ff37e55691af3f19fac2155cf9 = '';$this->updateFilter();$v9549dd6065d019211460c59a86dd6536 = new statisticFactory(dirname(__FILE__) . '/classes');$v9549dd6065d019211460c59a86dd6536->isValid('sectionHits');$ve98d2f001da5678b39482efbdf5770dc = $v9549dd6065d019211460c59a86dd6536->get('sectionHits');$ve98d2f001da5678b39482efbdf5770dc->setStart($this->from_time);$ve98d2f001da5678b39482efbdf5770dc->setFinish($this->to_time);$ve98d2f001da5678b39482efbdf5770dc->setLimit($this->items_per_page);$ve98d2f001da5678b39482efbdf5770dc->setDomain($this->domain);$ve98d2f001da5678b39482efbdf5770dc->setUser($this->user);if ($v3086f2e00ea19967e011c652edfc2884 === 'xml') {$result = $ve98d2f001da5678b39482efbdf5770dc->get();$v03f1bcf4bdfde045733bb97482344c55 = 0;$v58048d5700b450e117e35a9c095fa5cb = $result['summ'];$v233762765fbf2a8381bb11dac5c21b8f = $result['total'];$va985177e18afdab154ab615657ef1514 = "";$va985177e18afdab154ab615657ef1514 .= "<"."?xml version=\"1.0\" encoding=\"utf-8\"?".">\n";$va985177e18afdab154ab615657ef1514 .= <<<END
				<statistics>
				<report name="pagesHits" title="Популярность разделов" host="{$v7982b1e077e535e00dc62cf8d6e9a455}" lang="{$v23a2cbb13502e40ff869bbfa3211fc9b}"  timerange_start="{$this->from_time}" timerange_finish="{$this->to_time}">
				<table>
					<column field="name" title="Раздел" prefix="" valueSuffix="" datatipField="tip" />
					<column field="count" title="Запросов абс." prefix="" valueSuffix="" />
					<column field="rel" title="Запросов отн." prefix="" valueSuffix="%" />
				</table>                
				<chart type="pie">
					<argument />
					<value field="count" />
					<caption field="name" />
				</chart>
				<data>
END;
				<statistics>
				<report name="pagesHits" title="Популярность подразделов" host="{$v7982b1e077e535e00dc62cf8d6e9a455}" lang="{$v23a2cbb13502e40ff869bbfa3211fc9b}"  timerange_start="{$this->from_time}" timerange_finish="{$this->to_time}">
				<table>
					<column field="name" title="Раздел" prefix="" valueSuffix="" datatipField="uri" />
					<column field="cnt" title="Показов абс." prefix="" valueSuffix="" />
					<column field="rel" title="Показов отн." prefix="" valueSuffix="%" />
				</table>
				<chart type="pie">
					<argument />
					<value field="cnt" />
					<caption field="name" />
				</chart>
				<data lcol="Раздел" rcol="Запросов">
END;