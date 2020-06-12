<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
  <div class="modal fade" id="membershipForm" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

      <div class="modal-content">
        <div class="modal-header">

          <h2 class="modal-title" id="membershipFormLabel">Login</h2>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="col-lg-8 col-md-10 mx-auto col-12">
    <div class="hero-text mt-5 text-center" data-aos="fade-up" data-aos-delay="700">

     <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">The finest cakes you'll ever taste</h1>

        <div class="container">
          <p>Already have an account? Then please <a href="login_url">sign in</a></p>        
        <div class="modal-body">
          <form class="membership-form webform" role="form" action="index1.php" method="POST">
              <div id="test">
                <input type="email" class="form-control" name="Email" placeholder="Email">

                <input type="password" class="form-control" name="password"  placeholder="password">
  
                <button type="submit" class="form-control" id="submit-button" name="submit">Login</button>
              </div>

              <div id="s_b">
                <p>don't have account ?<a href="#" onclick="f()"> sign up here<a href="#home" onclick="f()"></a></p>
              </div>


              <div id="signup" style="display: none;">
                <a href="#" onclick="f2()"> login here</a></p>
                <input type="text" class="form-control" name="name" placeholder="FULL NAME" required>
                <input type="email" class="form-control" name="Email" placeholder="Email" required>
                <input type="password" class="form-control" name="password"  placeholder="password" required>
                <input type="password" class="form-control" name="password"  placeholder="password again" required>
                <button type="submit" class="form-control" id="submit-button" name="submit">sign up<a href="#home" onclick="f()"></a></button>

                
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="signup-agree">
                    <label class="custom-control-label text-small text-muted" for="signup-agree">I agree to the <a href="#">Terms &amp;Conditions</a>
                </label>
             </div>
             
          </form>
        </div>
        


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>