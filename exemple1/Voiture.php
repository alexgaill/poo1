<?php

class Voiture {
    public $roues = 4;
    public $portes = 5;
    public $chevaux = 90;

    function rouler(){
        echo "La voiture roule";
    }
    function freiner(){
        echo "La voiture ralentit";
    }
}