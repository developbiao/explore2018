<?php
/**
 * @Describe: directory recursive
 * @Date: 2018/05/14
 * @Author: GongBiao
 */

// 1. 打开目录
// 2. 读取目录中的文件
// 3. 如果文件类型是目录继续打开
// 4. 读取子目录的文件
// 5. 如果文件类型是文件，输出文件名称
// 6. 关闭目录

function recursiveDir($dir)
{
    $handle = opendir($dir);
    while(false !== ($file = readdir($handle)) )
    {
        if( $file != '.' && $file != '..')
        {
            echo $file . PHP_EOL;
            if( filetype($dir . '/' . $file) == 'dir' )
            {
                recursiveDir($dir . '/' . $file);
            }
        }
    }
}

recursiveDir('./mydir01');
echo "Program runing is ok\n";

?>
