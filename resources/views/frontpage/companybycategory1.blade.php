@extends('frontpage.frontpage')
@section('title') 
 <title>
 The best {{$sub_name}} provider Harare, Zimbabwe | Vimbiso
</title>
      <!-- Required meta tags -->
        <meta charset="utf-8">
    <meta name="description" content="The most popular Zimbabwe {$sub_name}} classifieds by far. 500000 visitors per month and over 30000 adverts.">
     <meta name="keywords" content="The best {{$sub_name}} provider Harare, Zimbabwe .">
    <meta name="author" content="Tanaka Karumazondo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         
    
@endsection 
@section('body') 

 <!-- Content -->
    
<style>
    .card-text{
        color:black;
        margin-bottom:0px;
        font-size:12px;
    }
    .card-body{
        padding-top: 0.25rem !important;
    }
    .card-img {
        border-top-left-radius: 10px !important;
    }
    .card-title{
      margin-bottom:2px;
    }
    .text {
      overflow: hidden;
      text-overflow: ellipsis;
      display: -webkit-box;
      -webkit-line-clamp: 2; /* number of lines to show */
              line-clamp: 2; 
      -webkit-box-orient: vertical;
    }
    
    .card-img {
      width: 100%;
      border-radius: 10px;
    }
    @media only screen and (max-width: 768px) {
      .card{
        width: 100% !important;
      }
  }
  
  @media only screen and (min-width: 1200px) {
    .card{
      width: 85% !important;
    }
  }
</style>

 
 
		 
    <div class="container-fluid">
        <div class="row justify-content-center mb-5 pl-lg-5 pr-lg-5 p-3">
            <h2 class="col-12 d-flex justify-content-center p-3" style="color:var(--red);font-size: 2em;">
			<strong> List of '{{$sub_name}}' in Zimbabwe.</strong></h1>
			<div class="col-12 d-flex justify-content-center p-3" style="color:var(--greem);">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Top 10 '{{$sub_name}}' of Harare.
  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Business list of '{{$sub_name}}' over Zimbabwe.
  <br> Zimbabwe's Best bisuness directory of '{{$sub_name}}.
