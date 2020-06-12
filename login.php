<?php
require('createPanier.php');
if ($_SESSION['auth']){
  header('location:index.php');
}
$title = "Login Page";
$loginActive = "active";
$loginActiveSpan = '<span class="sr-only">(current)</span>';

$req = "select * from usertab";
$reponse = $bdd->query($req);


?>

<!DOCTYPE html>
<html lang="fr">

<?php require_once('includes/header.php') ?>

<body>

  <?php require_once('includes/navbar.php') ?>

  <!-- Full Page Intro -->
  <div>

    <!--Grid row-->
    <div class="view full-page-intro row wow fadeIn d-flex justify-content-center" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/78.jpg'); background-repeat: no-repeat; background-size: cover;">

      <!--Grid column-->
      <div class="col-lg-4 col-11 col-md-6 mt-5 mb-5">

        <!--Card-->
        <div class="card mt-4">

          <!--Card content-->
          <div class="card-body">

            <!-- Form -->
            <form action="loginProc.php" method="POST">
              <!-- Heading -->
              <h3 class="dark-grey-text text-center">
                <strong>𝓣𝓾𝓹𝓹𝓮𝓻𝓦𝓪𝓻𝓮 𝓑𝓪𝓻𝓭𝓸</strong>
              </h3>
              <hr>
              <div class="md-form">
                <i class="fas fa-user prefix grey-text"></i>
                <input type="text" id="form1" class="form-control" name="username">
                <label for="form1">Nom d'utilisateur</label>
              </div>
              <div class="md-form">
                <i class="fas fa-key prefix grey-text"></i>
                <input type="password" id="form3" class="form-control" name="password">
                <label for="form3">Mot de passe</label>
              </div>

              <div class="text-center">
                <button class="btn btn-indigo" type="submit">Connexion</button>
                <hr>
                <div class="d-flex flex-row  d-flex justify-content-center">
                  <p class="p-2">Vous n'avez pas de compte ?</p>
                  <a href="signup.php" class="p-2">Inscrivez-vous</a>
                </div>
              </div>

            </form>
            <!-- Form -->

          </div>

        </div>
        <!--/.Card-->

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->

  </div>
  <!-- Full Page Intro -->

  <?php require_once('includes/footer.php') ?>


</body>

</html>