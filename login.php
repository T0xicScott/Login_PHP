<?php

$login = $_POST['login'];
$password = $_POST['password'];

if (($login == 'Exelib' && $password == 'exe123') || ($login == 'Admin' && $password == 'Admin123')) {
	header('Location: page_accueil.php');
	exit();
} else {
	echo 'Identifiants incorrects.';
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page de connexion</title>
</head>
<body>
	<h1>Connexion</h1>
	<form method="POST" action="traitement_login.php">
		<label for="login">Login:</label>
		<input type="text" name="login" required><br><br>
		<label for="password">Mot de passe:</label>
		<input type="password" name="password" required><br><br>
		<input type="submit" value="Se connecter">
	</form>
</body>
</html>
