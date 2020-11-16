<?php
namespace App\Controller;

class UserController{

    public function inscription()
    {

        // Récupérer les infos de $_POST
        // Avant de stocker il faut utiliser sur chaque infos htmlspecialchars()
        // "<script> alert('coucou') </script>";
        

    }

    public function connexion()
    {
        if (!empty($_POST)) {

            // $model = new UserModel();
            // SELECT
            //$model->selectUser();
            // vérifier password
            // true => header
            // false => formulaire
        } else {
            // require ConnexionView
        }
    }
}