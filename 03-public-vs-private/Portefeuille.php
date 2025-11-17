<?php

class Portefeuille
{
    private $proprietaire;
    private $argentDisponible;

    public function __construct($proprietaire, $argentInitial)
    {
        $this->proprietaire = $proprietaire;
        $this->argentDisponible = $argentInitial;

        echo "Portefeuille crée pour $this->proprietaire avec $this->argentDisponible €";
    }

    public function getArgent()
    {
        return $this->argentDisponible;
    }

    public function ajouterArgent($montant)
    {
        if ($montant > 0) {
            $this->argentDisponible += $montant;
            echo "Ajout de $montant €";
        } else {
            echo "Montant invalide !";
        }
    }

    public function retirerArgent($montant)
    {
        if ($montant > 0 && $montant <= $this->argentDisponible) {
            $this->argentDisponible -= $montant;
            echo "Retrait de $montant €";
        } else {
            echo "Fonds insuffisants !";
        }
    }
}

$monPortefeuille = new Portefeuille("Pauline", 100);
echo "<br/>";
echo $monPortefeuille->getArgent();
echo "<br/>";
$monPortefeuille->ajouterArgent(50);
echo "<br/>";
$monPortefeuille->retirerArgent(30);
echo "<br/>";
$monPortefeuille->retirerArgent(500);
echo "<br/>";
$monPortefeuille->ajouterArgent(-20);
echo "<br/>";
echo $monPortefeuille->getArgent();
