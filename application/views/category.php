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
        <!-- Animate CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/animate.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">

    <title>TEchB | Category</title>
  </head>
  <style type="text/css">
    body{
      background-color: white;
    }
    #action_tab{
      position: absolute;
      bottom: 20vh;
      left: 45px;
      display: none;
    }
    .card-body:hover #action_tab{
      display: block;
    }
  </style>
  <body>
     <?php include('header.php') ?>

     <div class="container-fluid mb-4" style="margin-top: 15vh; width: 98%;">
       <div class="row">
         <div class="col-md-2 col-12">
           <div class="row">
             <div class="col-sm-12 col-6 mt-sm-5">
                <h6>Price</h6>
                <a href="" class="text-muted" style="display: block; text-decoration: none; font-size:5wv;">Under 1000</a>
                <a href="" class="text-muted" style="display: block; text-decoration: none; font-size:5wv;">1000 to 50000</a>
                <a href="" class="text-muted" style="display: block; text-decoration: none; font-size:5wv;">Above 50000</a>
                <form class="form-inline">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="min" name="" style="width:15%;">
                    <input type="text" class="form-control ml-1" placeholder="max" name="" style="width:15%;">
                      <button type="submit" class="btn ml-1" style="background-color: #266ec0; color: white;">Go</button>
                  </div>
                </form>
             </div>
           </div>
         </div>
         <div class="col-md-10 col-12">
           <div class="row">
             <div class="col-md-10 col-12">
               <h4>Mobiles</h4>
               <h6>Home/ <span>Mobiles</span></h6>
             </div>
             <div class="col-md-2 col-12">
               <select class="form-control">
                  <option>Default sorting</option>
                  <option>Price: low to high</option>
                  <option>Price: high to low</option>
                </select>
             </div>
           </div>
           <div class="row">
             <div class="col-md-3 col-6">
               <div class="card border-light">
                  <div class="card-body" style="padding:0px; position: relative;"><a href="<?=base_url()?>product">
                     <img src="assets/images/products/pro1.jpg" class="card-img-top" alt="...">
                  </a>
                     <div class="row animated fadeInDown" id="action_tab" style="background-color: transparent;">
                       <div class="offset-3 col-6 offset-3" style="display: flex;">
                         <a href="" class="mr-2" style="text-decoration: none; color: black;"><i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 25px; background-color: white; padding: 8px;"></i></a>
                          <a href="<?=base_url()?>product" style="text-decoration: none; color: black;"><i class="fa fa-heart" aria-hidden="true" style="font-size: 25px; background-color: white; padding: 8px;"></i></a>
                      </div>
                     </div>
                  </div>
                  <div class="card-footer" style="padding: 0px;">
                    <a href="product.php" style="text-decoration: none; color: #266ec0;">
                    <p class="mt-1 text-center" style="margin: 1px; font-size:18px;">Sony Headphone</p>
                    </a>
                    <p class="text-center" style="font-weight: bold;">&#8377; 37,900.00</p>
                  </div>
                </div>
             </div>

             <div class="col-md-3 col-6">
               <div class="card border-light">
                  <div class="card-body" style="padding:0px; position: relative;"><a href="<?=base_url()?>product">
                     <img src="assets/images/products/pro1.jpg" class="card-img-top" alt="...">
                  </a>
                     <div class="row animated fadeInDown" id="action_tab" style="background-color: transparent;">
                       <div class="offset-3 col-6 offset-3" style="display: flex;">
                         <a href="" class="mr-2" style="text-decoration: none; color: black;"><i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 25px; background-color: white; padding: 8px;"></i></a>
                          <a href="<?=base_url()?>product" style="text-decoration: none; color: black;"><i class="fa fa-heart" aria-hidden="true" style="font-size: 25px; background-color: white; padding: 8px;"></i></a>
                      </div>
                     </div>
                  </div>
                  <div class="card-footer" style="padding: 0px;">
                    <a href="product.php" style="text-decoration: none; color: #266ec0;">
                    <p class="mt-1 text-center" style="margin: 1px; font-size:18px;">Sony Headphone</p>
                    </a>
                    <p class="text-center" style="font-weight: bold;">&#8377; 37,900.00</p>
                  </div>
                </div>
             </div>
             <div class="col-md-3 col-6">
               <div class="card border-light">
                  <div class="card-body" style="padding:0px; position: relative;"><a href="<?=base_url()?>product">
                     <img src="assets/images/products/pro1.jpg" class="card-img-top" alt="...">
                  </a>
                     <div class="row animated fadeInDown" id="action_tab" style="background-color: transparent;">
                       <div class="offset-3 col-6 offset-3" style="display: flex;">
                         <a href="" class="mr-2" style="text-decoration: none; color: black;"><i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 25px; background-color: white; padding: 8px;"></i></a>
                          <a href="<?=base_url()?>product" style="text-decoration: none; color: black;"><i class="fa fa-heart" aria-hidden="true" style="font-size: 25px; background-color: white; padding: 8px;"></i></a>
                      </div>
                     </div>
                  </div>
                  <div class="card-footer" style="padding: 0px;">
                    <a href="product.php" style="text-decoration: none; color: #266ec0;">
                    <p class="mt-1 text-center" style="margin: 1px; font-size:18px;">Sony Headphone</p>
                    </a>
                    <p class="text-center" style="font-weight: bold;">&#8377; 37,900.00</p>
                  </div>
                </div>
             </div>
             <div class="col-md-3 col-6">
               <div class="card border-light">
                  <div class="card-body" style="padding:0px; position: relative;"><a href="<?=base_url()?>product">
                     <img src="assets/images/products/pro1.jpg" class="card-img-top" alt="...">
                  </a>
                     <div class="row animated fadeInDown" id="action_tab" style="background-color: transparent;">
                       <div class="offset-3 col-6 offset-3" style="display: flex;">
                         <a href="" class="mr-2" style="text-decoration: none; color: black;"><i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 25px; background-color: white; padding: 8px;"></i></a>
                          <a href="<?=base_url()?>product" style="text-decoration: none; color: black;"><i class="fa fa-heart" aria-hidden="true" style="font-size: 25px; background-color: white; padding: 8px;"></i></a>
                      </div>
                     </div>
                  </div>
                  <div class="card-footer" style="padding: 0px;">
                    <a href="product.php" style="text-decoration: none; color: #266ec0;">
                    <p class="mt-1 text-center" style="margin: 1px; font-size:18px;">Sony Headphone</p>
                    </a>
                    <p class="text-center" style="font-weight: bold;">&#8377; 37,900.00</p>
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
    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        $("#register").click(function(){
          location.href = "register.php";
        });
      });
    </script>
  </body>
</html>