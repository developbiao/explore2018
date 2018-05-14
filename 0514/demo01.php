<?php
$str = '中文';
$pattern = '/[\x{4e00}-\x{9fa5}]+/u';
preg_match($pattern, $str, $match);
var_dump($match);

?>
