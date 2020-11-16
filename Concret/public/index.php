<?php
define("ROOT", dirname(__DIR__));
require ROOT."/Autoloader.php";

//Démarre une session de sauvegarde de données.
session_start();
echo $_SERVER['SERVER_NAME'];
Autoloader::register();

require ROOT."/router.php";