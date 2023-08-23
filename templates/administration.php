<?php $this->title = 'Administration-Biblio'; ?>
<div style="background-color:white">
    <div class="container" style="font-size:11pt">
        <div class="row">
            <div class="col"> 
                <h1 class="text-center mt-5 mb-4">Espace Administrateur</h1>
                <h4 class="text-center">
			        <input type="text" style="padding:5px; text-align:center; color:green; width:600px; border-style:none;"    value="<?= $this->session->show('add_article'); ?><?= $this->session->show('edit_article'); ?><?= $this->session->show('delete_article'); ?><?= $this->session->show('delete_user'); ?>"/>
			    </h4>
            </div>
	    </div>
    </div>
<div class="container mb-5" style="background-color:beige; border-radius:15px; border:1px solid gold; padding:10px;">
    <div class="row">
        <div class="col"> 
            <h2 class="text-center"><a href="../public/index.php?route=addArticle" style="text-decoration:none;">Nouvel ouvrage</a></h2>
        </div>
	</div>
</div>	

<div class="container my-5" style="background-color:beige; border-radius:15px; border:1px solid gold; padding:8px;">
    <div class="row">
        <div class="col"> 						  
            <h2 class="text-center padding:10px;">Utilisateurs</h2>		 
            <div class="table-responsive-md">	
                <table class="table table-striped">
                    <thead> 
			            <tr class="d-flex">
                            <th class="col-1 col-sm-1" style="overflow:auto;">Id</th>
                            <th class="col-2 col-sm-2" style="overflow:auto;">Pseudo</th>
					        <th class="col-2 col-sm-2" style="overflow:auto;">Date</th>
                            <th class="col-3 col-sm-3"style="overflow:auto;">Rôle</th>
                            <th class="col-4 col-sm-4" style="overflow:auto;">Actions</th> 
            	        </tr>				 
                    </thead> 
                    <tbody> 
                        <?php
                        foreach ($users as $user) {
                            $date=$user->getCreatedAt();
	                        $date=DATE('d-m-Y H:i:s', strtotime(str_replace ('/', '-', $date)));
                        ?>
                            <tr class="d-flex">
                                <td class="col-1 col-sm-1" style="overflow:auto;"><?= htmlspecialchars($user->getId());?></td>
                                <td class="col-2 col-sm-2" style="overflow:auto;"><b><?= htmlspecialchars($user->getPseudo());?></b></td>
                                <td class="col-2 col-sm-2" style="overflow:auto;">Créé le : <?php echo htmlspecialchars($date); ?></td>
                                <td class="col-3 col-sm-3"style="overflow:auto;" ><?= htmlspecialchars($user->getRole());?></td>
                                <td class="col-4 col-sm-4" style="overflow:auto;">   
								    <?php
                                        if($user->getRole() != 'admin') 
								        {
                                    ?>
                                        <a href="../public/index.php?route=deleteUser&userId=<?= $user->getId(); ?>" onclick="return confirm('Voulez-vous vraiment supprimer cet utilisateur ?');">Supprimer</a>
                                    <?php 
									    } else {
                                    ?>
                                        Suppression impossible
                                    <?php
                                               }
                                    ?>
			                    </td> 
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>	
    </div>
</div>

<div class="container mb-5" style="background-color:beige; border-radius:15px; border:1px solid gold; padding:8px;">
    <div class="row">
        <div class="col"> 
            <h2 class="text-center padding:10px;">Ouvrages</h2>		
            <div class="table-responsive-md">
                <table class="table table-striped">
                    <thead>
                        <tr class="d-flex">						
                            <th class="col-2 col-sm-3" style="overflow:auto;" >Titre</th>
                            <th class="col-3 col-sm-2" style="overflow:auto;">Auteur</th>
                            <th class="col-1 col-sm-1" style="overflow:auto;">Éditeur</th>
                            <th class="col-1 col-sm-1" style="overflow:auto;">Année</th>
					        <th class="col-1 col-sm-1" style="overflow:auto;" >Categorie</th>
					        <th class="col-1 col-sm-1" style="overflow:auto;">Type</th>
					        <th class="col-1 col-sm-1" style="overflow:auto;">Sujet</th>  
                            <th class="col-2 col-sm-2" style="overflow:auto;">Action</th>
						</tr>
                    </thead>
	                <tbody>					
                        <?php
                        foreach ($articles as $article)  { ?>
					       <tr class="d-flex">	  
                                <td class="col-3 col-sm-3" style="overflow:auto;" ><i><?= ($article->getTitre()) ?></i></td>
                                <td class="col-3 col-sm-2" style="overflow:auto;" ><?= ($article->getAuteur()) ?></td>
                                <td class="col-1 col-sm-1" style="overflow:auto;"><?= ($article->getEditeur()) ?></td> 
                                <td class="col-1 col-sm-1" style="overflow:auto;"><?= ($article->getAnnee()) ?></td>
					            <td class="col-1 col-sm-1" style="overflow:auto;"><?=  ($article->getCategorie()) ?></td>
					            <td class="col-1 col-sm-1" style="overflow:auto;"><?= ($article->getType()) ?></td>
					            <td class="col-1 col-sm-1" style="overflow:auto;"><?= ($article->getSujet()) ?></td>
							    <td class="col-2 col-sm-2" style="overflow:auto;">
                                    <a href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>">Modifier</a>
				                    &nbsp;
                                    <a href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>" onclick="return confirm('Voulez-vous vraiment supprimer cet ouvrage ?');">Supprimer</a>
                                </td>
					       </tr>
                        <?php
                        }
                         ?>
	                </tbody>
	            </table>
	        </div>    
	    </div>	
    </div>    
</div>
  

