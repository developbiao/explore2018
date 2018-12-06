<?php
abstract class Lesson{
  private $duraction;
  private $costStrategy;

  public function __construct($duraction, CostStrategy $costStrategy)
  {
    $this->duraction = $duraction;
    $this->costStrategy = $costStrategy;

  }

  public function cost()
  {
    return $this->costStrategy->cost( $this );

  }

  public function chargeType()
  {
    return $this->costStrategy->chargeType();

  }

  public function getDuraction()
  {
    return $this->duraction;

  }

  // more lesson methods...

}


// cost strategy

abstract class CostStrategy{
  abstract function cost(Lesson $lesson);
  abstract function chargeType();

}

// Timed strategy
class TimedCostStrategy extends CostStrategy{
  public function cost(Lesson $lesson)
  {
    return ( $lesson->getDuraction() * 5);
  }

  public function chargetype()
  {
    return "hourly rage";

  }

}

// Fixed strategy

class FixedCostStrategy extends CostStrategy
{
  public function cost(Lesson $lesson)
  {

      return 30;

  }

  public function chargeType()
  {

    return "Fixed rate";

  }

}


// some lesson child class

class Lecture extends Lesson
{
  // Lecture-specific implementations...

}

class Seminar extends Lesson
{
  // seminar-sepcific implementations...

}

$lessons[] = new Seminar(4, new TimedCostStrategy() );
$lessons[] = new Lecture(4, new FixedCostStrategy() );

foreach( $lessons as $lesson )
{
  print "Lesson charge {$lesson->cost($lesson)}. ";
  print "Charge type: {$lesson->chargeType()}\n";

}

?>
