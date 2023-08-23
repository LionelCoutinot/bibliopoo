<?php

namespace App\src\DAO;


use App\config\Parameter;
use App\src\model\Article;


class ArticleDAO extends DAO
{
    
    private function buildObject($row)
    {
         $article = new Article();
        $article->setId($row['id']);
        $article->setAuteur($row['auteur']);
	     $article->setTitre($row['titre']);
        $article->setEditeur($row['editeur']);
        $article->setAnnee($row['annee']);
        $article->setCategorie($row['categorie']);
		$article->setType($row['type']);
		$article->setSujet($row['sujet']);
		 $article->setResume($row['resume']);
        return $article;
    }
 
    public function getArticles()
    {
        if(isset($_GET['page']) && !empty($_GET['page'])){
            $currentPage = (int) strip_tags($_GET['page']);
        }else{
            $currentPage = 1;
        }
        $parPage = 10;
        $premier = ($currentPage * $parPage) - $parPage;
         $sql = 'SELECT * FROM ouvrages ORDER BY categorie ASC, auteur ASC LIMIT '.$premier.',  '.$parPage.'';
         $result = $this->createQuery($sql); 
        $articles = [];
        foreach ($result as $row){
            $articleId = $row['id'];
            $articles[$articleId] = $this->buildObject($row);
        }
        return $articles;
    }


    public  function currentPage(){
        if(isset($_GET['page']) && !empty($_GET['page'])){
            $currentPage = (int) strip_tags($_GET['page']);
        }else{
            $currentPage = 1;
        }
        $parPage = 10;
        return $currentPage;
        // Calcul du 1er article de la page
        /*$premier = ($currentPage * $parPage) - $parPage; */   
    }

    public function countPage(){
        if(isset($_GET['page']) && !empty($_GET['page'])){
            $currentPage = (int) strip_tags($_GET['page']);
        }else{
            $currentPage = 1;
        }
        $sql = 'SELECT COUNT(*) AS nb_articles FROM ouvrages'; 
        $result = $this->createQuery($sql); 
        // On récupère le nombre d'articles
        $result = $result->fetch();
        $nbArticles = (int) $result['nb_articles'];
        // On détermine le nombre d'articles par page
        $parPage = 10;
        $premier = ($currentPage * $parPage) - $parPage;
        // On calcule le nombre de pages total
        $pages = ceil($nbArticles / $parPage);
        return $pages;
       
    }

public function getArticlesAdmin()
    {
        $sql = 'SELECT * FROM ouvrages ORDER BY categorie ASC, auteur ASC';
        $result = $this->createQuery($sql);
        $articles = [];
        foreach ($result as $row){
            $articleId = $row['id'];
            $articles[$articleId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $articles;
		
    }     

    public function getArticle($articleId)
    {
        $sql = 'SELECT * FROM ouvrages WHERE id = ?';
        $result = $this->createQuery($sql, [$articleId]);
        $article = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($article);
    }

    public function searchResult()
    {       
       $ouvrage=$_POST['ouvrage'];
       $sql = "SELECT * FROM ouvrages Where auteur LIKE '%$ouvrage%'   or  titre LIKE '%$ouvrage%' or sujet LIKE '%$ouvrage%' ";
        $result = $this->createQuery($sql);
        $articles = [];
        foreach ($result as $row){
            $articleId = $row['id'];
            $articles[$articleId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $articles;	
       
	}



    public function addArticle(Parameter $post)
    {
      $sql = 'INSERT INTO ouvrages (auteur, titre, editeur, annee, categorie, type, sujet, resume) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
        $this->createQuery($sql, [$post->get('auteur'), $post->get('titre'), $post->get('editeur'), $post->get('annee'), $post->get('categorie'), $post->get('type'), $post->get('sujet'), $post->get('resume')]);
    }
	
	 public function editArticle(Parameter $post, $articleId)
    {
         $sql = 'UPDATE ouvrages SET auteur=:auteur, titre=:titre, editeur=:editeur, annee=:annee,  categorie=:categorie, type=:type, sujet=:sujet, resume=:resume   WHERE id=:articleId';
        $this->createQuery($sql, [
		     'articleId' => $articleId,
            'auteur' => $post->get('auteur'),
            'titre' => $post->get('titre'),
            'editeur' => $post->get('editeur'),
			'annee' => $post->get('annee'),
			'categorie' => $post->get('categorie'),
			'type' => $post->get('type'),
			'sujet' => $post->get('sujet'),
			'resume' => $post->get('resume'),
            
        ]);
    }
	
	  public function deleteArticle($articleId)
    {
        $sql = 'DELETE FROM ouvrages WHERE id = ?';
        $this->createQuery($sql, [$articleId]);
    }

   	
	
}