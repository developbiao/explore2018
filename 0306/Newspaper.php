<?php
/**
* Subject, that who makes news
*/
class Newspaper implements \SplSubject
{
  private $name;
  private $observers = array();
  private $content;

  public function __construct($name)
  {
    $this->name = $name;
  }

  // add observer
  public function attach(\SplObserver $observer)
  {
    $this->observers[] = $observer;
  }

  // remove observer
  public function detach(\SplObserver $observer)
  {
    $key = array_search($observer, $this->observers);
    if($key)
    {
      unset($this->observers[$key]);
    }

  }

  // set breakouts news
  public function breakOutNews($content)
  {
    $this->content = $content;
    $this->notify();
  }

  public function getContent()
  {
    return $this->content . " ({$this->name})";

  }

  // notify observers(of some of them)
  public function notify()
  {
    foreach($this->observers as $value)
    {
      $value->update($this);

    }
  }

}

/**
* Observer, thata who recieves new
*
*/

class Reader implements SplObserver
{
  private $name;

  public function __construct($name)
  {
    $this->name = $name;

  }

  public function update(\SplSubject $subject)
  {
    echo $this->name . ' is reading breakout new [' . $subject->getContent() . ']' . PHP_EOL;

  }

}

// observer design test
$newspaper = new Newspaper('newyork Times');

$allen = new Reader('Allen');
$jim = new Reader('Jim');
$linda = new Reader('Linda');
$gongbiao = new Reader('GongBiao');

// add reader
$newspaper->attach($allen);
$newspaper->attach($jim);
$newspaper->attach($linda);
$newspaper->attach($gongbiao);

// remove reader
$newspaper->detach($allen);
$newspaper->detach($jim);

// set break outs
$newspaper->breakOutNews('USA break down!');

echo "=====Ok======\n";

?>
