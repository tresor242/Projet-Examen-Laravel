<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Tresor Education</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- owl carousel style -->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!--header section start -->
      <div class="header_section">
         <div class="header_bg">
            <div class="container">
               
            </div>
         </div>
      <!--banner section start -->
      <div class="banner_section layout_padding">
         <div id="my_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="banner_taital_main">
                        <div class="row">
                           <div class="col-md-6">
                              <h1 class="banner_taital">Bienvenue sur Tresor Education</h1>
                              <p class="banner_text">Merci de bien Choisir Votre Formation</p>
                              <div class="btn_main">
                             
                              @foreach ($types as $type)
                              <div class="about_bt active">
                              <a href="/types/{{ $type['id'] }}" class="btn btn-primary" style="width:110px;">{{ $type['libelleType'] }}
                              </a>
                              </div>
                                <!--<div class="text-center">
                                    <a href="/types/{{ $type['id'] }}" class="btn btn-primary" style="width:110px;">{{ $type['libelleType'] }}</a>
                                </div>-->
                            @endforeach
                                 <!--<div class="about_bt active"><a href="#">About Us</a></div>
                                 <div class="quote_bt"><a href="#">Get A Quote</a></div>-->
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="image_1"><img src="images/img-1.png"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="banner_taital_main">
                        <div class="row">
                           <div class="col-md-6">
                              <h1 class="banner_taital">Bienvenue sur Tresor Education</h1>
                              <p class="banner_text">Merci de bien Choisir Votre Formation</p>
                              <div class="btn_main">
                             
                              @foreach ($types as $type)
                              <div class="about_bt active">
                              <a href="/types/{{ $type['id'] }}" class="btn btn-primary" style="width:110px;">{{ $type['libelleType'] }}
                              </a>
                              </div>
                                <!--<div class="text-center">
                                    <a href="/types/{{ $type['id'] }}" class="btn btn-primary" style="width:110px;">{{ $type['libelleType'] }}</a>
                                </div>-->
                            @endforeach
                                 <!--<div class="about_bt active"><a href="#">About Us</a></div>
                                 <div class="quote_bt"><a href="#">Get A Quote</a></div>-->
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="image_1"><img src="images/img-1.png"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="banner_taital_main">
                        <div class="row">
                           <div class="col-md-6">
                              <h1 class="banner_taital">Bienvenue sur Tresor Education</h1>
                              <p class="banner_text">Merci de bien Choisir Votre Formation</p>
                              <div class="btn_main">
                             
                              @foreach ($types as $type)
                              <div class="about_bt active">
                              <a href="/types/{{ $type['id'] }}" class="btn btn-primary" style="width:110px;">{{ $type['libelleType'] }}
                              </a>
                              </div>
                                <!--<div class="text-center">
                                    <a href="/types/{{ $type['id'] }}" class="btn btn-primary" style="width:110px;">{{ $type['libelleType'] }}</a>
                                </div>-->
                            @endforeach
                                 <!--<div class="about_bt active"><a href="#">About Us</a></div>
                                 <div class="quote_bt"><a href="#">Get A Quote</a></div>-->
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="image_1"><img src="images/img-1.png"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
            <i class="fa fa-arrow-left" style="font-size:24px"></i>
            </a>
            <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
            <i class="fa fa-arrow-right" style="font-size:24px"></i>
            </a>
         </div>
      </div>
      <!--banner section end -->
      </div>
      <!--header section end -->
      <!-- services section start -->
  
      <!-- services section end -->
      <!-- about section start -->
     
      <!-- about section end -->
      <!-- blog section start -->
      
      <!-- blog section end -->
      <!-- client section start -->
      <div class="client_section layout_padding">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="client_taital">Testimonial</h1>
                     <div class="client_section_2">
                        <div class="client_left">
                           <div><img src="images/client-img.png" class="client_img"></div>
                        </div>
                        <div class="client_right">
                           <h3 class="client_name">Jony Deno</h3>
                           <p class="client_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="client_taital">Testimonial</h1>
                     <div class="client_section_2">
                        <div class="client_left">
                           <div><img src="images/client-img.png" class="client_img"></div>
                        </div>
                        <div class="client_right">
                           <h3 class="client_name">Jony Deno</h3>
                           <p class="client_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="client_taital">Testimonial</h1>
                     <div class="client_section_2">
                        <div class="client_left">
                           <div><img src="images/client-img.png" class="client_img"></div>
                        </div>
                        <div class="client_right">
                           <h3 class="client_name">Jony Deno</h3>
                           <p class="client_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
             <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
             <i class="fa fa-angle-right" style="font-size:24px"></i>
            </a>
         </div>
      </div>
      <!-- client section end -->
      <!-- newsletter section start -->

      <!-- newsletter section end -->

      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6 padding_left0">
                  <div class="mail_section">
                     <div class="contact_img">
                        <h1 class="contact_taital">Best Educations In World Here</h1>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="map_main"><img src="images/map-img.png"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-lg-3 margin_top">
                     <div class="call_text"><a href="#"><img src="images/call-icon1.png"><span class="padding_left_15">Call Now +01 9876543210</span></a></div>
                     <div class="call_text"><a href="#"><img src="images/mail-icon1.png"><span class="padding_left_15">demo@gmail.com</span></a></div>
                  </div>
                  <div class="col-lg-3">
                     <div class="information_main">
                        <h4 class="information_text">Information</h4>
                        <p class="many_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="information_main">
                        <h4 class="information_text">Helpful Links</h4>
                        <div class="footer_menu">
                           <ul>
                              <li><a href="index.html">Home</a></li>
                              <li><a href="about.html">About</a></li>
                              <li><a href="services.html">Services</a></li>
                              <li><a href="blog.html">Blog</a></li>
                              <li><a href="news.html">News</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="information_main">
                        <div class="footer_logo"><a href="index.html"><img src="images/footer-logo.png"></a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2020 All Rights Reserved. <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>

