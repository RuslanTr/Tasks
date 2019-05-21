<?php


namespace App;

class BMW extends Auto
{
    private $time;
    private $engine;

    function __construct($Name)
    {
        $this->name = $Name;
    }

    public function getTime()
    {
        return $this->time;
    }
    public function setTime($time)
    {
        $this->time = $time;
    }
    public function getEngine()
    {
        return $this->engine;
    }
    public function setEngine($engine)
    {
        $this->engine = $engine;
    }
    public function showInfo()
    {
        echo "Bmw " . $this->name . PHP_EOL;
    }

}



