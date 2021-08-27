<?php 

  include("Connection.php");
  if(isset($_POST["hdnTotal"]))
  {
    $_SESSION["Total"]=$_POST["hdnTotal"];
  }

  if(isset($_REQUEST["btn_Submit"]))
  {

      $BillDate= date("d-m-y");
      $RegId= $_SESSION["RegId"];
      $Total=$_SESSION["Total"];
      $Tax=0; 
      $Disc=0;
      $Net=$Total;
      $BA_Name= $_POST["txt_BA_Name"];
      $BA_Address= $_POST["txt_BA_Address"];
      $BA_Mobile= $_POST["txt_BA_Mobile"];
      $BA_Email= $_POST["txt_BA_Email"];
   
      $DA_Name= $_POST["txt_DA_Name"];
      $DA_Address= $_POST["txt_DA_Address"];
      $DA_Mobile= $_POST["txt_DA_Mobile"];
      $DA_Email= $_POST["txt_DA_Email"];

      $qry="INSERT INTO tbl_billmaster ( RegId, BillDate,  Total, Tax ,Disc,  Net, BA_Name, BA_Address , BA_Email,  BA_Mobile, DA_Name, DA_Address,  DA_Email,  DA_Mobile ) VALUES ('$RegId', '$BillDate',  '$Total', '$Tax' ,'$Disc',  '$Net', '$BA_Name', '$BA_Address' , '$BA_Email',  '$BA_Mobile', '$DA_Name', '$DA_Address',  '$DA_Email',  '$DA_Mobile')";

      mysqli_query($con,$qry);

      $qry="SELECT MAX(BMID) as BMID FROM tbl_billmaster";
      $tbl=mysqli_query($con,$qry);

      if ($row=mysqli_fetch_array($tbl)) 
      {
            $bmid= $row["BMID"];

           $qry="INSERT INTO tbl_billdetails (BMId,  ProductId, Qty, Price ) SELECT $bmid, tbl_cart.ProductId, tbl_cart.Qty, tbl_product.Price  FROM tbl_cart, tbl_product where tbl_cart.ProductId = tbl_product.ProductId and RegId=".$_SESSION["RegId"];
        
          mysqli_query($con,$qry);

            $qry="DELETE  FROM tbl_cart  where  RegId=".$_SESSION["RegId"];
  
        mysqli_query($con,$qry);
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
    <!-- Leaflet CSS - For the map-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.css">
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
                  <li aria-current="page" class="breadcrumb-item active">Contact</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-3">
              <!--
              *** PAGES MENU ***
              _________________________________________________________
              -->

                <div id="order-summary" class="box">
                <div class="box-header">
                  <h3 class="mb-0">Order summary</h3>
                </div>
                <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>Order subtotal</td>
                        <th>₹446.00</th>
                      </tr>
                      <tr>
                        <td>Shipping and handling</td>
                        <th>₹10.00</th>
                      </tr>
                      <tr>
                        <td>Tax</td>
                        <th>₹0.00</th>
                      </tr>
                      <tr class="total">
                        <td>Total: ₹<?php  echo $_SESSION["Total"]; ?></td>
                        <th><?php  if(isset($net))

                                {
                                    echo $net;

                                }   
 


                        ?></th>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              
              <!-- *** PAGES MENU END ***-->
               
            </div>
            <div class="col-lg-9">
              <div id="contact" class="box">
                <h1>Checkout</h1>
               
                <!-- /.row-->
                <hr>
                
                
                <h2>Delivery Address</h2>
                <form method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="firstname">Name</label>
                        <input name="txt_DA_Name" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="lastname">Address</label>
                        <input name="txt_DA_Address" type="text" class="form-control">
                      </div>
                    </div> 

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input name="txt_DA_Email" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="subject">Mobile</label>
                        <input name="txt_DA_Mobile" type="text" class="form-control">
                      </div>
                    </div>
                     
                    
                  </div>
                  <!-- /.row-->
              

                 <h2>Billing Address</h2> 
                
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="firstname">Name</label>
                        <input name="txt_BA_Name" type="text" name="txt_BDid"  class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="lastname">Address</label>
                        <input name="txt_BA_Address" type="text" name="txt_BMId" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input name="txt_BA_Email" type="text" name="txt" name="txt_Products_id" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="subject">Mobile</label>
                        <input name="txt_BA_Mobile" type="text" class="form-control">
                      </div>
                    </div>
                     
                    <div class="col-md-12 text-center">
                      <input type="submit" name="btn_Submit"class="btn btn-primary" value="Submit"> 
                    </div>
                  </div>
                  <!-- /.row-->
                </form>
              </div>
            </div>
            <!-- /.col-md-9-->
            
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

    <!-- *** COPYRIGHT END ***-->
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="js/front.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.js"> </script>
    <script src="js/map.js"></script>
  </body>
</html>