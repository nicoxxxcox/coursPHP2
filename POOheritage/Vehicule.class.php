<?php

abstract class Vehicule
{

    protected $couleur;
    protected $poids;


    public static function afficher_attribut($obj)
    {   
        echo "<br>";
        echo "<br>";
        echo "Couleur : " . $obj->couleur;
        echo "<br>";
        echo "Poids : " . $obj->poids;
        echo "<br>";
        if(isset($obj->nombre_porte)) { echo "Nombre de porte : " . $obj->nombre_porte ; }
        if(isset($obj->cylindree)) { echo "Cylindree : " .  $obj->cylindree ; }
        if(isset($obj->nombre_pneu_neige)) { echo "Nombre de pneus neige : " .  $obj->nombre_pneu_neige ; }
        if(isset($obj->longueur)) { echo "Longueur : " .  $obj->longueur ; }
        if(isset($obj->nb_portes)) { echo "Nombre de porte : " .  $obj->nb_portes ; }
        
    }

    

    
    abstract public function ajouter_personne($poids_personne);
    
   


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