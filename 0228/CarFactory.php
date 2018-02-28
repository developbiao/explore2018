<?php
/**
*汽车抽象类
*/

abstract class vehicle{

  /**
  *属性
  *@var array
  */
  public $props = array();

  /**
  *@设置属性
  *@param $key 属性名
  *@param $value 属性值
  */
  public function setProperty($key, $value)
  {
    $this->props[$key] = $value;

  }


  /**
  *获取属性值
  *@param $key
  *@param $value
  */
  public function getProperty($key)
  {
     return $this->props[$key];
  }
}

  /**
  *公交车抽象类
  */

  abstract class bus extends vehicle
  {

    /**
    *形体大小：两个门，三个门
    *@var string
    */
    public $shape;

    public function setShape($value)
    {
      $this->shape = $value;
    }

    /**
    *抽象方法
    *@param
    */
    abstract function run();

  }

  /**
  *小汽车抽象类
  */

  abstract class car extends vehicle{
    /**
    *两厢， 三厢
    *@var string
    */
    public $room;

    /**
    *获取属性值
    *@param $value
    */
    public function setRoom($value)
    {

      $this->room = $value;

    }

    /**
    *获取属性值
    */
    public function getRoom()
    {
       return $this->room;
    }

    abstract function run();

  }

  /**
  *抽象工厂类
  */

  abstract class factory{
    abstract static function create($className);
  }


  /**
  *小汽车工厂类
  */

  class carFactory extends factory{
    public static function create($className)
    {
      $class = $className;
      return new $class;
    }

  }

  /**
  *奥迪车
  */
class audi extends car{
  public function run()
  {
    parent::setProperty('brand', 'audi');
    $brand = parent::getProperty('brand');
    $this->setRoom('threemRoom');
    return $this->room . ' '  . $brand . ' car is running!';
  }
}

/**
*兰博基尼
*/
class lamborghini extends car{
  public function run()
  {
    parent::setProperty('brand', 'lamborghini');
    $brand = parent::getProperty('brand');

    // default engine is v12
    parent::setProperty('engine', 'V12');
    $engine = parent::getProperty('engine');

    // set room
    $this->setRoom('Two room');

    return $this->room . ' ' . $brand . ' Engine ' . $engine . ' super car is running!';

  }

}



//====================
// make audi
$car = carFactory::create('audi');
$car->setProperty('engine', 'V8');
$engine = $car->getProperty('engine');
echo "Engine is $engine\n";

$result =  $car->run();
echo $result . PHP_EOL;

// make super car lamborghini
$lamborghini = carFactory::create('lamborghini');
echo  $lamborghini->run() . PHP_EOL;


?>
