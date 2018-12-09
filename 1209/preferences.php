<?php
class Preferences {
  private $props = array();
  private static $instance;

  public static function getInstance()
  {
      if( is_null( self::$instance) )
      {
        self::$instance = new Preferences();
      }
      return self::$instance;

  }

  public function setProperty($key, $value)
  {
    $this->props[$key] = $value;

  }

  public function getProperty($key)
  {
    return $this->props[$key];
  }

}


// singleone

$pref = Preferences::getInstance();
$pref->setProperty('name', 'matt');

print "get value is {$pref->getProperty('name')}\n"


?>
