<?php
$mail = 'ggongbiao@gmail.com';
$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/";
$pattern = "/([\w\-]+\@[\w\-]+\.[\w\-]+)/";
preg_match($pattern, $mail, $matches);
print_r($matches);
?>
