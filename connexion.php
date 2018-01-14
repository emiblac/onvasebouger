<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php require_once("objetUtilisateur.php"); 

		if(isset($_POST['pseudo']) && isset($_POST['mdp']) && isset($_POST['mail'])){
			$pseudo = trim($_POST['pseudo']);
			$mdp = trim($_POST['mdp']);
			$mail = trim($_POST['mail']);

			$user = new Utilisateur('utilisateur');
			$enregistrer = $user->ajoutUtilisateur($pseudo, $mdp, $mail);
		}

	?>

	<form action="#" method="post" accept-charset="utf-8">
		<label for="pseudo">Pseudo</label><br>
		<input type="text" name="pseudo" placeholder="pseudo"><br>

		<label for="mdp">Mot de passe</label><br>
		<input type="password" name="mdp" placeholder="mot de passe"><br>

		<label for="mail">Pseudo</label><br>
		<input type="text" name="mail" placeholder="adresse mail"><br>

		<input type="submit" name="inscription" value="inscription">
	</form>
</body>
</html>