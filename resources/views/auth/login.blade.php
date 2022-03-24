@extends('frontpage.frontpage')
 @section('title') 
 <title>Vimbiso | Login</title>
         <meta name="description" content="vary good">
     <meta name="keywords" content="vimbiso">
	 
    
@endsection 

@section('body')  

 <!-- Content -->
    
<style>
    .row{
        margin-left: 0px;
    }
</style>
<link rel="stylesheet" href="/static/css/aboutus.css">

    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-12 d-flex justify-content-center align-items-center">
                <div class="form-group d-flex justify-content-center align-items-center p-3">
                    <div class="image-circle">
                        <img src="static/images/logo-no-bg.png" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 m-lg-0 m-4" style="border:2px solid var(--red);border-radius:10px">
                <h2 class="text-center p-3"><strong>Business Account Login</strong></h2>
                
              <form method="POST" action="{{ route('login') }}">
                        @csrf
                   
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" @error('email') is-invalid @enderror"  placeholder="Enter email" value="{{ old('email') }}" required autocomplete="email" autofocus >
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" @error('password') is-invalid @enderror" required autocomplete="current-password">
                    </div>
                    <div class="form-group text-center"> <button type="submit" class="btn" style="background-color:var(--red);color:white">Login</button> </div>
                    <div class="form-group p-3"> 
                        <small class="float-left text-dark" style="font-size: medium;">Don't have an account? <a style="color:var(--green)" href="{{ route('register')}}" >Register</a></small>
                        <a class="float-right" style="color:var(--blue)" href="/accounts/password/reset/">Forgot Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
	 @if($message = Session::get('error'))
		 <script>
	          swal("Login faild","{!!Session::get('error')!!}","error",{
				  button:"OK",
			  })
	     </script>
		 
	 @endif



@endsection