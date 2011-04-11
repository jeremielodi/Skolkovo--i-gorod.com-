<?php
class auditoryLoyality extends simpleStat{private $groupby;protected $interval = '-30 days';public function get()    {$this->groupby = $this->calcGroupby($this->start, $this->finish);return array('detail' => $this->getDetail(), 'dynamic' => $this->getDynamic(), 'groupby' => $this->groupby);}private function getDetail()    {l_mysql_query("DROP TEMPORARY TABLE IF EXISTS `tmp_users_loyality`");l_mysql_query("CREATE TEMPORARY TABLE `tmp_users_loyality` (`count` INT) ENGINE = MEMORY");l_mysql_query("INSERT INTO `tmp_users_loyality` SELECT COUNT(*) AS `cnt` FROM `cms_stat_paths` `p`
                      INNER JOIN `cms_stat_users` `u` ON `u`.`id` = `p`.`user_id` AND `u`.`first_visit` < `p`.`date`
                       WHERE `p`.`date` BETWEEN " . $this->getQueryInterval() . " " . $this->getHostSQL("p") . $this->getUserFilterWhere('p') .  "
                        GROUP BY `p`.`user_id`");return $this->simpleQuery("SELECT COUNT(*) AS `cnt`, IF(`count` > 10, IF(`count` > 20, IF(`count` > 30, IF(`count` > 40, IF(`count` > 50, 51, 41), 31), 21), 11), `count`) AS `visits_count` FROM `tmp_users_loyality`
                             GROUP BY `visits_count`");}private function getDynamic()    {return $this->simpleQuery("SELECT COUNT(*) / COUNT(DISTINCT(`p`.`user_id`)) AS `avg`, `h`.`" . $this->groupby . "` AS `period`, UNIX_TIMESTAMP(`h`.`date`) AS `ts` FROM `cms_stat_hits` `h`
                                    INNER JOIN `cms_stat_paths` `p` ON `p`.`id` = `h`.`path_id`
                                     WHERE `h`.`date` BETWEEN " . $this->getQueryInterval() . " AND `h`.`number_in_path` = 1 " . $this->getHostSQL("p") . $this->getUserFilterWhere('p') . "
                                      GROUP BY `h`.`" . $this->groupby . "`, `h`.`year` ORDER BY `ts` ASC");}private function calcGroupby($vea2b2676c28c0db26d39331a336c6b92, $v3248bc7547ce97b2a197b2a06cf7283d)    {$v480b0ab43f368eb46e331029cacb5d1e = ceil(($v3248bc7547ce97b2a197b2a06cf7283d - $vea2b2676c28c0db26d39331a336c6b92) / (3600 * 24));if ($v480b0ab43f368eb46e331029cacb5d1e > 180) {return 'month';}return 'week';}}?>