<?php
require('createPanier.php');
$req = "select * from usertab";
$reponse = $bdd->query($req);
$users = $reponse->fetchAll(PDO::FETCH_OBJ);
$a = false;
$admin = false;
foreach ($users as $user){
    if ($_POST['username']==$user->login && $_POST['password']==$user->password){
        $a = true;
        if ($user->role == 'admin'){
            $admin = true;
        }
    }
}
if ($a){
    if ($admin){
        $_SESSION['role'] = "admin";
    }
    else{
        $_SESSION['role'] = "user";
    }
    $_SESSION['user'] = $_POST['username'];
    $_SESSION['auth'] = true;
    header('location:index.php');
}
else{
    $_SESSION['user'] = 'Anonyme';
    $_SESSION['auth'] = false;
    header('location:login.php');
}



?>