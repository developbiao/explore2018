<?php
/**
 * Created by PhpStorm.
 * User: gongbiao
 * Date: 12/19/18
 * Time: 22:36
 */
require_once "ApptEncoder.php";

class MegaApptEncoder extends ApptEncoder
{
    public function encode()
    {
        return "Appointment dat encoded in MegaCal format\n";
    }

}