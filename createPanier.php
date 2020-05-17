<?php

require('dbcon.php');

require('classes.php');

if(!isset($_SESSION)){
    session_start();
}

if (!isset($_SESSION['auth'])){
    $_SESSION['auth']=false;
  }
  
if (!isset($_SESSION['user'])){
    $_SESSION['user']='Anonyme';
  }

if(!isset($_SESSION['panier'])){
    $_SESSION['panier'] = new Panier();
    $_SESSION['panier->panierAmount'] = 0;
}

$req = "select * from product";
$reponse = $bdd->query($req);
$product = $reponse->fetchAll(PDO::FETCH_OBJ);







?>