<?php
abstract class Employee {
  protected $name;
  public function __construct( $name )
  {
    $this->name = $name;

  }

  abstract function fire();

}

class Minion extends Employee {
  public function fire()
  {
    print "{$this->name}: I'll clear my desk\n";

  }

}

// new employee class...
class CluedUp extends Employee {
  public function fire()
  {
    print "{$this->name}: I'll call  my lawyer\n";

  }

}


// Nast Boss fire employees
class NastyBoss{
  private $employees = array();

  public function addEmployee(Employee $employee )
  {
    $this->employees[] = $employee;
  }

  public function projectFails() {
    if( count($this->employees) > 0)
    {
      $employee = array_pop($this->employees);
      $employee->fire();

    }
  }

}


// boss  hire employees
$boss = new NastyBoss();
$boss->addEmployee( new Minion('harry'));
$boss->addEmployee( new Minion('Bob'));
$boss->addEmployee( new CluedUp('GongBiao') );

// project failure
$boss->projectFails();

?>
