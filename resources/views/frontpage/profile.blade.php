@extends('frontpage.frontpage')


@section('title') 
 <title>Vimbiso | Profile</title>
         <meta name="description" content="vary good">
     <meta name="keywords" content="vimbiso">
   
@endsection 
@section('body') 


@if($CData==NULL)
	<script>
window.location.href = "{{ route('settings') }}"
</script>


 @else
<div class="container1-fluid1 m-0 p-0">
        <div class="bg-white row1 d-flex justify-content-center text-center align-items-center">
                 @if(File::exists("uploads/image/$CData->email.jpg"))
   <img src="<?php echo asset("uploads/image/$CData->email.jpg")?>"  class="border border-dark" style="max-height: 149px;max-width: 198px;">
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
                                <div class="v-avatar avatar" style="height: 5px; width: 5px;"><img src="">
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
								 <p class="bottomText mt-0 mb-0 pull-right" style="float:right;font:bold">RI # {{$reviews->id}}</p> 
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
                          @else 
  <img src="<?php echo asset("uploads/image/non.jpg")?>"  class="v-avatar avatar" style="height: 30px; width: 30px;">
                       @endif
							&#160;{{$CData->company}}</p>
							 <br>
							 <p class="displayName caption" style="font-size: 10px;float:right;">&nbsp;{!! date('D, d, M, Y', strtotime($reviews->updated_at)) !!} </p>
							<p><br></p>
							 <p class="bottomText mt-0 mb-0 pull-right" style="font-size: 10px" >{{$reviews->response}} </p>
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
          <img src="<?php echo asset("uploads/image/$CData->email.jpg")?>"  class="card-img-top" alt="Card image cap" style="max-height:350px">
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
                        <li class="list-group-item"><i class="fas fa-phone-square metallic-red"></i>{{$CData->contact}}</li>
                    </ul>

                </div>
            </div>
        </div>

    </div>


 @endif
 <!-- Modal -->
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