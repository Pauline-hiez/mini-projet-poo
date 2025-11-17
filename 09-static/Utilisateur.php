<?php

class Utilisateur
{
    static private $compteur = 0;
    private $nom;
    private $id;

    public function __construct($nom)
    {
        self::$compteur++;
        $this->nom = $nom;
        $this->id = self::$compteur;

        echo "Utilisateur #$this->id crée : $this->nom";
    }

    static public function getNombreUtilisateurs()
    {
        echo "Nombre d'utilisateurs : " . self::$compteur;
    }

    public function afficher()
    {
        echo "User #$this->id : $this->nom";
    }
}

Utilisateur::getNombreUtilisateurs();
echo "<br/>";
echo "<br/>";

$jean = new Utilisateur("Jean");
echo "<br/>";
$marie = new Utilisateur("Marie");
echo "<br/>";
$paul = new Utilisateur("Paul");
echo "<br/>";
echo "<br/>";

Utilisateur::getNombreUtilisateurs();
echo "<br/>";
echo "<br/>";

$jean->afficher();
echo "<br/>";

$marie->afficher();
echo "<br/>";

$paul->afficher();
echo "<br/>";
