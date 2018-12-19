<?php
/**
 * Created by PhpStorm.
 * User: gongbiao
 * Date: 12/19/18
 * Time: 22:35
 */

require_once "ApptEncoder.php";

class BloggsApptEncoder extends ApptEncoder
{
    public function encode()
    {
        return "Appointment data encoded in BloggsCal format\n";
    }
}