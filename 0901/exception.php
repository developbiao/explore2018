<?php
class XmlException extends Exception{
    private $error;

    function __construct( LibXmlError $error ) {
        $shortfile = basename($error->file);
        print($error);
    }

    function getLibXmlError(){
        return $this->error;
    }
}

class FileException extends Exception { }

class ConfException extends Exception {}


class Conf{
    private $file;
    private $xml;
    private $lastmatch;

    public function __construct($file)
    {
        $this->file = $file;
        if( !file_exists($file) ){
            throw new FileException("file '$file' does not exists (balbalba)");
        }

        $this->xml = simplexml_load_file($file, null, LIBXML_NOERROR);

        if( !is_object($this->xml) ){
            throw new XmlException(libxml_get_last_error());
        }

        $matches = $this->xml->xpath("/conf");
        if (! count($matches) ){
            throw new ConfException("could not find root element: conf");
        }

    }

    public function write(){
        if(! is_writeable($this->file)){
            throw new Exception("file '{$this->file}' is not writeable");
        }

        file_put_contents($this->file, $this->xml->asXML());
    }

    public function get($str){
        $matches = $this->xml->xpath("/conf/item[@name=\"$str\"]");
        if(count($matches)){
            $this->lastmatch = $matches[0];
            return (string)$matches[0];
        }
        return null;
    }

    public function set($key, $value){
        if(! is_null( $this->get($key) ) ){
            $this->lastmatch[0] = $value;
            return;
        }
        $conf = $this->xml->conf;
        $this->xml->addChild('item', $value)->addAttribute('name', $key);
    }

}


class Runner{
    public static function init(){
        try{
            $conf = new Conf(dirname(__FILE__)."/conf.broken.xml");
            print "user: " . $conf->get('user') . PHP_EOL;
            print "host: " . $conf->get('host') . PHP_EOL;
            $conf->set("pass", "newpass");
            $conf->write();
        }catch(FileException $e){
            throw $e;
        }catch(XmlException $e){
            // broken xml

        }catch(ConfException $e){
            // wron kind of XML file

        }catch(Exception $e){
            // backstop: should not be called
        }


    }
}
// test exception
Runner::init();


?>
