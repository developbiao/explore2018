<?php
function recursiveDir($dir)
{
    $handle = opendir($dir);
    while(false !== ($file = readdir($handle)))
    {
        if($file == '.' || $file == '..')
            continue;
        echo $file . PHP_EOL;

        //recursive directory
        if(is_dir($dir . '/' . $file))
            recursiveDir($dir . '/' . $file);
    }
}

$dir = "/home/gongbiao/pythonbasics";
recursiveDir($dir);


?>
