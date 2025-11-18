<?php

trait Attaquant
{
    public function attaquer($cible)
    {
        echo "$this->nom attaque $cible->nom et inflige $this->attaque dégâts !<br>";

        $cible->recevoirDegats($this->attaque);
    }
}

abstract class Personnage
{
    static private $totalPersonnages = 0;

    protected $nom;
    protected $vie;
    protected $attaque;

    private $estVivant = true;

    public function __construct($nom, $vie, $attaque)
    {
        self::$totalPersonnages++;

        $this->nom = $nom;
        $this->vie = $vie;
        $this->attaque = $attaque;

        echo "$this->nom entre dans l'arène ! (Vie: $this->vie, Attaque: $this->attaque)<br>";
    }

    public function recevoirDegats($degats)
    {
        $this->vie -= $degats;

        if ($this->vie <= 0) {
            $this->estVivant = false;
            $this->vie = 0;

            echo "$this->nom est K.O !<br>";
        } else {
            echo  "$this->nom a $this->vie PV restants<br>";
        }
    }

    public function getEstVivant()
    {
        return $this->estVivant;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public static function getTotalPersonnages()
    {
        return self::$totalPersonnages;
    }
}

class Guerrier extends Personnage
{
    use Attaquant;

    public function __construct($nom)
    {
        parent::__construct($nom, 100, 20);
    }

    public function crier()
    {
        echo "POUR L'HONNEUR !!!<br>";
    }
}

class Mage extends Personnage
{
    use Attaquant;

    public function __construct($nom)
    {
        parent::__construct($nom, 70, 35);
    }

    public function crier()
    {
        echo "PAR LA MAGIE !<br>";
    }

    public function sortSpecial($cible)
    {
        echo "$this->nom lance BOULE DE FEU !<br>";

        $cible->recevoirDegats(50);
    }
}

class Archer extends Personnage
{
    use Attaquant;

    public function __construct($nom)
    {
        parent::__construct($nom, 80, 25);
    }

    public function crier()
    {
        echo "TIR MORTEL !<br>";
    }
}

class Arene
{
    public function combat($perso1, $perso2)
    {
        echo "COMBAT : " . $perso1->getNom() . " VS " . $perso2->getNom() . "<br>";

        $perso1->crier();
        echo "<br>";
        $perso2->crier();
        echo "<br>";

        while ($perso1->getEstVivant() && $perso2->getEstVivant()) {
            $perso1->attaquer($perso2);

            if (!$perso2->getEstVivant()) break;

            $perso2->attaquer($perso1);
        }

        $gagnant = $perso1->getEstVivant() ? $perso1 : $perso2;

        echo "Le gagnant est " . $gagnant->getNom() . "<br><br>";

        return $gagnant;
    }
}

$conan = new Guerrier("Conan le guerrier");
$gandalf = new Mage("Gandalf le gris");
$legolas = new Archer("Legolas l'elfe");

echo "<br>";

$arene = new Arene();

echo "Combat 1 : Conan VS Gandalf<br><br>";

$gandalf->sortSpecial($conan);
$gagnant1 = $arene->combat($conan, $gandalf);

echo "Combat 2 : " . $gagnant1->getNom() . " VS Legolas<br><br>";

$champion = $arene->combat($gagnant1, $legolas);

echo "STATISTIQUES : <br>";
echo "Total des personnages crées : " . Personnage::getTotalPersonnages() . "<br>";

echo "Grand gagnant : " . $champion->getNom() . " <br>";
