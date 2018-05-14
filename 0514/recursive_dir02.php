<?php

function recursiveDir($dir)
{
    $handle = opendir($dir);
    while( false !== ($file = readdir($handle)) )
    {
        if($file != '.' && $file != '..')
        {
            echo $file . PHP_EOL;
            if(filetype($dir . '/' . $file) == 'dir')
            {
                recursiveDir($dir . '/' . $file);
            }
        }
    }
}

recursiveDir('./');
echo "======RECURSIVE DIR FINISHED!=========\n";

?>
