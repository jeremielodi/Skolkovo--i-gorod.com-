<?php
class auditoryVolume extends simpleStat{private $groupby;protected $interval = '-1 year';public function get() {$this->groupby = $this->calcGroupby($this->start, $this->finish);$v36f75e2036c54462c47b965f4a581cff = "SELECT COUNT(DISTINCT(`p`.`user_id`)) AS `cnt`, UNIX_TIMESTAMP(`h`.`date`) AS `ts`, `h`.`date`, `h`.`" . $this->groupby . "` AS `period` FROM `cms_stat_hits` `h`
                     INNER JOIN `cms_stat_pages` `pg` ON `pg`.`id` = `h`.`page_id`
                      INNER JOIN `cms_stat_paths` `p` ON `p`.`id` = `h`.`path_id`
                       WHERE `h`.`date` BETWEEN " . $this->getQueryInterval() . " " . $this->getHostSQL("p") .$this->getUserFilterWhere('p'). "
                        GROUP BY `h`.`" . $this->groupby . "`
                         ORDER BY `h`.`date` ASC";$v9b207167e5381c47682c6b4f58a623fb = l_mysql_query($v36f75e2036c54462c47b965f4a581cff);$result = array();while ($vf1965a857bc285d26fe22023aa5ab50d = mysql_fetch_assoc($v9b207167e5381c47682c6b4f58a623fb)) {$result[] = array('ts' => $vf1965a857bc285d26fe22023aa5ab50d['ts'], 'cnt' => $vf1965a857bc285d26fe22023aa5ab50d['cnt'], 'period' => $vf1965a857bc285d26fe22023aa5ab50d['period']);}return array('detail' => $result, 'groupby' => $this->groupby);}private function calcGroupby($vea2b2676c28c0db26d39331a336c6b92, $v3248bc7547ce97b2a197b2a06cf7283d) {$v480b0ab43f368eb46e331029cacb5d1e = ceil(($v3248bc7547ce97b2a197b2a06cf7283d - $vea2b2676c28c0db26d39331a336c6b92) / (3600 * 24));if ($v480b0ab43f368eb46e331029cacb5d1e > 30) {return 'week';}elseif ($v480b0ab43f368eb46e331029cacb5d1e > 7) {return 'day';}return 'hour';}}?>