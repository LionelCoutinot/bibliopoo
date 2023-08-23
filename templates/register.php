<?php $this->title = 'Inscription-Biblio'; ?>

<h1 class="text-center my-5">Inscription</h1>
<div class="container">
    <div class="row">
	    <section class="col-12">
            <form method="post" id="question" name="question" action="../public/index.php?route=register">
                <div class="form-group col-md-6 mb-4">		
                    <label for="pseudo">Pseudo 
                        <input type="text" id="pseudo" name="pseudo" class="form-control styleInput" required />                        
                    </label> 
                    <div id="pbPseudo"></div>
                    <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>
			    </div>
			    <div class="form-group col-md-4">
                    <label for="password">Mot de passe
				        <input type="password" id="password" name="password"class="form-control styleInput" required />
				        <div class="password-icon">												
				            <i id="pass-status" class="fa fa-eye" aria-hidden="true" onClick="viewPassword()"></i>	
				        </div>  
                    </label>  
                    <div id="pbPassword"></div>   
                     <?= isset($errors['password']) ? $errors['password'] : ''; ?>
			    </div>
                <div class="form-group col-md-4 mt-4">                    
                    <label for="agree">
                        J'accepte que mes données soient enregistrées et conservées le temps nécessaire.
                    </label>
                    <div id="agreeDiv">
                    <input type="checkbox"  id="agree"  name="agree" required />
                    </div>
                    <div id="pbAgree"></div>
                    <?= isset($errors['pbagree']) ? $errors['pbagree'] : '';?> 
			    </div>
			    <div class="form-group col-md-4 mt-4">                    
                <input type="submit" value="Inscription" id="submit" name="submit" class="btn btn-success">
                </div>
		    </form>
	    </section>
    </div>
</div>

<script src="../public/js/password.js"></script>
<script src="../public/js/verifform.js"></script>


