<?php
$value = 'something from somewhere';

//setcookie("TestCookie", $value);
setcookie("TestCookie2", $value, time() + 3600); // expire in 1 hour
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

?>