</div>
			
			  <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX--SEARCH--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->    
              <div class="col-sm-12 col-lg-3 col-md-3">
                    <h3 class="text-center"><b>Filter By</b></h3>
					<script type="text/javascript">
                    atOptions = {
                        'key' : '6050cdd679d716b3a40b7e7ca1241a34',
                        'format' : 'iframe',
                        'height' : 50,
                        'width' : 320,
                        'params' : {}
                           };
                    document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.effectivecreativeformats.com/6050cdd679d716b3a40b7e7ca1241a34/invoke.js"></scr' + 'ipt>');
                   </script>
                      <form method="GET" action="/view-companies/14/" id="search-form">
                        <div class="card mb-3" style="min-width: 16rem !important;border:3px solid var(--green);border-radius:10px">
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item text-center" style="background-color:var(--green);color:white">
                              <h5 class="m-0"><strong>No. of reviews</strong></h5>
                            </li>                            
                            <li class="list-group-item">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="numberofreviews" id="reviews-5" value="5" >
                                  <label class="form-check-label" for="exampleRadios1">5+
                                  </label>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="numberofreviews" id="reviews-10" value="10" >
                                  <label class="form-check-label" for="exampleRadios1">10+
                                  </label>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="numberofreviews" id="reviews-25" value="25" >
                                  <label class="form-check-label" for="exampleRadios1">25+
                                  </label>
                              </div>
                            </li>
                          </ul>
                        </div>
						
						
						
						<script type="text/javascript">
                    atOptions = {
                        'key' : '6050cdd679d716b3a40b7e7ca1241a34',
                        'format' : 'iframe',
                        'height' : 50,
                        'width' : 320,
                        'params' : {}
                           };
                    document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.effectivecreativeformats.com/6050cdd679d716b3a40b7e7ca1241a34/invoke.js"></scr' + 'ipt>');
                   </script>
				   
				   
				   
				   
                        
                        <div class="card mb-3" style="min-width: 16rem !important;border:3px solid var(--green);border-radius:10px">
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item text-center" style="background-color:var(--green);color:white">
                              <h5 class="m-0"><strong>Company status</strong></h5>
                            </li>
                            
                            <li class="list-group-item">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="status" id="status-1" value="1" >
                                  <label class="form-check-label" for="exampleRadios1">Claimed
                                  </label>
                                  <p>List companies that have a Vimbiso account but we have no records of them asking their customers for reviews.</p>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="status" id="status-2" value="2" >
                                  <label class="form-check-label" for="exampleRadios1">Unclaimed
                                  </label>
                                  <p>List companies that haven't claimed their Vimbiso account</p>
                              </div>
                            </li>
                            
                            <li class="list-group-item">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="status" id="status-3" value="3" >
                                  <label class="form-check-label" for="exampleRadios1">Asking for reviews
                                  </label>
                                  <p>List companies that are regularly asking their customers for reviews — whether positive or negative.</p>
                              </div>
                            </li>
                          </ul>
                        </div>
						
						
						
						<script type="text/javascript">
                    atOptions = {
                        'key' : '6050cdd679d716b3a40b7e7ca1241a34',
                        'format' : 'iframe',
                        'height' : 50,
                        'width' : 320,
                        'params' : {}
                           };
                    document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.effectivecreativeformats.com/6050cdd679d716b3a40b7e7ca1241a34/invoke.js"></scr' + 'ipt>');
                   </script>
				   
				   
                        
                        <div class="card" style="min-width: 16rem !important;border:3px solid var(--green);border-radius:10px">
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item text-center" style="background-color:var(--green);color:white">
                              <h5 class="m-0"><strong>Time Period</strong></h5>
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
                                  <input class="form-check-input" type="radio" name="timeperiod" id="time-2" value="2" >
                                  <label class="form-check-label" for="exampleRadios1">6 months
                                  </label>
                                  
                              </div>
                            </li>
                            
                            <li class="list-group-item">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="timeperiod" id="time-3" value="3" >
                                  <label class="form-check-label" for="exampleRadios1">12 months
                                  </label>
                              </div>
                            </li>

                          </ul>
                        </div>
                        
                      </form>
              </div>
	  <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX---END SEARCH---XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->    		  
	  <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX---pagination---XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->    		  
                <div class="col-sm-12 col-lg-7 col-md-7 p-3 ">
                  <div class="d-flex justify-content-center m-2">
                        <ul class="pagination">
						{{$RData1->links()}}                       
                        </ul>
                  </div>  
          <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX----end pagination----XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->              
                  
          <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX---COMPANY--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->              
                      @foreach($RData1 as $Data) 
					   
					   
					   
					    <div
						 @if(round(($Data->totalratings)/($Data->count))==1) 
						class="card mb-3 review-bad" 
					     @elseif(round(($Data->totalratings)/($Data->count))==2)
						 class="card mb-3 review-bad" 
						  @elseif(round(($Data->totalratings)/($Data->count))==3)
						   class="card mb-3 review-medium"
						    @elseif(round(($Data->totalratings)/($Data->count))==4)
							class="card mb-3 review-good"
							 @elseif(round(($Data->totalratings)/($Data->count))==5)
						class="card mb-3 review-good"
						 @else
							 class="card mb-3 review-bad"
						 @endif
						style="background-color:#e9e9ed;padding:0px !important">
					  
                    
                      
                          
       <a href="/profile/{{$Data->company}}"> 
                      <div class="row no-gutters">
                        <div class="col-md-3 d-flex align-items-center justify-content-center">
                          
                           @if(File::exists("uploads/image/$Data->email.jpg"))
   <img src="<?php echo asset("uploads/image/$Data->email.jpg")?>"  class="card-img" alt="..." width="80" height="90" >
                          @elseif(File::exists("uploads/image/$Data->email.png")) 
  <img src="<?php echo asset("uploads/image/$Data->email.png")?>"  class="card-img" alt="..." width="80" height="90" >
                          @elseif(File::exists("uploads/image/$Data->email.webp"))
   <img src="<?php echo asset("uploads/image/$Data->email.webp")?>"  class="card-img" alt="..." width="80" height="90" >
   @elseif(File::exists("uploads/image/$Data->email.jpeg"))
   <img src="<?php echo asset("uploads/image/$Data->email.jpeg")?>"  class="card-img" alt="..." width="80" height="90" >
   @elseif(File::exists("uploads/image/$Data->email.gif"))
   <img src="<?php echo asset("uploads/image/$Data->email.gif")?>"  class="card-img" alt="..." width="80" height="90" >
   @elseif(File::exists("uploads/image/$Data->email.svg"))
   <img src="<?php echo asset("uploads/image/$Data->email.svg")?>"  class="card-img" alt="..." width="80" height="90" >   
                           @else
  <img src="<?php echo asset("uploads/image/non.jpg")?>"  class="card-img" alt="..." width="80" height="90" >
                       @endif
                          
                        </div>
                        <div class="col-md-9">
                          <div class="card-body">
                            <p class="card-title" style="color:#1b3d81;font-size:18px">{{$Data->company}}</p>
                            <p class="card-text">
                              
                                
                                <i class="fas fa-chevron-circle-right metallic-green"></i> {{$Data->category}} -&gt; {{$Data->subcategory}}
                                
                              
                              </p>
                            <p class="card-text"><i class="fas fa-map-marker-alt"></i>  {{$Data->block}}, {{$Data->city}}, {{$Data->country}}</p>
								{{--<p class="card-text"><i class="fas fa-phone"></i>  ***** {{ substr($Data->contact, -3);}} &nbsp <span class="pull-right"><i class="fas fa-envelope"></i>  ***** {{ substr($Data->email, -5);}}</span></p>--}}
								 <p class="card-text"><i class="fas fa-phone"></i> {{$Data->contact}} &nbsp <span class="pull-right"><i class="fas fa-envelope"></i>{{$Data->email}}</span></p>
                            <p class="card-text">Total Reviews: <strong>{{$Data->count-1}}</strong>  &nbsp <span class="float-right">VimbisoScore: <strong>0</strong></span></p>
                              <p class="text-center">
							   
						@if(($Data->count-1)!=0)
							    @if(round(($Data->totalratings)/($Data->count-1))==1) 
										<div class="tst-rating">
                                             <i class="fa fa-star" style="color:#C70039;"></i>
                                            
                                        </div>
										@elseif(round(($Data->totalratings)/($Data->count-1))==2)
										   <div class="tst-rating">
                                             <i class="fa fa-star" style="color:#FF5733;"></i>
                                             <i class="fa fa-star" style="color:#FF5733;"></i>
                                              
                                        </div>
										@elseif(round(($Data->totalratings)/($Data->count-1))==3)
										   <div class="tst-rating">
                                             <i class="fa fa-star" style="color:#FFC300;"></i>
                                             <i class="fa fa-star" style="color:#FFC300;"></i>
                                              <i class="fa fa-star" style="color:#FFC300;"></i>
                                             
                                        </div>
										@elseif(round(($Data->totalratings)/($Data->count-1))==4)
										    <div class="tst-rating">
                                             <i class="fa fa-star" style="color:#008000;"></i>
                                             <i class="fa fa-star" style="color:#008000;"></i>
                                              <i class="fa fa-star" style="color:#008000;"></i>
                                              <i class="fa fa-star" style="color:#008000;"></i>
                                              
                                        </div>
										@elseif(round(($Data->totalratings)/($Data->count-1))==5)
										      <div class="tst-rating">
                                             <i class="fa fa-star" style="color:#034a03;"></i>
                                             <i class="fa fa-star" style="color:#034a03;"></i>
                                              <i class="fa fa-star" style="color:#034a03;"></i>
                                              <i class="fa fa-star" style="color:#034a03;"></i>
                                              <i class="fa fa-star" style="color:#034a03;"></i>
                                        </div>
										
										
                                      
                                        </p>
                                        @elseif(($Data->totalratings)/($Data->count) ==1)
                          
                            <p style="color:var(--red)" class="m-0">Not rated yet</p>
                            @endif
							 @endif
							  
                              
                                     
                              
                            
                            <p class="card-text text">None</p>
                            
                          </div>
                        </div>
                      </div>
                      </a>
                      <div style="width:25%;">
                      <div class="d-flex flex-row">
                      
                      <a href="/info/{{$Data->id}}"><p class="text-center btn btn-warning m-2" style="border-radius:12px;color:white"><i class="fas fa-envelope"></i> View Email</p></a> 
                      <a href="/contact/{{$Data->id}}"><p class="text-center btn btn-warning m-2" style="border-radius:12px;color:white"><i class="fas fa-phone"></i> View Contact</p></a> 
      
					  </div>
                    </div>
                    </div>
                   @endforeach
     <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX----END COMPANY----XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->             
                  
                </div>
                    
        </div>
    </div>

    <script>
            ''
        </script>
		
		 @include('frontpage.request_email');
		 @include('frontpage.request_contact');
		  @include('frontpage.give_review');
