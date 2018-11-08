<?php

class Vehicule
{

    protected $couleur;
    //protected $poids;

    static protected $poids;

    
    static public function ajouter_personne($poids_personne)
    {
        self::poids += $poids_personne;
    
    }
   


    public function __construct($couleur , $poids)
    {
        $this->couleur = $couleur ;
        $this->poids = $poids ;
    }

    public function __set($nom , $valeur)
    {
        $this->$nom = $valeur;
    }

    public function __get($nom)
    {
        return $this->$nom;
    }

    public function rouler()
    {
        echo "Le véhicule roule";
    }

   
    /*
    public function ajouter_personne($poids_personne)
    {
        $this->poids += $poids_personne;
    
    }
    */

    
}