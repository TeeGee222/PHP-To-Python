<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOLA</title>
</head>
<body>
    BONJOUR 
<?php
$hello = '150';
//run python
echo shell_exec("python /laragon/www/Musiquetransfert/php_to_python_test/mkdir.py 2>&1" . $hello)
?>
</body>
</html>