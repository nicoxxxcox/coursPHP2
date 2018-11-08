<?php

class Geometrie {

   
    public const PII = 3.14159265358;

    public static $surfaceRectangle;
    public static $surface;


    public static function calcSurfaceRect($largeur , $longeur)
    {
        self::$surfaceRectangle = $largeur * $longeur;
    }

    public static function calcPerRect($largeur , $longeur)
    {
        return ($largeur *2) + ($longeur * 2);
    }
    

    
    
    public static function calcSurface($rayon)
    {
       self::$surface = (self::PII * ($rayon)**2);
    }

    public static function calcPerimetre($rayon)
    {
        return (2 * self::PII * $rayon);
    }



}