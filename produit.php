<?php

$title = "Product Page";
$produitActive = "active";
$produitActiveSpan = '<span class="sr-only">(current)</span>';

require('createPanier.php');

if ($_SESSION['role'] != 'admin') {
  header('location:index.php');
}



?>

<!DOCTYPE html>
<html lang="fr">

<?php require_once('includes/header.php') ?>

<body>

  <?php require_once('includes/navbar.php') ?>

  <!--Main layout-->
  <main class="mt-5 pt-5">
    <div class="container">

      <!--Section: Cards-->
      <section class="text-center">

      

        <table class="table table-bordered" id="dataTable">
          <thead class="alert alert-primary">
            <th>ID</th>
            <th>Image</th>
            <th>Informations</th>
            <th>Modifier/Supprimer</th>
          </thead>

          <tbody>
            <?php foreach ($product as $prod) { ?>
              <form class="form-group" action="modprod.php" method="POST" enctype="multipart/form-data">
                <tr>
                  <td style="width: 5%;"><?= $prod->id ?></td>
                  <td style="width: 50%;">


                    <div class="picture-container">
                      <div class="picture">
                        <img style="width: 100%;" src="<?= $prod->imagePath ?>" class="picture-src" id="old" title="" />
                        <input type="file" id="new" name="imageProd">
                      </div>

                    </div>



                  </td>
                  <td style="width: 40%;" class="">
                    <div class="text-left ">
                      <label for="name">Nom:</label>
                      <input class="form-control form-control-sm" type="text" name="name" value="<?= $prod->name ?>">
                      <label for="price">Prix:</label>
                      <input class="form-control form-control-sm" type="text" name="price" value="<?= $prod->price ?>">
                      <label for="quan">Quantité:</label>
                      <input class="form-control form-control-sm" type="text" name="quan" value="<?= $prod->quantiry ?>">

                    </div>

                  </td>
                  <td style="width: 5%;">
                    <input type="hidden" name="idprod" value="<?= $prod->id ?>" />
                    <input type="hidden" name="image" value="<?= $prod->id ?>" />

                    <button class="form-control form-control-sm" type="submit" name="update"><i class="fas fa-check"></i></button>
                    <button class="form-control form-control-sm" type="submit" name="delete"><i class="fas fa-times"></i></button>

                  </td>
                </tr>
              </form>
            <?php } ?>
          </tbody>
        </table>

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

    function readURL2(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('#old').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]); // convert to base64 string
      }
    }

    $("#new").change(function() {
      readURL2(this);
    });
  </script>
  <script>
    $(document).ready(function() {
      $('#dataTable').DataTable();
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.js">
  </script>


  <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
</body>

</html>