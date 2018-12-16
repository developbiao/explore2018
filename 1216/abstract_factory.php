<?php
// abstract encoders
abstract class ApptEncoder
{
    abstract function encode();

}

abstract class TtdEncoder
{
    abstract function encode();

}

abstract class contactEncoder
{
    abstract function encode();

}

// abstract bloggs encoders

class BloggsApptEncoder extends ApptEncoder
{
    public function encode()
    {
        return "Appointment data encoded in BloggsCal format\n";

    }
}

class BloggsContactEncoder extends  ApptEncoder
{
    public function encode()
    {
        return "Appointment data encoded in BloggsContact format\n";

    }

}

class BloggsTtdEncoder extends TtdEncoder
{
    function encode()
    {
        return "Appointment data encoded in BloggsTtd format\n";
    }
}

class MegaApptEncoder extends ApptEncoder
{
    public function encode()
    {
        return "Appointment data encoded in MegaCal format\n";
    }
}


abstract class CommsManager
{
    const APPT    = 1;
    const TTD     = 2;
    const CONTACT = 3;

    abstract function getHeaderText();
    abstract function make( $flag_int );
    abstract function getFooterText();

}

class BloggsCommsManager extends CommsManager
{
    public function getHeaderText()
    {
        return "BloggsCal header\n";
    }

    public function make($flag_int)
    {
        switch ($flag_int)
        {
            case self::APPT:
                return new BloggsApptEncoder();
            case self::CONTACT:
                return new BloggsContactEncoder();
            case self::TTD:
                return new BloggsTtdEncoder();
        }
    }

    public function getFooterText()
    {
        return "BloggsCal footer\n";
    }
}


// Test Abstract factory 测试抽象工厂
$mgr = new BloggsCommsManager();
print $mgr->getHeaderText();
print $mgr->make(CommsManager::TTD)->encode();
print $mgr->getFootertext();


print "====== Programing running is ok! =======\n";




