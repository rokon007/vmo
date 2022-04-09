@extends('frontpage.frontpage')


@section('title') 
 <title>Vimbiso | Profile</title>
         <meta name="description" content="vary good">
     <meta name="keywords" content="vimbiso">
    
@endsection 
@section('body') 


@if($CData->email==NULL)
<div class="container1-fluid1 m-0 p-0">
 <div class="flex-column pl-4">
                <h1 class="font-heading-sm">Set up your company first</h1>
            </div>
</div>

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
                            <span class="text-lg-center text-left font-description-sm" style="float:left;">Excellent . </span>
                            <div class="progress w-75 float-right font-description-sm">
                                <div class="bright-green-bg" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:
                                  @if($ratings !=NULL)
									  @if(($reviewscount-1)!=0)
									  @if(round($ratings/($reviewscount-1))==1)
										  15%
                                @elseif(round($ratings/($reviewscount-1))==2)
									35%
								 @elseif(round($ratings/($reviewscount-1))==3)
									 55%
								 @elseif(round($ratings/($reviewscount-1))==4)
									 75%
								 								  
								  @elseif(round($ratings/($reviewscount-1))==5)
									   100%
								  @elseif(round($ratings/($reviewscount-1))>=5)
									  100%
								   @endif
								    @endif
                                 @else
                                  0%
                                @endif
                                ">
                                  @if($ratings !=NULL)
									  @if(($reviewscount-1)!=0)
									  @if(round($ratings/($reviewscount-1))==1)
										  15%
                                @elseif(round($ratings/($reviewscount-1))==2)
									35%
								 @elseif(round($ratings/($reviewscount-1))==3)
									 55%
								 @elseif(round($ratings/($reviewscount-1))==4)
									 75%
								  
								  @elseif(round($ratings/($reviewscount-1))==5)
									  100%
								  @elseif(round($ratings/($reviewscount-1))>=5)
									  100%
								   @endif
								    @endif
                                 @else
                                  0%
                                @endif
                                </div>
                            </div>
                        </div>
                        <div class="flex-row m-2">
                            <span class="font-description-sm" style="float:left;">Average  . </span>
                            <div class="progress w-75 float-right">
                                <div class="bright-yellow-bg" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:
                                  @if($ratings !=NULL)
									  @if(($reviewscount-1)!=0)
									  @if(round($ratings/($reviewscount-1))==1)
										  20%
                                @elseif(round($ratings/($reviewscount-1))==2)
									40%
								 @elseif(round($ratings/($reviewscount-1))==3)
									 60%
								 @elseif(round($ratings/($reviewscount-1))==4)
									 80%
								   
								  @elseif(round($ratings/($reviewscount-1))==5)
									  100%
								  @elseif(round($ratings/($reviewscount-1))>=5)
									  100%
								   @endif
								   @endif
                                 @else
                                  0%
                                @endif
                                ">
                                @if($ratings !=NULL)
									 @if(($reviewscount-1)!=0)
									  @if(round($ratings/($reviewscount-1))==1)
										  20%
                                @elseif(round($ratings/($reviewscount-1))==2)
									40%
								 @elseif(round($ratings/($reviewscount-1))==3)
									 60%
								 @elseif(round($ratings/($reviewscount-1))==4)
									 80%
								 	 
								  @elseif(round($ratings/($reviewscount-1))==5)
									  100%
								  @elseif(round($ratings/($reviewscount-1))>=5)
									  100%
								   @endif
								    @endif
                                 @else
                                  0%
                                @endif
                                </div>
                            </div>
                        </div>
                        <div class="flex-row m-2">
                            <span class="font-description-sm" style="float:left;">Bad    ....  </span>
                            <div class="progress w-75 float-right">
                                <div class="bright-red-bg" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                0
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
                            
                                <div class="card review-card v-card v-sheet theme--light elevation-2 review-good mt-3" style="width: 100%;">
                            
                            
                                <div class="header">
                                <div class="v-avatar avatar" style="height: 5px; width: 5px;"><img src="">
                                </div>
                                <span class="displayName title metallic-red">{{$reviews->name}}</span> <span class="displayName caption">&nbsp;{!! date('D, d, M, Y', strtotime($reviews->created_at)) !!}</span> &nbsp;<span><i class="fas fa-map-marker-alt"></i> {{$reviews->branchlocation}}</span>
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
                                <div class="wrapper comment">
                                <p class="review">{{$reviews->review}}</p>
                                
                                    <p class="bottomText mt-0 mb-0 pull-right">review on WhatsApp <a href="#" target="_blank"><i class="fab fa-whatsapp fa-2x ml-2"></i></a></p>   
                                
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
							 <center><h4 style="color:red;">No Review yeat !</h4></center>
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
</div>
@endsection