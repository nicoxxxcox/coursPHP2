<?php

include_once "Vehicule.class.php";

class Deux_roues extends Vehicule
{
    protected $cylindree;


    public function ajouter_personne($poids_personne)
    {
        $this->poids += ( $poids_personne + 2 );
    
    }


    public function __set($nom , $valeur)
    {
        $this->$nom = $valeur;
    }

    public function __get($nom)
    {
        return $this->$nom;
    }

    public function mettre_essence($nb_litre)
    {
        $this->poids += $nb_litre ; 
    }
}