@extends('frontpage.frontpage')

@section('title') 
 <title>Vimbiso | Contact Us</title>
         <meta name="description" content="vary good">
     <meta name="keywords" content="vimbiso">
    
@endsection 
 
 

@section('body') 


      <!-- Content -->
    
<link rel="stylesheet" href="/static/css/contactus.css">
<link rel="stylesheet" href="/static/css/aboutus.css">

        <div class="container-fluid d-flex justify-content-center align-items-center pb-5">
                <div class="row">
                        <div class="col-lg-6 col-sm-12 d-flex justify-content-center align-items-center">
                                <div class="form-group d-flex justify-content-center align-items-center p-3">
                                <div class="image-circle">
                                        <img src="/static/images/logo-no-bg.png" />
                                </div>
                                </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                                <form>
                                        <h2 class="text-center mb-4">Talk to Us</h2>

                                        <!-- Name -->
                                        <div class="form-group position-relative">
                                                <label for="formName" class="d-block">
                                                <i class="icon" data-feather="user"></i>
                                                </label>
                                                <input type="text" id="formName" class="form-control form-control-lg thick" placeholder="Name">
                                        </div>

                                        <!-- E-mail -->
                                        <div class="form-group position-relative">
                                                <label for="formEmail" class="d-block">
                                                <i class="icon" data-feather="mail"></i>
                                                </label>
                                                <input type="email" id="formEmail" class="form-control form-control-lg thick" placeholder="E-mail">
                                        </div>

                                        <!-- Message -->
                                        <div class="form-group message">
                                                <textarea id="formMessage" class="form-control form-control-lg" rows="7" placeholder="Your message ..."></textarea>
                                        </div>
                                        
                                        <!-- Submit btn -->
                                        <div class="text-center">
                                                <button type="submit" class="btn border-0" style="background:linear-gradient(to right, #093028, #237A57);color:white" tabIndex="-1">Send message</button>
                                        </div>
                                </form>
                        </div>
                </div>
        </div>
@endsection 
@include('frontpage.give_review');


    