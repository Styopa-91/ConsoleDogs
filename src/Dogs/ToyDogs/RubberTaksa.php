<?php

namespace Dogs\ToyDogs;

use Dogs\Interfaces\Sounding;

//require_once "ToyDog.php";
//require_once "Sounding.php";

class RubberTaksa extends ToyDog implements Sounding
{
    function sounding(): string
    {
        return "pi pi from rubber Taksa\n";
    }
}