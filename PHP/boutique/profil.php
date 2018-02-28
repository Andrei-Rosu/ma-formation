<?php
require_once("inc/init.inc.php");
//debug($_SESSION);

if(!internauteEstConnecte())	//si l'internaute n'est pas connecté, il n'a rien à faire sur la page profil, on le re-dirige vers sa page connexion.
{
	header("location:connexion.php");	//pas besoin de mettre nu chemin absolu ici [   header("location:" . URL . "connexion.php")  ] car les pages connexion et profil sont sur le meme dossier
}



require_once("inc/header.inc.php");
?>



<div class="col-md-8 col-md-offset-2 panel-default border">
	<div class="panel-heading text-center"><h1>PROFIL</h1></div>
	<div class="col-md-12 text-center">
		<ul class="list-unstyled">
			<!-- Tenter d'afficher le pseudo de l'internaute pour lui dire bonjour -->
			<h2>Bonjour <span class="text-danger"><?= $_SESSION['membre']['pseudo']; ?></span></h2>			<?php //     '<?='        c'est l'equvalent de       '<? echo'          ?>
			<li><h3>Voici les informations de votre profil</h3></li>
			<li>Nom : <?= $_SESSION['membre']['nom'];?></li>
			<li>Prénom : <?= $_SESSION['membre']['prenom'];?></li>
			<li>Email : <?= $_SESSION['membre']['email'];?></li>
			<li>Code Postal : <?= $_SESSION['membre']['code_postal'];?></li>
			<li>Adresse : <?= $_SESSION['membre']['adresse'];?></li>
			<li>Ville : <?= $_SESSION['membre']['ville'];?></li>
			<!-- on se sert du fichier session pour afficher les données de l'internaute qui a une session en cours -->
				
		</ul>
	</div>
</div>






<?php
require_once("inc/footer.inc.php");
?>