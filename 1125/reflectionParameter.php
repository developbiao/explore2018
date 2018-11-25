<?php
require_once "fullshop.php";

$product_class = new ReflectionClass('CdProduct');
$method = $product_class->getMethod("__construct");
$params = $method->getParameters();

foreach( $params as $param){
  echo argData( $param ) . PHP_EOL;
}

function argData( ReflectionParameter $arg)
{
  $details = "";
  $declaringclass = $arg->getDeclaringClass();
  $name = $arg->getName();
  $class = $arg->getClass();
  $position = $arg->getPosition();
  $details .= "\$$name has position $position \n";

  if( !empty( $class )){
    $classname = $class->getName();
    $details .= "\$$name must be a $classname object\n";

  }


  if( $arg->isPassedByReference() ) {
      $details .= "\$$name is passed by reference\n";
  }

  if( $arg->isDefaultValueAvailable() ){
      $def = $arg->getDefaultValue();
      $details .="\$$name has default: $def\n";

  }

  if ( $arg->allowsNull() ){
    $details .="\$$name can be null\n";
  }

  return $details;

}



?>
