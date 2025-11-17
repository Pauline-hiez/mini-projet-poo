<?php

trait Nageable
{
    public function nager()
    {
        echo "$this->nom nage comme un poisson !";
    }
}

trait Volant
{
    public function voler()
    {
        echo "$this->nom vole dans les airs";
    }
}

trait Invisible
{
    public function seRendreInvisible()
    {
        echo "$this->nom devient invisible !";
    }
}

class Guerrier
{
    use Nageable;
    public $nom;

    public function __construct($nom) {
        $this->nom = $nom;
    }

    public function attaquer() {
        echo "$this->nom attaque avec son épée !";
    }
}

class Magicien {
    use Nageable, Volant, Invisible;
    public $nom;

    public function __construct($nom) {
        $this->nom = $nom;
    }

    public function lancerSort() {
        echo "$this->nom lance un sort !";
    }
}

$guerrier1 = new Guerrier ("Conan");
echo "<br/>";
$guerrier1->attaquer();
echo "<br/>";
$guerrier1->nager();
echo "<br/>";
echo "<br/>";

$magicien1 = new Magicien ("Gandalf");
echo "<br/>";
$magicien1->lancerSort();
echo "<br/>";
$magicien1->voler();
echo "<br/>";
$magicien1->nager();
echo "<br/>";
$magicien1->seRendreInvisible();
