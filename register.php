<?php
  include("Connection.php");

  if(isset($_REQUEST["btn_RegSubmit"]))
  {

      $regName=$_REQUEST["txt_RegName"];
      $Mobile=$_REQUEST["txt_RegMobile"];
      $Email=$_REQUEST["txt_RegEmail"];
      $Password=$_REQUEST["txt_RegPassword"];

      $qry="SELECT * FROM tbl_Register where Email='$Email'";
      $tbl=mysqli_query($con,$qry);

      if ($row=mysqli_fetch_array($tbl)) 
      {
        $msg= "Already Register";
      }
      else
      {
        $qry="INSERT INTO tbl_Register (Name, Mobile, Email, Password) values ('$regName', '$Mobile','$Email', '$Password') ";
        //echo $qry;
        
        mysqli_query($con,$qry);
      }

  }


  if(isset($_REQUEST["btn_LoginSubmit"]))
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
       $msg= "Invalid Loginid or Password";
    }

  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Poem-Mania- A poetry Book store</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
     
     <?php
      include("header.php");
     ?>

    <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- breadcrumb-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li aria-current="page" class="breadcrumb-item active">New account / Sign in</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6">
              <div class="box">
                <h1>New account</h1>
                <p class="lead">Not our registered customer yet?</p>
                <p>With registration with our new world of Poetry, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
                <p class="text-muted">If you have any questions, please feel free to <a href="contact.php">contact us</a>, our customer service center is working for you 24/7.</p>
                <hr>
                <form action="#" method="post">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input name="txt_RegName" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="name">Mobile</label>
                    <input name="txt_RegMobile" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input name="txt_RegEmail" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input name="txt_RegPassword" type="password" class="form-control">
                  </div>
                  <div class="text-center">
                    <input type="submit" name="btn_RegSubmit" class="btn btn-primary" value="Register"> </button>
                  </div>
                  <div class="text-center">
                    <?php
                      if(isset($msg) && isset($_REQUEST["btn_RegSubmit"]))
                            echo $msg;


                        if(isset($_SESSION["msg"]))
                        {  
                            unset($_SESSION["msg"]);
                            echo $_SESSION["msg"];
                      }
                    ?>
                   </div>
                </form>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box">
                <h1>Login</h1>
                <p class="lead">Already our customer?</p>
                <p class="text-muted"></p>
                <hr>
                <form action="#" method="post">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input name="txt_LoginEmail" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input name="txt_LoginPassword" type="password" class="form-control">
                  </div>
                  <div class="text-center">
                    <button type="submit" name="btn_LoginSubmit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                  </div>
                    <div class="text-center">
                    <?php
                      if(isset($msg) && isset($_REQUEST["btn_LoginSubmit"]))
                            echo $msg;
                    ?>
                   </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--
    *** FOOTER ***
    _________________________________________________________
    -->
    <?php 
      include("footer.php");
    ?>
    <!--
    *** COPYRIGHT ***
    _________________________________________________________
    -->
    
    <!-- *** COPYRIGHT END ***-->
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>