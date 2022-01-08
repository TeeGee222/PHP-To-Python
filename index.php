<?php
$hello = '150'; //var that can be pass to python
//run python
echo shell_exec("python /link/to/your/python/file/mkdir.py 2>&1" . $hello)
?>
