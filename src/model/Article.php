<?php

namespace App\src\model;

class Article
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $auteur;

    /**
     * @var string
     */
    private $titre;
	
	/**
     * @var string
     */
    private $editeur;

    /**
     * @var string
     */
    private $annee;

    /**
     * @var string
     */
    private $categorie;
	
	/**
     * @var string
     */
    private $type;
	
	/**
     * @var string
     */
    private $sujet;
	
	
	/**
     * @var string
     */
    private $resume;
	
	

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * @param string $auteur
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }
	
	 /**
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }
	

    /**
     * @return string
     */
    public function getEditeur()
    {
        return $this->editeur;
    }

    /**
     * @param string $editeur
     */
    public function setEditeur($editeur)
    {
        $this->editeur = $editeur;
    }
	
/**
     * @return string
     */	
 public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * @param string $annee
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    }
	
	
     /**
     * @return string
     */
 public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param string $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }
 /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

 /**
     * @return string
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * @param string $sujet
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;
    }

 /**
     * @return string
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * @param string $resume
     */
    public function setResume($resume)
    {
        $this->resume = $resume;
    }
   
}