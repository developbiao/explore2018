<?php
require_once("closures.php");
$logger2 = function ($product) {
  print "    logging ({$product->name})\n";
};

class Mailer {
  public function doMail($product){
    print " mailing ({$product->name})\n";

  }
}


$processor = new ProcessSale();
// register mail callback
$processor->registerCallback( array( new Mailer(), "doMail" ) );

$processor->sale( new Product("shoes", 6) );
$processor->sale( new Product("coffee", 6) );

?>
