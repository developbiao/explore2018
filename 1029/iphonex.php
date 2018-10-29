<?php
require_once "trait.php";
// iphoneX
class iPhoneX {
  // 引入面部识别 Traint
  use Faceable;

  // 独有的 TrueDepth
  protected $true_depth;

  public function __construct()
  {
    $this->true_depth = 'scan';
    $this->openCamera();

  }

  private function openCamera()
  {
    return $this->true_depth;

  }

  public function sayHello()
  {
    print "iphoneXR I will be it!\n";

  }

}

$iphone = new iPhoneX();
$iphone->sayHello();
$iphone->setFace(3);
echo $iphone->getFace() . PHP_EOL;

?>
