<?php
/**
 * Created by PhpStorm.
 * User: gongbiao
 * Date: 12/19/18
 * Time: 22:40
 */
require_once "BloggsApptEncoder.php";
require_once "BloggsTtdEncoder.php";
require_once "BloggsContactEncoder.php";

class BloggsCommsManger extends CommsManager
{
    public function getHeaderText()
    {
        return "BloggsCal header\n";
    }

    public function getApptEncoder()
    {
        return new BloggsApptEncoder();
    }

    public function getTtdEncoder()
    {
        return new BloggsTtdEncoder();
    }

    public function getContactEncoder()
    {
        return new BloggsContactEncoder();
    }

    public function getFooterText()
    {
        return "BloggsCal footer\n";
    }
}