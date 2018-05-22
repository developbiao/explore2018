<?php
$id = isset($_GET['id']) ? $_GET['id'] : 0;
$cache_name = md5(__FILE__) . '-' . $id . '.html';
$cache_lifetime = 30;

// 开启ob
ob_start();

// cache 过期检查
if(filectime(__FILE__) <= time() && file_exists($cache_name) && filectime($cache_name) + $cache_lifetime >= time())
{
    include($cache_name);
    error_log("from cache");
    exit("from cache");
}
else
{
   error_log("live file");
}

?>

    <h3>This is my script id=<?php echo $id;?></h3>

<?php
// 获取上面的内容
$content = ob_get_contents();

// 输出到浏览器
ob_end_flush();

// 写入缓存
$handle = fopen($cache_name, 'w');
fwrite($handle, $content);
fclose($handle);


?>