<!-- Modal 
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
     <div class="modal-header metallic-red-bg">
                <div class="d-flex justify-content-center ">
                    <h3 class="modal-title text-white text-center " id="exampleModalLongTitle">Give a review</h3>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
      <div class="modal-body">
       <div class="form-group d-flex flex-row">
					 <div class="col-lg-12 col-sm-12 p-0 pr-3">
					 <div class="form-group">
					 <a href="/auth/redirectgoogle"><button class="btn  form-control"><img src="https://img.icons8.com/color/48/000000/google-logo.png"/> Continue with Google</button></a>
					 </div>
						</div>
						</div>
		 <div class="form-group d-flex flex-row">				
						
						 <div class="col-lg-12 col-sm-12 p-0 pr-3">
					 <div class="form-group">
					  <a href="/auth/redirectfacebook"><button class="btn  form-control"> <img src="https://img.icons8.com/cute-clipart/48/000000/facebook.png"/> Continue with FaceBook</button></a>
					 </div>
						</div>
						</div>
						
			 <div class="form-group d-flex flex-row">			
                         <div class="col-lg-12 col-sm-12 p-0 pr-3">
                     <div class="form-group">
                      <a href="/review"><button class="btn  form-control"><img <img src="https://vimbisotest.herokuapp.com/static/images/favicon.ico"/> Continue with Vimbiso</button></a>
                     </div>
                        </div>
						</div>
						
					 
                    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div> -->
