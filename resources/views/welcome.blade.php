@extends('frontpage.frontpage')
 
@section('title')

         <?php
     //$title = DB::table('titetle_and_tags')->first(); ?>

      <title> Vimbiso </title>
    <meta  name="keywords" content=" ">
    <meta name="description" content="">
  

@endsection
@section('body')  

 <section id="home">
          <div class="row">

             <div class="owl-carousel owl-theme home-slider">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                    <div class="container">
                    <div class="col-md-6 col-sm-12">
                         <h1>YOUR REVIEW MATTERS</h1>
                                             <h3>Read reviews,<span style="color:#d0a522;">Write reviews.</span> <span class="metallic-red">Find companies.</span></h3>
                         <form id="contact-form" role="form" action="" method="post">
                              

                              <div class="col-md-12 col-sm-12">
                                  <input type="search" name="search" class="form-control" placeholder="Company or category">
                    
                                   
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control btn-danger" name="search" value="Search">
                              </div>

                         </form>
                    </div>

                    

               </div>
                </div>
                </div>

               </div>
                </div>
          












<!--  <div class="owl-carousel owl-theme home-slider">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>YOUR REVIEW MATTERS</h1>
                                             <h3>Read reviews,<span style="color:#d0a522;">Write reviews.</span> <span class="metallic-red">Find companies.</span></h3>
               
                                            <div class="col-lg-12 col-sm-12 col-xs-12 cover-search ml-lg-5">
                <div id="search">
                    <form action="/search/" method="GET">
                         <fieldset class="clearfix mb-0">
                              <div class="col-lg-6">
                                      <input type="search" name="search" class="form-control" placeholder="Company or category">
                              </div>
                              <div class="col-lg-1"></div>
                              <div class="col-lg-2">
                                    <input type="submit" value="Search" style="float: right;" class="section-btn btn btn-default smoothScroll">
                              </div>
                           
                           
                         </fieldset>
                    </form>
                </div>
            </div>

                                        </div>
                                        
                                   </div>
                              </div>
                         </div> -->

                       <!---  <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Start your journey with our practical courses</h1>
                                             <h3>Our online courses are built in partnership with technology leaders and are designed to meet industry demands.</h3>
                                             <a href="#courses" class="section-btn btn btn-default smoothScroll">Take a course</a>
                                        </div>
                                   </div>
                              </div>
                         </div> -->

                    <!--     <div class="item item-third">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Efficient Learning Methods</h1>
                                             <h3>Nam eget sapien vel nibh euismod vulputate in vel nibh. Quisque eu ex eu urna venenatis sollicitudin ut at libero. Visit <a rel="nofollow" href="https://www.facebook.com/templatemo">templatemo</a> page.</h3>
                                             <a href="#contact" class="section-btn btn btn-default smoothScroll">Let's chat</a>
                                        </div>
                                   </div>
                              </div>
                         </div> -->
                    </div>
          </div>
     </section>
      <!--  Explore categories -->
      <section id="team">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2 style="float: left;">Explore categories <small>Meet Professional Trainers</small></h2>
                              <a class="btn btn-primary" style="float: right;"  href="{{url('/categories')}}" >View All</a>
                         </div>
                    </div>

                   @foreach($categories as $categorie)

                   <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">

                               <a href="/viewcompany1/{{$categorie->name}}" class=" btn btn-default form-control">{{$categorie->name}}</a>
                               <br></br>
                         </div>
                    </div>
          
                 @endforeach

               </div>
          </div>
     </section>
                    
                    
                    
                   

      <!--  Recent Reviews  -->
     <section id="testimonial">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Recent Reviews <small>from around the world</small></h2>
                         </div>

                         <div class="owl-carousel owl-theme owl-client">
						 
						 
						   
						 
						 
						 
						 
						  

						 
						
						 @foreach($Allreviews as $reviews)
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="tst-image">
                                             <img src="images/tst-image1.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="tst-author">
                                             <h4>{{$reviews->name}}&#160;<i class="fa fa-check-circle text-primary"></i></h4>
                                             <span><i class="fa fa-location" style="color:green;"></i>{{$reviews->branchlocation}}</span>
											 <p style="">{{$reviews->getAttribute('created_at')->format('D, d, M, Y')}} </p>
                                        </div>
										
										@if($reviews->getAttribute('ratings')==1) 
										<div class="tst-rating">
                                             <i class="fa fa-star" style="color:#C70039;"></i>
                                            
                                        </div>
										@elseif($reviews->getAttribute('ratings')==2)
										   <div class="tst-rating">
                                             <i class="fa fa-star" style="color:#FF5733;"></i>
                                             <i class="fa fa-star" style="color:#FF5733;"></i>
                                              
                                        </div>
										@elseif($reviews->getAttribute('ratings')==3)
										   <div class="tst-rating">
                                             <i class="fa fa-star" style="color:#FFC300;"></i>
                                             <i class="fa fa-star" style="color:#FFC300;"></i>
                                              <i class="fa fa-star" style="color:#FFC300;"></i>
                                             
                                        </div>
										@elseif($reviews->getAttribute('ratings')==4)
										    <div class="tst-rating">
                                             <i class="fa fa-star" style="color:#00ff36;"></i>
                                             <i class="fa fa-star" style="color:#00ff36;"></i>
                                              <i class="fa fa-star" style="color:#00ff36;"></i>
                                              <i class="fa fa-star" style="color:#00ff36;"></i>
                                              
                                        </div>
										@elseif($reviews->getAttribute('ratings')==5)
										      <div class="tst-rating">
                                             <i class="fa fa-star" style="color:#51a127;"></i>
                                             <i class="fa fa-star" style="color:#51a127;"></i>
                                              <i class="fa fa-star" style="color:#51a127;"></i>
                                              <i class="fa fa-star" style="color:#51a127;"></i>
                                              <i class="fa fa-star" style="color:#51a127;"></i>
                                        </div>
										@else
											<div class="tst-rating">
                                             <i class="fa fa-map" style="color:#C70039;"></i>
                                             
                                        </div>
										@endif
                                        <p>{{$reviews->review}}</p>
                                        <p class="mb-0 mt-3"style="font-size:18px; " ><i class="fa fa-building"></i>&#160;{{$reviews->company}}</p>
                                   </div>
                              </div>
                        @endforeach
                              

                             

                              

                         </div>

               </div>
          </div>
     </section>
 

 @include('frontpage.give_review');
@endsection