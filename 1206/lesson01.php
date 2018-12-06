<?php
abstract class Lesson {
  protected $duraction;
  private $costtype;

  const FIXED = 1;
  const TIMED = 2;

  public function __construct( $duraction, $consttype = 1)
  {
    $this->duraction = $duraction;
    $this->consttype = $consttype;

  }

  public function cost()
  {
    switch( $this->consttype )
    {
      case self::TIMED:
        return (5 * $this->duraction);
        break;
      case self::FIXED:
        return 30;
        break;
      default:
        $this->consttype = self::FIXED;
        return 30;

    }

  }

  public function chargeType()
  {
    switch ($this->consttype)
    {
      case self::TIMED:
        return "hourly rate";
        break;
      case self::FIXED:
        return "fixed rate";
        break;
      default:
        $this->constype = self::FIXED;
        return "fixed rate";

    }

  }

  // more lesson methods

}


class Lecture extends Lesson {
  // Lecture-specific implements

}

class Seminar extends Lesson {
  // Seminar-sepcific implements

}

$lecture = new Lecture(5, Lesson::FIXED);
print "{$lecture->cost()} ({$lecture->chargeType()})\n";

$seminar = new Seminar(3, Lesson::TIMED );
print "{$seminar->cost()} ({$seminar->chargeType()})\n";




?>
