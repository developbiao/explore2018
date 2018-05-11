<?php
// 对象的引用

class Person{
    public $name = "zhangsan";
}

$p1 = new Person();
xdebug_debug_zval('p1');

$p2 = $p1;
xdebug_debug_zval('p1');

$p2->name = "lisi";
xdebug_debug_zval('p1');