<!-- Modal -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="details-modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Details</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"></div>
    </div>
  </div>
</div>

		 

 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     @if($message = Session::get('email'))
		 
	 <script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
			 <script>
$(function() {
    $('#request_email_Modal').modal('show');
});
</script>
		 <script>
	         
			//   swal({  title: "Email Info...",
         // text: "Email: {!!Session::get('success')!!}",
         // icon: "../uploads/image/email.jpg",
         
  //});
	     </script>
		  @endif
		   @if($message = Session::get('contact'))
		 
			 <script>
$(function() {
    $('#request_contact_Modal').modal('show');
});
</script>
		 <script>
		  @endif
		   @if($message = Session::get('success'))
		 <script>
	          swal({  title: "Email Info...",
          text: "{!!Session::get('success')!!}",
          icon: "../uploads/image/email.jpg",
         
  });
	     </script>
		  @endif
		  @if($message = Session::get('success2'))
		 <script>
	          swal({  title: "Contact Info...",
          text: "{!!Session::get('success2')!!}",
          icon: "../uploads/image/contact.png",
         iconHeight: 80, 
    iconWidth: 80,       
    iconClass:'img-responsive rounded-circle',
  });
	     </script>
		  @endif

<style>
.swal-icon img{
  width: 120px;
  height: 120px;
  Class:'img-responsive rounded-circle';
}
</style>
@endsection