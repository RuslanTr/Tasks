<?php


namespace App;

class Audi extends Auto

{
    private $time;
    private $engine;
    private $drive;
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
    public function getDrive()
    {
        return $this->drive;
    }
    public function setDrive($drive)
    {
        $this->drive = $drive;
    }
    public function showInfo()
    {
        echo "Audi " . $this->name . PHP_EOL;
    }


}

