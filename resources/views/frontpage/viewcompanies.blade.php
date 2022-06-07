@extends('frontpage.frontpage')
 @section('title') 
 <title>
    Listed Companies - Zimbabwe | Vimbiso

</title>
    <meta charset="utf-8">
    <meta name="description" content="Zimbabwe: Number of companies listed on the stock exchange: For that indicator, we provide data for Zimbabwe from 1993 to 1999. The average value for ...">
    <meta name="keywords" content=" Listed Companies in Zimbabwe">
        <!-- Required meta tags -->
    <meta name="author" content="Tanaka Karumazondo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
@endsection 

@section('body')


      <!--  About -->
     <section id="courses">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Companies<small>Find the right company for you</small></h2>
                         </div>
						 <div class="row">
						     <div class="col-sm-12 col-lg-3 col-md-3">
							      <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                <!---->
                                                  <div class="card card1">
												  <form method="GET" action="#" id="search-form">
                                                   <div class="card-body">
                                                     <div class="card-header">
													  <br>
													 <center>
                                                       <h3 style="font-weight:700"></strong>Filter By</strong></h3>
													   </center>
                                                      <br>
                                                       
                                                   </div>
                   <div class="card mb-3" style="min-width: 16rem !important; border: 3px solid #51a127;border-radius:10px">
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item text-center div-green" style="color:white">
                              <h3 class="m-0"style="color:white"><strong>No. of reviews</strong></h3>
                            </li>                            
                            <li class="list-group-item">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="numberofreviews" id="reviews-5" value="5">
                                  <label class="form-check-label" for="exampleRadios1">5+
                                  </label>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="numberofreviews" id="reviews-10" value="10">
                                  <label class="form-check-label" for="exampleRadios1">10+
                                  </label>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="numberofreviews" id="reviews-25" value="25">
                                  <label class="form-check-label" for="exampleRadios1">25+
                                  </label>
                              </div>
                            </li>
                          </ul>
                       
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item text-center div-green" style="color:white">
                              <h3 class="m-0"><strong>Company status</strong></h3>
                            </li>
                            
                            <li class="list-group-item">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="status" id="status-1" value="1">
                                  <label class="form-check-label" for="exampleRadios1">Claimed
                                  </label>
                                  <p>List companies that have a Vimbiso account but we have no records of them asking their customers for reviews.</p>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="status" id="status-2" value="2">
                                  <label class="form-check-label" for="exampleRadios1">Unclaimed
                                  </label>
                                  <p>List companies that haven't claimed their Vimbiso account</p>
                              </div>
                            </li>
                            
                            <li class="list-group-item">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="status" id="status-3" value="3">
                                  <label class="form-check-label" for="exampleRadios1">Asking for reviews
                                  </label>
                                  <p>List companies that are regularly asking their customers for reviews — whether positive or negative.</p>
                              </div>
                            </li>
                          </ul>
						  
						  
						  <ul class="list-group list-group-flush">
                            <li class="list-group-item text-center div-green" style="color:white">
                              <h3 class="m-0"><strong>Time Period</strong></h3>
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
                                  <input class="form-check-input" type="radio" name="timeperiod" id="time-2" value="2">
                                  <label class="form-check-label" for="exampleRadios1">6 months
                                  </label>
                                  
                              </div>
                            </li>
                            
                            <li class="list-group-item">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="timeperiod" id="time-3" value="3">
                                  <label class="form-check-label" for="exampleRadios1">12 months
                                  </label>
                              </div>
                            </li>

                          </ul>
                        </div>
						<!---->
                     </div>
			      </form>
               </div>
             <!---->
            </div>
           </div>
		</div>
	 </div>
	 
	 
	 <!------------------------------------------------------style="border:5px;border:red;background-color:#e9e9ed;padding:0px !important"------->
	 


	

                                                                                
        

 @foreach($joindata as $Data)                                            		
	  <div class="col-sm-3 col-lg-8 col-md-3">
	                   
	             
                      <div class="row no-gutters list-group-item text-center" border="" 
					  style="border-radius: 25px; padding: 20px;  
								                            @if($Data->ratings ==1)
                                                            border: 5px solid #C70039;
														@elseif($Data->ratings ==2)
														 border: 5px solid #FF5733;
														 @elseif($Data->ratings ==3)
														  border: 5px solid #FFC300;
														  @elseif($Data->ratings ==4)
														   border: 5px solid #00ff36;
														   @elseif($Data->ratings ==5)
														    border: 5px solid #51a127;
															@else
																 border: 5px solid black;
															 @endif
                                                               ">
							
							  <div class="col-lg-3">
                        <div class="align-items-center justify-content-center">
  <img src="<?php echo asset("uploads/image/$Data->image")?>"  class="img-responsive" style="width:160px;height:200px;padding:6px;" class="card-img" alt="" >
                        </div>	
						</div>
						<div class="col-lg-9">
                        <div class="card-body ">
                            <p class="card-title" style="color:#1b3d81;font-size:18px">{{$Data->company}}</p>
                               <p class="card-text">
                                <i class="fas fa-chevron-circle-right metallic-green"></i> {{$Data->category}} -&gt; {{$Data->subcategory}}
                              </p>
                            <p class="card-text"><i class="fas fa-map-marker-alt"></i> {{$Data->block}}, {{$Data->city}}, {{$Data->country}}</p>
                            <p class="card-text"><i class="fas fa-phone"></i> {{$Data->contact}} &nbsp; <span class="pull-right"><i class="fas fa-envelope"></i> {{$Data->email}}</span></p>
                            <p class="card-text">Total Reviews: <strong>1</strong>  &nbsp; <span class="float-right">VimbisoScore: <strong>5</strong></span></p>
                              <p class="text-center">
                                      
										@if($Data->ratings ==1) 
										<div class="tst-rating">
                                             <i class="fa fa-star" style="color:#C70039;"></i>
                                            
                                        </div>
										@elseif($Data->ratings ==2)
										   <div class="tst-rating">
                                             <i class="fa fa-star" style="color:#FF5733;"></i>
                                             <i class="fa fa-star" style="color:#FF5733;"></i>
                                              
                                        </div>
										@elseif($Data->ratings ==3)
										   <div class="tst-rating">
                                             <i class="fa fa-star" style="color:#FFC300;"></i>
                                             <i class="fa fa-star" style="color:#FFC300;"></i>
                                              <i class="fa fa-star" style="color:#FFC300;"></i>
                                             
                                        </div>
										@elseif($Data->ratings ==4)
										    <div class="tst-rating">
                                             <i class="fa fa-star" style="color:#008000;"></i>
                                             <i class="fa fa-star" style="color:#008000;"></i>
                                              <i class="fa fa-star" style="color:#008000;"></i>
                                              <i class="fa fa-star" style="color:#008000;"></i>
                                              
                                        </div>
										@elseif($Data->ratings ==5)
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
                                      
                                        </p>
                          
                            <p class="card-text text">{{$Data->description}}</p>
                          </div>
						  </div>
						  </div>
						 
						   <br>
						  </div>
						 
						  
				    @endforeach
				   
				   
	  
	 
	
						 
						 
						 
						 
						 
						 
						 

                       

                    </div>
             </div>
    </section>



     <!-- Modal -->
           @include('frontpage.give_review');
     <!-- FOOTER -->
@endsection 