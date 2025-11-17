<?php

class Animal
{
    protected $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function manger()
    {
        echo "$this->nom mange...";
    }

    public function dormir()
    {
        echo "$this->nom dort... Zzz";
    }
}

class Chien extends Animal
{

    public function aboyer()
    {
        echo "$this->nom : WOAF WOAF !";
    }
}

class Chat extends Animal
{

    public function miauler()
    {
        echo "$this->nom : MIAOU MIAOU";
    }
}

class Oiseau extends Animal
{

    public function voler()
    {
        echo "$this->nom vole dans le ciel";
    }
}

$chien = new Chien("Rex");
$chat = new Chat("Minou");
$oiseau = new Oiseau("Tweety");

$chien->manger();
echo "<br/>";
$chien->dormir();
echo "<br/>";
$chien->aboyer();
echo "<br/>";
echo "<br/>";

$chat->manger();
echo "<br/>";
$chat->dormir();
echo "<br/>";
$chat->miauler();
echo "<br/>";
echo "<br/>";

$oiseau->manger();
echo "<br/>";
$oiseau->dormir();
echo "<br/>";
$oiseau->voler();
