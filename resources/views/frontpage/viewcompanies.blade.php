@extends('frontpage.frontpage')
 

@section('body')

<style type="text/css">
  .card-btn{
    position:absolute;
    bottom:10px;
}
.card{
    min-height:590px;
}
.list-group-item::before{
    font-family: "Font Awesome 5 Brands";
    font-weight: 400;
    content: "✓";
    padding-right:5px;
    color:var(--green); 
}
.text-subheading{
    font-weight: 600;
    font-size: 17px;
}
</style>
    
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
                   <div class="card mb-3" style="min-width: 16rem !important;border:3px solid var(--green);border-radius:10px">
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item text-center div-green" style="color:white">
                              <h3 class="m-0"><strong>No. of reviews</strong></h3>
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
	 
	 
	 <!------------------------------------------------------------->
	 
                                                                                
          @foreach($CompanyData as $Data)                                            		
	  <div class="col-sm-12 col-lg-9 col-md-3 ">
	                    <br>
	               <a href="#">
                      <div class="row no-gutters list-group-item text-center">
					  <br>
                        <div class="col-lg-2 d-flex align-items-center justify-content-center">
                          <!--<img src="images/logo-no-bg-2.png">-->
                            <img src="images/llogo.jpg" class="img-responsive"  class="card-img" alt="..." width="160" height="200">
                          
                          
                        </div>
	                   <div class="col-lg-10 d-flex align-items-center justify-content-center">
                          <ul class=" ">
                            <li class="  " style="">
                              <p class="card-title" style="font-size:30px">{{$Data->company}}</p>
							 
                            <p style="font-size:18px">
                              
                                
                            {{$Data->category}}-> {{$Data->subcategory}}
                                
                              
                              </p>
							  
                            <p  style="font-size:18px"><i class="fas fa-map-marker-alt"></i> {{$Data->block}},{{$Data->city}}, {{$Data->country}}</p>
                            <p  style="font-size:18px"><i class="fas fa-phone"></i>{{$Data->contact}} &nbsp; <span ><i class="fas fa-envelope"></i> {{$Data->contact}}</span></p>
                            <p  style="font-size:18px">Total Reviews: <strong>0</strong>  &nbsp; <span class="float-right">VimbisoScore: <strong>0</strong></span></p>
                              <p class="text-center">
                              
                                      </p><p style="color:red;font-size:18px" class="m-0">Not rated yet</p>
                              
                            
                            <p class="card-text text"></p>
                            </li>                            
                           
                           
                          </ul>
						  </div>
                        </div>
						</a>
	               </div>
	  @endforeach 
	 
	
						 
						 
						 
						 
						 
						 
						 

                       

                    </div>
             </div>
    </section>



     <!-- Modal -->
           @include('frontpage.give_review');
     <!-- FOOTER -->
@endsection 