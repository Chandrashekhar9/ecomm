<style type="text/css">
  .dropdown:hover>.dropdown-menu {
      display: block;
    }
    .dropdown-item{
      padding: 0px 0.7rem !important;
    }
    .sidenav{
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #232f3e;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 30px;
    }
    .sidenav a {
      padding: 8px 8px 8px 8px;
      text-decoration: none;
      font-size: 25px;
      color: #818181;
      display: block;
      transition: 0.3s;
    }
    .sidenav a:hover {
      color: #f1f1f1;
    }
    .sidenav .closebtn {
      position: absolute;
      top: -20px;
      right: 5px;
      font-size: 36px;
      margin-left: 30px;
    }

     .side-dropdown{
      overflow: hidden;
    }
    .side-dropdown .side-dropbtn{
      font-size: 15px;   
      border: none;
      outline: none;
      color: white;
      padding: 5px 5px;
      background-color: inherit;
      font-family: inherit;
      margin-left:8px;
    }

    .side-dropdown-content {
      display: none;
      background-color: #f9f9f9;
      width: 100%;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .side-dropdown-content a{
      color: black;
      text-decoration: none;
      display: block;
      text-align: left;
    }
    .side-dropdown-content a:hover{
      background-color: #ddd;
      color: black;
    }
    .side-dropdown-content{
      padding: 0px !important;
    }
    .side-dropdown-content a{
      font-size:15px !important;
    }
     #side-menu:hover #side-menu-content{
      display: block;
    }

    .mydropdown{
      overflow: hidden;
    }
    .mydropdown .mydropbtn{
      font-size: 15px;    
      border: none;
      outline: none;
      color: white;
      padding: 5px 5px;
      background-color: inherit;
      font-family: inherit;
      margin-left:8px;
    }

    .mydropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      width: auto;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .mydropdown-content a {
      color: black;
      padding: 5px 15px;
      text-decoration: none;
      display: block;
      text-align: left;
    }
    .mydropdown-content a:hover{
      background-color: #ddd;
      color: black;
    }
    #setting:hover #setting-content{
      display: block;
    }
    #lang:hover #lang-content{
      display: block;
    }
    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }
    .btn_pr_ol{
      border-color: #9ea4ab;
      color: #f3f3f3;
    }
    .btn_pr_ol:hover{
      background-color: #266ec0;
      border-color: #266ec0;
      color: white;
    }
</style>

<!--   <style type="text/css">
    #navbar input[type=search]{
      background-image: url('<?=base_url()?>assets/images/logo/searchicon.png');
    }
  </style>
  <section id="navbar">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light shadow">
          <a class="navbar-brand" href="<?=base_url()?>"><img src="<?=base_url()?>assets/images/logo/techb_logo.png" class="img-fluid"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
           <form class="my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
            </form>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link ml-2" href="<?=base_url()?>login"><i class="fa fa-user-circle-o " style="font-size:25px;"></i></a>
              </li>
              <li class="nav-item active ml-2">
                  <a class="nav-link" href="<?=base_url()?>cart" alt="Cart"><i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 25px;"></i><span style="color:white; position: relative; bottom: 2.2vh; right:2vh; background-color: #266ec0; padding:2px; border-radius: 45%; font-size: 12px;">3</span></a>

              </li>
              <li class="nav-item active ml-5">
                <a class="nav-link" href="<?=base_url()?>wishlist">Wishlist</a>
              </li>
            </ul>
          </div>
        </nav> 
    </section> -->


<!-- <section id="navbar">
  <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #232f3e;">
  <a class="navbar-brand" href="#" style="font-size:30px;">TEchB.</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <form class="form-inline">
      <input class="form-control" type="search" placeholder="Search" aria-label="Search" style="border-radius: 5px 0px 0px 5px;">
      <button class="btn btn-outline-primary my-2" type="submit" style="border-radius: 0px 5px 5px 0px;"><i class="fa fa-search" aria-hidden="true"></i></button>
    </form>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hi, there!
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Login</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">New customer ?</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Cart<i class="fa fa-shopping-basket ml-2" aria-hidden="true" style="font-size: 16px;"></i></a>
      </li>
    </ul>
   
  </div>
