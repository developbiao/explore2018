<?php
abstract class Employee {
  protected $name;
  private static $types = array(
      'minion', 'cluedup', 'wellconnected'
  );


  public function __construct( $name )
  {
    $this->name = $name;
  }

  public static function recruit( $name )
  {
    $num = mt_rand(1, count( self::$types ) ) - 1;
    $class = self::$types[$num];
    return new $class( $name );

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

//new employee class...
class WellConnected extends Employee{
  public function fire()
  {
    print "{$this->name}: I'll call  my dad\n";

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
$boss->addEmployee( Employee::recruit('harry'));
$boss->addEmployee( Employee::recruit('Bob'));
$boss->addEmployee( Employee::recruit('GongBiao') );

// project failure
$boss->projectFails();

?>
