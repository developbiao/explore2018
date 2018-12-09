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


// Nast Boss fire employees
class NastyBoss{
  private $employees = array();

  public function addEmployee( $employeeName )
  {
    $this->employees[] = new Minion( $employeeName );
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
$boss->addEmployee('harry');
$boss->addEmployee('bob');
$boss->addEmployee('Gong Biao');

// project failure
$boss->projectFails();


?>
