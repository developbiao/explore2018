<?php
class Person
{
    private $money;
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function sayHello()
    {
        echo "Hello my name is {$this->name} I'm {$this->age} years old\n";
    }
}

$person = new Person('小明', 18);
$person->sayHello();

// reflection
$person_class = new ReflectionClass('Person');
Reflection::export( $person_class );

?>
