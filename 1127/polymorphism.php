<?php
abstract class ParamHandler
{
  protected $source;
  protected $params = array();

  public function __construct( $source)
  {
    $this->source = $source;

  }

  public function addParam($key, $value)
  {
    $this->params[$key] = $value;
  }

  public function getAllParams()
  {
    return $this->params;

  }

  protected function openSource( $flag )
  {
    $fh = @fopen( $this->source, $flag );
    if ( empty( $fh ) )
    {
      throw new Exception("Could not open {$this->source}!");
    }
    return $fh;

  }

  public static function getInstance( $filename )
  {
    if ( preg_match("/\.xml$/i", $filename ))
    {
      return new XmlParamHandler( $filename );
    }
    return new TextParamHandler( $filename );
  }

  abstract public function write();
  abstract public function read();

}

// Xml Param handler
class XmlParamHandler extends ParamHandler
{

  public function write()
  {
    $fh = $this->openSource('w');
    fputs($fh, "<params>\n");
    foreach( $this->params as $key => $value )
    {
      fputs($fh, "\t<param>\n");
      fputs($fh, "\t\t<key>{$key}</key>\n");
      fputs($fh, "\t\t<value>{$value}</value>\n");
      fputs($fh, "\t</param>\n");
    }
    fputs($fh, "</params>\n");
    fclose($fh);
    return true;
  }

  public function read()
  {
    $el = @simplexml_load_file( $this->source );
    if( empty($el) )
    {
      throw new Exception("could not parse {$this->source}");
    }

    foreach( $el->param as $param )
    {
      $this->params["{$param->key}"] = "{$param->value}";

    }
    return true;

  }

}

// Text Param Handler

class TextParamHandler extends ParamHandler
{

  public function write()
  {
    $fh = $this->openSource('w');
    foreach ( $this->params as $key => $value )
    {
      fputs( $fh, "{$key}:{$value}\n");
    }
    fclose($fh);
    return true;

  }

  public function read()
  {
    $lines = file($this->source);
    foreach ( $lines as $line )
    {
      $line = trim($line);
      list($key, $value) = explode(':', $line);
      $this->params[$key] = $value;
    }

    return true;

  }

}

$file = "./params_config.xml";
$test = ParamHandler::getInstance($file);
$test->addParam("username", "TolySwift");
$test->addParam("age", "22");
$test->addParam("Hobby", "Sing");
$test->write();

$test->read();
$data = $test->getAllParams();

print_r($data);

echo "Program running is ok\n";

?>
