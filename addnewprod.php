<?php
    require('createPanier.php');

    $image = $_FILES['imageProd'];
    $pathimage = md5(uniqid()).$image['name'];
    $pathimage = "assets/img/${pathimage}";
    move_uploaded_file($image['tmp_name'], $pathimage);

    $req = $bdd->prepare('insert into product (name,price,quantiry,imagePath) values (:name, :price, :quan, :image)');
    $req->execute(array(
    'name' => $_POST['name'],
    'price' => $_POST['price'],
    'quan' => $_POST['quan'],
    'image' => $pathimage
    ));
    
    header('location:produit.php');
    
?>