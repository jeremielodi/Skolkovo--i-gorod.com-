<?php
 class RSSFeed implements iRSSFeed {private $url,   $xml,   $items;public function __construct($v572d4e421e5e6b9bc11d815e8a027112) {$this->url = $v572d4e421e5e6b9bc11d815e8a027112;}public function loadContent() {$v568d8e07bbe5575518d5005e559743c3 = umiRemoteFileGetter::get($this->url);if(!$v568d8e07bbe5575518d5005e559743c3) {trigger_error("Can't load \"{$v572d4e421e5e6b9bc11d815e8a027112}\" RSS.", E_USER_WARNING);return false;}if (function_exists('mb_detect_encoding')) {if (mb_detect_encoding($v568d8e07bbe5575518d5005e559743c3, "UTF-8, ISO-8859-1, GBK, CP1251") != "UTF-8") {$v568d8e07bbe5575518d5005e559743c3 = iconv ("CP1251", "UTF-8//IGNORE", $v568d8e07bbe5575518d5005e559743c3);$v568d8e07bbe5575518d5005e559743c3 = preg_replace("/(encoding=\"windows-1251\")/i", "encoding=\"UTF-8\"", $v568d8e07bbe5575518d5005e559743c3);}}$this->xml = simplexml_load_string($v568d8e07bbe5575518d5005e559743c3);}public function loadRSS() {foreach($this->xml->channel->item as $v6b992fa9cd5bc92bc5a1efc4738a707e) {$v447b7147e84be512208dcc0995d67ebc = new RSSItem();$v447b7147e84be512208dcc0995d67ebc->setTitle($v6b992fa9cd5bc92bc5a1efc4738a707e->title);$v447b7147e84be512208dcc0995d67ebc->setContent($v6b992fa9cd5bc92bc5a1efc4738a707e->description);if ($v6b992fa9cd5bc92bc5a1efc4738a707e->pubDate) {$v447b7147e84be512208dcc0995d67ebc->setDate($v6b992fa9cd5bc92bc5a1efc4738a707e->pubDate);}else {$v447b7147e84be512208dcc0995d67ebc->setDate(date("Y-m-d H:i"));}$v447b7147e84be512208dcc0995d67ebc->setUrl($v6b992fa9cd5bc92bc5a1efc4738a707e->link);$this->items[] = $v447b7147e84be512208dcc0995d67ebc;}}public function loadAtom() {foreach($this->xml as $ve4d23e841d8e8804190027bce3180fa5 => $v6b992fa9cd5bc92bc5a1efc4738a707e) {if($ve4d23e841d8e8804190027bce3180fa5 != "entry") continue;if($v6b992fa9cd5bc92bc5a1efc4738a707e->content) {$v9a0364b9e99bb480dd25e1f0284c8555 = $v6b992fa9cd5bc92bc5a1efc4738a707e->content;}else {$v9a0364b9e99bb480dd25e1f0284c8555 = $v6b992fa9cd5bc92bc5a1efc4738a707e->summary;}$v447b7147e84be512208dcc0995d67ebc = new RSSItem();$v447b7147e84be512208dcc0995d67ebc->setTitle($v6b992fa9cd5bc92bc5a1efc4738a707e->title);$v447b7147e84be512208dcc0995d67ebc->setContent($v9a0364b9e99bb480dd25e1f0284c8555);$v447b7147e84be512208dcc0995d67ebc->setDate($v6b992fa9cd5bc92bc5a1efc4738a707e->published);$v447b7147e84be512208dcc0995d67ebc->setUrl($v6b992fa9cd5bc92bc5a1efc4738a707e->link['href']);$this->items[] = $v447b7147e84be512208dcc0995d67ebc;}}public function returnItems() {return $this->items;}}?>