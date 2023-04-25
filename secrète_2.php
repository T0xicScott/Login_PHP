<?php

session_start();

if (isset($_GET['page']) && $_GET['page'] == 'secrete_2.php') {
    header('Location: login.php');
    exit();
} elseif (isset($_GET['page']) && $_GET['page'] == 'login.php') {
    echo 'Bienvenue, ' . $_SESSION['user'] . '!<br><br>';
    echo '<a href="logout.php">Se déconnecter</a>';
} else {
    include 'login.php';
}