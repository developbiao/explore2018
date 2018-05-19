<?php
$data = [8, 3, -1, 20, 70, 50];

function bubbleSort($array)
{
    $count = count($array);
    for($i=0; $i<$count -1; $i++)
    {
        for($j = $count - 1; $j > $i; $j--)
        {
            if($array[$j] > $array[$j - 1])
            {
                $temp = $array[$j];
                $array[$j] = $array[$j - 1];
                $array[$j-1] = $temp;
            }
        }
    }

   return $array;
}


$str_origin = implode(',', $data);
echo "ORIGIN:" . $str_origin . PHP_EOL;

$result_str = implode(',', bubbleSort($data));
echo "RESULT:" . $result_str . PHP_EOL;


?>
