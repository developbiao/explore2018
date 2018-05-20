<?php
// define function string reverse
// abcdefg > gfedcba

// a, b, c, d, e
function str_rev($str)
{
    for($i=0; true; $i++)
    {
        if( !isset($str[$i]) )
            break;
    }

    $return = '';
    for($j=$i-1; $j >=0; $j--)
    {
        $return .= $str[$j];
    }

    return $return;

}

echo str_rev('abcdef') . PHP_EOL;


?>
