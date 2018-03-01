<?php
//初始化CD类
class CD
{
    public $title = "";
    public $band = "";
    public $date = "";
    public $trackList = array();

    public function __construct($id)
    {
      $handle = mysqli_connect("localhost", "root", "123456");
      mysqli_select_db($handle, "laravel5");

      $query = "SELECT * FROM `musiccd` WHERE `id`={$id}";
      $results = mysqli_query($handle, $query);

      if($row = mysqli_fetch_assoc($results))
      {
        $this->band = $row["band"];
        $this->title = $row["title"];
        $this->date = $row["date"];
      }
    }

    public function buy()
    {
      print_r($this);
    }
}

// 采用原型设计模式的混合CD类，利用PHP克隆能力。
class MixtapeCD extends CD
{
  public function __clone()
  {
    $this->title = "Mixtape";
  }

}

//======= 示例 Test==========
$externalPurchaseInfoBandID = 1;
$bandMixProto = new MixtapeCD($externalPurchaseInfoBandID);

$externalPurchaseInfo = array();
$externalPurchaseInfo[] = array("brrr", "goodbye");
$externalPurchaseInfo[] = array("Leijun", "Are you ok");

// 因为使用克隆技术， 所以每个新的循环都不需要针对数据库的新查询
foreach($externalPurchaseInfo as $mixed)
{
    $cd = clone $bandMixProto;
    $cd->trackList = $mixed;
    $cd->buy();
}



?>
