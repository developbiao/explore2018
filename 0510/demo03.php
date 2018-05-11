<?php
// zval变量容器
$a = range(0, 3);
xdebug_debug_zval('a');

// 定义变量b, 把a的值赋值给b
$b = $a;
xdebug_debug_zval('a');

// 修改$a的值
$a = range(0, 3);
xdebug_debug_zval('a');

