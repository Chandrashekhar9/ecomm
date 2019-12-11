<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
     <!-- Animate CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/animate.css">
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
         <div class="offset-md-3 col-md-6 offset-md-3 col-12" id="email_form">
           <div class="card">
            <div class="card-body">
              <h4 class="card-title text-center">Forgot Password</h4>
                <div class="row">
                  <div class="col-12">
                    <form>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Enter your registered email address or mobile number</label>
                        <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter here">
                        <small id="emailHelp" class="form-text text-muted"></small>
                      </div>
                      <button type="button" class="btn" id="open_otp" style="width: 100%; background-color: #266ec0; color: white;">Continue</button>
                    </form>
                  </div>
                </div>
            </div>
          </div>
          <hr>
          <p class="mt-3 text-muted" style="padding: 0px; margin: 1px;">If you can't access your email or mobile number please contact our customer care excutive.</p>
          <i class="fa fa-phone mr-2" aria-hidden="true" style="color:#266ec0;"></i><p style="color: #266ec0; padding: 0px; margin: 1px; display: inline;">+91 123456789</p>
          <br/>
          <i class="fa fa-phone mr-2" aria-hidden="true" style="color:#266ec0;"></i><p style="color: #266ec0; padding: 0px; margin: 1px; display: inline;">+91 123456789</p>
         </div>
           <div class="offset-md-3 col-md-6 offset-md-3 col-12 animated fadeInDown" id="otp_form" style="display: none;">
             <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">OTP Authentication</h4>
                    <div class="row">
                      <div class="col-12">
                        <p class="text-muted">We've sent an OTP to registered mobile or email, please enter it bellow and press continue.</p>
                        <form>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Enter OTP</label>
                            <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter here">
                            <small id="emailHelp" class="form-text text-muted"></small>
                          </div>
                          <button type="button" class="btn" style="width: 100%; background-color: #266ec0; color: white;" id="open_newpass">Continue</button>
                        </form>
                        <p class="text-center mt-3" style="color:#266ec0; text-decoration: none; margin-bottom:0px; cursor: pointer;">Resend OTP</p>
                      </div>
                    </div>
                </div>
              </div>
          </div>
          <div class="offset-md-3 col-md-6 offset-md-3 col-12 animated fadeInDown" id="new_pass_form" style="display: none;">
             <div class="card">
              <div class="card-body">
                <h4 class="card-title text-center">Create new password</h4>
                  <div class="row">
                    <div class="col-12">
                      <form>
                        <div class="form-group">
                          <label for="exampleInputEmail1">New password</label>
                          <input type="password" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter here">
                          <small id="emailHelp" class="form-text text-muted">Password must be 6 characters.</small>
                        </div>
                          <div class="form-group">
                          <label for="exampleInputEmail1">Password again</label>
                          <input type="password" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter here">
                          <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <button type="button" class="btn" id="save_pass" style="width: 100%; background-color: #266ec0; color: white;">Save Changes</button>
                      </form>
                    </div>
                  </div>
              </div>
            </div>
            </div>
       </div>
     </div>

     <?php include('footer.php') ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?=base_url()?>assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?=base_url()?>assets/js/popper.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
     <script src="<?=base_url()?>assets/js/sweetalert2.all.min.js"></script>
     <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script> -->
    <!-- Custom JS -->
    <script src="<?=base_url()?>assets/js/script.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        $("#open_otp").click(function(){
          // location.href = "<?=base_url()?>register";
          $("#email_form").hide(); 
          $("#otp_form").show();
        });
         $("#open_newpass").click(function(){
          // location.href = "<?=base_url()?>register";
          $("#email_form").hide();
          $("#otp_form").hide();
          $("#new_pass_form").show();
        });
        $("#save_pass").click(function(){
          setTimeout(function(){  location.href = "<?=base_url()?>login"; }, 2000);
          Swal.fire({
            position:'center',
            icon: 'success',
            title: 'Password successfully Changed',
            showConfirmButton: false,
            timer: 1500
          })
        });
      });
    </script>
  </body>
</html>