<?php
$data = array(8,4,1,9,5,7,3,2,6,0, -1);

function bubbleSort($array)
{
    $count = count($array);
    for($i = 0; $i < $count; $i++)
    {
        for($j = $count -1; $j > $i; $j--)
        {
            if($array[$j] < $array[$j - 1])
            {
                $tmp = $array[$j];
                $array[$j] = $array[$j -1];
                $array[$j - 1] = $tmp;
            }

        }
    }

    return $array;
}

$data = bubbleSort($data);
print_r($data);



?>
