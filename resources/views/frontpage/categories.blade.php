@extends('frontpage.frontpage')
@section('title') 
 <title>
    Top Companies in Harare, Zimbabwe Area - Vimbiso
	

</title>
        
      <!-- Required meta tags -->
        <meta charset="utf-8">
     <meta name="description" content="Browse the top companies hiring for Business jobs in Harare, Zimbabwe Area. Salaries, reviews, and more - all posted by employees working at the top ...">
     <meta name="keywords" content="Top Companies">
    <meta name="author" content="Tanaka Karumazondo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
@endsection 
 

@section('body') 

    <!-- Content -->
    
<style>
.body{
    background-color:#f2f2f5 !important;
}
.row{
    width:100%;
}
</style>
<div class="container-fluid m-0 p-0">
        
        <div class="row pt-4 mt-3">
            <div class="align-items-start flex-column col-lg-3 col-md-3 col-sm-12 mb-3 bg-white ml-5" style="height: auto;">
                <div class="justiy-content-center text-center" style="border:3px solid var(--red);border-radius:10px">
                    <h4 class="p-3" style="background-color:var(--red);color:white">Categories</h4>     
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
                                <a href="/viewcompany1/{{$category_id}}" style="text-decoration:none;color:black;font-size:16px;text-transform:capitalize"><h4 class="category-parent-sm"><strong>{{ $category_id}}</strong></h4></a>
                                
                            </div>
                        
                    
                             @if($category_id!=null)
                                @foreach ($Category as $videoLink)
                                <div class="col-lg-3 col-sm-3 p-2 m-2 d-flex justify-content-center align-items-center" style="background-color:#efefef;">
                                    <a class="text-center btn" href="/viewcompany/{{$videoLink->name}}" style="text-decoration:none;color:black;font-size:14px">{{ $videoLink->name }}</a>
                                </div>
                            @endforeach
                 @endif
				</div>
				@endforeach
            </div>

        </div>

    </div>
 <!-- Modal -->
         @include('frontpage.give_review');
     <!-- FOOTER -->
@endsection