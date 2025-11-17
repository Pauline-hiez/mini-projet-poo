<?php

class Instrument
{
    protected $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function jouer()
    {
        echo "$this->nom joue de la musique...";
        echo "<br/>";
    }
}

class Guitare extends Instrument
{
    public function jouer()
    {
        echo "$this->nom : GLING GLING GLING";
        echo "<br/>";
    }
}

class Piano extends Instrument
{
    public function jouer()
    {
        echo "$this->nom : PLONK PLONK PLONK";
        echo "<br/>";
    }
}

class Batterie extends Instrument
{
    public function jouer()
    {
        echo "$this->nom : BOOM BOOM CRASH";
        echo "<br/>";
    }
}


$orchestre = [
    new Guitare("Fender"),
    new Piano("Yamaha"),
    new Batterie("Pearl")
];

echo "Concert";
echo "<br/>";

foreach ($orchestre as $instrument) {
    $instrument->jouer();
}
