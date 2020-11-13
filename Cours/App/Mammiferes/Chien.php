<?php

namespace App\Mammiferes;

use App\Mammiferes\Mammifere;

class Chien extends Mammifere{
    
    /**
     * Stocke le cri de l'animal
     *
     * @var string
     */
    protected $cri ="ouaf";

    public function class (){
        return __CLASS__;
    }

}