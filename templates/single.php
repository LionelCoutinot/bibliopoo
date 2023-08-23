<?php $this->title = 'Detail-Ouvrage-Biblio'; ?>

	<div class="container my-5">
		<h1 class="text-center"><i><?= $article->getTitre() ?></i></h1>
		<br />
        <p style="padding:10px;"><b>	Auteur </b>: <?= ($article->getAuteur()) ?></p><hr />
        <p style="padding:10px;"><b>Titre </b> : <i><?= ($article->getTitre()) ?></i></p><hr />
        <p style="padding:10px;"><b>Éditeur</b> : <?= ($article->getEditeur()) ?></p><hr />
		<p style="padding:10px;"><b>Année </b> : <?= ($article->getAnnee()) ?></p><hr />
		<p style="padding:10px;" ><b>Catégorie </b> : <?= ($article->getCategorie()) ?></p><hr />
		<p style="padding:10px;"><b>Type </b> : <?= ($article->getType()) ?></p><hr />
		<p style="padding:10px;"><b>Sujet</b> : <?= ($article->getSujet()) ?></p><hr />
		<p style="text-align:justify; padding:10px;" ><b>Résumé </b>:<br /> <?= ($article->getResume()) ?></p> 
        <div class="actions">   
	</div>
			
      

 