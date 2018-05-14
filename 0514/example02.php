<?php
// 请匹配所有img标签中的src的值
$str = '<img alt="美丽女神" id="beatifly" src="lingNv.jpg" />';
$pattern = '/<img.*?src="(.*?)".*?\/?>/i';

preg_match($pattern, $str, $match);
var_dump($match);
