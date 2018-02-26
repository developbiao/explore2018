<?php
namespace Fool\Bar;
include 'file1.php';

const FOO = 2;

function foo(){
    echo 'Bar007' . PHP_EOL;
}

class foo{
    static function sayHello(){
        echo 'Hello, Bar007' . PHP_EOL;
    }
}

foo(); //解析为 Fool\Bar\foo  resolves to function Foo\Bar\foo
foo::sayHello(); // resolves to class Foo\Bar\foo, method sayHello
echo FOO . PHP_EOL;

// 完全限定名称
\Foo\Bar\subnamespace\foo();
\Foo\Bar\subnamespace\foo::sayHello();
echo \Foo\Bar\subnamespace\FOO . PHP_EOL;



