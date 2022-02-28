<!DOCTYPE html>
<html lang="en">
<head>

      @yield('title')
    <!-- <title>Vimbiso</title> -->
<!-- 

Known Template 

https://templatemo.com/tm-516-known

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">
     <style>
    .div-1 {
        background-color: #f20c23;
    }
    
    .div-2 {
     background-color: #ABBAEA;
    }
    
    .div-3 {
     background-color: #FBD603;
    }
</style>

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                     <!--<a href="#" class="navbar-brand">Known</a>-->
                     <a href="index.html"><img src="images/logo-no-bg-2.png" style="max-width: 124px;" class="img-fluid" alt="logo"></a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="{{url('home')}}" class="smoothScroll">Home</a></li>
                         <li><a href="{{url('about')}}" class="smoothScroll">About</a></li>
                         <li><a href="{{url('about')}}" class="smoothScroll">View Companies</a></li>
                         
                         
                         <li><a href="{{url('contactus')}}" class="smoothScroll">Contact us</a></li>
                         <li><a href="{{url('plans')}}" class="smoothScroll">Plans</a></li>
                          <li class="nav-item dropdown ">


                              <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      For Businesses
                    </a>
                             <div class="dropdown-menu p-0" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-dark border-bottom border-dark" href="{{ route('login') }}"><i class="fas fa-user"></i>{{ __('Login') }}</a>
                                    <!--<a class="dropdown-item text-dark border-bottom border-dark" href="{{url('about')}}"><i class="fab fa-get-pocket"></i>Profile</a>-->
                               
                            @endif
                             @if (Route::has('register'))
                                
                                    <a class="dropdown-item text-dark" href="{{ route('register') }}"><i class="fas fa-user"></i>{{ __('Register') }}</a>
                                <!-- <a class="dropdown-item text-dark" href="{{url('registration')}}"><i class="fas fa-user"></i>
                                <a class="dropdown-item text-dark" href="{{url('login')}}"><i class="fas fa-user"></i>Login</a>
                           Register</a>
                      -->
                       </div>
                            @endif
                             @else
                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      {{ Auth::user()->name }}
                    </a>
                             <div class="dropdown-menu p-0" aria-labelledby="navbarDropdown">
                                   <a class="dropdown-item text-dark border-bottom border-dark" href="{{ route('logout') }}"><i class="fas fa-user"></i>{{ __('Logout') }}
                                   </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </div>
                            
                        @endguest
                   
                        
                            
                             
                        
                   
                  </li>
                         <li><button type="button" class="btn" style="margin-top: 20px;background:linear-gradient(to right, #cb2d3e, #ef473a);color:white" data-toggle="modal" data-target="#exampleModalCenter">
                    Write a review
                    </button></li>
                    </ul>

          <!----<ul class="nav navbar-nav navbar-right">
                         <li><a href="#"><i class="fa fa-phone"></i> +65 2244 1100</a></li>
                    </ul> ---->
               </div>

          </div>
     </section>






     <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX--->
      @yield('body')
    
     <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX--->




     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Vimbiso</h2>
                              </div>
                              <div class="footer-logo mb-2">
                                <a href="index.html"><img src="images/logo-no-bg-2.png" style="max-width: 124px;" class="img-fluid" alt="logo"></a>
                            </div>
                              <address>
                                   <p>1800 dapibus a tortor pretium,<br> Integer nisl dui, ABC 12000</p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>

                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2022 Vimbiso</p>
                                   
                                   <p>Design: Rokon</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Find us</h2>
                              </div>
                              <address>
                                   <p><a href="www.vimbiso.org">www.vimbiso.org</a></p>
                                   <p><a href="mailto: info@vimbiso.org">info@vimbiso.org</a></p>
                              </address>

                              <div class="footer_menu">
                                   <i class="fas fa-phone"></i> <h2>WhatsApp</h2>
                                   <span><a href="https://wa.me/message/6JWZWJBN4VDEA1" target="_blank">Send Message</a></span>
                                   <ul>
                                        <li><a href="#">Career</a></li>
                                        <li><a href="#">Investor</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Refund Policy</a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>Don't miss to subscribe to our new feeds, kindly fill the form below</h2>
                              </div>
                              <div>
                                   <div class="form-group">
                                        <form action="#" method="get">
                                             <input type="email" class="form-control" placeholder="Enter your email" name="email" id="email" required="">
                                             <input type="submit" class="form-control" name="submit" id="form-submit" value="Send me">
                                        </form>
                                        <span><sup>*</sup> Please note - we do not spam your email.</span>
                                   </div>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>
