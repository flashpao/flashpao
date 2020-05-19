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
		<main class="site-content">
		<div id="main">
			<h2> Inscrit toi </h2>
				<form name="inscription" method="post" action="cible.php">
					<label for="nom2">Entrez votre nom : </label>
						<input type="text" name="nom2" id="nom2" autofocus required /><br /><br />
					<label for="prenom2">Entrez votre prénom :</label>
						<input type="text" name="prenom2" id="prenom2"required/><br /><br />
					<label for="datenaissance">Entrez votre date de naissance:</label>
						<input type="date" name="datenaissance" id="datenaissance"required/><br /><br />
					<label for="adresse">Entrez votre adresse :</label>
						<input type="text" name="adresse" id="adresse"required/><br /><br /><br />
					<label for="ville">Entrez votre ville :</label>
						<input type="text" name="ville" id="ville" required><br /> <br />
					<label for="postale">Entrez votre code postale :</label>
						<input type="text" name="postale" id="postale"required/input><br /><br />
					<label for="email"> Entrez votre adresse mail :</label>
						<input type="email" name="email" id="email"required/><br /><br />
					<label for="pass"> Entrez un mot de passe :</label>
						<input type="password" name="pass" id="pass"/><br /><br />
					<label for="tel2"> Entrez votre numéro de téléphone:</label>
						<input type="tel" name="tel2" id="tel2"/><br /><br />
						<input type="checkbox" name="ok" id="ok"/>
						<label for="ok">J'accepte de recevoir des informations par e-mail</label><br /><br />
						<input type="submit" value="S'inscrire"/>
				</form>
		</div>
		</main>
	</div>
	</body>
	<?php include("footer.php"); ?>
</html>
