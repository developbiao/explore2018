<?php
class dad {
  public function dad()
  {
      // implements some logic
  }
}

class child extends dad {
  public function child()
  {
    echo " I'm" , get_parent_class($this), "'s son\n";
  }
}

class child2 extends dad {
  public function child2()
  {
    echo "I'm", get_parent_class($this), "'s son too\n";
  }
}

$foo = new child();
$bar = new child2();

?>
