<?php

require_once __DIR__.'/vendor/autoload.php';

use App\Audi;
use App\BMW;
use App\Race;

$e30 = new BMW('E30');
$e30->setTime(9.4);
$a6 = new Audi('A6');
$a6->setTime(9.3);
echo 'Name: ';
$e30->showinfo();
echo 'Name: ';
$a6->showinfo();
$race2 = new Race($e30, $a6);
echo 'result: ';
$race2->go();