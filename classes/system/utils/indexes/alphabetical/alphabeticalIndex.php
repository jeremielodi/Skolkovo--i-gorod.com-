<?php
 class alphabeticalIndex {public static   $letters = "абвгдежзийклмнопрстуфхцчшщыэюяabcdefghijklmnopqrstuvwxyz0123456789";protected   $selector = null,   $index = null;public function __construct(selector $v8be74552df93e31bbdd6b36ed74bdb6a) {$this->selector = $v8be74552df93e31bbdd6b36ed74bdb6a;}public function index($v240bf022e685b0ee30ad9fe9e1fb5d5b = 'a-zа-я0-9') {$v6a992d5529f459a44fee58c733255e86 = $this->run();$result = array();if(preg_match_all("/(([A-zА-я0-9])-([A-zА-я0-9]))/u", $v240bf022e685b0ee30ad9fe9e1fb5d5b, $vc68271a63ddbc431c307beb7d2918275)) {for($v865c0c0b4ab0e063e5caa3387c1a8741 = 0;$v865c0c0b4ab0e063e5caa3387c1a8741 < sizeof($vc68271a63ddbc431c307beb7d2918275[2]);$v865c0c0b4ab0e063e5caa3387c1a8741++) {$vd98a07f84921b24ee30f86fd8cd85c3c = wa_strpos(self::$letters, $vc68271a63ddbc431c307beb7d2918275[2][$v865c0c0b4ab0e063e5caa3387c1a8741]);$v01b6e20344b68835c5ed1ddedf20d531 = wa_strpos(self::$letters, $vc68271a63ddbc431c307beb7d2918275[3][$v865c0c0b4ab0e063e5caa3387c1a8741]);if($vd98a07f84921b24ee30f86fd8cd85c3c === false || $v01b6e20344b68835c5ed1ddedf20d531 === false) continue;for($v363b122c528f54df4a0446b6bab05515 = $vd98a07f84921b24ee30f86fd8cd85c3c;$v363b122c528f54df4a0446b6bab05515 <= $v01b6e20344b68835c5ed1ddedf20d531;$v363b122c528f54df4a0446b6bab05515++) {$va87deb01c5f539e6bda34829c8ef2368 = wa_substr(self::$letters, $v363b122c528f54df4a0446b6bab05515, 1);$result[$va87deb01c5f539e6bda34829c8ef2368] = isset($v6a992d5529f459a44fee58c733255e86[$va87deb01c5f539e6bda34829c8ef2368]) ? $v6a992d5529f459a44fee58c733255e86[$va87deb01c5f539e6bda34829c8ef2368] : 0;}}}return $result;}protected function run() {$permissions = permissionsCollection::getInstance();$v834239295ea6020233dda11b3d85af21 = $permissions->isSv();$v15d61712450a686a7f365adf4fef581f = $this->selector->mode;l_mysql_query("START TRANSACTION /* Get alphabetical index */");l_mysql_query("DROP TABLE IF EXISTS `alphabetical_index`");$vac5c74b64b4b8352ef2f181affb5ac2a = "CREATE TABLE `alphabetical_index` (";$vac5c74b64b4b8352ef2f181affb5ac2a .= "id int  unsigned not null)";l_mysql_query($vac5c74b64b4b8352ef2f181affb5ac2a);$v1b1cc7f086b3f074da452bc3129981eb = $this->selector->query();$vac5c74b64b4b8352ef2f181affb5ac2a = "INSERT INTO `alphabetical_index` {$v1b1cc7f086b3f074da452bc3129981eb}";l_mysql_query($vac5c74b64b4b8352ef2f181affb5ac2a);if($v15d61712450a686a7f365adf4fef581f == 'pages') {$vac5c74b64b4b8352ef2f181affb5ac2a = <<<SQL
SELECT SQL_CACHE LEFT(LOWER(`o`.`name`), 1) AS `letter`, COUNT(*) AS `cnt`
	FROM `alphabetical_index` `ai`, `cms3_hierarchy` `h`, `cms3_objects` `o`
	WHERE `h`.`id` = `ai`.`id` AND `o`.`id` = `h`.`obj_id`
	GROUP BY `letter`
	ORDER BY `letter`;
SQL;   }else {$vac5c74b64b4b8352ef2f181affb5ac2a = <<<SQL
SELECT SQCL_CACHE LEFT(LOWER(`o`.`name`), 1) AS `letter`, COUNT(*) AS `cnt`
	FROM `alphabetical_index` `ai`, `cms3_objects` `o`
	WHERE `o`.`id` = `ai`.`id`
	GROUP BY `letter`
	ORDER BY `letter`;
SQL;   }$result = l_mysql_query($vac5c74b64b4b8352ef2f181affb5ac2a);$v6a992d5529f459a44fee58c733255e86 = array();while(list($vf5b75010ea8a54b96f8fe7dafac65c18, $ve2942a04780e223b215eb8b663cf5353) = mysql_fetch_row($result)) {$v6a992d5529f459a44fee58c733255e86[$vf5b75010ea8a54b96f8fe7dafac65c18] = (int) $ve2942a04780e223b215eb8b663cf5353;}l_mysql_query("DROP TABLE IF EXISTS `alphabetical_index`");l_mysql_query("COMMIT");return $v6a992d5529f459a44fee58c733255e86;}};?>