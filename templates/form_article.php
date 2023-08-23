<?php
$route = isset($article) && $article->getId() ? 'editArticle&articleId='.$article->getId() : 'addArticle';
$submit = $route === 'addArticle' ? 'Envoyer' : 'Mettre à jour';
$auteur = isset($article) && $article->getAuteur() ? ($article->getAuteur()) : '';
$titre = isset($article) && $article->getTitre() ? ($article->getTitre()) : '';
$editeur = isset($article) && $article->getEditeur() ? ($article->getEditeur()) : '';
$annee = isset($article) && $article->getAnnee() ? ($article->getAnnee()) : '';
$categorie = isset($article) && $article->getCategorie() ? ($article->getCategorie()) : '';
$type = isset($article) && $article->getType() ? ($article->getType()) : '';
$sujet = isset($article) && $article->getSujet() ? ($article->getSujet()) : '';
$resume = isset($article) && $article->getResume() ? ($article->getResume()) : '';
?>

<form method="post" action="../public/index.php?route=<?= $route; ?>">
   <div class="form-group col-md-6">
        <label for="auteur">Auteur</label>
        <input type="text" id="auteur" name="auteur" class="form-control" value="<?= $auteur; ?>" >
    </div>
    <div class="form-group col-md-6">
        <label for="titre">Titre (obligatoire !)</label>
        <input type="text" id="titre" name="titre" class="form-control" value="<?= $titre; ?>">
    </div>
    <div class="form-group col-md-6">
        <label for="editeur">Éditeur</label>
        <input type="text" id="editeur" name="editeur" class="form-control" value="<?= $editeur; ?>">
    </div>	   
	<div class="form-group col-md-6">
        <label for="annee">Année</label>
        <input type="text" id="annee" name="annee" class="form-control" value="<?= $annee; ?>">
    </div>	
    <div class="form-group col-md-6">						
        <label for="categorie">Catégorie  (obligatoire !)</label>
		<select id="categorie" name="categorie" class="form-control">
			<option value="<?= $categorie; ?>"><?= $categorie; ?></option>
            <option value="Livre">Livre</option>
            <option value="Magazine">Magazine</option>
            <option value="Revue">Revue</option>					                
		</select>
    </div>
	<div class="form-group col-md-6">						
        <label for="type">Type</label>
		<select id="type" name="type" class="form-control">
			<option value="<?= $type; ?>"><?= $type; ?></option>
			<option value="Bande dessinée">Bande dessinée</option>  
			<option value="Documentaire">Documentaire</option>
            <option value="Essai">Essai</option>
			<option value="Mémoire">Mémoire</option>
            <option value="Récit">Récit</option>
            <option value="Roman">Roman</option>	
          	<option value="Autres">Autres</option>				   
		</select>
    </div>
	<div class="form-group col-md-6">
        <label for="sujet">Sujet</label>
        <input type="text" id="sujet" name="sujet" class="form-control"  value="<?= $sujet; ?>">
    </div>
	<div class="form-group col-md-6">
        <label for="resume">Résumé</label>
            <textarea id="resume" name="resume" class="form-control"  rows="7"><?= $resume; ?></textarea>
    </div>			
	<div class="form-group col-md-6">			
        <input type="submit" value="<?= $submit; ?>" id="submit" name="submit" class="btn btn-success">
	 </div>
</form>
