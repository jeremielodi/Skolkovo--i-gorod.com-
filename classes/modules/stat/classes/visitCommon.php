<?php
require_once dirname(__FILE__).'/holidayRoutineCounter.php';class visitCommon extends simpleStat{private $holidays_count = 0;private $routine_count = 0;protected $interval = '-10 days';public function __construct($v3248bc7547ce97b2a197b2a06cf7283d = null, $vd2e16d3f793e62737a6cdf2d54b0d9c1 = null)    {$v3248bc7547ce97b2a197b2a06cf7283d = time();parent::__construct($v3248bc7547ce97b2a197b2a06cf7283d);}public function get()    {$v4e21d0994fbebbafeb95172093e5ebb2 = $this->getDetail();return array('detail' => $v4e21d0994fbebbafeb95172093e5ebb2['all'], 'avg' => $this->getAvg(), 'summ' => $this->getSumm(), 'total' => $v4e21d0994fbebbafeb95172093e5ebb2['total']);}private function getSumm() {$this->setUpVars();$v30103711375a567954d36923f75319b8 = $this->getQueryInterval();$vc1886ec018769dae2d0bebcd668df00e = $this->host_id;$v4ab6af2707db3b31783c279700eba64e = "
			SELECT
				COUNT(*) AS `cnt`
			FROM
				`cms_stat_hits` `h`
                              	INNER JOIN
					`cms_stat_pages` `p` ON `p`.`id` = `h`.`page_id`
                    INNER JOIN `cms_stat_paths` `pth` ON `pth`.`id` = `h`.`path_id`
			WHERE
				`h`.`date` BETWEEN ".$v30103711375a567954d36923f75319b8."
				 ".$this->getHostSQL("p") . $this->getUserFilterWhere('pth') ."
			ORDER BY
				`h`.`date` ASC";$v0e413ad7c08b77c867e2d87219f29e93 = $this->simpleQuery($v4ab6af2707db3b31783c279700eba64e);$v663ccf380acaf3f549f1612654dc109d = (int) $v0e413ad7c08b77c867e2d87219f29e93[0]['cnt'];return $v663ccf380acaf3f549f1612654dc109d;}private function getDetail()    {$this->setUpVars();$va181a603769c1f98ad927e7367c7aa51 = $this->simpleQuery("SELECT SQL_CALC_FOUND_ROWS COUNT(*) AS `cnt`, UNIX_TIMESTAMP(h.`date`) AS `ts` FROM `cms_stat_hits` `h`
                              INNER JOIN `cms_stat_pages` `p` ON `p`.`id` = `h`.`page_id`
                              INNER JOIN `cms_stat_paths` `pth` ON `pth`.`id` = `h`.`path_id`
                               WHERE `h`.`date` BETWEEN " . $this->getQueryInterval() . " " . $this->getHostSQL("p") . $this->getUserFilterWhere('pth')  . "
                                GROUP BY `h`.`day`, h.`month`
                                 ORDER BY `ts` ASC", true);$v9b207167e5381c47682c6b4f58a623fb = $this->simpleQuery('SELECT FOUND_ROWS() as `total`');$v8016fd3f91b68b651801a7c279f41ea4 = (int) $v9b207167e5381c47682c6b4f58a623fb[0]['total'];return array("all"=>$va181a603769c1f98ad927e7367c7aa51, "total"=>$v8016fd3f91b68b651801a7c279f41ea4);}private function getAvg()    {$this->setUpVars();$v36f75e2036c54462c47b965f4a581cff = "(SELECT 'routine' AS `type`, COUNT(*) / " . $this->routine_count . ".0 AS `avg` FROM `cms_stat_hits` `h`
                 LEFT JOIN `cms_stat_holidays` `holidays` ON `h`.`day` = `holidays`.`day` AND `h`.`month` = `holidays`.`month`
                  INNER JOIN `cms_stat_pages` `p` ON `p`.`id` = `h`.`page_id`
                   WHERE `date` BETWEEN " . $this->getQueryInterval() . "  " . $this->getHostSQL("p") . "
                   AND `day_of_week` BETWEEN 1 AND 5 AND `holidays`.`id` IS NULL)
                UNION
                (SELECT 'weekend' AS `type`, COUNT(*) / " . $this->holidays_count . ".0 AS `avg` FROM `cms_stat_hits` `h`
                 LEFT JOIN `cms_stat_holidays` `holidays` ON `h`.`day` = `holidays`.`day` AND `h`.`month` = `holidays`.`month`
                  INNER JOIN `cms_stat_pages` `p` ON `p`.`id` = `h`.`page_id`
                   WHERE `date` BETWEEN " . $this->getQueryInterval() . "  " . $this->getHostSQL("p") . "
                    AND (`day_of_week` NOT BETWEEN 1 AND 5 OR `holidays`.`id` IS NOT NULL))";$v9b207167e5381c47682c6b4f58a623fb = l_mysql_query($v36f75e2036c54462c47b965f4a581cff);$result = array();while ($vf1965a857bc285d26fe22023aa5ab50d = mysql_fetch_assoc($v9b207167e5381c47682c6b4f58a623fb)) {$result[$vf1965a857bc285d26fe22023aa5ab50d['type']] = $vf1965a857bc285d26fe22023aa5ab50d['avg'];}return $result;}private function setUpVars()    {$v9b207167e5381c47682c6b4f58a623fb = holidayRoutineCounter::count($this->start, $this->finish);$this->holidays_count = $v9b207167e5381c47682c6b4f58a623fb['holidays'];$this->routine_count = $v9b207167e5381c47682c6b4f58a623fb['routine'];}}?>