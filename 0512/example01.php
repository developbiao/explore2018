<?php
$a = 1;
function myFunc(&$a)
{
    $a += 3;
}

myFunc($a);
echo $a . PHP_EOL;
?>
