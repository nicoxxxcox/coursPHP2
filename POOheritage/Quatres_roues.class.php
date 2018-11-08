<?php

include_once "Vehicule.class.php";


class Quatres_roues extends Vehicule
{
    protected $nombre_porte;

    public function __construct($nombre_porte)
    {
        
        $this->nombre_porte = $nombre_porte;
    }

    
    public function ajouter_personne($poids_personne)
    {
        $this->poids += $poids_personne;
    
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