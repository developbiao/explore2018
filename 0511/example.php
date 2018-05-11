<?php
// 下列程序中请写出打印输出结果
// 优先级> >, ||,  =
$a = 0;
$b = 0;
if( $a = 3 > 0 || $b = 3 > 0)
{
    // before
    var_dump($a, $b);
    $a++; // bool ++还是bool
    $b++; // 1
    echo $a . "\n"; // 1
    echo $b . "\n"; // 1
}

?>
