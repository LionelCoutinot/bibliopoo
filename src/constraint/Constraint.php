<?php

namespace App\src\constraint;

;

class Constraint
{ 
    public function notBlank($name, $value)
    {
        if(empty($value)) {
            return '<p style="color:red;font-style:italic;">Le champ " <b>'.$name.'</b> " saisi est vide</p>';
        }
    }

    public function minLength($name, $value, $minSize)
    {
        if(strlen($value) < $minSize) {
            return '<p style="color:red;font-style:italic;">Le champ " <b>'.$name.'</b> " doit contenir au moins '.$minSize.' caractères</p>';
        }
    }
    public function maxLength($name, $value, $maxSize)
    {
        if(strlen($value) > $maxSize) {
            return '<p style="color:red;font-style:italic;">Le champ " <b>'.$name.'</b> " doit contenir au maximum '.$maxSize.' caractères</p>';
        }
    }   
  
}