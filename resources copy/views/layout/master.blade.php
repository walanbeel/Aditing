<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Auditing &Consulting</title>
    <!-- Favicons -->
  <link href="{{asset('Front/images/icon-01.png')}}" rel="icon">
  <link href="{{asset('Front/images/icon-01.png')}}"rel="apple-touch-icon">

    <link rel="stylesheet" href="{{asset('Front/icofont/icofont.min.css')}}" >
    <link rel="stylesheet" href="{{asset('Front/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('Front/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('Front/css/font-awesome.min.css')}}" />
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('Front/css/main.css')}}" />

  </head>
  <body>



    <!-- Start Upper Bar -->
     <div id="topbar" class="upper-bar d-lg-flex align-items-center fixed-top">
       <div class="container ">
        <div class="row">
          <div class="contact-info mr-auto">
            <i class="icofont-envelope"></i> <a href="mailto:info.mkyacpa.com">info.mkyacpa.com</a>
            <i class="icofont-phone"></i>  +01 517 519
          </div>
          <!-- <div class="col-sm info text-center text-sm-left">
            <i class="fa fa-phone"></i>  +01 517 519
            <i class="fa fa-envelope" aria-hidden="true"></i> <a> www.mkyapa.com </a>
            </div> -->
            <div class="social-links">
            <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
           </div>
             <!-- <div class="col-sm info text-center text-sm-right">
            <button class="get-quote"><i class="fa fa-user"></i>  login</button>

              <a class="get-quote dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-language"></i> Langauge
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#"><img src={{asset("Front/images/ar.png")}}> Arabic</a>
                <a class="dropdown-item" href="#"><img src={{asset("Front/images/en.png")}}>  English</a>
              </div>

            </div> -->
         </div>
       </div>
     </div>

   <!-- End Upper Bar -->

   <!-- start Navbar -->
   <header id="header" class="fixed-top">


   <nav  id="main-navbar" class="navbar navbar-expand-lg navbar-light ">
     <div class="container d-flex align-items-center image">
     <a class="navbar-brand" href="#">
     <img src="{{asset('Front/images/logo-01.png')}}">
     </a>
	 </div>
	      <div class="container d-flex align-items-center ">

     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="main-nav">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item ">
           <a class="nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item ">
           <a class="nav-link" href="about.html">About</a>
         </li>

         <li class="nav-item">
          <div class="dropdown show">
            <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Services
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="#">Financial Statement Audit</a>
              <a class="dropdown-item" href="#">Review</a>
              <a class="dropdown-item" href="#">Agreed Upon Procedures</a>
              <a class="dropdown-item" href="#">Due Diligence</a>

            </div>
          </div>
         </li>
         <li class="nav-item" disabled>
          <a class="nav-link" href="#">Library</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">News</a>
        </li>
         <li class="nav-item">
           <a class="nav-link" href="contactus.html">Contact Us</a>
         </li>

       </ul>
     </div>
   </div>
   </nav>
</header>
   <!-- end Navbar -->

   @yield('content')



    <!-- satrt footer   -->
    <div class="footer">
      <div class="container">
          <div class="row">
                 <div class="col-sm-12 col-lg-6 ">
                     <div class="web-info">
                        <h2> <span>About</span><span>Us</span> </h2>
                         <p>We are a professional firm of Certified Public Accountants in Yemen. We pride ourselves in providing top quality services to our clients ranging from Audit Assurance, Taxation, Business Transformation Consulting, Due Diligence, Policies & Procedure, Risk Management, Internal Audit, Bankruptcy and expertise in Technology Audit with ERP systems.
                             </p>
                             <a href="#" class="web-info-btn">Read More</a>
                     </div>
                 </div>
                 <div class="col-sm-6 col-lg-3 ">
                   <div class="helpful-links">
                        <h2>Helpful Links</h2>
                        <div class="row">
                          <div class="col">
                             <ul class="list-unstyled">
                                <li> <a href="about.html">About</a></li>
                                <li><a href="#">services</a></li>
                                <li><a href="#">Libaray</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="contactus.html">Contact</a></li>
                             </ul>
                          </div>

                          <!-- <div class="col">
                             <ul class="list-unstyled">
                                <li>FAQ</li>
                                <li>Blog</li>
                                <li>How it work</li>
                                <li>Benefits</li>
                                <li>Contact</li>
                             </ul>
                          </div> -->

                        </div>
                   </div>

                 </div>
                 <div class="col-sm-6 col-lg-3 ">
                   <div class="contact-us">
                        <h2>Contact Us</h2>
                        <ul class="list-unstyled">
                          <li><i class="fa fa-map-marker"></i>
                             Al-Nuzaili Building,Hadda</li>
                          <li><i  class="fa fa-phone"></i> +1 517 519 </li>
                           <li><i  class="fa fa-envelope"></i>
                             <a href="mailto:info@mkyacpa.com?subject=contact">info@mkyacpa.com</a></li>
                        </ul>
                   </div>


                 </div>
          </div>
      </div>

    </div>
    <!-- end  footer  -->

    <!-- start copyRight  -->
    <div class="copy text-center">
        <div class="container">
            <div class="row">
                   <div class="col-lg-6 text-center text-md-center text-uppercase">
                    All right reserved &copy;copyright 2020 MK Auditing & Consulting
                   </div>

            </div>
        </div>

      </div>
      <!-- end copyRight  -->


  <!-- start back-to-top  -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <!-- end back-to-top  -->


  <script>
    $("#carousel").owlCarousel({
      margin: 10,
      loop: true,
      autoplay: true,
      autoplayTimeout: 2000,
      autoplayHoverPause: true,
      responsive: {
        0:{
          items:1,
          nav: false
        },
        600:{
          items:2,
          nav: false
        },
        1000:{
          items:4,
          nav: false
        }
      }
    });
  </script>
  <script type="text/javascript" src="{{asset('Front/js/jquery-3.5.1.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('Front/js/popper.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('Front/js/all.js')}}"></script>
    <script type="text/javascript" src="{{asset('Front/js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('Front/js/main.js')}}"></script>




  </body>
  </html>
