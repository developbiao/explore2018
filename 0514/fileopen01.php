<?php
// 打开文件
// 将文件的内容读取出来，在开头加入Hello World
// 将拼好的字符串写回到文件当中

$file_name = "./somefile.txt";
$handle = fopen($file_name, 'r');
$content = fread($handle, filesize($file_name));
fclose($handle);

$content = 'Hello World' . $content;
$handle = fopen($file_name, 'w');
fwrite($handle, $content);
fclose($handle);
echo "Program runing is ok!\n";

?>
