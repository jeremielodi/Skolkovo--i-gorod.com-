<?php
 class ordersCommerceMLExporter extends umiExporter {public function setOutputBuffer() {$v7f2db423a49b305459147332fb01cf87 = outputBuffer::current('HTTPOutputBuffer');$v7f2db423a49b305459147332fb01cf87->charset("windows-1251");$v7f2db423a49b305459147332fb01cf87->contentType("text/xml");return $v7f2db423a49b305459147332fb01cf87;}public function export($v01af57e4ae6d799566f5695b3679756b) {$v8be74552df93e31bbdd6b36ed74bdb6a = new selector('objects');$v8be74552df93e31bbdd6b36ed74bdb6a->types('object-type')->name('emarket', 'order');$v8be74552df93e31bbdd6b36ed74bdb6a->where('need_export')->equals(1);$vbbd738a112791dd1d0cb6bd0d61d878f = $this->getUmiDumpObjects($v8be74552df93e31bbdd6b36ed74bdb6a->result, "CommerceML2");$vd0c75bac742760cf71fd76cd75d0c02a = './xsl/export/' . $this->type . '.xsl';if (!is_file($vd0c75bac742760cf71fd76cd75d0c02a)) {throw new publicException("Can't load exporter {$vd0c75bac742760cf71fd76cd75d0c02a}");}$v9a09b4dfda82e3e665e31092d1c3ec8d = new DOMDocument("1.0", "utf-8");$v9a09b4dfda82e3e665e31092d1c3ec8d->formatOutput = XML_FORMAT_OUTPUT;$v9a09b4dfda82e3e665e31092d1c3ec8d->loadXML($vbbd738a112791dd1d0cb6bd0d61d878f);$v640eac53ad75db5c49a9ec86390d8530 = xslTemplater::getInstance();$v640eac53ad75db5c49a9ec86390d8530->setIsInited(false);$v640eac53ad75db5c49a9ec86390d8530->init($vd0c75bac742760cf71fd76cd75d0c02a);$v640eac53ad75db5c49a9ec86390d8530->setXmlDocument($v9a09b4dfda82e3e665e31092d1c3ec8d);$result = $v640eac53ad75db5c49a9ec86390d8530->parseResult();$result = iconv("UTF-8", "CP1251", $result);return $result;}}?>