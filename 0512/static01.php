<?php
function myFunc()
{
    static $a = 1;
    echo $a++;
}

myFunc();
myFunc();
myFunc();
