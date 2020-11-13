<?php
namespace App\Poissons;

use App\Poissons\Poisson;

class PoissonRouge extends Poisson{

    /**
     * Undocumented variable
     *
     * @var boolean
     */
    public static $ecailles = 3;

    /**
     * Undocumented function
     *
     * @return void
     */
    public function gober()
    {

    }

    public function nager(){

    }

    public function getEcailles()
    {
        return self::$ecailles;
    }
}