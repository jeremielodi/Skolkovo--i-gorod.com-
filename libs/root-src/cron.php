<?php
 require CURRENT_WORKING_DIR . "/libs/root-src/standalone.php";ob_clean();if(isset($_SERVER['HTTP_HOST'])) {define("CRON", "HTTP");$v7f2db423a49b305459147332fb01cf87 = outputBuffer::current('HTTPOutputBuffer');$v7f2db423a49b305459147332fb01cf87->contentType('text/plain');$v06d4cd63bde972fc66a0aed41d2f5c51 = <<<END
This file should be executed by cron only. Please, run it via HTTP for test only.
Notice: maximum priority level can accept values between "1" and "10", where "1" is maximum priority.


END;