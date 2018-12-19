<?php
/**
 * Created by PhpStorm.
 * User: gongbiao
 * Date: 12/19/18
 * Time: 22:49
 */
require_once "CommsManager.php";
require_once "MegaApptEncoder.php";
require_once "MegaTtdEncoder.php";
require_once "MegaContactEncoder.php";

class MegaCommsManager extends CommsManager
{

    public function getHeaderText()
    {
        return "MegaCal header\n";
    }

    public function getApptEncoder()
    {
        return new MegaApptEncoder();
    }

    public function getTtdEncoder()
    {
        return new MegaTtdEncoder();
    }

    public function getContactEncoder()
    {
        return new MegaContactEncoder();
    }

    public function getFooterText()
    {
        return "MegaCal footer\n";
    }
}