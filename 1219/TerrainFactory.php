<?php
/**
 * Created by PhpStorm.
 * User: gongbiao
 * Date: 12/19/18
 * Time: 22:16
 */

class Plains {}
class EarthPlains extends Plains {}
class MarsPlains extends Plains {}

class Forest {}
class EarthForest extends Forest {}
class MarsForest extends Forest {}

class Sea {}
class EarthSea extends Sea {}
class MarsSea extends Sea {}


class TerrainFactory
{
   private $sea;
   private $forest;
   private $plains;

   public function __construct(Sea $sea, Forest $forest, Plains $plains)
   {
       $this->sea    = $sea;
       $this->forest = $forest;
       $this->plains = $plains;
   }

   //============ Shallow clone ===============
    /**
     * @return Sea
     */
    public function getSea()
    {
        return clone $this->sea;
    }

    /**
     * @return Forest
     */
    public function getForest()
    {
        return clone $this->forest;
    }

    /**
     * @return Plains
     */
    public function getPlains()
    {
        return clone $this->plains;
    }


}

//======= Prototype patten ========
$factory = new TerrainFactory(
    new EarthSea(),
    new EarthForest(),
    new EarthPlains()
);

print "==== Earth Terrain ====\n";
print_r($factory->getSea());
print_r($factory->getForest());
print_r($factory->getPlains());

$factory = new TerrainFactory(
    new MarsSea(),
    new MarsForest(),
    new MarsPlains()
);
print "==== Mars Terrain ====\n";
print_r($factory->getSea());
print_r($factory->getForest());
print_r($factory->getPlains());


print "Programing running is ok\n";

