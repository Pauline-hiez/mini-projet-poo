<?php

class Voiture
{
    public $marque;
    public $couleur;
    public $vitesseMax;

    public function demarrer()
    {
        echo "Vroooom ! La $this->marque démarre !";
    }

    public function klaxonner()
    {
        echo "POUET POUET ! La voiture est $this->couleur";
    }
}

$voiture1 = new Voiture();
$voiture1->marque = "Ferrari";
$voiture1->couleur = "rouge";
$voiture1->vitesseMax = 320;

$voiture1->demarrer();
echo "<br/>";
$voiture1->klaxonner();
echo "<br/>";
echo "La voiture roule à " . $voiture1->vitesseMax . " km/h !";
echo "<br/>";
echo "<br/>";

$voiture2 = new Voiture();
$voiture2->marque = "Renault Twingo";
$voiture2->couleur = "jaune";
$voiture2->vitesseMax = 150;

$voiture2->demarrer();
echo "<br/>";
$voiture2->klaxonner();
echo "<br/>";
echo "La voiture roule à " . $voiture2->vitesseMax . " km/h !";
