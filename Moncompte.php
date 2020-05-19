<!doctype html>
<s?php session_start(); ?>
<html lang="fr">
	<head>
		<title> Finart Culture </title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="PTS2.css"/>
	</head>
	<?php include("header.php"); ?>
	<body>
	<div class="page">
		<main class="site-content"><div id="main1">
		<h2> Connecte toi </h2>
			<form name="connection" method="post" action="cible.php">
				<label for="@mail"> Entrez votre adresse mail :</label>
					<input type="email" name="@mail" id="@mail" required autofocus/><br /><br />
				<label for="mdp"> Entrez votre mot de passe : </label>
					<input type="password" name="mdp" id="mdp" required/><br /><br />
					<input type="submit" value="Se connecter"/><br />
					<p> je n'ai pas de compte, <a href="inscription.php">s'inscrire</a>
			</form>

		</div>
		</main>
	</div>
	</body>
	<?php include("footer.php"); ?>
</html>
