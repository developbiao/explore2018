<?php
// 自定一个function 实现array_merge功能

function my_merge()
{
    $result = array();
    $arrays = func_get_args();
    foreach($arrays as $array)
    {
        if( is_array($array))
        {
            foreach($array as $value)
            {
                $result[] = $value;
            }
        }
    }

    return $result;
}

print_r(my_merge([1], [1, 2], [5, 7]));

?>
