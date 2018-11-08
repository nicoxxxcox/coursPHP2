<?php

require_once 'Geometrie.class.php';

class Bricolage extends Geometrie {

   
    public static function calcSurfApp($tableau)    
    {
        $surfaceTotale = 0;

        foreach($tableau as $largeur => $longeur){
            parent::calcSurfaceRect($largeur , $longeur);
           $surfaceTotale += parent::$surfaceRectangle ; 
        }

        return $surfaceTotale;
    }


}