<?php

namespace App\Mammiferes;
/**
 * Répertorie les informations liées à un mammifère
 */
class Mammifere{

    /**
     * le nom de l'animal
     *
     * @var string
     */
    public $nom;

    /**
     * Undocumented variable
     *
     * @var string
     */
    protected $cri;

    /**
     * Undocumented variable
     *
     * @var integer
     */
    public $pattes = 4;

    /**
     * Undocumented variable
     *
     * @var string
     */
    public $pelage;

    /**
     * Undocumented function
     *
     * @param string $nom
     * @param string $pelage
     */
    public function __construct(string $nom, string $pelage){
        $this->nom = $nom;
        $this->pelage = $pelage;
        
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getCri () :string
    {
        return $this->cri;
    }

    /**
     * Undocumented function
     *
     * @param string $pelage
     */
    public function setPelage(string $pelage)
    {
        $this->pelage = $pelage;
    }

    /**
     * Get stocke le nom de l'animal
     *
     * @return  string
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set stocke le nom de l'animal
     *
     * @param  string  $nom  Stocke le nom de l'animal
     *
     * @return  self
     */ 
    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }
}