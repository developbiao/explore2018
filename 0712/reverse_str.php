<?php

function str_rev($str)
{
    for($i=0; true; $i++)
    {
        if(!isset($str[$i]))
            break;
    }

    $result = '';
    for($j=$i-1; $j>=0; $j--)
    {
        $result .= $str[$j];
        
    }
    return $result;
}

echo str_rev('hello china') . PHP_EOL;

?>
