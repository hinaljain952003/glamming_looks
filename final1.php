<?php
$con = mysqli_connect('localhost','root','','Glamming_Looks');
if(isset($_POST['submit'])){
   $name = $_POST['Name'];
   $email = $_POST['Email'];
   $pno = $_POST['pno'];
   $msg = $_POST['Message'];
   $sql = "INSERT INTO enquiry VALUES ('$name','$email','$pno','$msg')";
  mysqli_query($con, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Glamming Looks</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.html"> Home  </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#about">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#service">Service</a>
                              </li>
                              <li class="nav-item active">
                                 <a class="nav-link" href="#tutorial"> Tutorial </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#customer">Customer</a>
                              </li>
                              <li class="nav-item active">
                                 <a class="nav-link" href="packages.html"> Package  </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#contact">Contact Us</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
                     <ul class="email">
                        <li><a href="#">Call: 8369238724</a></li>
                        <li><a href="#">Email:hinaljain952003@gmail.com</a></li>
                        <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
               <li data-target="#banner1" data-slide-to="1"></li>
               <li data-target="#banner1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container-fluid">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Welcome to</span>
                                 <h1>Glamming Looks</h1>
                                 <p>Wear your Makeup & Slay your day.</p>
                                 <a href="#">Read More </a> <a href="#">Book Now</a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="images/girl.png" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container-fluid">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Welcome to</span>
                                 <h1>Glamming Looks</h1>
                                 <p>We cater makeup service for your special DAY. </p>
                                 <a href="#">Read More </a> <a href="#">Book Now</a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="images/girl1.png" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container-fluid">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Welcome to</span>
                                 <h1>Glamming Looks</h1>
                                 <p>Best in efficient MAKEUP ARTIST</p>
                                 <a href="#">Read More </a> <a href="#">Book Now</a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="images/girl1.png" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <!-- end banner -->
      <!-- service -->
      <div id="service"  class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2> <img src="images/head.png" alt="#"/> Our Services</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div id="hover_chang" class="service_box">
                     <i><img src="images/thr.png" alt="#"/></i>
                     <h3>Wedding Makeup </h3>
                     <p> Our regular makeup package fit your needs for your special day & make you look beautiful.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div id="hover_chang" class="service_box">
                     <i><img src="images/thr1.png" alt="#"/></i>
                     <h3>nails</h3>
                     <p>Nails are the most important part of your wedding day as most of the shots are of your wedding Ring where nails are highlighted.  </p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div id="hover_chang" class="service_box">
                     <i><img src="images/thr2.png" alt="#"/></i>
                     <h3>hairdressing</h3>
                     <p>Wearing hair done feels much more comfortable than wearing it in usual way. </p>
                  </div>
               </div>
               <div class="col-md-12">
                  <a class="read_more" href="#about">Read More</a>
               </div>
            </div>
         </div>
      </div>
      <!-- service -->
      <!--tutorial-->
      <div id="tutorial"  class="tutorial">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                <div class="titlepage">
                <h2> <img src="images/head.png" alt="#"/>Tutorial</h2>
              <centre>  <iframe width="300" height="300" src="https://www.youtube.com/embed/UK0nvmtPe4s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></centre>
             <centre> <iframe width="300" height="300" src="https://www.youtube.com/embed/MkLkhe1JgTo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div></div></div></div></centre>
            </div>
               </div>
            </div>
             <!-- end tutorial-->
             <!-- about -->
      <div id="about"  class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-9">
                  <div class="titlepage">
                     <h2> <img src="images/head.h.png" alt="#"/> About Our Glamming Looks</h2>
                     <p>We Glamming looks offer ptofessional hair,nails & beauty services also specialize in wedding makeup. 
                        From experienced stylish to celebrity artist and junior artist, we have a team of feature 
                        trained artist who are verified with complete background checks to makle your experience great .</p>
                     <h2>ARTIST</h2> 
                     <p>Art is something that had attracted me when I was very young. Always surrounded by brushes, canvases and colors, I figured out that I have an innate sense for visualization of beauty. And soon enough, I realized my true calling and passion when my friends and family started asking me to do their makeup for weddings.I began my journey of artistry by opting out of a MBA college when my teacher picked on me for wearing makeup; and luckily enough, there has been no looking back since then.
As an artist, I am a part of weddings and brides from all over the world. I understand the importance of a wedding for any bride-to be; which is why, I personally attend to all my bride’s wedding needs as a makeup & hair artist and stylist.
Today, when I see brides trusting and choosing ‘Amrit Kaur’ for their special day, I get this overwhelming feeling which is very magical in nature.</p>  
                     <a class="read_more">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- customer -->
      <div id="customer" class="customer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2> <img src="images/head.png" alt="#"/> Our Customer Feedback</h2>
                  </div>
               </div>
            </div>
            <div id="myCarousel" class="carousel slide customer_Carousel " data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="carousel-caption ">
                           <div class="test_box">
                              <i><img src="images/tes.png" alt="#"/></i>
                              <h4>Pratiksha Mahajan</h4>
                              <span>customer</span>
                              <p>They made me look extra beautiful on my special day. I really felt special</p>
                              <img src="images/icon.png" alt="#"/>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption">
                           <div class="test_box">
                              <i><img src="images/tes1.png" alt="#"/></i>
                              <h4>Bipasha banikya</h4>
                              <span>customer</span>
                              <p> Made my eyes blue smoky effect with a radiant base, which toook my heart </p>
                              <img src="images/icon.png" alt="#"/>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption">
                           <div class="test_box">
                              <i><img src="images/tes2.png" alt="#"/></i>
                              <h4>Rohali jonson</h4>
                              <span>customer</span>
                              <p>Happy to be dolled up by Glamming Looks </p>
                              <img src="images/icon.png" alt="#"/>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
               <i class="fa fa-chevron-left" aria-hidden="true"></i>
               </a>
               <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
               <i class="fa fa-chevron-right" aria-hidden="true"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- end customer -->
      </div>
      
      <!--  contact -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2> <img src="images/head.h.png" alt="#"/> Request <span class="white"> A call Back</span></h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <form id="request" class="main_form" action="final1.php" method="post">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Name" type="type" name="Name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="type" name="Email"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone Number" type="type" name="pno">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="type" name="Message">Message </textarea>
                        </div>
                        <div class="col-sm-col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <button class="send_btn" name="submit">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="432" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                     </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
      <!--  footer -->
      <footer id="contact">
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-4">
                     <form class="bottom_form">
                        <h3>Newsletter</h3>
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">subscribe</button>
                     </form>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-6 col-md-12">
                     <div class="row">
                        <div class="col-md-7 padd_bottom">
                           <div class="heading3">
                              <a href="#"><img src="images/logo1.png" alt="#"/></a>
                              <p>GLAMMING LOOKS provides the best of service you are looking for</p>
                           </div>
                        </div>
                        <div class="col-md-5 padd_bottom padd_bott">
                           <div class="heading3">
                              <h3>Contact Us</h3>
                              <ul class="infomrtion">
                                 <li><a href="#">8369238724</a></li>
                                 <li><a href="#">Hinal jain</a></li>
                                 <li><a href="#">9833839169</a></li>
                                 <li><a href="#">Sejal Gotam  </a></li>
                                 <li><a href="#">Glamming looks</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 col-md-12">
                     <div class="row">
                        <div class="col-md-6 offset-md-1 padd_bottom">
                           <div class="heading3">
                              <h3>INFORMATION</h3>
                              <ul class="infometion">
                                 <li><a href="#">Makeup artist </a></li>
                                 <li><a href="#">Nail artist</a></li>
                                 <li><a href="#">Hair artist</a></li>
                                 <li><a href="#"> makeover  </a></li>
                                 <li><a href="#">BEST MAKEUP SERVICE PROVIDER </a></li>
                                 <li><a href="#"> HAPP TO SERVE </a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-md-5">
                           <div class="heading3">
                              <h3>MY ACCOUNT</h3>
                              <ul class="infometion">
                                 <li><a href="#">@glamminglooks</a></li>
                                 <li><a href="#">#glamminglooks</a></li>
                                 <li><a href="#">&glamminglooks</a></li>
                                 <li><a href="#">*glamminglooks  </a></li>
                                 <li><a href="#">!glamminglooks </a></li>
                                 <li><a href="#">$glamminglooks </a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2019 All Rights Reserved. <a href="https://html.design/"> Glamming Looks</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         $('a[href^="#"]').on('click', function(event) {
         
          var target = $(this.getAttribute('href'));
         
          if( target.length ) {
              event.preventDefault();
              $('html, body').stop().animate({
                  scrollTop: target.offset().top
              }, 2000);
          }
         
         });
      </script>
      <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 40.645037, lng: -73.880224},
             });
         
         var image = 'images/maps-and-flags.png';
         var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
           });
         }
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js --> 
   </body>
</html>

