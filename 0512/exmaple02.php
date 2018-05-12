<?php
$var1 = 5;
$var2 = 10;
function foo(&$my_var)
{
    global $var1;
    $var1 += 2; //7
    $var2 = 4;
    $my_var += 3; // 8
    return $var2;
}

$my_var = 5;
echo foo($my_var) . PHP_EOL;  // 4
echo $my_var . PHP_EOL; // 8
echo $var1 . PHP_EOL; // 7
echo $var2 . PHP_EOL; // 10
$bar = 'foo';
$my_var = 10;
echo $bar($my_var) . PHP_EOL; //4
?>
