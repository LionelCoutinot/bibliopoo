<?php $this->title = 'Résultats-Biblio'; ?>
<div class="container mb-5" >
    <div class="row">
        <div class="col">              
	        <h1 class="text-center my-5">Ouvrage(s) trouvé(s)</h1>
			<div class="table-responsive-md">
                <table class="table table-striped" >             
                    <thead>                      
                        <th>Auteur</th>
                        <th>Titre</th>
                        <th>Éditeur</th>
                         <th>Année</th>
						 <th>Categorie</th>
						 <th>Type</th>
						 <th>Sujet</th>                        
                    </thead>
                    <tbody>
                        <?php
                         foreach ($articles as $article)
                        {
                        ?>		  
					       <tr>		                 
                               <td style="width:150px;">
					           <a href="../public/index.php?route=article&articleId=<?= ($article->getId());?>" target="_blank" style="text-decoration:none;"><?= ($article->getAuteur());?></a>
                               </a></td>
                               <td style="width:200px;"><i><?= ($article->getTitre()) ?></i></td>
                               <td style="width:150px;"><?= ($article->getEditeur()) ?></td> 
                               <td style="width:100px;"><?= ($article->getAnnee()) ?></td>
					           <td style="width:80px;"><?=  ($article->getCategorie()) ?></td>
					           <td style="width:80px;"><?= ($article->getType()) ?></td>
					           <td style="width:150px;"><?= ($article->getSujet()) ?></td>	
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
	
</body>
</html>