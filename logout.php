<?php
require('createPanier.php');

$_SESSION['user'] = 'Anonyme';
$_SESSION['auth'] = false;
$_SESSION['role'] = '';


header('Location: ' . $_SERVER['HTTP_REFERER']);
?>

