<?php

$logs = file_put_contents(__DIR__.'/test.txt',json_encode($_SERVER),'FILE_APPEND');