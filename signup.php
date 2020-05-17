<?php
require('createPanier.php');
$title = "Home Page";
$signupActive = "active";
$signupActiveSpan = '<span class="sr-only">(current)</span>';

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
            <form name="">
              <!-- Heading -->
              <h3 class="dark-grey-text text-center">
                <strong>Write to us:</strong>
              </h3>
              <hr>
              <div class="md-form">
                <i class="fas fa-user prefix grey-text"></i>
                <input type="text" id="form0" class="form-control" name="fullname">
                <label for="form0">Nom complet</label>
              </div>
              <div class="md-form">
                <i class="fas fa-user prefix grey-text"></i>
                <input type="text" id="form1" class="form-control" name="username">
                <label for="form1">Nom d'utilisateur</label>
              </div>
              <div class="md-form">
                <i class="fas fa-envelope prefix grey-text"></i>
                <input type="email" id="form2" class="form-control" name="email">
                <label for="form2">E-mail</label>
              </div>

              <div class="md-form">
                <i class="fas fa-key prefix grey-text"></i>
                <input type="password" id="form3" class="form-control" name="password">
                <label for="form3">Mot de passe</label>
              </div>

              <div class="text-center">
                <button class="btn btn-indigo" type="submit">Inscription</button>
                <hr>
                <div class="d-flex flex-row  d-flex justify-content-center">
                  <p class="p-2">Vous avez déja un compte ?</p>
                  <a href="login.php" class="p-2">Connectez-vous</a>
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