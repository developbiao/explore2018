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


// Handler Notifer
abstract class Notifier {
  public static function getNotifier()
  {
    // acquire concrete class according to
    // configuration or other logic

    if( mt_rand(1, 2) == 1 ){
      return new MailNotifier();
    }else{
      return new TextNotifier();
    }

  }

  abstract function inform( $message );

}


class MailNotifier extends Notifier{
  public function inform($message)
  {
    print "Mail notification: {$message}\n";
  }

}

class TextNotifier extends Notifier{
  public function inform($message)
  {
    print "Text notification: {$message}\n";

  }
}


/*  RegistrationMgr */
class RegistrationMgr {
  public function register(Lesson $lesson)
  {
    $notifier = Notifier::getNotifier();
    $notifier->inform("new lesson: cost ({$lesson->cost()})");

  }

}



$lesson1 = new Seminar(4, new TimedCostStrategy() );
$lesson2 = new Lecture(4, new FixedCostStrategy() );

$mgr = new RegistrationMgr();
$mgr->register( $lesson1 );
$mgr->register( $lesson2 );

echo "===== Program running is ok ========= \n";


?>
