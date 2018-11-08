<?php

include_once "Vehicule.class.php";


class Quatres_roues extends Vehicule
{
    protected $nombre_porte;

    static public function ajouter_personne($poids_personne)
    {
        parent::poids =  ($poids_personne + parent::poids) ;
    
    }


    public function __set($nom , $valeur)
    {
        $this->$nom = $valeur;
    }

    public function __get($nom)
    {
        return $this->$nom;
    }

    public function repeindre($couleur)
    {
        $this->couleur = $couleur ;
    }
}