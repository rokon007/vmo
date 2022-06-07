<!doctype html>

<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-225043657-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-225043657-1');
</script>


    
     @yield('title')
   <!-- <title>Vimbiso - Home</title> -->

    
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/rokon/maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="" >
    <link rel="stylesheet" href="/rokon/static/css/style.css"> 
    <link rel="stylesheet" href="/rokon/static/css/auth.css">
    <script src="/rokon/ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--<script src="/rokon/cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->
    <link rel="stylesheet" href="/rokon/pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="" /> 
    <link rel="stylesheet" href="/rokon/static/css/notifications.css ">
    <script src="/rokon/static/js/notifications.var.js " type="text/javascript"></script>
    <link href="/rokon/cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="/rokon/cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <link rel="shortcut icon" type="image/png" href="/rokon/static/images/favicon.ico"/>
	<style>
a.ex1:hover {
 background-color: #008000; //add this of course....
    color: #fdfcfb;
}
 

</style>
    
  </head>

  <body>
    <!-- Navbar -->
    
<nav class="navbar navbar-expand-lg navbar-light bg-white pl-5 pr-5">
    <a class="navbar-brand" href="/"><img src="{{asset('images/logo-no-bg-2.png')}}" class="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            
        </ul>
        <div class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
			    
				 <li class="nav-item active">
                    <a class="nav-link ex1" href="{{url('/')}}">Home</a>
                </li>		 
                <li class="nav-item active">
                    <a class="nav-link ex1" href="{{url('about')}}">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active ex1" href="{{url('categories')}}">View Companies</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link ex1" href="{{url('contactus')}}">Contact us</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link ex1" href="{{url('plans')}}">Plans</a>
                </li>
                
                <li class="nav-item dropdown active">
				 @guest
                            @if (Route::has('login'))
                    <a class="nav-link dropdown-toggle ex1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      For Businesses
                    </a>
                    <div class="dropdown-menu p-0" aria-labelledby="navbarDropdown">
                        
                            <a class="dropdown-item text-dark border-bottom border-dark ex1" href="{{route('password.request')}}"><i class="fab fa-get-pocket"></i>&nbsp Claim Profile</a>
                            <a class="dropdown-item text-dark border-bottom border-dark ex1"  href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i>&nbsp {{ __('Login') }}</a>
							 @endif
							  @if (Route::has('register'))
                            <a class="dropdown-item text-dark ex1" href="{{ route('register') }}"> <i class="fas fa-user-plus"></i>&nbsp {{ __('Register') }}</a>
                        
                    </div>
					 @endif
                             @else
 <a class="nav-link dropdown-toggle ex1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                							  <i class="fa fa-user" style="color:green;font-size:25px;"></i>
							  &#160;
                      {{Auth::user()->company_name}}
                    </a>
             <div class="dropdown-menu p-0" aria-labelledby="navbarDropdown">
                        
                            <a class="dropdown-item text-dark border-bottom border-dark ex1" href="{{route('password.request')}}"><i class="fab fa-get-pocket"></i>&nbsp Claim Profile</a>
							 <a class="dropdown-item text-dark border-bottom border-dark ex1"href="/profile/{{Auth::user()->company_name}}"><i class="fab fa-get-pocket"></i>&nbsp {{ __('Profile') }}</a>
							  <a class="dropdown-item text-dark border-bottom border-dark ex1"  href="/update_profile/{{Auth::user()->email}}"><i class="fab fa-get-pocket"></i>&nbsp {{ __('Settings') }}</a>
                            <a class="dropdown-item text-dark border-bottom border-dark ex1"  href="{{ route('logout') }}"
							onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">					
							<i class="fas fa-sign-in-alt"></i>&nbsp  {{ __('Logout') }}</a>
							 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
            </div>		
          @endguest			
                  </li>
                <li class="nav-item">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn" style="margin-top: 20px;background:linear-gradient(to right, #cb2d3e, #ef473a);color:white" data-toggle="modal" data-target="#exampleModalCenter">
                    Write a review
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <!-- Content -->

     @if($message = Session::get('success'))
		 <script>
	          swal("Thanks for your contribution","{!!Session::get('success')!!}","success",{
				  button:"OK",
			  })
	     </script>
		 
	 @endif
     <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX--->
      @yield('body')
     <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX--->
      
     
   
    
  
    <!-- Site footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-2 pb-2">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30 d-flex justify-content-center border-right border-dark">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span><a href = "">www.vimbiso.org</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30 d-flex justify-content-center border-right border-dark">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>WhatsApp</h4>
                                <span><a href="https://wa.me/message/6JWZWJBN4VDEA1" target="_blank">Send Message</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30 d-flex justify-content-center">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span><a href = "mailto: info@vimbiso.org">info@vimbiso.org</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-2 pb-2">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50 d-flex justify-content-center">
                        <div class="footer-widget">
                            <div class="footer-logo mb-2">
                                <a href="index.html"><img src="/static/images/logo-no-bg-2.png" style="max-width: 124px;" class="img-fluid" alt="logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 mb-50 d-flex justify-content-center">
                        <div class="footer-widget">
                            <div class="footer-text mb-25">
                                <p style="color:black;font-size:14px">Don't miss to subscribe to our new feeds, kindly fill the form below.</p>
                                <div class="subscribe-form">
                                    <form action="#">
                                        <input type="text" placeholder="Email Address">
                                        <button class="m-0"><i class="fab fa-telegram-plane"></i></button>
                                    </form>
                                </div>
                            </div>                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright © 2022, All Rights Reserved Vimbiso</a></p>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 text-center text-lg-right">
                        <div class="copyright-text">
                            <p><a href="{{url('terms_conditons')}}">Terms and conditons</a> | <a href="{{url('privacy_policy')}}">Privacy policy</a></p>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/rokon/cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="/rokon/maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
    <!-- UIkit JS -->
    <script src="/rokon/cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js"></script>
    <script src="/rokon/cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.min.js"></script>
    <script>
        let notifier = new AWN({});
        $('.js-example-basic-single').select2();
      </script>
    
    
  </body>
</html>