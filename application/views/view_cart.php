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

    <title>TEchB | Cart</title>
    <style type="text/css">
      /*.table th{
        padding: .55rem;
      }*/
      .table td{
        padding: .50rem;
        vertical-align: 0;
      }
      #buynow:hover{
        background-color: #266ec0 !important;
        border-color: #266ec0 !important;
      }
    </style>
  </head>
  <body>
    <?php include('header.php') ?>

    <div class="container-fluid" style="margin-top: 10vh; margin-bottom: 5vh; width: 95%">
        <div class="row">
            <div class="col-lg-12">
              <h4 class="mb-4">Shoping cart</h4>
              <div class="card" style="border-color: white;">
                <div class="card-body" style="padding: 0rem 0rem 0rem 0rem;">
                  <table class="table">
                  <thead>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col">Products</th>
                      <th scope="col">Unit Price</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><i class="fa fa-trash-o" aria-hidden="true" style="color: #cc0000;"></i></td>
                      <td><img src="assets/images/products/onePlus.jpg" class="img-fluid" alt="Responsive image" style="max-height: 10vh; max-width: 15vh;"></td>
                      <td>OnePlus 7T (Glacier Blue, 8GB RAM)</td>
                      <td>&#8377; 37,999.00</td>
                      <td>
                        <div class="input-group input-group-sm">
                          <input type="number" class="form-control"  min="1" value="1" style="max-width:30%;">
                        </div>
                      </td>
                      <td>&#8377; 37,999.00</td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-trash-o" aria-hidden="true" style="color: #cc0000;"></i></td>
                      <td><img src="assets/images/products/samsung.jpg" class="img-fluid" alt="Responsive image" style="max-height: 10vh; max-width: 15vh;"></td>
                      <td>Samsung M30s (Sapphire Blue, 4GB RAM)</td>
                      <td>&#8377; 13,999.00</td>
                      <td>
                        <div class="input-group input-group-sm">
                          <input type="number" class="form-control"  min="1" value="2" style="max-width:30%;">
                        </div>
                      </td>
                      <td>&#8377; 27,998</td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-trash-o" aria-hidden="true" style="color: #cc0000;"></i></td>
                      <td><img src="assets/images/products/onePlust.jpg" class="img-fluid" alt="Responsive image" style="max-height: 10vh; max-width: 15vh;"></td>
                      <td>OnePlus 7T Pro McLaren Limited Edition</td>
                      <td>&#8377; 58,999.00</td>
                      <td>
                        <div class="input-group input-group-sm">
                          <input type="number" class="form-control"  min="1" value="1" style="max-width:30%;">
                        </div>
                      </td>
                      <td>&#8377; 58,999.00</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12 mt-4">
              <div class="row">
                <!-- <div class="offset-md-1 col-md-10 offset-md-1">
                  <div class="card" style="background-color:  #ffffff00;">
                    <div class="card-body" style="padding: 0.8rem;"> 
                      <p class="text-warning" style="margin-bottom: 0px;">Have Coupon?<span id="open_coupon" style="color: #8e959b; cursor: pointer;"> Click here to enter your coupon code</span></p>
                    </div>
                  </div>
                  <div class="card mt-2" style="background-color:  #ffffff00;">
                    <div class="card-body" style="padding: 0.8rem;"> 
                      <p class="text-warning" style="margin-bottom: 0px;">Have Voucher?<span id="open_voucher" style="color: #8e959b; cursor: pointer;"> Click here to enter your voucher code</span></p>
                    </div>
                  </div>
                </div> -->
                <!-- coupon code div -->
                <div class="offset-md-1 col-md-10 offset-md-1 mt-2" id="coupon_area">
                  <div class="card" style="background-color:  #ffffff00;">
                    <div class="card-body" style="padding: 0.8rem;"> 
                      <p class="text-secondary">If you have a coupon code, please apply it below.</p>
                        <form class="form-inline">
                          <div class="form-group">
                            <input type="text" class="form-control" id="coupon" style="border-radius: 5px 0px 0px 5px;">
                          </div>
                          <button type="submit" class="btn" style="background-color: #266ec0; color: white; border-radius: 0px 5px 5px 0px;">Apply Coupon</button>
                        </form>
                    </div>
                  </div>
                </div>
                 <div class="offset-md-1 col-md-10 offset-md-1 mt-2" id="voucher_area">
                  <div class="card" style="background-color:  #ffffff00;">
                    <div class="card-body" style="padding: 0.8rem;"> 
                      <p class="text-secondary">If you have a voucher code, please apply it below.</p>
                        <form class="form-inline">
                          <div class="form-group">
                            <input type="text" class="form-control" id="coupon" style=" width: 100%; border-radius: 5px 0px 0px 5px;">
                          </div>
                          <button type="submit" class="btn" style="background-color: #266ec0; color: white; border-radius: 0px 5px 5px 0px;">Apply Voucher</button>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12 mt-4">
              <div class="card" style="border-radius: 5px 5px 0px 0px">
                <div class="card-body" style="padding: 0px;">
                  <h4 class="card-title" style="padding: 8px 8px 0px 8px;">CART TOTALS</h4>
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>Subtotal</td>
                       <!--  <td>&#8377; 1,20000</td> -->
                      </tr>
                      <tr>
                        <td>Discount</td>
                        <!-- <td>&#8377; 2000</td> -->
                      </tr>
                      <tr>
                        <td>Total</td>
                       <!--  <td>&#8377; 1,89999</td> -->
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
                <button type="button" class="btn btn-dark" id="buynow" style="width: 100%; color: white; border-radius: 0px 0px 5px 5px;">Proceed to buy</button>
            </div>
        </div>
    </div>

    <?php include('footer.php') ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
          $("#buynow").click(function(){
            location.href = "<?=base_url()?>checkout";
          });

          $("#open_coupon").click(function(){
              $("#coupon_area").slideToggle();
              $("#voucher_area").css("display", "none");
          });
          $("#open_voucher").click(function(){
              $("#coupon_area").css("display", "none");
              $("#voucher_area").slideToggle();
          });
      });
    </script>
  </body>
</html>