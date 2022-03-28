@extends('frontpage.frontpage')
@section('title') 
 <title>Vimbiso | Company</title>
         <meta name="description" content="vary good">
     <meta name="keywords" content="vimbiso">
    
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
            <h2 class="col-12 d-flex justify-content-center p-3" style="color:var(--red);font-size: 2em;"><strong>Companies</strong></h1>
			  <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX--SEARCH--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->    
              <div class="col-sm-12 col-lg-3 col-md-3">
                    <h3 class="text-center"><b>Filter By</b></h3>
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
                        <!--    <li class="disabled"><span>&laquo;</span></li>
                              <li class="active"><span>1 <span class="sr-only">(current)</span></span></li>
                              <li><a href="?page=2">2</a></li>
                              <li><a href="?page=3">3</a></li>
                              <li><a href="?page=4">4</a></li>
                              <li><a href="?page=5">5</a></li>
                              <li><a href="?page=6">6</a></li>
                              <li><a href="?page=7">7</a></li>
                              <li><a href="?page=8">8</a></li>
                              <li><a href="?page=9">9</a></li>
                              <li><a href="?page=10">10</a></li>
                              <li><a href="?page=11">11</a></li>
                              <li><a href="?page=12">12</a></li>
                            <li><a href="?page=">&raquo;</a></li>  -->
                        </ul>
                  </div>  
          <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX----end pagination----XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->              
                  
          <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX---COMPANY--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->              
                      @foreach($RData1 as $Data) 
                          <div class="card mb-3" style="background-color:#e9e9ed;padding:0px !important
						                                  @if(round(($Data->totalratings)/($Data->count))==1) 
                                                            border: 5px solid #C70039;
														@elseif(round(($Data->totalratings)/($Data->count))==2)
														 border: 5px solid #FF5733;
														 @elseif(round(($Data->totalratings)/($Data->count))==3)
														  border: 5px solid #FFC300;
														  @elseif(round(($Data->totalratings)/($Data->count))==4)
														   border: 5px solid #00ff36;
														   @elseif(round(($Data->totalratings)/($Data->count))==5)
														    border: 5px solid #51a127;
															@else
																 border: 5px solid black;
															 @endif
                                                               ">
                      
                          
       <a href="/profile/{{$Data->company}}"> 
                      <div class="row no-gutters">
                        <div class="col-md-3 d-flex align-items-center justify-content-center">
                          
                           @if(File::exists("uploads/image/$Data->image.jpg"))
   <img src="<?php echo asset("uploads/image/$Data->image.jpg")?>"  class="img-responsive" style="width:200px;height:200px;padding:6px;" class="card-img" alt="" >
                          @else 
  <img src="<?php echo asset("uploads/image/non.jpg")?>"  class="img-responsive" style="width:200px;height:200px;padding:6px;" class="card-img" alt="" >
                       @endif
                          
                        </div>
                        <div class="col-md-9">
                          <div class="card-body">
                            <p class="card-title" style="color:#1b3d81;font-size:18px">{{$Data->company}}</p>
                            <p class="card-text">
                              
                                
                                <i class="fas fa-chevron-circle-right metallic-green"></i> {{$Data->category}} -&gt; {{$Data->subcategory}}
                                
                              
                              </p>
                            <p class="card-text"><i class="fas fa-map-marker-alt"></i>  {{$Data->block}}, {{$Data->city}}, {{$Data->country}}</p>
                            <p class="card-text"><i class="fas fa-phone"></i> {{$Data->contact}} &nbsp <span class="pull-right"><i class="fas fa-envelope"></i> {{$Data->email}}</span></p>
                            <p class="card-text">Total Reviews: <strong>{{$Data->count-1}}</strong>  &nbsp <span class="float-right">VimbisoScore: <strong>0</strong></span></p>
                              <p class="text-center">
							    @if(round(($Data->totalratings)/($Data->count))==2) 
										<div class="tst-rating">
                                             <i class="fa fa-star" style="color:#C70039;"></i>
                                            
                                        </div>
										@elseif(round(($Data->totalratings)/($Data->count))==3)
										   <div class="tst-rating">
                                             <i class="fa fa-star" style="color:#FF5733;"></i>
                                             <i class="fa fa-star" style="color:#FF5733;"></i>
                                              
                                        </div>
										@elseif(round(($Data->totalratings)/($Data->count))==4)
										   <div class="tst-rating">
                                             <i class="fa fa-star" style="color:#FFC300;"></i>
                                             <i class="fa fa-star" style="color:#FFC300;"></i>
                                              <i class="fa fa-star" style="color:#FFC300;"></i>
                                             
                                        </div>
										@elseif(round(($Data->totalratings)/($Data->count))==5)
										    <div class="tst-rating">
                                             <i class="fa fa-star" style="color:#00ff36;"></i>
                                             <i class="fa fa-star" style="color:#00ff36;"></i>
                                              <i class="fa fa-star" style="color:#00ff36;"></i>
                                              <i class="fa fa-star" style="color:#00ff36;"></i>
                                              
                                        </div>
										@elseif(round(($Data->totalratings)/($Data->count))==6)
										      <div class="tst-rating">
                                             <i class="fa fa-star" style="color:#51a127;"></i>
                                             <i class="fa fa-star" style="color:#51a127;"></i>
                                              <i class="fa fa-star" style="color:#51a127;"></i>
                                              <i class="fa fa-star" style="color:#51a127;"></i>
                                              <i class="fa fa-star" style="color:#51a127;"></i>
                                        </div>
										
										
                                      
                                        </p>
                                        @elseif(($Data->totalratings)/($Data->count) ==1)
                          
                            <p style="color:var(--red)" class="m-0">Not rated yet</p>
                            @endif
                              
                                     
                              
                            
                            <p class="card-text text">None</p>
                            
                          </div>
                        </div>
                      </div>
                      </a>
                      <div style="width:25%;">
                        <div class="d-flex flex-row">
                        
                        </div>
                      </div>
                    </div>
                   @endforeach
     <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX----END COMPANY----XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->             
                  
                </div>
                    
        </div>
    </div>


@endsection