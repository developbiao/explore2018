<?php
//get primer
$array = [];
for($i=1; $i<=100; $i++)
{
    $k = 0;
    for($j=1; $j<$i; $j++)
    {
        if($i % $j == 0)
            $k++;
    }

    if($k == 1)
    {
        $array[] = $i;
    }
}

echo implode(',', $array) . PHP_EOL;
?>
