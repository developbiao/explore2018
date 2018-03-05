<?php
class Product
{
  protected $type = "";
  protected $size = "";
  protected $color = "";

  // 假设有三个复杂的创建过程
  public function setType($type)
  {
    $this->type = $type;
  }

  public function setSize($size)
  {
    $this->size = $size;
  }

  public function setColor($color)
  {
    $this->color = $color;
  }

  public function getInfo()
  {
      $info          = array();
      $info['type']  = $this->type;
      $info['size']  = $this->size;
      $info['color'] = $this->color;
      return $info;
  }

}

// 配置参数
$productConfigs = array(
  'type' => 'shirt',
  'size' => 'XL',
  'color' => 'red'
);

$product = new Product();
$product->setType($productConfigs['type']);
$product->setSize($productConfigs['size']);
$product->setColor($productConfigs['color']);

// 复杂的创建过程中使用构造函数来实现更不可取

// 建造者模式
class productBuilder
{
  protected $product = null;
  protected $configs = array();

  public function __construct(array $configs)
  {
    $this->product = new Product();
    $this->configs = $configs;
  }

  public function build()
  {
    $this->product->setType($this->configs['type']);
    $this->product->setSize($this->configs['size']);
    $this->product->setColor($this->configs['color']);
  }

  public function getProduct()
  {
    return $this->product;

  }
}

// test product builder
$productConfigs = array(
  'type' => 'Jean',
  'size' => 'XL',
  'color' => 'black'
);
$builder = new productBuilder($productConfigs);
$builder->build();
$product = $builder->getProduct();
$info = $product->getInfo();
print_r($info);

echo "Program running is ok!\n";


?>
