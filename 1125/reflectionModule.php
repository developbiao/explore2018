<?php
/*
@Description reflection api module demo practices
@Date 2018/11/25
@Author Gong Biao
*/

class Person {
  public $name;
  public function __construct( $name )
  {
    $this->name = $name;

  }

}


// module interface
interface Module {
  public function execute();

}


// ftp module
class FtpModule implements Module{

  public function setHost($host)
  {
    print "FtpModule::setHost(): $host\n";

  }

  public function setUser($user)
  {
    print "FtpModule::setUser: $user\n";

  }

  public function execute()
  {
    print "Ftp Server is running!\n";

  }


}

// person module
class PersonModule implements Module
{
  public function setPerson(Person $person)
  {
    print "PersonModule::setPerson(): {$person->name}\n";

  }

  public function execute()
  {
    print "One person is walk some place\n";

  }

}


// Module Runner
class ModuleRunner {
  private $configData = array(
    "PersonModule" => array( 'person' => 'Biao Ge'),
    "FtpModule" => array(
      'host' => 'java770520@163.com',
      'user' => 'Biao Ge'
    )
  );

  private $modules = array();

  public function init()
  {
    $interface = new ReflectionClass('Module');
    foreach ( $this->configData as $modulename => $params) {
        $module_class = new ReflectionClass($modulename);
        if( ! $module_class->isSubclassOf( $interface )) {
          throw new Exception("unknow module type: $modulename");
        }

        $module = $module_class->newInstance();
        foreach( $module_class->getMethods() as $method ) {
          $this->handleMethod($module, $method, $params);
        }

        array_push($this->modules, $module);
    }

  }

  public function handleMethod(Module $module, ReflectionMethod $method, $params)
  {
    $name = $method->getName();
    $args = $method->getParameters();


    if( count($args) != 1 || substr($name, 0, 3) != "set" ){
        return false;
    }

    $property = strtolower( substr($name, 3) );
    if( ! isset($params[$property]) ) {
        return false;
    }
    $arg_class = $args[0]->getClass();
    if( empty($arg_class)) {
      $method->invoke($module, $params[$property]);

    }else{
      $method->invoke( $module, $arg_class->newInstance( $params[$property]) );

    }

  }

  public function getModules()
  {
    return $this->modules;

  }

}


$test = new ModuleRunner();
// initliazation test
$test->init();

// runing the module
$modules = $test->getModules();
foreach($modules as $module)
{
  $module->execute();

}

echo "Program running is ok\n";



?>
