<?php

namespace Dogs;

use Dogs\AliveDogs\Mops;
use Dogs\AliveDogs\SibaInu;
use Dogs\AliveDogs\Taksa;
use Dogs\ToyDogs\LabradorPlush;
use Dogs\ToyDogs\RubberTaksa;

class Index
{
    public static function workWithConsole()
    {
        while (true) {
            $a = readline("enter action or 'exit'!>>>>");
            $rez = self::go($a);
            if ($rez == "exited\n") {
                echo "exited\n";
                break;
            }

            if ($rez == "enter 2 arguments\n") {
                echo "enter 2 arguments\n";
            } else echo $rez;

        }
    }

    public static function go($a)
    {

        $s = explode(" ", $a);

        if ($a == "exit") return "exited\n";

        if (count($s) != 2) {
            return "enter 2 arguments\n";
        }

        $mops = new Mops();
        $taksa = new Taksa();
        $siba = new SibaInu();
        $labrador = new LabradorPlush();
        $rubberTaksa = new RubberTaksa();

        switch ($s[0]) {

            case "mops" :
                if ($s[1] == "sound") {
                    return $mops->sounding();
                }
                break;

            case "sibaInu" :
                if ($s[1] == "sound") {
                    return $siba->sounding();
                } elseif ($s[1] == "hunt") {
                    return $siba->hunting();
                }
                break;

            case "taksa" :
                if ($s[1] == "sound") {
                    return $taksa->sounding();
                } elseif ($s[1] == "hunt") {
                    return $taksa->hunting();
                }
                break;

            case "rubberTaksa" :
                if ($s[1] == "sound") {
                    return $rubberTaksa->sounding();
                }
                break;
        }
    }
}