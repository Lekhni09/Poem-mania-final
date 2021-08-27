<?php

  include("connection.php");


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
            <div class="col-md-12">
              <div id="main-slider" class="owl-carousel owl-theme">
                <div class="item"><img src="ProductImages/main-slider1.png" alt="" class="img-fluid"></div>
                <div class="item"><img src="ProductImages/main-slider2.png" alt="" class="img-fluid"></div>
                <div class="item"><img src="ProductImages/main-slider4.png " alt="" class="img-fluid"></div>
                <div class="item"><img src="ProductImages/main-slider1.png" alt="" class="img-fluid"></div>
              </div>
              <!-- /#main-slider-->
            </div>
          </div>
        </div>
        <!--
        *** ADVANTAGES HOMEPAGE ***
        _________________________________________________________
        -->
        <div id="advantages">
          <div class="container">
            <div class="row mb-4">
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-heart"></i></div>
                  <h3><a href="#">― Rupi Kaur</a></h3>
                  <p class="mb-0">“i am water soft enough to offer life tough enough" ― Rupi Kaur, Milk and Honey</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-heart"></i></div>
                  <h3><a href="#">― Lekhni </a></h3>
                  <p class="mb-0">"I am the ink of the pen you are holding trust my evry inch before you fling . I am made for the benevolent not for traitors" ― Lekhni</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-heart"></i></div>
                  <h3><a href="#">100% satisfaction guaranteed</a></h3>
                  <p class="mb-0">Free returns on everything for 3 months.</p>
                </div>
              </div>
            </div>
            <!-- /.row-->
          </div>
          <!-- /.container-->
        </div>
        <!-- /#advantages-->
        <!-- *** ADVANTAGES END ***-->
        <!--
        *** HOT PRODUCT SLIDESHOW ***
        _________________________________________________________
        -->
        <div id="hot">
          <div class="box py-4">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="mb-0">Hot this week</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="product-slider owl-carousel owl-theme">
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="ProductImages/cursed.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail.html"><img src="ProductImages/cursed.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="ProductImages/cursed.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detail.html">The Lost Letter</a></h3>
                    <p class="price"> 
                      <del></del>₹ 150.00
                    </p>
                  </div>
                  <!-- /.text-->
                  <div class="ribbon sale">
                    
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon new">
                   
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon gift">
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <!-- /.product-->
              </div>
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="ProductImages/cosmos.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail.html"><img src="ProductImages/cosmos.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="ProductImages/cosmos.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detail.html">See you in the Cosmos</a></h3>
                    <p class="price"> 
                      <del>$280</del>₹ 350.00
                    </p>
                  </div>
                  <!-- /.text-->
                  <div class="ribbon sale">
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon new">
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon gift">
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <!-- /.product-->
              </div>
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="ProductImages/year.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail.html"><img src="ProductImages/year.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="ProductImages/year.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detail.html">The Year After You</a></h3>
                    <p class="price"> 
                      <del></del>₹ 500.00
                    </p>
                  </div>
                  <!-- /.text-->
                </div>
                <!-- /.product-->
              </div>
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="ProductImages/pieces.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail.html"><img src="ProductImages/pieces.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="ProductImages/pieces.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detail.html">Girl In Pieces</a></h3>
                    <p class="price"> 
                      <del></del>₹599.00
                    </p>
                  </div>
                  <!-- /.text-->
                </div>
                <!-- /.product-->
              </div>
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="ProductImages/yellow.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail.html"><img src="ProductImages/yellow.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="ProductImages/yellow.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detail.html">Her Favorite Color was Yellow</a></h3>
                    <p class="price"> 
                      <del></del>₹ 200.00
                    </p>
                  </div>
                  <!-- /.text-->
                  <div class="ribbon new">
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <!-- /.product-->
              </div>
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="ProductImages/milkhoney.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail.html"><img src="ProductImages/milkhoney.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="ProductImages/milkhoney.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detail.html">Milk and Honey</a></h3>
                    <p class="price"> 
                      <del></del>₹ 250.00
                    </p>
                  </div>
                  <!-- /.text-->
                  <div class="ribbon gift">
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <!-- /.product-->
              </div>
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="ProductImages/sunflower.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail.html"><img src="ProductImages/sunflower.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="ProductImages/sunflower.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detail.html">The Sun and her Flowers</a></h3>
                    <p class="price"> 
                      <del>₹ 280</del>₹ 300.00
                    </p>
                  </div>
                  <!-- /.text-->
                  <div class="ribbon sale">
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon new">
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon gift">
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <!-- /.product-->
              </div>
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="ProductImages/wilder.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail.html"><img src="ProductImages/wilder.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="ProductImages/wilder.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detail.html">Wilder Girls</a></h3>
                    <p class="price"> 
                      <del></del>₹ 899.00
                    </p>
                  </div>
                  <!-- /.text-->
                </div>
                <!-- /.product-->
              </div>
              <!-- /.product-slider-->
            </div>
            <!-- /.container-->
          </div>
          <!-- /#hot-->
          <!-- *** HOT END ***-->
        </div>
        <!--
        *** GET INSPIRED ***
        _________________________________________________________
        -->
        <div class="container"> 
          <div class="col-md-12">
            <div class="box slideshow">
              <h3>Get Inspired</h3>
              <p class="lead">Get the inspiration from our world class poets</p>
              <div id="get-inspired" class="owl-carousel owl-theme">
                <div class="item"><a href="#"><img src="ProductImages/getinspired1.png" alt="Get inspired" class="img-fluid"></a></div>
                
              </div>
            </div>
          </div>
        </div>
        <!-- *** GET INSPIRED END ***-->
        <!--
        *** BLOG HOMEPAGE ***
        _________________________________________________________
        -->
        <div class="box text-center">
          <div class="container">
            <div class="col-md-12">
              <h3 class="text-uppercase">From our blog</h3>
              <p class="lead mb-0">What's new in the world of poets? <a href="blog.html">Check our blog!</a></p>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="col-md-12">
            <div id="blog-homepage" class="row">
              <div class="col-sm-6">
                <div class="post">
                  <h4><a href="post.html">History of Poetry</a></h4>
                  <p class="author-category">By <a href="#">John Slim</a> in <a href="">by poetry hub</a></p>
                  <hr>
                  <p class="intro">Poetry (derived from the Greek poiesis, "making") is a form of literature that uses aesthetic and often rhythmic qualities of language—such as phonaesthetics, sound symbolism, and metre—to evoke meanings in addition to, or in place of, the prosaic ostensible meaning</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="post">
                  <h4><a href="post.html">History </a></h4>
                  <p class="author-category">By <a href="#">John Slim</a>  <a href=""></a></p>
                  <hr>
                  <p class="intro">Poetry uses forms and conventions to suggest differential interpretations of words, or to evoke emotive responses. Devices such as assonance, alliteration, onomatopoeia, and rhythm may convey musical or incantatory effects. </p>
                </div>
              </div>
            </div>
            <!-- /#blog-homepage-->
          </div>
        </div>
        <!-- /.container-->
        <!-- *** BLOG HOMEPAGE END ***-->
      </div>
    </div>
    
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
  </body>
</html>