<?php
namespace Foo;

function strlen(){}
const INI_ALL = 3;
class Exception {};

$a = \strlen('hi'); // 调用全局函数
$b = \INI_ALL; // 访问全局常量 INI_ALL
$c = new \Exception('error'); // 实例化全局类 Exception

echo $a . PHP_EOL;
