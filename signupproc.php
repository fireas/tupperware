<?php

require('createPanier.php');
$req = "select * from usertab";
$reponse = $bdd->query($req);
$users = $reponse->fetchAll(PDO::FETCH_OBJ);
$a = false;
foreach ($users as $user){
    if ($_POST['username']==$user->login || $_POST['email']==$user->email){
        $a = true;
    }
}
if ($a){
    header('location:signup.php');
}
else{

    $req = $bdd->prepare('INSERT INTO usertab(fullname, login, email, password, role)
                        VALUES(:fullname, :login, :email, :password, :role)');
    $req->execute(array(
	'fullname' => $_POST['fullname'],
	'login' => $_POST['username'],
	'email' => $_POST['email'],
    'password' => $_POST['password'],
    'role' => "user"
	));

    $_SESSION['user'] = $_POST['username'];
    $_SESSION['role'] = "user";
    $_SESSION['auth']=true;
    header('location:index.php');
}



?>