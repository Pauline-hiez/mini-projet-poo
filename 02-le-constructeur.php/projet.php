<?php

class CompteBancaire
{
    public $titulaire;
    public $solde;

    public function __construct($titulaire, $soldeInitial)
    {
        $this->titulaire = $titulaire;
        $this->solde = $soldeInitial;

        echo "Compte crée pour $this->titulaire avec $this->solde €";
    }

    public function deposer($montant)
    {
        $this->solde += $montant;

        echo "Dépot de $montant €";
    }

    public function afficherSolde()
    {
        echo "Solde de $this->titulaire : $this->solde €";
    }
}

$compte1 = new CompteBancaire("Jean", 1000);
echo "<br/>";
$compte2 = new CompteBancaire("Marie", 500);
echo "<br/>";
echo "<br/>";

$compte1->deposer(200);
echo "<br/>";
$compte1->afficherSolde();
echo "<br/>";
echo "<br/>";

$compte2->deposer(200);
echo "<br/>";
$compte2->afficherSolde();
