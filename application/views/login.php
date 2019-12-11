<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">

    <title>TEchB | Login</title>
  </head>
  <body>
     <?php include('header.php') ?>

     <div class="container mb-4" style="margin-top: 15vh;">
       <div class="row">
         <div class="offset-md-3 col-md-6 offset-md-3 col-12" id="register_form">
           <div class="card">
            <div class="card-body">
              <h4 class="card-title text-center">Login</h4>
                <div class="row">
                  <div class="col-12">
                    <form>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address or mobile number</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter here">
                        <small id="emailHelp" class="form-text text-muted"></small>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        <a href="<?=base_url()?>forgot_password" class="float-right" style="text-decoration: none; color: #266ec0;">Forgot Password?</a>
                      </div>
                      <button type="submit" class="btn" style="width: 100%; background-color: #266ec0; color: white;">Login</button>
                    </form>
                  </div>
                </div>
            </div>
          </div>
          <p class=" mt-3 text-center">New Customer?</p>
          <hr>
          <button type="button" class="btn mb-3" id="register" style="width: 100%; background-color: #8b929acf; color: white;">Register</button>
         </div>
       </div>
     </div>

     <?php include('footer.php') ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?=base_url()?>assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?=base_url()?>assets/js/popper.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script src="<?=base_url()?>assets/js/script.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        $("#register").click(function(){
          location.href = "<?=base_url()?>register";
        });
      });
    </script>
  </body>
</html>