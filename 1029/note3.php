<?php
require_once "trait.php";
class MiNote3 {
  // 引入面部识别 Trait
  use Faceable;
  // 独有的MIUI
  protected $miui;

  // 初始化miui
  public function __construct($miui)
  {
    $this->miui = $miui;
    $this->bootUI();

  }

  private function bootUI()
  {
    return $this->miui;

  }

}
?>