</nav>
</section> -->

<section id="navbar">
  <nav class="fixed-top shadow" style="background-color: #232f3e; height: auto;">
    <div class="row">
      <div class="col-md-2 col-6">
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <h5 class="ml-2" style="color:#dce1e4;">Shop by category</h5>
             <div class="side-dropdown" id="side-menu">
            <button class="side-dropbtn" >Mobiles & Computers 
              <i class="fa fa-caret-down" style="margin-left: 2px;"></i>
            </button>
            <div class="side-dropdown-content" id="side-menu-content">
              <a href="#">Mobiles</a>
              <a href="#">Power Banks</a>
              <a href="#">Covers</a>
              <a href="#">Screen Protector</a>
            </div>
          </div>
          <hr style="color: white; border-top: 1px solid #8e959b;">
          <h5 class="ml-2" style="color:#dce1e4;">Setting</h5>
           <div class="side-dropdown">
            <button class="side-dropbtn">Your Account</button>
          </div>
          <div class="side-dropdown">
            <button class="side-dropbtn">Sign in</button>
          </div>
        </div>
        <span class="ml-2" style="font-size: 25px;color: #eae9e9;cursor:pointer;box-shadow: 0px 0px 1.5px 0px #c1c1c1;padding: 0px 6px 0px 6px;margin-left: 10px;position: relative;top: 7.5px;" onclick="openNav()"><i class="fa fa-bars" aria-hidden="true"></i></span>
        <a class="" href="<?=base_url()?>"><img src="<?=base_url()?>assets/images/logo/logo2sd.png" class="img-fluid mb-2"></a>
      </div>
      <div class="col-md-6 col-12 mt-2 mb-2">
        <form>
            <div class="col" style="display: flex;">
              <input type="text" class="form-control" style="border-radius: 5px 0px 0px 5px;">
              <button type="button" class="btn btn_pr_ol" style="border-radius: 0px 5px 5px 0px;"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </form>
      </div>
      <div class="col-md-4 col-6 mt-2 mb-2">
        <div class="float-right mr-4" style="display: flex;">

           <div class="mydropdown mr-2" id="setting">
            <button class="mydropbtn">Lang 
              <i class="fa fa-globe " aria-hidden="true" style="margin-left: 2px;"></i>
            </button>
            <div class="mydropdown-content" id="setting-content">
              <a href="#"><input type="radio" name="lang" class="mr-1" checked>English</a>
              <a href="#"><input type="radio" name="lang" class="mr-1">हिन्दी</a>
            </div>
          </div>

          <div class="mydropdown mr-2" id="lang">
            <button class="mydropbtn" >Hi, there! 
              <i class="fa fa-caret-down" style="margin-left: 2px;"></i>
            </button>
            <div class="mydropdown-content" id="lang-content">
              <a href="<?=base_url()?>login">Login</a>
              <a href="<?=base_url()?>wishlist">Wishlist</a>
            </div>
          </div>

          <div class="mydropdown" onclick="mycart();">
            <button class="mydropbtn">Cart 
              <i class="fa fa-shopping-cart" aria-hidden="true" style="margin-left: 2px;"></i>
            </button>
          </div>
        </div>
         <!--  <div class="dropdown float-right mr-1">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent; border-color: transparent;">
            Lang
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="padding: 0px; margin: 0px;">
            <a class="dropdown-item" href="#">English</a>
            <a class="dropdown-item" href="#">हिन्दी</a>
          </div>
        </div> -->
      </div>
    </div>
  </nav>
</section>

<script>
function mycart(){
  location.href = "<?=base_url()?>cart";
}
function openNav() {
  document.getElementById("mySidenav").style.width = "230px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>