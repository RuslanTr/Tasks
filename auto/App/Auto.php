<?php

namespace App;

abstract class Auto
{
    protected $name;
    protected $seats;
    protected $color;
    protected $volume;
    protected $year;
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setSeats($seats)
    {
        $this->seats = $seats;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function setVolume($volume)
    {
        $this->volume = $volume;
    }
    public function setYear($year)
    {
        $this->year = $year;
    }
    abstract public function showInfo();


}
