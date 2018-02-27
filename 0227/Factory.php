<?php

class Factory
{
    // The parameterized factory method
    public static function myFactory($type)
    {
        if (include_once 'Drivers/' . $type . '.php') {
            $classname = 'Driver_' . $type;
            return new $classname;
        } else {
            throw new Exception('Driver not found');
        }
    }
}

//========Demo=========
// Load a MySQL Driver
$mysql = Factory::myFactory('MySQL');

// Load SQLite Driver
$sqlite = Factory::myFactory('SQLite');

echo 'Program running is ok' . PHP_EOL;
