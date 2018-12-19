<?php
/**
 * Created by PhpStorm.
 * User: gongbiao
 * Date: 12/19/18
 * Time: 22:42
 */

require_once "TtdEncoder.php";

class BloggsTtdEncoder extends TtdEncoder
{

    public function encode()
    {
        return "Appointment data encoded in BloggsTtd format\n";
    }
}