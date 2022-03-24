@extends('frontpage.frontpage')
@section('title') 
 <title>Vimbiso | Create Business</title>
         <meta name="description" content="vary good">
     <meta name="keywords" content="vimbiso">
    
@endsection 
 

@section('body')  
<div class="container-fluid">
    <div class="d-flex justify-content-center">
        
    </div>
   <form class="row d-flex justify-content-center" method="POST" action="{{ route('register') }}">
        	 @csrf
        <h2 class="col-12 text-center p-3 metallic-red"><strong>Create Business Account</strong></h2>
     
        
        <div class="col-lg-5 col-sm-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1"  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required  autofocus placeholder="Enter a valid email address">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Company Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="company_name" placeholder="Enter unique company name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="address" placeholder="Enter your company address">
            </div>
        </div>
        <div class="col-lg-5 col-sm-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Company Contact</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="contact" placeholder="Enter company contact">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation" placeholder="Enter password">
            </div>
        </div>
	
        <div class="flex-row">
            <div class="form-group text-center">
                <button type="submit" class="btn metallic-red-bg text-center">Sign Up</button>
            </div>
            <div class="form-group">
                <small style="font-size: medium;">Already have an account? <a class="text-danger"  href="{{url('login')}}">Login</a></small> 
            </div>
        </div>
    </form>
</div>










@endsection