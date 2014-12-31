<?php
//$homepage = file_get_contents('http://www.facebook.com');
//echo $homepage;

$file = file_get_contents('example.txt',NULL ,NULL ,20,20);

//$file = file_get_contents('example.txt', file_use_include_path);
echo $file;
?>