<?php
 class RemoveDirectoryAction extends atomicAction {public function execute() {$v207e5b7e7d2b07f6b19066e8d62f4b1d = $this->getParam("target-directory");$this->removeDirectory($v207e5b7e7d2b07f6b19066e8d62f4b1d);}public function rollback() {}protected function removeDirectory($vd6fe1d0be6347b8ef2427fa629c04485) {$v736007832d2167baaae763fd3a3f3cf1 = new umiDirectory($vd6fe1d0be6347b8ef2427fa629c04485);foreach($v736007832d2167baaae763fd3a3f3cf1 as $v447b7147e84be512208dcc0995d67ebc) {if($v447b7147e84be512208dcc0995d67ebc instanceof umiDirectory) {$this->removeDirectory($v447b7147e84be512208dcc0995d67ebc->getPath());}if($v447b7147e84be512208dcc0995d67ebc instanceof umiFile) {$v447b7147e84be512208dcc0995d67ebc->delete();}}$v736007832d2167baaae763fd3a3f3cf1->delete();}};?>