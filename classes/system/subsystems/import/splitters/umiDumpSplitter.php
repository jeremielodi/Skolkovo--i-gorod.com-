<?php
 class umiDumpSplitter extends umiImportSplitter {protected function readDataBlock() {$v9a09b4dfda82e3e665e31092d1c3ec8d = DomDocument::load($this->file_path);$this->offset = 0;$this->complete = true;return $v9a09b4dfda82e3e665e31092d1c3ec8d;}public function translate(DomDocument $v9a09b4dfda82e3e665e31092d1c3ec8d) {return $v9a09b4dfda82e3e665e31092d1c3ec8d->saveXML();}}?>