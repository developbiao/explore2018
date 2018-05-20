<?php
// 1, 1, 2, 3, 5, 8, 13, 21, 34

$arr = [1, 1];

for($i = 2; $i<30; $i++)
{
    $arr[$i] = $arr[$i - 1] + $arr[$i - 2];
}

print_r($arr);


?>
