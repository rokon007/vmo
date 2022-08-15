@extends('frontpage.frontpage')


@section('title') 
 <title>
 {{$CData->company}}
</title>
        <!-- Required meta tags -->
    <meta charset="utf-8">
         <meta name="description" content="{{$CData->description}}">
     <meta name="keywords" content="{{$CData->company}}">
	<meta name="author" content="Tanaka Karumazondo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
   <script src="/rokon/cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
   <link rel="stylesheet" href="/rokon/static/css/review.css"> 
     
@endsection 
@section('body') 


@if($CData==NULL)
	<script>
window.location.href = "{{ route('settings') }}"
</script>


 @else
	 
 <style>
#image {
  display: block;
  width: 55%;
  height: auto;
  position: absolute;
  bottom: 0;
  transition: .10s ease;
}
  
}
</style>
 <div class="container-fluid m-0 p-0">
        <div class="bg-white row d-flex justify-content-center text-center align-items-center">
                @if(File::exists("uploads/image/$CData->email.jpg"))
   <img src="<?php echo asset("uploads/image/$CData->email.jpg")?>"  class="border border-dark" style="max-height: 149px;max-width: 198px;">
   @elseif(File::exists("uploads/image/$CData->email.png")) 
   <img src="<?php echo asset("uploads/image/$CData->email.png")?>"  class="border border-dark" style="max-height: 149px;max-width: 198px;">
    @elseif(File::exists("uploads/image/$CData->email.webp"))
    <img src="<?php echo asset("uploads/image/$CData->email.webp")?>"  class="border border-dark" style="max-height: 149px;max-width: 198px;">
	@elseif(File::exists("uploads/image/$CData->email.jpeg"))
    <img src="<?php echo asset("uploads/image/$CData->email.jpeg")?>"  class="border border-dark" style="max-height: 149px;max-width: 198px;">
	@elseif(File::exists("uploads/image/$CData->email.gif"))
    <img src="<?php echo asset("uploads/image/$CData->email.gif")?>"  class="border border-dark" style="max-height: 149px;max-width: 198px;">
	@elseif(File::exists("uploads/image/$CData->email.svg"))
    <img src="<?php echo asset("uploads/image/$CData->email.svg")?>"  class="border border-dark" style="max-height: 149px;max-width: 198px;">
   @else
    <img src="<?php echo asset("uploads/image/non.jpg")?>"   class="border border-dark" style="max-height: 149px;max-width: 198px;">
   @endif
           
            <div class="flex-column pl-4">
                <h1 class="font-heading-sm">{{$CData->company}}</h1>
				
                <p>Total Reviews:{{$reviewscount-1}}</p>
				 @if($ratings !=NULL)
						@if(($reviewscount-1)!=0)
				  @if(round($ratings/($reviewscount-1)) ==1) 
                <span class="fa fa-star checked" style="color:#C70039;"></span> 
                  @elseif(round($ratings/($reviewscount-1)) ==2) 			
                <span class="fa fa-star checked" style="color:#FF5733;"></span>
               <span class="fa fa-star checked" style="color:#FF5733;"></span>
				@elseif(round($ratings/($reviewscount-1)) ==3) 
				<span class="fa fa-star checked" style="color:#FFC300;"></span>
                <span class="fa fa-star checked" style="color:#FFC300;"></span>
                <span class="fa fa-star checked" style="color:#FFC300;"></span>				
				@elseif(round($ratings/($reviewscount-1)) ==4) 
					
				<span class="fa fa-star checked" style="color:#008000;"></span>
				<span class="fa fa-star checked" style="color:#008000;"></span>
				<span class="fa fa-star checked" style="color:#008000;"></span>
				<span class="fa fa-star checked" style="color:#008000;"></span>
					
				@elseif(round($ratings/($reviewscount-1)) ==5) 
					
				<span class="fa fa-star checked" style="color:#034a03;"></span>
				<span class="fa fa-star checked" style="color:#034a03;"></span>
				<span class="fa fa-star checked" style="color:#034a03;"></span>
				<span class="fa fa-star checked" style="color:#034a03;"></span>
				<span class="fa fa-star checked" style="color:#034a03;"></span>
					
				
					 @endif
				  @endif
				  @endif
                <p> Avg ratings: <strong>
                    @if($ratings !=NULL)
						@if(($reviewscount-1)!=0)
                {{round($ratings/($reviewscount-1))}}
			@else
                0
			@endif
                @else
                0
                @endif
            </strong></p>
                
            </div>
        </div>
        
         
        <div class="row">
            <div class="d-flex flex-column col-lg-8 col-sm-12">
                <div class="theme--light p-lg-5 p-0">
                    <div class="comments">
                        <div class=" text-center m-lg-5 m-3" ><h2><strong>Reviews Chart</strong></h2>
                            <!---->
                            </div>
                        <div class="card v-card v-sheet theme--light elevation-2 text-center pt-2" >
                        
                        <div class="flex-row m-2">
                            <span class="text-lg-center text-left font-description-sm" style="float:left;">Excellent  </span>
                            <div class="progress w-75 float-right font-description-sm">
                                <div class="bright-green-bg" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:
                                  @if($ratings !=NULL)
								  {{100/($reviewscount-1)*($ratings5+$ratings4)}}%
                                @endif
                                ">
                                  @if($ratings !=NULL)
								  {{$ratings5+$ratings4}}
                                @endif
                                </div>
                            </div>
                        </div>
                        <div class="flex-row m-2">
                            <span class="font-description-sm" style="float:left;">Average   </span>
                            <div class="progress w-75 float-right">
                                <div class="bright-yellow-bg" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:
                                   @if($ratings !=NULL)
									   {{100/($reviewscount-1)*$ratings3}}%
								   
                                @endif
                                ">
                                 @if($ratings !=NULL)
								  {{$ratings3}}
                                @endif
                                </div>
                            </div>
                        </div>
                        <div class="flex-row m-2">
                            <span class="font-description-sm" style="float:left;">Bad      </span>
                            <div class="progress w-75 float-right">
                                <div class="bright-red-bg" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:
								 @if($ratings !=NULL)
									 @if($ratings1-1 !=0)
								  
							  {{100/($reviewscount-1)*($ratings1+$ratings2)}}%
							  @else
								  0%
                                @endif
								 @endif
								">
                                @if($ratings !=NULL)
									 @if($ratings1-1 !=0)
								  {{$ratings1+$ratings2}}
							  @else
								  0
                                @endif
								 @endif
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class=" text-center m-5"><h2><strong>Recent Reviews</strong></h2>
                        <input class="form-control" id="myInput" type="text" placeholder="Search reviews">
                        <!---->
						<br>
						<div>
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
				   </div>
				   <!---->
                        </div>
                        <br>
						 @foreach($RData as $reviews)
						 @if($reviews->show !=1)
                        <div>
                            
                                <div class="card review-card v-card v-sheet theme--light elevation-2 mt-3
                                @if($reviews->ratings ==1)								
								review-bad
							@elseif($reviews->ratings ==2)
							    review-bad
							@elseif($reviews->ratings ==3)
							    review-medium 
							@elseif($reviews->ratings ==4)
							    review-good
							@elseif($reviews->ratings ==5)
								review-good
								
							@endif	
								" style="width: 100%;">
                            
                            
                                <div class="header">
                               <div class=" text-center "  style="height:100%; width: 100%;">
								@if($reviews->itemcounter==1)							
                                <img id="image" src="<?php echo asset("images/giphy1.gif")?>" width="225" height="225" frameBorder="0" class="giphy-embed" allowFullScreen />
								@endif
                                </div> 
								
                                <span class="displayName title metallic-red">{{$reviews->name}}</span> <span class="displayName caption">&nbsp;{!! date('D, d, M, Y', strtotime($reviews->dateofpurchase)) !!}</span> &nbsp;<span><i class="fas fa-map-marker-alt"></i> {{$reviews->branchlocation}}</span>
                                <div class="pull-right" style="padding-top:10px">
                                    
                                        
                                            @if($reviews->ratings ==1) 
										<div class="tst-rating">
                                             <i class="fa fa-star" style="color:#C70039;"></i>
                                            
                                        </div>
										@elseif($reviews->ratings ==2)
										   <div class="tst-rating">
                                             <i class="fa fa-star" style="color:#FF5733;"></i>
                                             <i class="fa fa-star" style="color:#FF5733;"></i>
                                              
                                        </div>
										@elseif($reviews->ratings ==3)
										   <div class="tst-rating">
                                             <i class="fa fa-star" style="color:#FFC300;"></i>
                                             <i class="fa fa-star" style="color:#FFC300;"></i>
                                              <i class="fa fa-star" style="color:#FFC300;"></i>
                                             
                                        </div>
										@elseif($reviews->ratings ==4)
										    <div class="tst-rating">
                                             <i class="fa fa-star" style="color:#008000;"></i>
                                             <i class="fa fa-star" style="color:#008000;"></i>
                                              <i class="fa fa-star" style="color:#008000;"></i>
                                              <i class="fa fa-star" style="color:#008000;"></i>
                                              
                                        </div>
										@elseif($reviews->ratings ==5)
										      <div class="tst-rating">
                                             <i class="fa fa-star" style="color:#034a03;"></i>
                                             <i class="fa fa-star" style="color:#034a03;"></i>
                                              <i class="fa fa-star" style="color:#034a03;"></i>
                                              <i class="fa fa-star" style="color:#034a03;"></i>
                                              <i class="fa fa-star" style="color:#034a03;"></i>
                                        </div>
										@else
											<div class="tst-rating">
                                             <i class="fa fa-map" style="color:#C70039;"></i>
                                             
                                        </div>
										@endif
                                        
                                    
                                </div>
                                
                                <br>
                                </div>
                                <!---->
								<div class="row">
								<div class="col-lg-12">
                                <div class="wrapper comment">
                                <p class="review">{{$reviews->review}}</p>
								
								 <div class="v-dialog__container " style="display: block;">
								 <p class="bottomText mt-0 mb-0 pull-right" style="float:right;font:bold">
								 RI # {{$reviews->id}}
								 
								 @if($reviews->itemcounter==1)
								<img src="<?php echo asset("images/selected.png")?>" width="50" height="50" />
							    @endif
								 </p> 
								</div>
								
								@if($reviews->response)
									<div class="v-dialog__container col-lg-1" style="display: block;">
								<br>
								</div>
									 <div class="v-dialog__container col-lg-12" style="display: block;float:right;">
								
								
							
							
							</div>
							 <div class="v-dialog__container col-lg-8" style="display: block;float:right;">
							 <p class="bottomText mt-0 mb-0 pull-right"style="float:left;font:bold"  >
							  @if(File::exists("uploads/image/$CData->email.jpg"))
                             <img src="<?php echo asset("uploads/image/$CData->email.jpg")?>" class="v-avatar avatar" style="height: 30px; width: 30px;">
                             @elseif(File::exists("uploads/image/$CData->email.png")) 
                             <img src="<?php echo asset("uploads/image/$CData->email.png")?>" class="v-avatar avatar" style="height: 30px; width: 30px;">
                             @elseif(File::exists("uploads/image/$CData->email.webp")) 
                             <img src="<?php echo asset("uploads/image/$CData->email.webp")?>" class="v-avatar avatar" style="height: 30px; width: 30px;">
							 @elseif(File::exists("uploads/image/$CData->email.jpeg")) 
                             <img src="<?php echo asset("uploads/image/$CData->email.jpeg")?>" class="v-avatar avatar" style="height: 30px; width: 30px;">
							 @elseif(File::exists("uploads/image/$CData->email.gif")) 
                             <img src="<?php echo asset("uploads/image/$CData->email.gif")?>" class="v-avatar avatar" style="height: 30px; width: 30px;">
							 @elseif(File::exists("uploads/image/$CData->email.svg")) 
                             <img src="<?php echo asset("uploads/image/$CData->email.svg")?>" class="v-avatar avatar" style="height: 30px; width: 30px;">
                            @else
                            <img src="<?php echo asset("uploads/image/$CData->non.jpg")?>" class="v-avatar avatar" style="height: 30px; width: 30px;">
                            @endif
							&#160;{{$CData->company}}</p>
							 <br>
							 <p class="displayName caption" style="font-size: 10px;float:right;">&nbsp;{!! date('D, d, M, Y', strtotime($reviews->updated_at)) !!} </p>
							<p><br></p>
							 <p class="bottomText mt-0 mb-0 pull-right" style="font-size: 14px" >{{$reviews->response}} </p>
							 </div>
							 <div class="v-dialog__container col-lg-2" style="display: block;">
								<br>
								</div>
							@endif
                                
								@if($reviews->whatsappreview ==1)
                                    <p class="bottomText mt-0 mb-0 pull-right">review on WhatsApp <a href="#" target="_blank"><i class="fab fa-whatsapp fa-2x ml-2"></i></a></p>   
                                @elseif($reviews->whatsappreview ==2)
                                    <p class="bottomText mt-0 mb-0 pull-right">review on FaceBook <a href="#" target="_blank"><i class="fab fa-facebook fa-2x ml-2"></i></a></p>
								 @elseif($reviews->whatsappreview ==3)
                                    <p class="bottomText mt-0 mb-0 pull-right">review on Google <a href="#" target="_blank"><i class="fab fa-google fa-2x ml-2"></i></a></p>
									@elseif($reviews->whatsappreview ==4)
                                    <p class="bottomText mt-0 mb-0 pull-right">review on Linkedin <a href="#" target="_blank"><i class="fab fa-linkedin fa-2x ml-2"></i></a></p>
								@endif	
								
								 <p><a href="/review_display/{{$reviews->id}}" class="dropdown-item"><i class="fas fa-share fa-1x ml-2">Share on Social Media</i></a></p>
								 @guest
								 
								 @else
									 @if (Auth::user()->company_name==$CData->company)
									 
								 <p><a href="/put_replay/{{$reviews->id}}" class="dropdown-item"><i class="icon-pencil5"></i> Reply</a></p>
								 
								 @endif
								  @endguest	
                                </div>
								 </div>
								  </div>
								
								
								
								
                                
                                <div class="v-dialog__container" style="display: block;"></div>
                            </div>
                            <!---->
							
                             </div>
							
							 @endif
							 <br>

                         @endforeach
						  @if($reviewscount ==1)
								 <div>
							 <center><h4 style="color:red;">No Review Yet !</h4></center>
							 </div>
                          @endif      
                            
                            
                       
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column col-lg-4 col-sm-12 pt-5 align-items-center pb-5">
                <div class="card" style="width: 18rem;">
                    
                     
					 @if(File::exists("uploads/image/$CData->email.jpg"))
          <img src="<?php echo asset("uploads/image/$CData->email.jpg")?>"  class="card-img-top" alt="Card image cap"alt="Card image cap" style="max-height:350px">
                     @elseif(File::exists("uploads/image/$CData->email.png"))
          <img src="<?php echo asset("uploads/image/$CData->email.png")?>"  class="card-img-top" alt="Card image cap"alt="Card image cap" style="max-height:350px">    
					@elseif(File::exists("uploads/image/$CData->email.webp"))
          <img src="<?php echo asset("uploads/image/$CData->email.webp")?>"  class="card-img-top" alt="Card image cap"alt="Card image cap" style="max-height:350px">	  
						  @else 
          <img src="<?php echo asset("uploads/image/non.jpg")?>"class="card-img-top" alt="Card image cap" style="max-height:350px">
                       @endif
					 
                      
                    
                    
                    <div class="card-body">
                        <h5 class="card-title metallic-red text-center">About us</h5>
                        
                        
                    </div>
                    <ul class="list-group list-group-flush">
				
					 <li class="list-group-item">{{$CData->description}}</li>
                        <li class="list-group-item"><i class="fas fa-map-marker-alt metallic-red">
                        </i>
               {{$CData->country}}, {{$CData->city}}, {{$CData->block}}
                       </li>
					   {{--<li class="list-group-item"><i class="fas fa-phone-square metallic-red"></i><a href="/contact/{{$CData->id}}"> ***** {{ substr($CData->contact, -3);}}</a></li>--}}
                        <li class="list-group-item"><i class="fas fa-phone-square metallic-red"></i><a href="/contact/{{$CData->id}}">{{$CData->contact}}</a></li>						 
                    </ul>

                </div>
				<!---->
				<br>
				<div>
				<script type="text/javascript">
	atOptions = {
		'key' : '39b6fc00bcab59ceed21057f45aaa076',
		'format' : 'iframe',
		'height' : 300,
		'width' : 160,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.effectivecreativeformats.com/39b6fc00bcab59ceed21057f45aaa076/invoke.js"></scr' + 'ipt>');
</script>
</div>
				<!---->
            </div>
        </div>

    </div>


 @endif
 <!-- Modal -->
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
		
		  @endif
		  @if($message = Session::get('contact'))
			 <script>
$(function() {
    $('#request_contact_Modal').modal('show');
});
</script>  
		  
		  @endif
		  
		  @if($message = Session::get('success'))
		 <script>
	          swal({  title: "Email Info...",
          text: "{!!Session::get('success')!!}",
         
         
  });
	     </script>
		@endif

         @if($message = Session::get('success2'))
		 <script>
	          swal({  title: "Contact Info...",
          text: "{!!Session::get('success2')!!}",
         
  });
	     </script>
		  @endif		
		 
 @include('frontpage.request_email');		  
 @include('frontpage.request_contact');
 @include('frontpage.give_review');



<script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $(".review").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script>

@endsection