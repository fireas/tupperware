<?php
require('createPanier.php');
$title = "Panier || TupperWare Bardo";
$tpActive = "active";
$tpActiveSpan = '<span class="sr-only">(current)</span>';

?>

<!DOCTYPE html>
<html lang="fr">

<?php require_once('includes/header.php') ?>

<body>

  <?php require_once('includes/navbar.php') ?>

  <!-- Full Page Intro -->
  <div>

    <!--Grid row-->
    <div class="row view full-page-intro wow fadeIn d-flex justify-content-center" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/78.jpg'); background-repeat: no-repeat; background-size: cover;">

      <!--Grid column-->
      <div class="col-lg-8 col-11 col-md-6 mt-5 mb-5">

        <!--Card-->
        <div class="card mt-4">

          <!--Card content-->
          <div class="card-body">

            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Produit</th>
                  <th scope="col">Quantité</th>
                  <th scope="col">Prix unitaire</th>
                  <th scope="col">Prix total</th>
                </tr>
              </thead>
              <tbody>

                <?php foreach ($_SESSION['panier']->products as $p) { ?>

                  <tr>
                    <th scope="row">1</th>
                    <td><?= $p->name ?></td>
                    <td><?= $p->quantity ?></td>
                    <td><?= $p->price ?> DT</td>
                    <td><?= $p->price * $p->quantity ?> DT</td>
                  </tr>

                <?php } ?>

                <tr>
                  <th scope="row" colspan="4">Total</th>
                  <td><?= $_SESSION['panier']->devis() ?> DT</td>
                </tr>
              </tbody>
            </table>

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