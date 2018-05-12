<?php
// 写了如下程序的输出结果
$count = 5;
function get_count()
{
    static $count;
    return $count++;
}
echo $count . PHP_EOL; // 5
++$count;

echo get_count() . PHP_EOL; // NULL;
echo get_count() . PHP_EOL; // 1
?>
