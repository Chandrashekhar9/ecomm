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

    <title>TEchB | Register</title>
  </head>
  <body>
     <?php include('header.php') ?>

     <div class="container mb-4" style="margin-top: 15vh;">
       <div class="row">
         <div class="offset-md-3 col-md-6 offset-md-3 col-12" id="register_form">
           <div class="card">
            <div class="card-body">
              <h4 class="card-title text-center">Register</h4>
                <div class="row">
                  <div class="col-12">
                    <form>
                      <div class="form-group">
                        <label for="formGroupExampleInput2">Name</label>
                        <input type="text" class="form-control" id="fullname" placeholder="Enter name">
                      </div>
                      <div class="form-group">
                        <label for="formGroupExampleInput2">Mobile</label>
                        <input type="text" class="form-control" id="mobile" placeholder="Enter mobile">
                         <small id="mobile_result" class="form-text text-danger"></small>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email (Optional)">
                        <small id="email_result" class="form-text text-danger"></small>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="At least 6 character">
                      </div>
                      <button type="button" class="btn" id="register" style="background-color: #266ec0; color: white; width: 48%;" disabled>Register</button>
                      <button type="reset" class="btn float-right" id="reset" style="background-color: #266ec0; color: white; width:48%;">Reset</button>
                    </form>
                  </div>
                </div>
            </div>
          </div>
          <hr>
            <h6 class="mt-3 mb-3 text-center">Already have an account? <a href="<?=base_url()?>login" style="text-decoration: none;">Login</a></h6>
         </div>
          <div class="offset-md-3 col-md-6 offset-md-3 col-12 mb-5 justify-content-center animated bounceInDown" id="otp_form" style="display: none;">
              <div class="form-group">
                <h4 class="text-center mb-2">Enter OTP</h4>
                <input type="text" class="form-control" id="otp" placeholder="Enter OTP here">
                <input type="hidden" class="form-control" name="hid_id" id="hid_id">
              </div>
               <button type="button" class="btn" id="otpbtn" style="width: 100%; background-color: #266ec0; color: white;">Submit</button>
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
    <!-- Custom JS -->
    <script src="<?=base_url()?>assets/js/script.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){

        $('#email').change(function(){  
           var email = $('#email').val(); 
           if(email != '')  
           {  
                $.ajax({  
                     url: "<?=base_url('Main/check_email_avalibility')?>", 
                     method: "POST",  
                     data: {email:email},  
                     success:function(data)
                     {  
                      var n = data.includes("true");
                      if (n) {
                        $('#email_result').show();
                        $('#email_result').html('<b>**Email Already register</b>');
                        $('#email').focus();
                      }
                      else{
                        $('#email_result').hide();
                        return true;
                      }
                     }  
                });  
           }  
      });
      $('#mobile').change(function(){  
           var mobile = $('#mobile').val(); 
           if(mobile != '')
           {  
                $.ajax({  
                     url: "<?=base_url('Main/check_phone_avalibility')?>", 
                     method: "POST",  
                     data: {mobile:mobile}, 
                     success:function(data)
                     {  
                      var n = data.includes("true");
                      if (n) {
                        $('#mobile_result').show();
                        $('#mobile_result').html('<b>**Mobile number is already register</b>');
                        $('#mobile').focus();
                        return false;
                      }
                      else{
                        $('#mobile_result').hide();
                        return true;
                      }
                     }  
                });  
           }  
      });

       $('#password').change(function(){  
           var pass = $('#password').val(); 
           if(pass != '')
           {  
              $('#register').removeAttr('disabled');
           }
           else {
               $('#register').attr('disabled','disabled');
             }  
      });

        $("#register").click(function()
        {
          var Uname = $('#fullname').val();
          // var Ugender = $("input[name='gender']:checked").val();
          var Uemail = $('#email').val(); 
          var Umobile = $('#mobile').val(); 
          var Upass = $('#password').val();
          if (Uname == "")                                 
              { 
                  alert("Please enter your name."); 
                  $('#fullname').focus(); 
                  return false;
              } 
              if ((Uemail == "") && (Umobile == ""))                               
              { 
                  alert("Please enter mobile number."); 
                  $('#mobile').focus(); 
                  return false; 
              }
              if (Upass == "")                           
              { 
                  alert("Please create password."); 
                  $('#password').focus();
                  return false;
              }
               $.ajax({
                        type:"post",
                        url:"<?php echo base_url(); ?>Main/register_user",
                        data:{Uname:Uname,
                          // Ugender:Ugender,
                          Uemail:Uemail,
                          Umobile:Umobile,
                          Upass:Upass},
                          dataType: "json",
                        success: function(result)
                        { 
                          $("#reset").trigger('click');
                          $('#hid_id').val(result);
                          $('#register_form').hide();
                          $('#otp_form').show();
                        }
                    });
          });

          $("#otpbtn").click(function()
          { 
            var id = $('#hid_id').val();
            var otp = $('#otp').val();
            if (otp.value == "")                           
                { 
                    alert("Please enter your otp."); 
                    reg_otp.focus(); 
                    return false;
                }
                 $.ajax({
                        type:"post",
                        url:"<?php echo base_url() ?>Main/cnfrm_reg_otp",
                        data:{id:id, otp:otp},
                            success: function(result){
                                var n = result.includes("true");
                                if(n){
                                  setTimeout(function(){  
                                    location.href = "<?=base_url()?>login"; }, 2500);
                                  Swal.fire({
                                      position: 'center',
                                      type: 'success',
                                      title: 'Successfully Registered!',
                                      showConfirmButton: false,
                                      timer: 2500
                                    })
                                 }
                                 else{
                                     alert("OTP does not match!! Please re-enter correct OTP.");
                                     $('#reg_otp').focus(); 
                                 }
                        }
                    }); 
          });
    });
    </script>
  </body>
</html>