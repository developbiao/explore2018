<?php
$array = array(7, 5, 10, 30, 80, -10, 9);

function bubbleSort($array)
{
    $count = count($array);
    for($i=0; $i<$count; $i++)
    {
        for($j = $count - 1; $j > $i; $j--)
        {
            if($array[$j] < $array[$j - 1])
            {
                $temp = $array[$j];
                $array[$j] = $array[$j - 1];
                $array[$j -1] = $temp;
            }
        }
    }

    return $array;
}

echo implode(',', bubbleSort($array)) . PHP_EOL;

?>
