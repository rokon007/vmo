@extends('frontpage.frontpage')
 

@section('body') 

<center>
<section id="courses">
<link rel="stylesheet" href="css/regi.css">
 <div class="row">
 
 
 <!----> 
 <div class="form_container">
                                 <div class="col-md-3" >
				                      <div class="item">
                                        <div class="courses-thumb">
                                           <div class="courses-top">
											  <div class="card-header div-1">
                                                    <center>
													<h2 style="text-decoration:none;color: white;" class="card-title">Categories</h1>
													</center>
                                                </div>
                                                <!---->
												<center>
                                                      @foreach($categories as $categorie)
                                                             <a href="/viewcompany/{{$categorie->name}}" style="text-decoration:none;color:black;font-size:16px">{{$categorie->name}}</a>
                                                                 <hr>                   
                                                      @endforeach 												  
                                                </center>													   
                                                  <!---->
                                            </div>
                                        </div>
                                      </div>
                                 </div>
                               </div>		
 
 <!----> 
 
 <!---->




     @foreach ($viewcategoriesgroup as $category_id => $Category)                      							 
	  <div class="form_container"> 
<div class="col-md-6" >	  
    <div class="title_container">
    	<center><h2>{{ $category_id}}</h2></center>
      </div>
    
    <div class="row clearfix">
     
      
        	     @if($category_id!=null)
                 @foreach ($Category as $videoLink)
			 <div class="col-md-3">    
          <div class="form-group">
                <a href="/viewcompany/{{$videoLink->name}}"><button class="btn btn-secondary mr-2 " type="">{{ $videoLink->name }}</button></a>	
                 
          </div>
        </div> 
                 @endforeach
                 @endif
    </div>
  </div>
</div>
  @endforeach
<!---->
 </div>
 </section>
 </center>
 <!-- Modal -->
        
     <!-- FOOTER -->
@endsection