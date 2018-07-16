<?php
$data = [8, 4, 1, 6, 7, 5, 10, -20, 0];

function bubbleSort($array)
{
    $count = count($array);
    for($i=0; $i<$count; $i++)
    {
        for($j = $count - 1; $j > $i; $j--)
        {
            if($array[$j] < $array[$j -1])
            {
                $tmp = $array[$j];
                $array[$j] = $array[$j - 1];
                $array[$j - 1] = $tmp;
            }
        }
    }
    return $array;
}

$result = bubbleSort($data);
print_r($result);

?>
