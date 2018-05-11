<?php
// 定义一个变量
$a = range(1, 1000);
var_dump(memory_get_usage());

// 定义变量b, 将a变量赋值给b
// COW Copy On Write
$b = $a;
var_dump(memory_get_usage());

// 对b进行修改
$a = range(0, 1000);
var_dump(memory_get_usage());
