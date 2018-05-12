<?php
$outer = "hello world";

function myFunc()
{
    //global $outer;
    //echo $outer . PHP_EOL;
    
    //$GLOBALS['outer'];
    $GLOBALS['outer'] .= ', Hello interview!';
    echo "Globals: " . $GLOBALS['outer'];
}

// callback
myFunc();

