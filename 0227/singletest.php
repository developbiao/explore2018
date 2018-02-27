<?php
include "Singleton.php";

//$singleton = new Singleton();
$singleton = Singleton::singleton();

// 复制对象将导致一个E_USER_ERROR
$singleton_copy = clone $singleton;
echo 'Program running is ok!' . PHP_EOL;
