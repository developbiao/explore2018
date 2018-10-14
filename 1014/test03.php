<?php
require_once("closures.php");

class Totalizer {
  public static function warnAmount( $amt ) {
    $count = 0;
    return function ( $product ) use ($amt, &$count) {
      $count += $product->price;
      print "  count: $count \n";
      if ( $count > $amt ) {
        print "    hight price reached: {$count}\n";
      }
    };
  }

}

// register callback totalizer
$processor = new ProcessSale();
$processor->registerCallback( Totalizer::warnAmount( 19 ) );

$processor->sale( new Product("shoes", 6) );
$processor->sale( new Product("coffee", 6) );
$processor->sale( new Product("books", 18) );

?>
