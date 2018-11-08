<?php

abstract class Compte
{
    public $nom;
    public $prenom;
    public $solde;


    public function __construct($nom , $prenom , $solde)
    {
        $this->nom  = $nom ;
        $this->prenom = $prenom ;
        $this->solde = $solde ;
    }
    
    abstract public function credit($montant);
    
    
    abstract public function debit($montant);
    


}

class Courant extends Compte
{

    public $emploi;

    public function __construct($nom , $prenom , $solde , $emploi)
    {   
        $this->emploi = $emploi ;
        parent::__construct($nom , $prenom , $solde);
        
    }

    public function credit($montant)
    {
        return $this->$solde += ($montant * 1);
    }

    public function debit($montant)
    {
        return $this->$solde -= ($montant);
    }
}

class Epargne extends Compte
{

    public function credit($montant)
    {
        return $this->$solde += ($montant * 1.2);
    }

    public function debit($montant)
    {
        return $this->$solde -= ($montant);
    }

}

$courant = new Courant("Nicolas" , "Grissi", 1200 , "Dev");

echo "Bonjour ". $courant->nom . " " . $courant->prenom . " Votre solde est de " . $courant->solde . " et votre emplois est " . $courant->emploi;

