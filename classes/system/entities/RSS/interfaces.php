<?php
 interface iRSSFeed {public function __construct($v572d4e421e5e6b9bc11d815e8a027112);public function loadContent();public function loadRSS();public function loadAtom();public function returnItems();};interface iRSSItem {public function setTitle($vd5d3db1765287eef77d7927cc956f50a);public function getTitle();public function setContent($v9a0364b9e99bb480dd25e1f0284c8555);public function getContent();public function setDate($v5fc732311905cb27e82d67f4f6511f7f);public function getDate();public function setUrl($v572d4e421e5e6b9bc11d815e8a027112);public function getUrl();};?>