<?php
class auditoryActivity extends simpleStat{private $groupby;private $groupby_key;protected $interval = '-30 days';public function get()    {$this->groupby = $this->calcGroupby($this->start, $this->finish);return array('detail' => $this->getDetail(), 'dynamic' => $this->getDynamic(), 'groupby' => $this->groupby);}public function getDetail()    {l_mysql_query("DROP TEMPORARY TABLE IF EXISTS `tmp_activity`");l_mysql_query("CREATE TEMPORARY TABLE `tmp_activity` (`days` INT) ENGINE = MEMORY");l_mysql_query("INSERT INTO `tmp_activity` SELECT FLOOR( ( UNIX_TIMESTAMP(MAX(`date`)) - UNIX_TIMESTAMP(MIN(`date`)) ) / (COUNT(*) - 1) / 3600 / 24 ) AS `days` FROM `cms_stat_paths`
                     WHERE `date` BETWEEN " . $this->getQueryInterval() . " " . $this->getHostSQL() . $this->getUserFilterWhere() . "
                      GROUP BY `user_id`");return $this->simpleQuery("SELECT COUNT(*) AS `cnt`, IF(`days` > 10, IF(`days` > 20, IF(`days` > 30, IF(`days` > 40, IF(`days` > 50, 51, 41), 31), 21), 11), `days`) AS `days` FROM `tmp_activity` GROUP BY `days`");}public function getDynamic()    {l_mysql_query("DROP TEMPORARY TABLE IF EXISTS `tmp_activity`");l_mysql_query("CREATE TEMPORARY TABLE `tmp_activity` (`days` INT, `" . $this->groupby . "` INT, `year` INT, `date` DATETIME) ENGINE = MEMORY");l_mysql_query("INSERT INTO `tmp_activity` SELECT FLOOR( ( UNIX_TIMESTAMP(MAX(`date`)) - UNIX_TIMESTAMP(MIN(`date`)) ) / (COUNT(*) - 1) / 3600 / 24 ) AS `days`, DATE_FORMAT(`date`, '%" . $this->groupby_key . "') AS `" . $this->groupby . "`, DATE_FORMAT(`date`, '%Y') AS `year`, `date` FROM `cms_stat_paths`
                     WHERE `date` BETWEEN '" . $this->formatDate($this->start) . "' AND '" . $this->formatDate($this->finish) . "' " . $this->getHostSQL() . $this->getUserFilterWhere() . "
                      GROUP BY `user_id`");return $this->simpleQuery("SELECT AVG(`days`) AS `avg`, `" . $this->groupby . "` AS `period`, UNIX_TIMESTAMP(`date`) AS `ts` FROM `tmp_activity`
                                     GROUP BY `" . $this->groupby . "`, `year` ORDER BY `date`");}private function calcGroupby($vea2b2676c28c0db26d39331a336c6b92, $v3248bc7547ce97b2a197b2a06cf7283d)    {$v480b0ab43f368eb46e331029cacb5d1e = ceil(($v3248bc7547ce97b2a197b2a06cf7283d - $vea2b2676c28c0db26d39331a336c6b92) / (3600 * 24));if ($v480b0ab43f368eb46e331029cacb5d1e > 30) {$this->groupby_key = 'u';return 'week';}elseif ($v480b0ab43f368eb46e331029cacb5d1e > 7) {$this->groupby_key = 'j';return 'day';}$this->groupby_key = 'k';return 'hour';}}?>