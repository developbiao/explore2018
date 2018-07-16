<?php
// 转换对象为 __PHP_Incomplete_Class
$data = unserialize($foo, ["allowd_classes" => false]);

// 转换对象为__PHP_Incomplete_Class 对象，除了 MyClass和MyClass2
$data = unserialize($foo, ["allowd_classes" => ["MyClass", "MyClass2"]]);


// 默认接受所有类
$data = unserialize($foo, ["allowd_classes" => true]);


?>
