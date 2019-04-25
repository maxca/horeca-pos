<?php

$logs = file_put_contents('test.txt',json_encode($_SERVER),'FILE_APPEND');