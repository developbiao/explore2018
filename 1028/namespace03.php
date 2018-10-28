<?php
// default is globa namespace
namespace {
    class Lister {
      public static function helloWorld() {
        print "hello from global\n";
      }
    }
}

namespace {
  class myClass {
    public static function say() {
      print "I want see something!" . PHP_EOL;
    }
  }

}

// local namespace
namespace com\getinstance\util {
  class Lister {
      public static function helloWorld() {
        print "hello from " . __NAMESPACE__ . PHP_EOL;
      }
  }

  Lister::helloWorld(); // access local
  \Lister::helloWorld(); // access global
  \myClass::say();
}
?>
