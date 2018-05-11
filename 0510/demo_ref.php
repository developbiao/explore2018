<?php
//定义变量a
$a = range(0, 3);
xdebug_debug_zval('a');

//定义变量b并指向变量a的地址
$b = &$a;
xdebug_debug_zval('a');

