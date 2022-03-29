@extends('frontpage.frontpage')
 @section('title') 
 <title>Vimbiso | Password Reset</title>
         <meta name="description" content="vary good">
     <meta name="keywords" content="vimbiso">
	 
    
@endsection 

@section('body')  

  <!-- Content -->
    
<div class="container-fluid">
    <div class="d-flex justify-content-center">
        
    </div>
    
        <form method="POST" action="{{ route('password.email') }}" class="row d-flex justify-content-center password_reset" >
                        @csrf
        @if(session('status'))
           <p class="bg-green-500 text-white p-3 w-full rounded-lg tect-center">{{session('faild')}}</p> 
           @elseif(session('email')) 
            <p class="bg-red-500 text-white p-3 w-full rounded-lg tect-center">{{session('email')}}</p>            
        @endif
                        
        <h2 class="col-12 text-center p-3 metallic-red"><strong>Password Reset</strong></h2>
        <div class="col-lg-6 col-sm-12 p-5 m-3" style="border:2px solid var(--red);border-radius:10px">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
               <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="form-group d-flex justify-content-center">  
                <button type="submit" class="btn btn-blue btn-lg text-center">Reset Password</button>
            </div>
            <div class="form-group d-flex justify-content-center">          
                <a href="{{ route('login') }}" class="btn text-white btn-primary">Login</a>
            </div>
            <div class="form-group text-center"> 
                <span style="color:var(--green);font-weight:500">We will send a verification code to your email address.
                    <br><i>If you face trouble resetting your password, please contact our support.</i></span>
                </div>
            </div>    
    </form>
</div>
<script>
    ''
</script>

    
    
        <script>
            ''
        </script>

@endsection