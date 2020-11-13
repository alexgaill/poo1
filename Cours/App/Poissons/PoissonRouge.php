<?php
namespace App\Poissons;

use App\Poissons\Poisson;

class PoissonRouge extends Poisson{

    /**
     * Undocumented variable
     *
     * @var integer
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

    public function getEcailles():int
    {
        return self::$ecailles;
    }

    public static function getBranchies():int
    {
        return parent::$branchies;
    }
    public static function setBranchies(int $branchies)
    {
        parent::$branchies = $branchies;
    }
}