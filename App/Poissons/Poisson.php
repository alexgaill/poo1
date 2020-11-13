<?php
namespace App\Poissons;

abstract class Poisson{

    /**
     * Undocumented variable
     *
     * @var boolean
     */
    private $nageoires;

    /**
     * Undocumented variable
     *
     * @var integer
     */
    protected $branchies;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $couleur;

    abstract public function nager();

}