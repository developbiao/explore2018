<?php
class PersonWriter {
  public function writeName( Person $p ) {
    print $p->getName() . "\n";
  }

  public function writeAge( Person $p ) {
    print $p->getAge() . "\n";
  }

}

class Person {
  private $writer;

  public function __construct( PersonWriter $writer) {
    $this->writer = $writer;
  }

  public function getName() {
    print "GongBiao" . PHP_EOL;
  }

  public function getAge() {
    print 25 . PHP_EOL;
  }

  // interceptor practice.
  public function __call($methodname, $args ) {
    if ( method_exists( $this->writer, $methodname ) ) {
        return $this->writer->$methodname($this);
    }
  }

}

// test call function

$p = new Person( new PersonWriter() );
$p->writeName();
$p->writeAge();
