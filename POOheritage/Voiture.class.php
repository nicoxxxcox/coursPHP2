<?php

include_once "Quatres_roues.class.php";

class Voiture extends Quatres_roues
{
    protected $nombre_pneu_neige;


    public function __set($nom , $valeur)
    {
        $this->$nom = $valeur;
    }

    public function __get($nom)
    {
        return $this->$nom;
    }

    public function ajouter_pneu_neige($nombre)
    {
        $this->nombre_pneu_neige += $nombre;
    }

    public function enlever_pneu_neige($nombre)
    {   
        if($this->nombre_pneu_neige - $nombre > 0){
        
        $this->nombre_pneu_neige -= $nombre;
        }
    }
}