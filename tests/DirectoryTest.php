<?php
namespace Domatskiy\Tests;

use Domatskiy\Boxberry;

class DirectoryTest extends \PHPUnit_Framework_TestCase
{
    private $config_token;

    public function setUp()
    {
        $reader = new \Piwik\Ini\IniReader();
        $config = $reader->readFile(__DIR__.'/config.ini');

        $this->config_token = array_key_exists('token', $config) && $config['token'] ? $config['token'] : null;

        echo "\n";
        echo 'auth with token:'.$this->config_token;
        echo "\n";
    }

    public function tearDown()
    {

    }

    public function test()
    {
        $CBoxberry = new Boxberry($this->config_token);
        $ListCities = $CBoxberry->ListCities();

        foreach ($ListCities->data as $city)
        {
            if($city->Name=='Казань')
            {
                //var_dump($city);

                $PointsList = $CBoxberry->ListPoints(1, $city->Code);

                //var_dump($PointsList->data[0]);
            }
        }

    }

}
