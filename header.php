 <?php
if(isset($_REQUEST["btn_Login"]))
  {

   
    $Email=$_REQUEST["txt_LoginEmail"];
    $Password=$_REQUEST["txt_LoginPassword"];
     

    $qry="SELECT * FROM tbl_Register where Email='$Email' and Password='$Password'";
    $tbl=mysqli_query($con,$qry);

    if ($row=mysqli_fetch_array($tbl)) 
    {
      $_SESSION["RegId"]=$row["RegId"];
      $_SESSION["Name"]=$row["Name"];
      header("Location:index.php");
    }
    else
    {
       $_SESSION["msg"]="Invalid Loginid or Password";
       header("Location:register.php");
    }

  }

 ?>

 <header class="header mb-5">
      <!--
      *** TOPBAR ***
      _________________________________________________________
      -->
      <div id="top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offer mb-3 mb-lg-0"><a href="#" class="btn btn-success btn-sm">Offer of the day</a><a href="#" class="ml-1">Get flat 35% off on buying 2 books together!</a></div>
            <div class="col-lg-6 text-center text-lg-right">
              <ul class="menu list-inline mb-0">
                <li class="list-inline-item"><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
                <li class="list-inline-item"><a href="register.php">Register</a></li>
                <li class="list-inline-item"><a href="contact.php">Contact</a></li>
                <li class="list-inline-item"><a href="#"><?php if(isset($_SESSION["Name"])) echo "Welcome ".$_SESSION["Name"]; else echo"Welcome Guest";   ?></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Customer login</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                <form  method="post">
                  <div class="form-group">
                    <input id="email-modal" type="text" name="txt_LoginEmail" placeholder="email" class="form-control">
                  </div>
                  <div class="form-group">
                    <input id="password-modal" name="txt_LoginPassword" type="password" placeholder="password" class="form-control">
                  </div>
                  <p class="text-center">
                    <input type="submit" name="btn_Login" class="btn btn-primary" value="Log in">
                   
                  </p>
                </form>
                <p class="text-center text-muted">Not registered yet?</p>
                <p class="text-center text-muted"><a href="register.php"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
              </div>
            </div>
          </div>
        </div>
        <!-- *** TOP BAR END ***-->
        
        
      </div>
      <nav class="navbar navbar-expand-lg">
        <div class="container"><a href="index.php" class="navbar-brand home"><img src="ProductImages/logo.png" alt="Obaju logo" class="d-none d-md-inline-block"><img src="img/logo-small.png" alt="Obaju logo" class="d-inline-block d-md-none"><span class="sr-only">Poem-Mania</span></a>
          <div class="navbar-buttons">
            <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button><a href="basket.html" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
          </div>
          <div id="navigation" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item"><a href="index.php" class="nav-link ">Home</a></li>
            
              <li class="nav-item"><a href="Products.php" class="nav-link">Products</a></li>
            
              <li class="nav-item"><a href="aboutUs.php" class="nav-link">About Us</a></li>
            
              <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
              <li class="nav-item"><a href="viewCart.php" class="nav-link">View Cart</a></li>
              <li class="nav-item"><a href="wishlist.php" class="nav-link">Wish List</a></li>
            
            </ul>
            <div class="navbar-buttons d-flex justify-content-end">
              <!-- /.nav-collapse-->
              <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></a>
              <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a href="viewcart.php" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span> items in cart</span></a></div>
            </div>
          </div>
        </div>
      </nav>
      <div id="search" class="collapse">
        <div class="container">
          <form role="search" class="ml-auto">
            <div class="input-group">
              <input type="text" placeholder="Search" class="form-control">
              <div class="input-group-append">
                <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </header>