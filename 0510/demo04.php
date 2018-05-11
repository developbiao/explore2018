<?php
// unset 只会取消引用， 不会销毁空间
$a = 77;
$b = &$a;
unset($b);
echo $a . PHP_EOL; 
?>
