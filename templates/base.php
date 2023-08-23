<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge" /> <!-- essentiel pour l'"input=password" transformé en "input-text"-->
	<title> <?= $title ?></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="css/style.css" rel="stylesheet">
</head> 
<body>
	<div class="container-fluid bg-primary">
    	<div class="row">
        	<nav class="navbar navbar-expand-lg navbar-dark">
            	<h1 style="color:gold"><div class="navbar-brand"><i>Mes Livres</i></div></h1>
            	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                	<span class="navbar-toggler-icon"></span>
            	</button>
            	<div class="collapse navbar-collapse" id="navbarSupportedContent">
                	<ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5 ps-5">
                    	<li class="nav-item">
                        	<h5> <a class="nav-link text-white" href="../public/index.php?route=accueil">Accueil</a></h5>
						</li>
                    	<li class="nav-item">
                        	<h5> <a class="nav-link text-white" id="liens" href="index.php">Index</a></h5>
                    	</li>
               			<li class="nav-item">
                        	<h5> <a class="nav-link text-white" id="liens" href="../public/index.php?route=search">Recherche</a></h5>
                    	</li>
				    	<?php
				        if ($this->session->get('pseudo')) {
						?>
							<li class="nav-item">
								<h5><a href="../public/index.php?route=logout" class="nav-link text-white"  id="liens" >Déconnexion</a></h5>
							</li>
							<li class="nav-item">
								<h5><a href="../public/index.php?route=profile" class="nav-link text-white" id="liens"  >Profil</a></h5>
							</li>
							<li class="nav-item">
								<?php 
								if($this->session->get('role') === 'admin') { 
								?>
									<h5><a href="../public/index.php?route=administration" class="nav-link text-white"  id="liens" >Administration</a></h5>
								<?php 
								} 
								?>
							</li>
						<?php
						} else 
						{
						?>
						<li class="nav-item">
							<h5><a href="../public/index.php?route=register" class="nav-link text-white"  id="liens">Inscription</a></h5>
						</li>
						<li class="nav-item">
							<h5><a href="../public/index.php?route=login" class="nav-link text-white"  id="liens">Connection</a></h5>
						</li>	
						<?php
						}
						?>
						<li class="nav-item">
							<h5><b> <span class="nav-link text-dark"  id="liens">Pseudo : <i style="color:gold;"><?= $this->session->get('pseudo'); ?></i></span></b></h5>
						</li>      
						<li class="nav-item">
							<a class="nav-link text-white"  id="liens" href="#"></a>
						</li>
					</ul>
            	</div>
        	</nav>
    	</div>
	</div>
	<main>
		<div id="content">      
			<?= $content ?>
		</div>
	</main>
	<footer>	
	<nav>
			<div class="row">
				<div class="col-12 bg-primary pt-4">  
                	<ul class="list-inline text-center">
                    	<li class="list-inline-item"><a href="#" class="whitestrong">À propos</a></li>
                    	<li class="list-inline-item">&middot;</li>
                    	<li class="list-inline-item"><a href="#" class="whitestrong">Mentions légales</a></li>
                    	<li class="list-inline-item">&middot;</li>
                    	<li class="list-inline-item"><a href="#" class="whitestrong">Politique de confidentialité</a></li>
                    	<li class="list-inline-item">&middot;</li>
                    	<li class="list-inline-item"><a href="#"class="whitestrong" >Conditions d'utilisations</a></li>
                	</ul>
				</div>	
			</div>
			</nav>	
		</footer>	
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>	
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		
		
	</body>
</html>