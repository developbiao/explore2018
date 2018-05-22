<?php

$since = isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) ? $_SERVER['HTTP_IF_MODIFIED_SINCE'] : gmdate('D, d M Y H:i:s', time());

$lifetime = 3600;

if( strtotime($since) + $lifetime > time() )
{
    header('HTTP/1.1 304 Not Modified');
    exit;
}

header('Last-Modified: ' . gmdate('D, d M Y H:i:s', time()) . ' GMT');
echo time();
echo "hello";
