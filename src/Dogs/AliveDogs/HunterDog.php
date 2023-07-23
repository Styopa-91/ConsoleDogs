<?php


namespace Dogs\AliveDogs;

//require_once "AliveDog.php";

abstract class HunterDog extends AliveDog
{
    function hunting()
    {
        return $this->h;
    }
}