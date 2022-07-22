@extends('frontpage.frontpage')


@section('title') 
 <title>Vimbiso | Announcement</title>
        <meta charset="utf-8">
    <meta name="description" content="
    Vimbiso is a free independent & transparent customer assurance platform. At Vimbiso we believe the key to unlocking business success starts by listening to your customers.
    ">
    <meta name="keywords" content="Vimbiso,how grow business,12/04">
    <meta name="author" content="Tanaka Karumazondo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
@endsection 
@section('body') 



<div class="container1-fluid1 m-0 p-0">
        <div class="bg-white row1 d-flex justify-content-center text-center align-items-center">
                <div class="flex-column pl-4">
                        <h6 class="font-heading-sm"><strong>Announcement</strong></h6>
                   
                </div> 
        </div>
                
                   
           
                
            
        
         
        <div class="row">
            <div class="d-flex flex-column col-lg-7 col-sm-12">
                <div class="theme--light p-lg-5 p-0">
                    <div class="comments">
                        
                            <!--<div class=" text-center m-lg-5 m-3" ><h2><strong>Blog Post</strong></h2>
							</div>
							-->
                            
							 @foreach($firstPosts2 as $post)
							 <a href="{{ route('announcement.post', ['slug' => $post->slug]) }}">
                            <span class="text-lg-center text-left font-description-sm" style="float:left;">
							<img src="<?php echo asset("$post->image")?>"  class="border border-dark" style="max-height: 70px;max-width: 70px;" onerror="this.onerror=null;this.src='uploads/image/non.jpg';">
							</span>
							 </a>
                            <div class=" font-description-sm">
							<a href="{{ route('announcement.post', ['slug' => $post->slug]) }}">
                                <h5>&nbsp;<strong>{{ $post->title }}</strong></h5>
                                 <p style="font-size:80%;">&nbsp;{!! date('D, d, M, Y', strtotime($post->created_at)) !!}</p> 
								 </a>
								 <br>
								 <p style="font-size:80%;"> {{ Str::limit($post->description, 100) }} </p>
                        <p style="font-size:70%;"><a href="{{ route('announcement.post', ['slug' => $post->slug]) }}">Read More</a></p>								
					
                                </div>
								
								
								<hr>
                        @endforeach
						<br>
						@foreach($middlePost as $post)
                        <a href="{{ route('announcement.post', ['slug' => $post->slug]) }}">
                            <span class="text-lg-center text-left font-description-sm" style="float:left;">
							<img src="<?php echo asset("$post->image")?>"  class="border border-dark" style="max-height: 70px;max-width: 70px;" onerror="this.onerror=null;this.src='uploads/image/non.jpg';">
							</span>
							 </a>
                            <div class=" font-description-sm">
							<a href="{{ route('announcement.post', ['slug' => $post->slug]) }}">
                                <h5>&nbsp;<strong>{{ $post->title }}</strong></h5>
                                 <p style="font-size:80%;">&nbsp;{!! date('D, d, M, Y', strtotime($post->created_at)) !!}</p> 
								 </a>
								 <br>
								 <p style="font-size:80%;"> {{ Str::limit($post->description, 100) }} </p>
                        <p style="font-size:70%;"><a href="{{ route('announcement.post', ['slug' => $post->slug]) }}">Read More</a></p>								
					
                                </div>
								
								
								<hr>
                        @endforeach
						<br>
						@foreach($lastPosts as $post)
                       <a href="{{ route('announcement.post', ['slug' => $post->slug]) }}">
                            <span class="text-lg-center text-left font-description-sm" style="float:left;">
							<img src="<?php echo asset("$post->image")?>"  class="border border-dark" style="max-height: 70px;max-width: 70px;" onerror="this.onerror=null;this.src='uploads/image/non.jpg';">
							</span>
							 </a>
                            <div class=" font-description-sm">
							<a href="{{ route('announcement.post', ['slug' => $post->slug]) }}">
                                <h5>&nbsp;<strong>{{ $post->title }}</strong></h5>
                                 <p style="font-size:80%;">&nbsp;{!! date('D, d, M, Y', strtotime($post->created_at)) !!}</p> 
								 </a>
								 <br>
								 <p style="font-size:80%;"> {{ Str::limit($post->description, 100) }} </p>
                        <p style="font-size:70%;"><a href="{{ route('announcement.post', ['slug' => $post->slug]) }}">Read More</a></p>								
					
                                </div>
								
								
								<hr>
                        @endforeach
                       
                        </div>
                       
                        
							
							  
                            
                            
                       
                    </div>
                </div>
            
            <div class="d-flex flex-column col-lg-5 col-sm-12 pt-5 align-items-center pb-5">
                <div class="card" style="width: 18rem;">
                    
                     
					 
					 
                      
                    
                    
                    <div class="card-body">
                        <h5 class="card-title metallic-red text-center">Recent Announcement</h5>
                        
                        
                    </div>
                    <ul class="list-group list-group-flush">
					@foreach($recentPosts as $post)
					 <li class="list-group-item">
                      <a href="{{ route('announcement.post', ['slug' => $post->slug]) }}" class="text-lg-center text-left font-description-sm" style="float:left;">
							<img src="<?php echo asset("$post->image")?>"  class="border border-dark" style="max-height: 70px;max-width: 70px;" onerror="this.onerror=null;this.src='uploads/image/non.jpg';">
							
							 </a>
					<div class="font-description-sm">
							
                               <h6> <strong>{{ $post->title }}</strong></h6>
                
                               
                                </div>
                    <p style="font-size:60%;">&nbsp;&nbsp;{!! date('D, d, M, Y', strtotime($post->created_at)) !!} </p> 
								 
								 <p style="font-size:80%;"> {{ Str::limit($post->description, 100) }} </p>
                        <p style="font-size:70%;"><a href="{{ route('announcement.post', ['slug' => $post->slug]) }}">Read More</a></p>								
					 </li>
					  @endforeach
                    </ul>

                </div>
            </div>
        </div>

    </div>


 
 <!-- Modal -->
 @include('frontpage.give_review');
@endsection