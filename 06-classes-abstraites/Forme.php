<?php

abstract class Forme
{
    protected $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    abstract public function calculerAire();

    public function afficher()
    {
        echo "Forme : $this->nom - Aire : " . $this->calculerAire();
    }
}

class Cercle extends Forme
{
    private $rayon;

    public function __construct($rayon)
    {
        parent::__construct("Cercle");

        $this->rayon = $rayon;
    }

    public function calculerAire()
    {
        return 3.14 * $this->rayon * $this->rayon;
    }
}

class Rectangle extends Forme
{
    private $largeur;
    private $longueur;

    public function __construct($largeur, $longueur)
    {
        parent::__construct("Rectangle");

        $this->largeur = $largeur;
        $this->longueur = $longueur;
    }

    public function calculerAire()
    {
        return $this->largeur * $this->longueur;
    }
}

$cercle1 = new Cercle(5);
echo "<br/>";
$cercle1->calculerAire();
echo "<br/>";
$cercle1->afficher();
echo "<br/>";

$rectangle = new Rectangle(10, 20);
echo "<br/>";
$rectangle->calculerAire();
echo "<br/>";
$rectangle->afficher();
