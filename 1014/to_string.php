<?php
class Person {
  public function getName() {
    return "Jack";
  }

  public function getAge() {
      return 22;
  }

  // customer object to string function
  public function __toString() {
    $desc = $this->getName();
    $desc .= " (age " . $this->getAge() . ")";
    return $desc;
  }
}

$person = new Person();
//print $person . PHP_EOL;
echo $person . PHP_EOL;
