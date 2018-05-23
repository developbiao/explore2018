<?php
$string = "12321";

function isPalindrome($string)
{
    $a = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $string));
    echo strrev($a) . PHP_EOL;;
    return $a == strrev($a);
}

var_dump(isPalindrome($string));


?>
