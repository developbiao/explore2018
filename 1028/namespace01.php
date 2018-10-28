<?php
namespace com\getinstance\util;
class Debug {
    public static function helloWorld() {
      print "hello from Debug\n";
    }
}

namespace main;
use com\getinstance\util\Debug as uDebug;
class Debug {
    public static function helloWorld() {
      print "hello from Debug\n";
    }
}

uDebug::helloWorld();
?>
