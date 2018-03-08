<?php
// 观察者基础CD类

class CD {
  public $title = '';
  public $band = '';

  protected $_observers = array(); // 观察者对象数组

  public function __construct($title, $band)
  {
    $this->title = $title;
    $this->band = $band;
  }

  public function attachObserver($type, $observer)
  {
    $this->_observers[$type][] = $observer;
  }

  public function notifyObserver($type)
  {
    if (isset($this->_observers[$type]))
    {
      foreach ($this->_observers[$type] as $observer)
      {
        $observer->update($this);
      }
    }
  }

  public function buy()
  {
    $this->notifyObserver("purchased");
  }
}

// 观察者类 后台处理
class buyCDNotifyStreamObserver
{

  public function update(CD $cd)
  {
    $activity = "The CD named {$cd->title} by ";
    $activity .= "{$cd->band} was just purchased.";
    activityStream::addNewItem($activity);
  }

}

// 消息同事类 前台输出
class activityStream
{
  public static function addNewItem($item)
  {
     echo $item . PHP_EOL;
  }

}

// 测试实例
$title = "Waste of Rib";
$band = "Never Again";

$cd = new CD($title, $band);
$observer = new buyCDNotifyStreamObserver();

$cd->attachObserver("purchased", $observer);
$cd->buy();

echo "Program running is ok!\n";


?>
