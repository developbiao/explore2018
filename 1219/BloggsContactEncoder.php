<?php
/**
 * Created by PhpStorm.
 * User: gongbiao
 * Date: 12/19/18
 * Time: 22:48
 */

require_once "ContactEncoder.php";

class BloggsContactEncoder extends ContactEncoder
{
    public function encode()
    {
        return "Appointment data encoded in BloggsContact format\n";
    }
}