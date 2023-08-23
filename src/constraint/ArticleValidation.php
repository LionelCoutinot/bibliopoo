<?php

namespace App\src\constraint;
use App\config\Parameter;

class ArticleValidation extends Validation
{
    private $errors = [];
    private $constraint;

    public function __construct()
    {
        $this->constraint = new Constraint();
    }

    public function check(Parameter $post)
    {
        foreach ($post->all() as $key => $value) {
            $this->checkField($key, $value);
        }
        return $this->errors;
    }

    private function checkField($name, $value)
    {
        if($name === 'auteur') {
            $error = $this->checkAuteur($name, $value);
            $this->addError($name, $error);
        	}
        elseif ($name === 'titre') {
            $error = $this->checkTitre($name, $value);
            $this->addError($name, $error);
        }
        elseif($name === 'editeur') {
            $error = $this->checkEditeur($name, $value);
            $this->addError($name, $error);
		}
		elseif($name === 'annee') {
            $error = $this->checkAnnee($name, $value);
            $this->addError($name, $error);
		}
		elseif($name === 'categorie') {
            $error = $this->checkCategorie($name, $value);
            $this->addError($name, $error);
		}
		elseif($name === 'type') {
            $error = $this->checkType($name, $value);
            $this->addError($name, $error);
		}
		elseif($name === 'sujet') {
            $error = $this->checkSujet($name, $value);
            $this->addError($name, $error);
		}
		elseif($name === 'resume') {
            $error = $this->checkResume($name, $value);
            $this->addError($name, $error);
		}
	}	
			
			
			
        

    private function addError($name, $error) {
        if($error) {
            $this->errors += [
                $name => $error
            ];
        }
    }
 private function checkAuteur($name, $value)
    {                
        if($this->constraint->maxLength($name, $value, 255)) {
            return $this->constraint->maxLength('auteur', $value, 255);
        }
    }

   
    private function checkTitre($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('titre', $value);
        }
        if($this->constraint->minLength($name, $value, 2)) {
            return $this->constraint->minLength('titre', $value, 2);
        }
        if($this->constraint->maxLength($name, $value, 255)) {
            return $this->constraint->maxLength('titre', $value, 255);
        }
    }
	
	  private function checkEditeur($name, $value)
        {       
        if($this->constraint->maxLength($name, $value, 255)) {
            return $this->constraint->maxLength('editeur', $value, 255);
        }
    }
	
	  private function checkAnnee($name, $value)
    {       
        
        if($this->constraint->maxLength($name, $value, 255)) {
            return $this->constraint->maxLength('annee', $value, 255);
        }
    }
	

  private function checkCategorie($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('categorie', $value);
        }
        if($this->constraint->minLength($name, $value, 2)) {
            return $this->constraint->minLength('categorie', $value, 2);
        }
        if($this->constraint->maxLength($name, $value, 255)) {
            return $this->constraint->maxLength('categorie', $value, 255);
	}
	}
     private function checkType($name, $value)
    {        
       
        if($this->constraint->maxLength($name, $value, 255)) {
            return $this->constraint->maxLength('type', $value, 255);
        }
    }
	
	  private function checkSujet($name, $value)
    {     
        if($this->constraint->maxLength($name, $value, 255)) {
            return $this->constraint->maxLength('sujet', $value, 255);
        }
    }
	

     private function checkResume($name, $value)
    {
	}         
}
