<?php
class openstatCampaigns extends simpleStat{protected $params = array('source_id' => 0);public function get()    {l_mysql_query("SET @cnt := (SELECT COUNT(*) FROM `cms_stat_sources_openstat` `os`
                                     INNER JOIN `cms_stat_paths` `p` ON `p`.`id` = `os`.`path_id`
                                       WHERE `p`.`date` BETWEEN " . $this->getQueryInterval() . " " . $this->getHostSQL("p") . $this->getUserFilterWhere('p') . ((int)$this->params['source_id'] > 0 ? ' AND `os`.`source_id` =  ' . (int)$this->params['source_id'] : '') . ")");$result = $this->simpleQuery("SELECT COUNT(*) AS `total` FROM `cms_stat_sources_openstat` `os`
                                     INNER JOIN `cms_stat_paths` `p` ON `p`.`id` = `os`.`path_id`
                                      INNER JOIN `cms_stat_sources_openstat_campaign` `c` ON `c`.`id` = `os`.`campaign_id`
                                       WHERE `p`.`date` BETWEEN " . $this->getQueryInterval() . " " . $this->getHostSQL("p") . $this->getUserFilterWhere('p') . ((int)$this->params['source_id'] > 0 ? ' AND `os`.`source_id` =  ' . (int)$this->params['source_id'] : ''));$v8016fd3f91b68b651801a7c279f41ea4 = (int) $result[0]['total'];$v9b207167e5381c47682c6b4f58a623fb = $this->simpleQuery("SELECT SQL_CALC_FOUND_ROWS COUNT(*) AS `abs`, COUNT(*) / @cnt * 100 AS `rel`, `c`.`name`, `c`.`id` as 'campaign_id' FROM `cms_stat_sources_openstat` `os`
                                     INNER JOIN `cms_stat_paths` `p` ON `p`.`id` = `os`.`path_id`
                                      INNER JOIN `cms_stat_sources_openstat_campaign` `c` ON `c`.`id` = `os`.`campaign_id`
                                       WHERE `p`.`date` BETWEEN " . $this->getQueryInterval() . " " . $this->getHostSQL("p") . $this->getUserFilterWhere('p') . ((int)$this->params['source_id'] > 0 ? ' AND `os`.`source_id` =  ' . (int)$this->params['source_id'] : '') . "
                                        GROUP BY `c`.`id`
                                         ORDER BY `abs` DESC
                                          LIMIT " . $this->offset . ", " . $this->limit, true);return array("all"=>$v9b207167e5381c47682c6b4f58a623fb['result'], "summ"=>$v8016fd3f91b68b651801a7c279f41ea4, "total"=>$v9b207167e5381c47682c6b4f58a623fb['FOUND_ROWS'], 'source_id'=>(isset($this->params['source_id']) ? intval($this->params['source_id']) : 0));}}?>