<?php

namespace App\Models {

    class Utilisateur
    {
        public $nom;

        public function __construct($nom)
        {
            $this->nom = $nom;
        }

        public function afficher()
        {
            echo "Modèle User : $this->nom";
        }
    }
}

namespace App\Controller {

    class UserController
    {
        public function index($utilisateurs)
        {
            echo "Liste des utilisateurs :<br/>";
            foreach ($utilisateurs as $user) {
                echo "- " . $user->nom . "<br/>";
            }
        }
    }
}

namespace {

    use App\Models\Utilisateur;
    use App\Controller\UserController;

    $user = new Utilisateur("Borat");
    $controller = new UserController();
    $user->afficher();
    echo "<br/>";

    $user2 = new Utilisateur("Flipper");
    $controller = new UserController();
    $user2->afficher();
    echo "<br/>";
    echo "<br/>";

    $controller->index([$user, $user2]);
}
