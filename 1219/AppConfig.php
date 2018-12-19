<?php
require_once "Settings.php";
require_once "MegaCommsManager.php";
require_once "BloggsCommsManger.php";

class AppConfig
{
    private static $instance;
    private $commsManager;

    public function __construct()
    {
        // will run once only
        $this->init();
    }

    private function init()
    {
        switch( Settings::$COMMSTYPE )
        {
            case 'Mega':
                $this->commsManager = new MegaCommsManager();
                break;
            default:
                $this->commsManager = new BloggsCommsManger();
        }

    }

    public static function getInstance()
    {
        if( is_null( self::$instance ) )
        {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getCommsManager()
    {
        return $this->commsManager;
    }

}