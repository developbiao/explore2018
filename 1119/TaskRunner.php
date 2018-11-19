<?php
// TaskRunner.php
$classname = "Task";
require_once( "{$classname}.php" );
$classname = "tasks\\$classname";
if( class_exists($classname) ){
  print "exists\n";
}
$myObj = new $classname();
$myObj->doSpeak();

?>
