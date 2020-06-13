<?php
require('createPanier.php');



$image = $_FILES['imageProd'];
$pathimage = md5(uniqid()) . $image['name'];
$pathimage = "assets/img/${pathimage}";
move_uploaded_file($image['tmp_name'], $pathimage);

if (isset($_POST['delete'])) {
    $req = $bdd->prepare('delete from product where id = :idprod');
    $req->execute(array(
        'idprod' => $_POST['idprod']
    ));
    header('location:produit.php');
}

if (isset($_POST['update'])) {
    $req = $bdd->prepare('update product set name=:nameprod ,price=:priceprod, quantiry=:quantityprod where id = :idprod');
    $req->execute(array(
        'idprod' => $_POST['idprod'],
        'nameprod' => $_POST['name'],
        'priceprod' => $_POST['price'],
        'quantityprod' => $_POST['quan'],

    ));
    if ($image['tmp_name'] != '') {
        $req = $bdd->prepare('update product set imagePath=:pathimage where id = :idprod');
        $req->execute(array(
            'idprod' => $_POST['idprod'],
            'pathimage' => $pathimage
        ));
    }
    // var_dump($_FILES['imageProd']) ;
    header('location:produit.php');
}
