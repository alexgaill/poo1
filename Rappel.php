<?php

// Ceci est une class, c'est la base de la POO et généralement,
// le nom du fichier porte le nom de la class avec la majuscule.
// Une class représente un objet que l'on va créé lors de l'instanciation
class Rappel {

    /**
     * En POO on doit obligatoirement commenté toutes nos propriétés et methods
     * ça permet à tout le monde d'utiliser plus efficacement notre travail
     *
     * @var string
     */
    public $propriete; //La class possède des propriétés (des informations qui lui sont liées)
    public static $propri2;
    public function method(){
        // La class possède des methods (des actions qu'elle peut effectuer)
    }

    // Exemple: une voiture a un moteur, 4 roues (propriétés),
    // Elle peut rouler, freiner (methods).

    public function __construct()
    {
        // Les class ont un constructeur.
        // Le constructeur est automatiquement appelé lorsqu'on instancie la class.
        // Et le code qui est à l'intérieur est exécuté.
    }

    public $prop; // Une propriété ou une méthode peut être public:
                  // C'est à dire qu'elle est accessible de partout.
    private $prop2; // Ou private, elle n'est accessible que dans la class.
    protected $prop3; // Ou protected, elle n'est accessible que dans la class et
                    // dans les class enfants.

}

// Pour instancier une class, on doit require le fichier

// require 'Rappel.php'
// Et on doit créer un objet en l'instanciant avec new Class()

$rappel = new Rappel();
$rappel->propriete; // De cette façon, on appel la propriété "propriete" de rappel
$rappel->method(); // De cette façon, on appel la method "method" de rappel

class Rappel2 extends Rappel {
    // Une class qui extends une autre class est une extension de la class qu'elle extends
    // C'est à dire qu'elle récupère les propriétés et les methods de l'autre class.
    // On parle d'héritage et on dit que Rappel2 est l'enfant de Rappel.

    //Rappel2 peut donc accéder à $propriete, $prop et $prop2
    public static $propri; //C'est une propriété static. 
    // Elle est accessible dans n'importe quel fichier sans avoir besoin d'instancier Rappel2


    public function __construct()
    {
        parent::__construct(); // Rappel 2 peut faire appel au constructeur du parent.
        self::$propri; // De cette façon, on appel propri dans la même class.
        parent::$propri2; // De cette façon, on appel une propriété static du parent.
        Rappel::$propri2; // De cette façon, on apeel une propriété static de n'importe où.
        // C'est pareil pour les methods.
    }
}