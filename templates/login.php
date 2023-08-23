<?php $this->title = 'Connection-Biblio'; ?>

<h1 class="text-center my-5">Connection</h1>
<div class="container"> 
    <p style="color:red"><?= $this->session->show('error_login'); ?></p>
    <p style="color:red"><?= $this->session->show('checkLoggedIn'); ?></p>
    <div class="row">
        <section class="col">
            <form method="post" action="../public/index.php?route=login">
	            <div class="form-group col-md-4">
                    <label for="pseudo">Pseudo</label><br>
                    <input type="text" id="pseudo" name="pseudo" class="form-control styleInput" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>"><br>
                    <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>
                </div>
                <div class="form-group col-md-4">
                    <label for="password">Mot de passe
				        <input type="password" id="password" name="password"class="form-control styleInput" >
				        <div class="password-icon">												
				            <i id="pass-status" class="fa fa-eye" aria-hidden="true" onClick="viewPassword()"></i>	
				        </div>
                        <?= isset($errors['password']) ? $errors['password'] : ''; ?>
                    </label>   
			    </div>
		        <div class="form-group col-md-4 mt-5">
                    <input type="submit" value="Connexion" id="submit" name="submit" class="btn btn-success">
	            </div>
		    </form>
	    </section>
    </div>
</div>
<script src="../public/js/password.js"></script>
