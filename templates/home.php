<?php $this->title = 'Index-Biblio';
?>

<div class="container">
    <div class="row">
        <div class="col-12   mt-5">            
            <nav>
                <ul class="pagination">
                    <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
                    <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                        <a href="./?page=<?= $currentPage - 1 ?>" class="page-link">Précédente</a>
                    </li>
                    <?php for($page = 1; $page <= $pages; $page++): ?>
                        <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                        <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                            <a href="./?page=<?= $page ?>" class="page-link"><?= $page ?></a>
                        </li>
                    <?php endfor ?>
                    <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
                    <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                        <a href="./?page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
                    </li>
                </ul>
            </nav>  
        </div>        
    </div>
	<div class="col-12">
        <br />
        <h1 class="text-center">Ouvrages</h1>
        <br />
        <h4 class="text-center">
		<input type="text" style="padding:5px; text-align:center; color:green; width:600px; border-style:none;background-color:whitesmoke"    value="<?= $this->session->show('register'); ?><?= $this->session->show('login'); ?><?= $this->session->show('logout'); ?><?= $this->session->show('delete_account'); ?>"/>
		<br /><br />
		</h4>
	</div>           
    <div class="table-responsive-md">
        <table class="table table-striped">
            <thead>
				<tr class="d-flex">	
                    <th class="col-3 col-sm-3" style="overflow:auto;">Titre</th>	
                    <th class="col-2 col-sm-2" style="overflow:auto;">Auteur</th>                                
                    <th class="col-2 col-sm-2" style="overflow:auto;">Éditeur</th>
                    <th class="col-1 col-sm-1" style="overflow:auto;">Année</th>
				    <th class="col-1 col-sm-1" style="overflow:auto;">Categorie</th>
				    <th class="col-1 col-sm-1" style="overflow:auto;">Type</th>
				    <th class="col-2 col-sm-2" style="overflow:auto;">Sujet</th>   
			    </tr>	
            </thead>
	        <tbody>					
            <?php
                foreach ($articles as $article) {  
                    
                 ?>	
				    <tr class="d-flex">
                        <td class="col-3 col-sm-3 pt-3" style="overflow:auto;"><i><a href="../public/index.php?route=article&articleId=<?= ($article->getId());?>" target="_blank" style="text-decoration:none;"><?= ($article->getTitre()) ?></i> </a></td>
                        <td class="col-2 col-sm-2 pt-3" style="overflow:auto;"><?= ($article->getAuteur());?></td>                               
                        <td class="col-2 col-sm-2 pt-3" style="overflow:auto;"><?= ($article->getEditeur()) ?></td> 
                        <td class="col-1 col-sm-1 pt-3" style="overflow:auto;"><?= ($article->getAnnee()) ?></td>
					    <td class="col-1 col-sm-1 pt-3" style="overflow:auto;"><?=  ($article->getCategorie()) ?></td>
					    <td class="col-1 col-sm-1 pt-3" style="overflow:auto;"><?= ($article->getType()) ?></td>
					    <td class="col-2 col-sm-2 pt-3" style="overflow:auto;"><?= ($article->getSujet()) ?></td>
					</tr>
                <?php
                 ;
                }
                 ?>
	        </tbody>
	    </table>
	</div> 
    <div class="row">
        <div class="col-12 col-md-8  offset-md-2 pb-4 mt-4 mb-5">            
            <nav>
                <ul class="pagination paginationCenter">
                    <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
                    <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                        <a href="./?page=<?= $currentPage - 1 ?>" class="page-link">Précédente</a>
                    </li>
                    <?php for($page = 1; $page <= $pages; $page++): ?>
                        <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                        <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                            <a href="./?page=<?= $page ?>" class="page-link"><?= $page ?></a>
                        </li>
                    <?php endfor ?>
                    <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
                    <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                        <a href="./?page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
                    </li>
                </ul>
            </nav>  
        </div>        
    </div>
</div>
