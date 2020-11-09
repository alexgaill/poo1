<?php

use App\Mammiferes\Chien;
use App\Mammiferes\Chat;

require "../Autoloader.php";

$autoloader = new Autoloader();
$autoloader->register();

$chien1 = new Chien("Medor", "gris");
$chien2 = new Chien("Rex", "brungé");
$chat1 = new Chat("Bouboule", "tacheté");
$chat2 = new Chat("Caramel", "marron");

var_dump($chien1);
echo "</br>";
echo $chien1->nom;
echo "</br>";
echo $chien1->getCri();
echo "</br>";
echo $chien2->nom;
echo "</br>";
echo $chat1->nom;
echo "</br>";
echo $chat2->nom;
echo "</br>";

$poisson = new PoissonRouge();
echo $poisson->nager();