@extends('frontpage.frontpage')


@section('title') 
 <title>Vimbiso | Blog</title>
         <meta name="description" content="vary good">
     <meta name="keywords" content="vimbiso">
    
@endsection 
@section('body') 



<div class="container1-fluid1 m-0 p-0">
        <div class="bg-white row1 d-flex justify-content-center text-center align-items-center">
                <div class="flex-column pl-4">
                        <h6 class="font-heading-sm">Blog</h6>
                   
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
                        <div class="card v-card v-sheet theme--light elevation-2 text-center pt-2" >
                        
                        <div class="flex-row m-2">
						<a href="{{ route('website.post', ['slug' => $post->slug]) }}">
                            <span class="text-lg-center text-left font-description-sm" style="float:left;">
							<img src="<?php echo asset("$post->image")?>"  class="border border-dark" style="max-height: 70px;max-width: 70px;">
							</span>
							 </a>
                            <div class=" font-description-sm">
							<a href="{{ route('website.post', ['slug' => $post->slug]) }}">
                                <h6>{{ $post->title }}</h6>
                                <span class="date">{{ $post->created_at->format('M d, Y')}}</span> 
								 </a>
                                </div>
                            </div>
                        </div>
						<br>
                        @endforeach
						<br>
						@foreach($middlePost as $post)
                        <div class="card v-card v-sheet theme--light elevation-2 text-center pt-2" >
                        
                        <div class="flex-row m-2">
						<a href="{{ route('website.post', ['slug' => $post->slug]) }}">
                            <span class="text-lg-center text-left font-description-sm" style="float:left;">
							<img src="<?php echo asset("$post->image")?>"  class="border border-dark" style="max-height: 70px;max-width: 70px;">
							</span>
							 </a>
                            <div class=" font-description-sm">
							<a href="{{ route('website.post', ['slug' => $post->slug]) }}">
                                <h6>{{ $post->title }}</h6>
                                <span class="date">{{ $post->created_at->format('M d, Y')}}</span> 
								 </a>
                                </div>
                            </div>
                        </div>
						<br>
                        @endforeach
						<br>
						@foreach($lastPosts as $post)
                        <div class="card v-card v-sheet theme--light elevation-2 text-center pt-2" >
                        
                        <div class="flex-row m-2">
						<a href="{{ route('website.post', ['slug' => $post->slug]) }}">
                            <span class="text-lg-center text-left font-description-sm" style="float:left;">
							<img src="<?php echo asset("$post->image")?>"  class="border border-dark" style="max-height: 70px;max-width: 70px;">
							</span>
							 </a>
                            <div class="  font-description-sm">
							<a href="{{ route('website.post', ['slug' => $post->slug]) }}">
                                <h6><strong>{{ $post->title }}</strong></h6>
                                <p style="font-size:80%;">{{ $post->created_at->format('M d, Y')}}</p> 
								 </a>
                                </div>
                            </div>
                        </div>
						<br>
                        @endforeach
                       
                        </div>
                       
                        
							
							  
                            
                            
                       
                    </div>
                </div>
            
            <div class="d-flex flex-column col-lg-5 col-sm-12 pt-5 align-items-center pb-5">
                <div class="card" style="width: 18rem;">
                    
                     
					 
					 
                      
                    
                    
                    <div class="card-body">
                        <h5 class="card-title metallic-red text-center">Recent Posts</h5>
                        
                        
                    </div>
                    <ul class="list-group list-group-flush">
					@foreach($recentPosts as $post)
					 <li class="list-group-item">
                      <a href="{{ route('website.post', ['slug' => $post->slug]) }}">
                            <span class="text-lg-center text-left font-description-sm" style="float:left;">
							<img src="<?php echo asset("$post->image")?>"  class="border border-dark" style="max-height: 70px;max-width: 70px;">
							</span>
							 </a>
					<div class="font-description-sm">
							
                                &nbsp;<h6> <strong>{{ $post->title }}</strong></h6>
                
                               
                                </div>
                    <p style="font-size:60%;">&nbsp;&nbsp;{{ $post->created_at->format('M d, Y')}}</p> 
								 
								 <p style="font-size:80%;"> {{ Str::limit($post->description, 100) }} </p>
                        <p><a href="{{ route('website.post', ['slug' => $post->slug]) }}">Read More</a></p>								
					 </li>
					  @endforeach
                    </ul>

                </div>
            </div>
        </div>

    </div>


 
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