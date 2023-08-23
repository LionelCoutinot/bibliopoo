<?php $this->title = 'Profil-Biblio'; ?>

<h1 class="text-center my-5">Profil</h1>
<?= $this->session->show('update_password'); ?>
<?= $this->session->show('checkAdmin'); ?>

<div class="ps-5">
    <h2>Pseudo : <i><?= $this->session->get('pseudo'); ?></i> =>  <?php if  ($this->session->get('role')  == "user"){echo"Utilisateur";} elseif (($this->session->get('role')  == "admin")) {echo"Administrateur";}?></h2>    
    <a href="../public/index.php?route=updatePassword">Modifier mon mot de passe</a>&nbsp;
	<a href="../public/index.php?route=deleteAccount" onclick="return confirm('Voulez-vous vraiment supprimer votre compte ?')">Supprimer mon compte</a>
</div>

