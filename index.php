<?php

$title = "Home Page";
$homeActive = "active";
$homeActiveSpan = '<span class="sr-only">(current)</span>';

require('createPanier.php');

// $_SESSION['panier'] = new Panier();

if (isset($_GET['action'])) {
  if ($_GET['action'] == 'add') {
    $pid = $_POST['id'];


    foreach ($product as $pro) {
      if ($pro->id == $pid) {
        $prod = new Produit($pid, $pro->name, $_POST['quantity'], $pro->price);
        break;
      }
    }

    $_SESSION['panier']->addProduct($prod);
  }
  else if($_GET['action'] == 'del'){
    $_SESSION['panier']=new Panier();
  }
}


// if ($_SESSION['auth']){
//   echo 'aaaaaaa';
// }
// else{
//   echo 'bbbbbbb';
// }


?>

<!DOCTYPE html>
<html lang="fr">

<?php require_once('includes/header.php') ?>

<body>

  <?php require_once('includes/navbar.php') ?>

  <!--Main layout-->
  <main class="mt-5 pt-5">
    <div class="container">

      <!--Section: Jumbotron-->
      <section class="card wow fadeIn bg">

        <!-- Content -->
        <div class="card-body text-black text-center py-5 px-5 my-5">



        </div>
        <!-- Content -->
      </section>
      <!--Section: Jumbotron-->

      <hr class="my-5">


      <!--Section: Cards-->
      <section class="text-center">

        <!--Grid row-->
        <div class="row mb-4 wow fadeIn">

          <?php foreach ($product as $prod) { ?>

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch">

              <!--Card-->
              <div class="card alert alert-primary">

                <!--Card image-->
                <div class="view overlay">
                  <img src="<?= $prod->imagePath ?>" class="card-img-top" alt="">
                  <a href="https://mdbootstrap.com/education/tech-marketing/automated-app-introduction/" target="_blank">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>

                <!--Card content-->
                <div class="card-body">
                  <h4 class="card-title"><?= $prod->name ?></h4>
                  <h5 class="card-title"><?= $prod->price ?> DT</h5>

                  <p class="card-text">🚚 Livraison Gratuite à grande Tunis</p>

                  <form action="?action=add" method="POST">
                    <div class="form-group row d-flex justify-content-center">
                      <div class="col-sm-10 mb-3">
                        <input type="number" min="0" name="quantity" value="1" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Quantité">
                      </div>
                      <div class="col-sm-10">
                        <input type="hidden" name="id" value="<?= $prod->id ?>" />
                        <button class="btn btn-primary btn-sm" type="submit">Ajouter au panier</button>
                      </div>
                    </div>

                  </form>
                </div>

              </div>
              <!--/.Card-->

            </div>
            <!--Grid column-->

          <?php } ?>

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Cards-->

    </div>
  </main>
  <!--Main layout-->

  <?php require_once('includes/footer.php') ?>
  <script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
  <script>
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('#image').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]); // convert to base64 string
      }
    }

    $("#imageProd").change(function() {
      readURL(this);
    });
  </script>

</body>

</html>