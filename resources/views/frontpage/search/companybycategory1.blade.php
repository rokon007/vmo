<!DOCTYPE html>
<html lang="en">
<head>

      @yield('title')
    <!-- <title>Vimbiso</title>
         <meta name="description" content="vary good">
     <meta name="keywords" content="vimbiso">
     -->
<!-- 

Known Template 

https://templatemo.com/tm-516-known

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="../css/bootstrap.min.css">
     <link rel="stylesheet" href="../css/font-awesome.min.css">
     <link rel="stylesheet" href="../css/owl.carousel.css">
     <link rel="stylesheet" href="../css/owl.theme.default.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="../css/templatemo-style.css">
     <style>
    .div-1 {
        background-color: #f20c23;
    }
    .div-11 {
        background-color: #eeede6;
    }
    .div-12 {
        background-color: #dfded7;
    }
    
    .div-2 {
     background-color: #ABBAEA;
    }
    
    .div-3 {
     background-color: #FBD603;
    }
    .div-green {
     background-color: #47a73b;
    }
    .div-4 {
     background-color: #e9e9ed;
    }
    .div-5 {
     background-color: #1b3d81;
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
                     <a href="index.html"><img src={{asset("images/logo-no-bg-2.png")}} style="max-width: 124px;" class="img-fluid" alt="logo"></a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="{{url('home')}}" class="smoothScroll">Home</a></li>
                         <li><a href="{{url('about')}}" class="smoothScroll">About</a></li>
                         <li><a href="{{url('companies')}}" class="smoothScroll">View Companies</a></li>
                         
                         
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
                                    <a class="dropdown-item text-dark border-bottom border-dark" href="{{ route('login') }}"><i class="fa fa-user">{{ __('Login') }}</i></a>
                                    <!--<a class="dropdown-item text-dark border-bottom border-dark" href="{{url('about')}}"><i class="fab fa-get-pocket"></i>Profile</a>-->
                               
                            @endif
                             @if (Route::has('register'))
                                
                                    <a class="dropdown-item text-dark" href="{{ route('register') }}"><i class="fa fa-user">{{ __('Register') }}</i></a>
                                <!-- <a class="dropdown-item text-dark" href="{{url('registration')}}"><i class="fas fa-user"></i>
                                <a class="dropdown-item text-dark" href="{{url('login')}}"><i class="fas fa-user"></i>Login</a>
                           Register</a>
                      -->
                       </div>
                            @endif
                             @else
                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     <i class="fa fa-user" style="color:green;font-size:25px;"></i>
                                     &#160;
                      {{ Auth::user()->name }}
                    </a>
                             <div class="dropdown-menu p-0" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                              <a class="dropdown-item text-dark" href="{{ route('profile') }}"><i class="fa fa-get-pocket">{{ __('Profile') }}</i></a>
                                              <a class="dropdown-item text-dark" href="{{ route('settings') }}"><i class="fa fa-user">{{ __('Settings') }}</i></a>
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
     @if($message = Session::get('success'))
     
           <script>
               swal("Thanks for your contribution","{!!Session::get('success')!!}","success",{
                      button:"OK",
                 })
          </script>
           
      @endif




     <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX--->
      <section id="courses">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Companies<small>Find the right company for you</small></h2>
                         </div>
						 <div class="row">
						     <div class="col-sm-12 col-lg-3 col-md-3">
							      <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                <!---->
                                                  <div class="card card1">
												  <form method="GET" action="#" id="search-form">
                                                   <div class="card-body">
                                                     <div class="card-header">
													  <br>
													 <center>
                                                       <h3 style="font-weight:700"></strong>Filter By</strong></h3>
													   </center>
                                                      <br>
                                                       
                                                   </div>
                   <div class="card mb-3" style="min-width: 16rem !important;border:3px solid var(--green);border-radius:10px">
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item text-center div-green" style="color:white">
                              <h3 class="m-0"style="color:white"><strong>No. of reviews</strong></h3>
                            </li>                            
                            <li class="list-group-item">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="numberofreviews" id="reviews-5" value="5">
                                  <label class="form-check-label" for="exampleRadios1">5+
                                  </label>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="numberofreviews" id="reviews-10" value="10">
                                  <label class="form-check-label" for="exampleRadios1">10+
                                  </label>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="numberofreviews" id="reviews-25" value="25">
                                  <label class="form-check-label" for="exampleRadios1">25+
                                  </label>
                              </div>
                            </li>
                          </ul>
                       
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item text-center div-green" style="color:white">
                              <h3 class="m-0"><strong>Company status</strong></h3>
                            </li>
                            
                            <li class="list-group-item">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="status" id="status-1" value="1">
                                  <label class="form-check-label" for="exampleRadios1">Claimed
                                  </label>
                                  <p>List companies that have a Vimbiso account but we have no records of them asking their customers for reviews.</p>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="status" id="status-2" value="2">
                                  <label class="form-check-label" for="exampleRadios1">Unclaimed
                                  </label>
                                  <p>List companies that haven't claimed their Vimbiso account</p>
                              </div>
                            </li>
                            
                            <li class="list-group-item">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="status" id="status-3" value="3">
                                  <label class="form-check-label" for="exampleRadios1">Asking for reviews
                                  </label>
                                  <p>List companies that are regularly asking their customers for reviews — whether positive or negative.</p>
                              </div>
                            </li>
                          </ul>
						  
						  
						  <ul class="list-group list-group-flush">
                            <li class="list-group-item text-center div-green" style="color:white">
                              <h3 class="m-0"><strong>Time Period</strong></h3>
                            </li>
                            
                            <li class="list-group-item">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="timeperiod" id="time-1" value="1">
                                  <label class="form-check-label" for="exampleRadios1">1 month
                                  </label>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="timeperiod" id="time-2" value="2">
                                  <label class="form-check-label" for="exampleRadios1">6 months
                                  </label>
                                  
                              </div>
                            </li>
                            
                            <li class="list-group-item">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="timeperiod" id="time-3" value="3">
                                  <label class="form-check-label" for="exampleRadios1">12 months
                                  </label>
                              </div>
                            </li>

                          </ul>
                        </div>
						<!---->
                     </div>
			      </form>
               </div>
             <!---->
            </div>
           </div>
		</div>
	 </div>
	 
	 
	 <!------------------------------------------------------------->
	 


	

                                                                                
          @foreach($CompanyData1 as $Data)                                            		
	  <div class="col-sm-3 col-lg-8 col-md-3 ">
	                   
	               <a href="#">
                      <div class="row no-gutters list-group-item text-center" border="" style="border:5px;border:red;background-color:#e9e9ed;padding:0px !important">>
					  <br>
                        <div class="col-lg-3  align-items-center justify-content-center">
                          <!--<img src="images/logo-no-bg-2.png">-->
                            <img src={{asset("images/llogo.jpg")}} class="img-responsive" style="width:160px;height:200px" class="card-img" alt="" >
                          
                          
                        </div>
	                   <div class="col-lg-9 align-items-center justify-content-center">
                          <ul>
                            <li>
                              <p class="card-title" style="font-size:25px">{{$Data->company}}</p>
							 
                            <p style="font-size:16px">
                              
                                
                            {{$Data->category}}-> {{$Data->subcategory}}
                                
                              
                              </p>
							  
                            <p  style="font-size:18px"><i class="fa fa-map-marker-alt"></i> {{$Data->block}},{{$Data->city}}, {{$Data->country}}</p>
                            <p  style="font-size:18px"><i class="fa fa-phone"></i>{{$Data->contact}} &nbsp; <span ><i class="fas fa-envelope"></i> {{$Data->contact}}</span></p>
                            <p  style="font-size:18px">Total Reviews: <strong>0</strong>  &nbsp; <span class="float-right">VimbisoScore: <strong>0</strong></span></p>
                              <p class="text-center">
                              
                                      </p><p style="color:red;font-size:18px" class="m-0">Not rated yet</p>
                              
                            
                            <p class="card-text text"></p>
                            </li>                            
                           
                           
                          </ul>
						  </div>
                        </div>
						</a>
						 <div ><br></div>
	               </div>
				   
				   
	  @endforeach 
	 
	
						 
						 
						 
						 
						 
						 
						 

                       

                    </div>
             </div>
    </section>



     <!-- Modal -->
           @include('frontpage.give_review');
     <!-- FOOTER -->
    
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
     <script src="../js/jquery.js"></script>
     <script src="../js/bootstrap.min.js"></script>
     <script src="../js/owl.carousel.min.js"></script>
     <script src="../js/smoothscroll.js"></script>
     <script src="../js/custom.js"></script>

</body>
</html>