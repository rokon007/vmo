@extends('frontpage.frontpage')
 

@section('body')  

<link rel="stylesheet" href="css/regi.css">
<div class="form_wrapper">
  <div class="form_container">
    <div class="title_container">
    	<center><h2>Create Business Account</h2></center>
      </div>
    
    <div class="row clearfix">
     
        <form method="POST" action="{{ route('register') }}">
        	 @csrf
       <div class="col-md-6">    
          <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Company Name</label>
                 <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" >
                      @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <input type="text"  id="adress" name="address" class="form-control" >
                     
            </div>
        </div> 

         <div class="col-md-6">    
           <div class="form-group">
                <label for="exampleInputEmail1">Company Contact</label>
                <input type="text"  id="companycontact" name="companycontact" class="form-control" >
                      
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <center><input class="btn btn-primary" type="submit" value="Register" /></center>
         
        </form>
        <br></br>
      <center>
      	 <div class="form-group">
                <small style="font-size: medium;">Already have an account? <a class="text-danger" href="{{url('login')}}">Login</a></small> 
            </div>
      </center>
    </div>
  </div>
</div>
<br></br>
<br></br>
<br></br>
<br></br>

@endsection