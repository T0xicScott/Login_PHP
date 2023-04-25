<?php
session_start();

$users = array(
	'Exelib' => 'exe123',
	'Admin' => 'Admin123'
);

if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    if (isset($users[$login]) && $users[$login] == $password) {
		$_SESSION['user'] = $login;
    } else {
		echo 'Identifiants incorrects.';
    }
}

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    if ($user == 'Admin') {
        include 'secrète_1.php';
        include 'secrète_2.php';
    } elseif ($user == 'Exelib') {
        include 'secrète_1.php';
    } else {
        echo 'Utilisateur inconnu.';
    }
} else {
    include 'login.php';
}