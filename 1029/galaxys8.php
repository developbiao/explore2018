<?php
// 三星 GalaxyS8
class SamsangS8 {
  // 引入面部识别 Trait
  use Faceable;

  // 独有的 Bixby
  protected $bixby;

  public function __construct()
  {
      $this->sayHello();

  }

  private function sayHello()
  {
    echo "Hi I am Bixby!\n";
  }
}
?>
