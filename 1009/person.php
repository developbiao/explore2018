<?php
class Person {
  // get
  public function __get($property) {
    $method = "get{$property}";
    if ( method_exists($this, $method) ) {
        return $this->$method();
    }
    else {
      echo "Not found proeprty";
    }
  }

  public function getName() {
    return "GongBiao";
  }

  public function getAge () {
    return 25;
  }

  // set
  public function __isset ( $property ) {
    $method = "set{$property}";
    if ( method_exists($this, $method) ) {
      return $this->$method($value);
    }
  }

  public function setName ( $name ) {
    $this->_name = $name;
    if( ! is_null( $name) ) {
      $this->_name = strtoupper($this->_name);
    }
  }

  public function setAge ( $age ) {
    $this->_age = strtoupper($age);
  }

  public function __unset ( $property ) {
    $method = "set{$property}";
    if ( method_exists($this, $method) ) {
        $this->$method( null );
    }

  }

}

$p = new Person();
$p->name = "Tinly";
$p->age = 18;
if ( isset( $p->name ) ) {
    print $p->name . PHP_EOL;
}
print $p->age . PHP_EOL;
