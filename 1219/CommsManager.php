<?php
/**
 * Created by PhpStorm.
 * User: gongbiao
 * Date: 12/19/18
 * Time: 22:37
 */

abstract class CommsManager
{
    abstract public function getHeaderText();
    abstract public function getApptEncoder();
    abstract public function getTtdEncoder();
    abstract public function getContactEncoder();
    abstract public function getFooterText();
}

