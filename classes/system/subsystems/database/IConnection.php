<?php
interface IConnection {function __construct($v67b3dba8bc6778101892eb77249db32e, $vd56b699830e77ba53855679cb1d252da, $v5f4dcc3b5aa765d61d8327deb882cf99, $v4cd4a49f25984e26fe708c1fbd896653, $v901555fb06e346cb065ceb9808dcfc25 = false, $v23c6323bfb57bb630b8a2ecf703d6bb0 = false, $v7e85bcb66fb9a809d5ab4f62a8b8bea8 = true);function open();function close();function query($vbe571b25caf2bbed46f6e47182670bf7, $v3ede331cca63faafb68a34acb42767c6 = false);function queryResult($vbe571b25caf2bbed46f6e47182670bf7, $v3ede331cca63faafb68a34acb42767c6 = false);function errorOccured();function errorDescription();function isOpen();};?>