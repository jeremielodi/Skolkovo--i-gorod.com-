<?php
class umiSimpleXML {private $DOM   = null;private $XPath = null;private $Node  = null;public function __construct() {$v1898ec7819a201adddc42061c2041cf7 = func_num_args();if($v1898ec7819a201adddc42061c2041cf7 > 0) {$ve866231598ed4cb18be5e493240a11b0 = func_get_arg(0);$v80a26383e00e892c98ebd598edcc5dbb = ($v1898ec7819a201adddc42061c2041cf7 > 1) ? func_get_arg(1) : null;$v3b6478e2d54b4966388cfd33e5e87f78 = ($v1898ec7819a201adddc42061c2041cf7 > 2) ? func_get_arg(2) : null;if(is_string($ve866231598ed4cb18be5e493240a11b0)) {$this->DOM   = new DOMDocument();$this->DOM->loadXML($ve866231598ed4cb18be5e493240a11b0);$this->XPath = new DOMXPath($this->DOM);$this->Node  = $this->DOM->firstChild;}else if($ve866231598ed4cb18be5e493240a11b0 instanceof DOMDocument) {$this->DOM = $ve866231598ed4cb18be5e493240a11b0;if($v80a26383e00e892c98ebd598edcc5dbb instanceof DOMNode) {$this->Node = $v80a26383e00e892c98ebd598edcc5dbb;}else {$this->Node = $this->DOM->firstChild;}if($v3b6478e2d54b4966388cfd33e5e87f78 instanceof DOMXPath) {$this->XPath = $v3b6478e2d54b4966388cfd33e5e87f78;}else {$this->XPath = new DOMXPath($this->DOM);}}else {$this->DOM   = new DOMDocument();$this->XPath = new DOMXPath($this->DOM);$this->Node  = $this->DOM->firstChild;}}else {$this->DOM   = new DOMDocument();$this->XPath = new DOMXPath($this->DOM);$this->Node  = $this->DOM->firstChild;}}public function loadXML($_xmlString) {$this->DOM->loadXML($_xmlString);$this->XPath = new DOMXPath($this->DOM);$this->Node  = $this->DOM->firstChild;}public function saveXML() {return $this->DOM->saveXML();}public function xpath($_path) {$vca15fd43dfaeb80eb8c125735e0479b0 = $this->XPath->evaluate($_path, $this->Node);if($vca15fd43dfaeb80eb8c125735e0479b0->length) {$result = array();for($v865c0c0b4ab0e063e5caa3387c1a8741=0;$v865c0c0b4ab0e063e5caa3387c1a8741 < $vca15fd43dfaeb80eb8c125735e0479b0->length;$v865c0c0b4ab0e063e5caa3387c1a8741++)    $result[] = new umiSimpleXML($this->DOM, $vca15fd43dfaeb80eb8c125735e0479b0->item($v865c0c0b4ab0e063e5caa3387c1a8741), $this->XPath);return ($vca15fd43dfaeb80eb8c125735e0479b0->length == 1) ? $result[0] : $result ;}return null;}public function count($_path) {return $this->XPath->evaluate($_path, $this->Node)->length;}public function __get($_elementName) {return $this->xpath($_elementName);}public function __set($_elementName, $_elementValue) {$v8e2dcfd7e7e24b1ca76c1193f645902b = $this->DOM->createElement($_elementName);$this->Node->appendChild($v8e2dcfd7e7e24b1ca76c1193f645902b);return $v8e2dcfd7e7e24b1ca76c1193f645902b->nodeValue = $_elementValue;}public function name() {return $this->Node->nodeName;}public function attribute($_attributeName) {$vd2eb444e35c0a71f0a85df8194acb5b6 = $this->Node->attributes->getNamedItem($_attributeName);if(func_num_args() < 2) {return $vd2eb444e35c0a71f0a85df8194acb5b6 ? $vd2eb444e35c0a71f0a85df8194acb5b6->nodeValue : null;}else {$_attributeValue = func_get_arg(1);if(!$vd2eb444e35c0a71f0a85df8194acb5b6) {$vd2eb444e35c0a71f0a85df8194acb5b6 = $this->DOM->createAttribute($_attributeName);$this->Node->appendChild($vd2eb444e35c0a71f0a85df8194acb5b6);}return $vd2eb444e35c0a71f0a85df8194acb5b6->nodeValue = $_attributeValue;}}public function value() {if(func_num_args() > 0) $this->Node->nodeValue = func_get_arg(0);return $this->Node->nodeValue;}public function __toString() {return $this->value();}};?>