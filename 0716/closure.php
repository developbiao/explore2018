<?php
class A {
    private $x = 1;
}

// Pre PHP code
$getXCB = function (){
    return $this->x;
};

$getX = $getXCB->bindTo(new A, 'A'); // intermedaite closure 
echo $getX() . PHP_EOL;

// PHP 7+ code
$getX = function (){
    return $this->x;
}

echo $getX->call(new A);


?>
