<?php $this->title = 'Ajout-Biblio'; ?>
<br />
<h1 class="text-center">Nouvel ouvrage</h1>
<br />
 <div class="container">
    <div class="row">
		<section class="col-12">
            <form method="post" action="../public/index.php?route=addArticle" class="mb-5">
                <div class="form-group col-md-6">						   
                    <label for="auteur">Auteur</label>
                    <input type="text" id="auteur" name="auteur" class="form-control" value="<?= isset($post) ?($post->get('auteur')): ''; ?>">
                    <br />
                    <?= isset($errors['auteur']) ? $errors['auteur'] : ''; ?>
				</div>
                <div class="form-group col-md-6">
                    <label for="titre">Titre (obligatoire !)</label>
                    <input type="text" id="titre" name="titre" class="form-control" value="<?= isset($post) ?($post->get('titre')): ''; ?>">
                    <br />
                    <?= isset($errors['titre']) ? $errors['titre'] : ''; ?>
                </div>
                <div class="form-group col-md-6">
                    <label for="editeur">Éditeur</label>
                    <input type="text" id="editeur" name="editeur" class="form-control" value="<?= isset($post) ? ($post->get('editeur')): ''; ?>">
					<br />
                    <?= isset($errors['editeur']) ? $errors['editeur'] : ''; ?>
                </div>
				<div class="form-group col-md-6">
                    <label for="annee">Année</label>
                    <input type="text" id="annee" name="annee" class="form-control" value="<?= isset($post) ? ($post->get('annee')): ''; ?>">
					<br />
                    <?= isset($errors['Annee']) ? $errors['Annee'] : ''; ?>
                </div>	
                <div class="form-group col-md-6">						
                    <label for="categorie">Catégorie  (obligatoire !)</label>
					<select id="categorie" name="categorie" class="form-control">
					    <option value="<?= isset($post) ? ($post->get('categorie')): ''; ?>">Liste de choix</option>
                        <option value="Livre">Livre</option>
                       <option value="Magazine">Magazine</option>
                       <option value="Revue">Revue</option>					                
					 </select>
					 <br />
                     <?= isset($errors['categorie']) ? $errors['categorie'] : ''; ?>
                </div>
				<div class="form-group col-md-6">						
                    <label for="type">Type</label>
					<select id="type" name="type" class="form-control">
						<option value="<?= isset($post) ? ($post->get('type')): ''; ?>">Liste de choix</option>
						<option value="Bande dessinée">Bande dessinée</option>  
						<option value="Biographie">Biographie</option>  
						<option value="Documentaire">Documentaire</option>
                       <option value="Essai">Essai</option>
					    <option value="Mémoire">Mémoire</option>
                       <option value="Récit">Récit</option>
                       <option value="Roman">Roman</option>	
          		       <option value="Autres">Autres</option>				   
					</select>
					 <br />
                     <?= isset($errors['type']) ? $errors['type'] : ''; ?>
                </div>
				<div class="form-group col-md-6">
                    <label for="sujet">Sujet</label>
                    <input type="text" id="sujet" name="sujet" class="form-control"  value="<?= isset($post) ? ($post->get('sujet')): ''; ?>">
					<br />
                    <?= isset($errors['sujet']) ? $errors['sujet'] : ''; ?>
                </div>
				<div class="form-group col-md-6">
                    <label for="resume">Résumé</label>
                    <textarea id="resume" name="resume" class="form-control"  rows="7"><?= isset($post) ? ($post->get('resume')): ''; ?></textarea>
					<br />
                    <?= isset($errors['resume']) ? $errors['resume'] : ''; ?>						
                </div>
		        <div class="form-group col-md-6">					
                    <input type="submit" value="Envoyer" id="submit" name="submit" class="btn btn-success">
			    </div>
            </form>	
	    </section>
    </div>
</div>