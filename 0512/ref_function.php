<?php
function &myFunc()
{
    static $b = 10;
    return $b;
}

$a = myFunc();
echo $a . PHP_EOL; // 10
$a = &myFunc(); // a指向了$b的内存空间
echo $a . PHP_EOL; // 10
$a = 77;
echo myFunc() . PHP_EOL; // 77

?>
