@extends('frontpage.frontpage')


@section('title') 
 <title>
{{$CData->company}}'s Reviews share
</title>
        <!-- Required meta tags -->
		 
    <meta charset="utf-8">
	@foreach($RData as $reviews)
         <meta name="description" content="{{$reviews->review}}">
	@endforeach
     <meta name="keywords" content="{{$CData->company}}">
	<meta name="author" content="Tanaka Karumazondo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 
   
@endsection 
@section('body') 

<style>
#image {
  display: block;
  width: 55%;
  height: auto;
  position: absolute;
  bottom: 0;
  transition: .10s ease;
   opacity: .6;
}
</style>

<div class="container1-fluid1 m-0 p-0">
        <div class="bg-white row1 d-flex justify-content-center text-center align-items-center">
                @if(File::exists("uploads/image/$CData->email.jpg"))
   <img src="<?php echo asset("uploads/image/$CData->email.jpg")?>"  class="border border-dark" style="max-height: 149px;max-width: 198px;">
                          @else 
  <img src="<?php echo asset("uploads/image/non.jpg")?>"   class="border border-dark" style="max-height: 149px;max-width: 198px;">
                       @endif
           
            <div class="flex-column pl-4">
                <h1 class="font-heading-sm">{{$CData->company}}</h1>
				
				
					 <p >{{$CData->description}}
                        <br ><i class="fas fa-map-marker-alt metallic-red">
                        </i>
               {{$CData->country}}, {{$CData->city}}, {{$CData->block}}
                      
                        <br ><i class="fas fa-phone-square metallic-red"></i>{{$CData->contact}}</p>
                    
				
                
				
                
                
            </div>
        </div>
        
         
        <div class="row">
		
            <div class="d-flex flex-column col-lg-8 col-sm-12">
                <div class="theme--light p-lg-5 p-0">
                    <div class="comments">
                       
                        
                        <div class=" text-center "><h2><strong> Reviews</strong></h2>
                       
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
								 <div class="v-dialog__container " style="display: block;">
								<p class="dropdown-item"><i class="fas fa-share fa-1x ml-2">Share on Social Media</i></p>
								 	
                                <tr>
                                    @foreach($socialShare as $key =>$value)
                                    <th><a href="{{$value}}"><i class="fab fa-{{$key}} fa-2x ml-2"></i>&#160;&#160;</a></th>
                                     @endforeach
                                </tr>
                           
                                </div>
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
						     
                            
                            
                       
                    </div>
                </div>
            </div>
           
        </div>

    </div>


 
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