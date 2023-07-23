<?php

namespace Dogs\AliveDogs;
use Dogs\Dog;
use Dogs\Interfaces\Sounding;

//require_once "Sounding.php";
//require_once "Dog.php";

abstract class AliveDog extends Dog implements Sounding
{
    public function sounding()
    {
        return $this->s;
    }
}