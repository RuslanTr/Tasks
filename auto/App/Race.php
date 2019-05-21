<?php


namespace App;

class Race
{
    private $time1, $time2;

    public function __construct(Auto $time1, Auto $time2)
    {
        $this->time1 = $time1;
        $this->time2 = $time2;
    }

    public function go()
    {
        if ($this->time1->getTime() < $this->time2->getTime()) {
            return $this->time1->showInfo();
        }

        return $this->time2->showInfo();
    }
}

