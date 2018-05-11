<?php

$data = ['a', 'b', 'c'];

foreach($data as $key => $val)
{
    $val = &$data[$key];
    var_dump($data);
}
var_dump($data);

// 程序运行时，每一次loop结束后变量$data的值是什么？请解释
// 程序执行完成后，变量$data的值是什么，请解释
