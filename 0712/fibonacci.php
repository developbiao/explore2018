<?php
//expect 1, 1, 2, 3, 5, 8, 13, 21, 34
$array = [1, 1];
for($i=2; $i<20; $i++)
{
    $array[$i] = $array[$i-1] + $array[$i - 2];
}
print_r($array);
?>
