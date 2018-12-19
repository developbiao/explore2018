<?php
/**
 * Created by PhpStorm.
 * User: gongbiao
 * Date: 12/19/18
 * Time: 23:03
 */
require_once "AppConfig.php";

/**
 * @var CommsManager $comms_manger
 */
$comms_manger = AppConfig::getInstance()->getCommsManager();
// 客户端不需要具体使用哪个encoder 由配置决定
print $comms_manger->getApptEncoder()->encode();
print " *** Factory programing running is ok ***\n";
