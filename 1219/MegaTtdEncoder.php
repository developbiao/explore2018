<?php
/**
 * Created by PhpStorm.
 * User: gongbiao
 * Date: 12/19/18
 * Time: 22:50
 */

require_once "TtdEncoder.php";
class MegaTtdEncoder extends TtdEncoder
{

    public function encode()
    {
        return "Appointment data encoded in MegaTtd format\n";
    }
}