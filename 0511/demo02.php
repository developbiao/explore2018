<?php
header('Content-Type:text/html; charset=utf-8');
// get server address and client address
echo "<h3>ServerIP:{$_SERVER['SERVER_ADDR']}</h3>";
echo "<h3>ClientIP:{$_SERVER['REMOTE_ADDR']}</h3>";
?>
