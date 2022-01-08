<?php
$hello = '150'; //var that can be pass to python
//run python
echo shell_exec("python /link/to/your/python/file/mkdir.py 2>&1" . $hello)

#pass multiple var to python
#$info = $var1.' '.$var2.' '.$var3;
#echo shell_exec("python /link/to/your/python/file/mkdir.py 2>&1" . $hello)
?>
