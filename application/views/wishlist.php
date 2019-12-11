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
      .table th{
        padding: .1rem;
      }
      .table td{
        padding: .50rem;
        vertical-align: 0;
      }
    </style>
  </head>
  <body>
    <?php include('header.php') ?>

    <div class="container-fluid" style="margin-top: 15vh; margin-bottom: 10vh; width: 95%">
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col">Products</th>
                      <th scope="col">Unit Price</th>
                      <th scope="col">Stock</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><i class="fa fa-trash-o mt-2" aria-hidden="true" style="color: #cc0000;"></i></td>
                      <td><img src="<?=base_url()?>assets/images/products/onePlus.jpg" class="img-fluid" alt="Responsive image" style="max-height: 10vh; max-width: 15vh;"></td>
                      <td><a href="" style="text-decoration: none; color: #266ec0;">OnePlus 7T (Glacier Blue, 8GB RAM)</a></td>
                      <td>&#8377; 37,900.00</td>
                      <td>Out of stock</td>
                      <td><button type="button" class="btn" style="width: 80%; background-color: #266ec0; color: white;" disabled>Add to cart</button></td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-trash-o mt-2" aria-hidden="true" style="color: #cc0000;"></i></td>
                      <td><img src="<?=base_url()?>assets/images/products/samsung.jpg" class="img-fluid" alt="Responsive image" style="max-height: 10vh; max-width: 15vh;"></td>
                      <td><a href="" style="text-decoration: none; color: #266ec0;">Samsung M30s (Sapphire Blue, 4GB RAM)</a></td>
                      <td>&#8377; 13,999.00</td>
                      <td>Instock</td>
                      <td><button type="button" class="btn" style="width: 80%; background-color: #266ec0; color: white;">Add to cart</button></td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-trash-o mt-2" aria-hidden="true" style="color: #cc0000;"></i></td>
                      <td><img src="<?=base_url()?>assets/images/products/onePlust.jpg" class="img-fluid" alt="Responsive image" style="max-height: 10vh; max-width: 15vh;"></td>
                      <td><a href="" style="text-decoration: none; color: #266ec0;">OnePlus 7T Pro McLaren Limited Edition</a></td>
                      <td>&#8377; 58,999.00</td>
                      <td>Instock</td>
                      <td><button type="button" class="btn" style="width: 80%; background-color: #266ec0; color: white;">Add to cart</button></td>
                    </tr>
                  </tbody>
                </table>
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
  </body>
</html>