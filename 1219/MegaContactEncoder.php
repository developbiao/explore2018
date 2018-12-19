<?php
/**
 * Created by PhpStorm.
 * User: gongbiao
 * Date: 12/19/18
 * Time: 22:51
 */
require_once "ContactEncoder.php";

class MegaContactEncoder extends ContactEncoder
{

    public function encode()
    {
        return "Appointment data encoded in MegaContact format\n";
    }
}