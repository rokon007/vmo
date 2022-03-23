@extends('frontpage.frontpage')
@section('title') 
 <title>Vimbiso | Categories</title>
         <meta name="description" content="vary good">
     <meta name="keywords" content="vimbiso">
    
@endsection 
 

@section('body') 
<style>
.body{
    background-color:#f2f2f5 !important;
}
.row{
    width:100%;
}
</style>

<br>
<br>
<div class="container-fluid m-0 p-0">
<div class="row pt-4 mt-3">
<div class="align-items-start flex-column col-lg-3 col-md-3 col-sm-12 mb-3 bg-white ml-5" style="height: auto;">
                <div class="justiy-content-center text-center" style="border:3px solid var(--red);border-radius:10px">
				<div style="background-color:var(--red);color:white;pading:5px;">
				 <h4  >Categories</h4>
				</div>
                   
					@foreach($categories as $categorie)
					<a href="/viewcompany1/{{$categorie->name}}" style="text-decoration:none;color:black;font-size:16px">{{$categorie->name}}</a>
                        <hr>
						 @endforeach 			 
                 </div>
</div>

 <div class="align-items-end flex-column col-lg-8 col-md-8 col-sm-12 mb-3 bg-white ml-5" style="height: auto;">
                   @foreach ($viewcategoriesgroup as $category_id => $Category) 
                <div class="d-flex row p-3 border-bottom justify-content-center">
                    
                        
                            <div class="d-flex justify-content-center col-12 align-items-center border-bottom pt-4">
                               <center> <a href="../view-companies/1/index.html" style="text-decoration:none;color:black;font-size:16px;text-transform:capitalize"><h4 class="category-parent-sm"><strong>{{ $category_id}}</strong></h4></a></center>
                                 <hr>							   
                            </div>
							  @if($category_id!=null)
                                @foreach ($Category as $videoLink)
                                                                <div class="col-lg-3 col-sm-3 p-2 m-2 d-flex justify-content-center align-items-center">
								<center>
                                <div class="form-group">								
                                    <a class="text-center btn"  href="/viewcompany/{{$videoLink->name}}" style="background-color:#efefef;text-decoration:none;color:black;font-size:14px;width:100%;">{{ $videoLink->name }}</a>
                                </div>
								</center>
								 </div>
								 @endforeach
                 @endif
				 
				</div>
				@endforeach
 </div>				
</div>
</div>







 <!-- Modal -->
        
     <!-- FOOTER -->
@endsection