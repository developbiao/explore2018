<?php
// open_door make_by_id
function strHandle($str)
{
    $return = '';
    $array = explode("_", $str);
    foreach($array as $value)
    {
        $return .= ucfirst($value);

    }
    return $return;
}

echo strHandle("open_door") . PHP_EOL;


?>
