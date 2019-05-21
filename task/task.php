<?php

function foo($a)
{
    $arr = [0, 2, 3, 3, 3, 4, 5, 6, 6];
    $value = 0;
    for($i = 0; $i < count($arr); $i++) {

        if($arr[$i] === $a){
            $value++;
        }
    }
    echo $value;
}

foo(3);