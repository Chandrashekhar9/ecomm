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

    <title>TEchB | Wishlist</title>
     <style type="text/css">
      body{
        background-color: #f2f2f21a;
      }
      #order_table td{
        padding: .65rem;
        vertical-align: 0;
      }
      #clicktoopen:hover{
        color: #266ec0 !important;
      }
      #place_order:hover{
        background-color: #266ec0 !important;
        border-color: #266ec0 !important;
      }
      label{
        margin-bottom: .2rem;
      }
      .form-group{
        margin-bottom: .5rem;
      }
      .form-control{
        height: calc(1.2em + .75rem + 2px);
        padding: .250rem .35rem;
      }
    </style>
  </head>
  <body>
    <?php include('header.php') ?>

    <div class="container-fluid" style="margin-top: 10vh; margin-bottom: 10vh; width: 95%">
      <!-- <h4 >CHECKOUT</h4> -->
        <div class="row">
            <!-- <div class="col-12">
              <div class="card" style="background-color:  #ffffff00;">
                <div class="card-body" style="padding: 0.8rem;"> 
                  <p class="text-warning" style="margin-bottom: 0px;">Have Coupon?<span id="clicktoopen" style="color: #8e959b; cursor: pointer;"> Click here to enter your code</span></p>
                </div>
              </div>
            </div> -->
            <!-- coupon code div -->
            <!-- <div class="col-12 mt-3" id="coupon_area" style="display: none;">
              <div class="card" style="background-color:  #ffffff00;">
                <div class="card-body" style="padding: 0.8rem;"> 
                  <p class="text-secondary">If you have a coupon code, please apply it below.</p>
                    <form class="form-inline">
                      <div class="form-group">
                        <input type="text" class="form-control" id="coupon">
                      </div>
                      <button type="submit" class="btn ml-3" style="background-color: #266ec0; color: white;">Apply Coupon</button>
                    </form>
                </div>
              </div>
            </div> -->
            <div class="col-md-8 col-12 mt-3" id="register_form">
              <h4 class="">Billing Details</h4>
                <div class="row">
                  <div class="col-md-6 col-12">
                    <form>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-6 col-12">
                            <label for="formGroupExampleInput2">First Name<span style="color: red;">*</span></label>
                              <input type="text" class="form-control" id="name">
                          </div>
                          <div class="col-md-6 col-12">
                            <label for="formGroupExampleInput2">Last Name<span style="color: red;">*</span></label>
                              <input type="text" class="form-control" id="name">
                          </div>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="formGroupExampleInput2">Company name (optional)</label>
                        <input type="text" class="form-control" id="mobile">
                      </div>
                       <div class="form-group">
                        <label for="formGroupExampleInput2">Country<span style="color: red;">*</span></label>
                          <select class="form-control">
                            <option>India</option>
                            <option>India</option>
                          </select>
                      </div>
                      <div class="form-group">
                        <label for="formGroupExampleInput2">Street address<span style="color: red;">*</span></label>
                        <input type="text" class="form-control" id="mobile">
                      </div>
                    </div>
                      <div class="col-md-6 col-12">
                      <div class="form-group">
                        <label for="formGroupExampleInput2">Town/City<span style="color: red;">*</span></label>
                        <input type="text" class="form-control" id="mobile">
                      </div>
                      <div class="form-group">
                        <label for="formGroupExampleInput2">State<span style="color: red;">*</span></label>
                          <select class="form-control">
                            <option>Chhattisgarh</option>
                            <option>Telangana</option>
                            <option>Karnataka</option>
                          </select>
                      </div>
                      <div class="form-group">
                        <label for="formGroupExampleInput2">Mobile<span style="color: red;">*</span></label>
                        <input type="text" class="form-control" id="mobile" placeholder="Mobile number">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address (Optional)</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address">
                      </div>
                    </form>
                  </div>
                </div>
          </div>
         <div class="col-md-4 col-12 mt-5">
          <h4 class="">Additional Information</h4>
           <form>
            <div class="form-group">
              <label for="formGroupExampleInput2">Order notes (optional)</label>
              <textarea class="form-control" placeholder="Notes about your order, e.g. special notes for delivery." id="" style="margin-top: 0px; margin-bottom: 0px;height: 30vh;"></textarea>
            </div>
         </div>
         <div class="col-lg-12 mt-3">
           <h4>Your Order</h4>
            <div class="card">
                <div class="card-body" style="padding: 0rem 0rem 0rem 0rem;">
                  <table class="table table-hover" id="order_table">
                  <thead>
                    <tr>
                      <th scope="col">Products</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>OnePlus 7T (Glacier Blue, 8GB RAM)</td>
                      <td>x 1</td>
                      <td>&#8377; 37,999.00</td>
                    </tr>
                    <tr>
                      <td>Samsung M30s (Sapphire Blue, 4GB RAM)</td>
                      <td>x 1</td>
                      <td>&#8377; 13,999.00</td>
                    </tr>
                    <tr>
                      <td>OnePlus 7T Pro McLaren Limited Edition</td>
                      <td>x 1</td>
                      <td>&#8377; 58,999.00</td>
                    </tr>
                  </tbody>
                  <tfoot style="font-weight: bold;">
                    <tr>
                      <td>Subtotal</td>
                      <td>-</td>
                      <td>&#8377; 1,20000</td>
                    </tr>
                    <tr>
                      <td>Discount</td>
                      <td>-</td>
                      <td>&#8377; 2000</td>
                    </tr>
                    <tr>
                      <td>Total</td>
                      <td>x 3</td>
                      <td>&#8377; 1,89999</td>
                    </tr>
                  </tfoot>
                </table>
                </div>
              </div>
            <button type="submit" class="btn btn-dark mt-3 float-right" id="place_order" style="width: 30%; color: white;">Place Order</button>
         </div>
        </div> <!-- 1st row end here -->
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
        // $("#clicktoopen").click(function(){
        //     $("#coupon_area").slideToggle();
        // });
      });
    </script>
  </body>
</html>