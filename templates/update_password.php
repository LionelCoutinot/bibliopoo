<?php $this->title = 'Update-Password-Biblio'; ?>
<br />
<h1 class="text-center my-5">Modification du mot de passe</h1>
    <div class="container"> 
        <div class="row">
            <section class="col-12">
                <p class="mb-5">Si <b><i><?= $this->session->get('pseudo'); ?></i></b> veut modifier son mot de passe...</p>
                <form method="post" action="../public/index.php?route=updatePassword">
	                <div class="form-group col-md-6">
                        <label for="password">
                            <input type="password" id="password" name="password" placeholder="Mot de passe" required />
                        </label>
		            </div>
		             <div class="form-group col-md-6 mt-5">
                        <input type="submit" value="Mettre à jour" id="submit" name="submit" class="btn btn-success">
		            </div>
                </form>
            </section>
        </div>
    </div>
