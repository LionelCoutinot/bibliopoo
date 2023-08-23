<?php

namespace App\src\controller;

use App\config\Parameter;

class FrontController extends Controller
{
	 public function accueil()
    {      
        return $this->view->render('accueil');
    }	
    
    public function home()
    {
        $articles = $this->articleDAO->getArticles();
        $pages= $this->articleDAO->countPage();
        $currentPage= $this->articleDAO->currentPage();
        return $this->view->render('home', [
           'articles' => $articles, 
           'pages'=> $pages,
           'currentPage'=>$currentPage, 
        ]);
    }

    public function article($articleId)
    {
        $article = $this->articleDAO->getArticle($articleId);      
        return $this->view->render('single', [
            'article' => $article,          
        ]);
    }
	
	public function search() {
		return $this->view->render('search');
	}
	
	
	 public function searchResult()
    {
		 $articles = $this->articleDAO->searchResult();
         return $this->view->render('searchResult', [		   
           'articles' => $articles,
		   ]);
    }

    public function register(Parameter $post)
    {
        if($post->get('submit')) {
            $errors = $this->validation->validate($post, 'User');
            if($this->userDAO->checkUser($post)) {
                $errors['pseudo'] = $this->userDAO->checkUser($post);
            }
            if(!$errors) {
                $this->userDAO->register($post);
                $this->session->set('register', 'Votre inscription a bien été effectuée !');
                header('Location: ../public/index.php');
            }
            return $this->view->render('register', [
                'post' => $post,
                'errors' => $errors
            ]);

        }
        return $this->view->render('register');
    }
	
	 public function login(Parameter $post)
    {
        if($post->get('submit')) {
            $result = $this->userDAO->login($post);
            if($result && $result['isPasswordValid']) {
                $this->session->set('login', 'Content de vous (re)voir');
                $this->session->set('id', $result['result']['id']);
                $this->session->set('role', $result['result']['name']);
                $this->session->set('pseudo', $post->get('pseudo'));               
                header('Location: ../public/index.php');
            }
            else {
                $this->session->set('error_login', ' Désolé, vous n\'êtes pas autorisé à accéder à la partie " administration " !');
                return $this->view->render('login', [
                    'post'=> $post
                ]);
            }
        }
        return $this->view->render('login');
    }		
}