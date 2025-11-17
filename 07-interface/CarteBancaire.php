<?php

interface PaymentInterface
{
    public function payer($montant);
    public function rembourser($montant);
}

class CarteBancaire implements PaymentInterface
{
    private $numero;

    public function __construct($numero)
    {
        $this->numero = $numero;
    }

    public function payer($montant)
    {
        $derniers4 = substr($this->numero, -4);
        echo "Paiement de {$montant}€ par carte ****$derniers4";
    }

    public function rembourser($montant)
    {
        echo "Remboursement de $montant € sur la carte.";
    }
}

class PayPal implements PaymentInterface
{
    private $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function payer($montant)
    {
        echo "Paiement PayPal de $montant € via $this->email";
    }

    public function rembourser($montant)
    {
        echo "Remboursement PayPal de $montant €";
    }
}

class Crypto implements PaymentInterface
{
    private $wallet;

    public function __construct($wallet)
    {
        $this->wallet = $wallet;
    }

    public function payer($montant)
    {
        $premiers8 = substr($this->wallet, 0, 8);
        echo "Paiement crypto de {$montant}€ depuis wallet {$premiers8}...";
    }

    public function rembourser($montant)
    {
        echo "Remboursement crypto de $montant €";
    }
}

function traiterPaiement(PaymentInterface $methode, $montant)
{
    $methode->payer($montant);
}

traiterPaiement(new CarteBancaire(1234567812345678), 50);
echo "<br/>";
traiterPaiement(new PayPal("jean@email.com"), 75);
echo "<br/>";
traiterPaiement(new Crypto("1A2B3C4D5E6F7G8H9I"), 100);
