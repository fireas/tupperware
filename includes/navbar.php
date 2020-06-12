  <!-- Central Modal Large Info-->
  <div class="modal fade" id="centralModalLGInfoDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-notify modal-info" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
          <p class="heading lead">Votre panier</p>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">&times;</span>
          </button>
        </div>

        <!--Body-->
        <div class="modal-body">
          <div class="text-center">
            <!-- <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i> -->

          </div>
          <table class="table table-bordered">
            <thead class="alert alert-primary">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Produit</th>
                <th scope="col" class="text-center">Quantité</th>
                <th scope="col" class="text-center">Prix unitaire</th>
                <th scope="col" class="text-center">Prix total</th>
              </tr>
            </thead>
            <tbody>

              <?php foreach ($_SESSION['panier']->products as $p) { ?>

                <tr>
                  <th scope="row">1</th>
                  <td><?= $p->name ?></td>
                  <td class="text-center"><?= $p->quantity ?></td>
                  <td class="text-center"><?= $p->price ?> DT</td>
                  <td class="text-center"><?= $p->price * $p->quantity ?> DT</td>
                </tr>

              <?php } ?>

              <tr>
                <th scope="row" colspan="4">Total</th>
                <td class="text-center"><?= $_SESSION['panier']->devis() ?> DT</td>
              </tr>
            </tbody>
          </table>

        </div>

        <!--Footer-->
        <div class="modal-footer">
          <form action="" method="GET">
            <input type="hidden" name="action" value="del" />
            <input type="submit" class="btn btn-outline-info waves-effect" value="Vider le panier">
            <a role="button" class="btn btn-info" href="">Confirmer la commande</a>
          </form>

        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>
  <!-- Central Modal Large Info-->

  <!-- Central Modal Large Info-->
  <div class="modal fade" id="popUpAddProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-notify modal-info" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
          <p class="heading lead">Ajouter un nouveau produit</p>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">&times;</span>
          </button>
        </div>
        <form action="addnewprod.php" method="POST" enctype="multipart/form-data">
          <!--Body-->
          <div class="modal-body">

            <div class="row d-flex justify-content-center">

              <div class="col-6 col-md-4">
                <div class="text-left ">
                  <label for="name">Name:</label>
                  <input required class="form-control form-control-sm" type="text" name="name" placeholder="Nom du produit">
                  <label for="price">Price:</label>
                  <input required class="form-control form-control-sm" type="text" name="price" placeholder="Prix du produit (en DT)">
                  <label for="quan">Quantity:</label>
                  <input required class="form-control form-control-sm" type="text" name="quan" placeholder="Quantitée">
                </div>
              </div>

              <div class="col-6 col-md-4">
                <div class="picture-container">
                  <div class="picture">
                    <img style="width: 100%;" src="assets/img/product.png" class="picture-src" id="image" title="" />
                    <input required type="file" id="imageProd" name="imageProd">
                  </div>
                </div>
              </div>

            </div>

          </div>
          <!--Footer-->
          <div class="modal-footer d-flex justify-content-center">

            <input type="submit" class="btn btn-outline-info waves-effect" value="Ajouter le produit">

          </div>
        </form>
      </div>
      <!--/.Content-->
    </div>
  </div>
  <!-- Central Modal Large Info-->

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="https://www.google.fr/search?q=gargouri" target="_blank">
        <strong class="blue-text">𝓣𝓦𝓑𝓪𝓻𝓭𝓸</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?php if (isset($homeActive)) {
                                echo $homeActive;
                              } ?>">
            <a class="nav-link" href="index.php">Home<?php if (isset($homeActiveSpan)) {
                                                        echo $homeActiveSpan;
                                                      } ?>
            </a>
          </li>

          <li class="nav-item <?php if (isset($tpActive)) {
                                echo $tpActive;
                              } ?> ">
            <a data-toggle="modal" data-target="#centralModalLGInfoDemo" class="nav-link" href="panier.php">Panier<?php if (isset($tpActiveSpan)) {
                                                                                                                    echo $tpActiveSpan;
                                                                                                                  } ?></a>
          </li>

          <li class="nav-item dropdown" <?php if($_SESSION['role']!='admin') echo 'hidden'; ?>>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Produits
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="produit.php">Liste des produits</a>
              <a data-toggle="modal" data-target="#popUpAddProduct" class="dropdown-item" href="addproduit.php">Ajouter un produit</a>
            </div>
          </li>

        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <?php if (!$_SESSION['auth']) { ?>

            <li class="nav-item <?php if (isset($loginActive)) {
                                  echo $loginActive;
                                } ?> ">
              <a class="nav-link" href="login.php">Connexion<?php if (isset($loginActiveSpan)) {
                                                              echo $loginActiveSpan;
                                                            } ?></a>
            </li>

            <li class="nav-item <?php if (isset($signupActive)) {
                                  echo $signupActive;
                                } ?> ">
              <a class="nav-link" href="signup.php">Inscription<?php if (isset($signupActiveSpan)) {
                                                                  echo $signupActiveSpan;
                                                                } ?></a>
            </li>
          <?php } else { ?>

            <li class="nav-item <?php if (isset($logoutActive)) {
                                  echo $logoutActive;
                                } ?> ">
              <a class="nav-link" href="logout.php">Déconnexion<?php if (isset($logoutActiveSpan)) {
                                                                  echo $logoutActiveSpan;
                                                                } ?></a>
            </li>
          <?php } ?>

        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->