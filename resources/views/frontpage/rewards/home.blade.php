@extends('frontpage.frontpage')
@section('title') 
   <title>Vimbiso | Rewards</title>
        <meta charset="utf-8">
    <meta name="description" content="
    
    ">
    <meta name="keywords" content="">
    <meta name="author" content="Tanaka Karumazondo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="/rokon/static/css/blogstyle.css"> 
    
@endsection 
@section('body') 
<div class="site-section bg-light">
    <div class="container">
	<div class="row mb-5">
            <div class="col-12">
                <h2>Rewards</h2>
            </div>
        </div>
        <div class="row align-items-stretch retro-layout-2">
           <div class="col-md-4">
                @foreach($firstPosts2 as $post)
                
                <div class="entry2">
                    <a href="{{ route('rewards.post', ['slug' => $post->slug]) }}"><img src="{{ $post->image }}"
                            alt="Image" class="img-fluid rounded"></a>
                    <div class="excerpt">
                        

                        <h2><a href="{{ route('rewards.post', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h2>
                        <div class="post-meta align-items-center text-left clearfix">
                            <figure class="author-figure mb-0 mr-3 float-left"><img
                                    src="@if($post->image) {{ $post->image }} @else {{ asset('website/images/user.png') }} @endif"
                                    alt="Image" class="img-fluid"></figure>
                           
                            <span>&nbsp;-&nbsp; {!! date('D, d, M, Y', strtotime($post->created_at)) !!} </span>
                        </div>
                        <p> {{ Str::limit($post->description, 100) }} </p>
                        <p><a href="{{ route('rewards.post', ['slug' => $post->slug]) }}">Read More</a></p>
                    </div>
                </div>
           
                @endforeach
             </div>
			
			
			
			
			
			
            <div class="col-md-4">
                @foreach($middlePost as $post)
                
                <div class="entry2">
                    <a href="{{ route('rewards.post', ['slug' => $post->slug]) }}"><img src="{{ $post->image }}"
                            alt="Image" class="img-fluid rounded"></a>
                    <div class="excerpt">
                        

                        <h2><a href="{{ route('rewards.post', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h2>
                        <div class="post-meta align-items-center text-left clearfix">
                            <figure class="author-figure mb-0 mr-3 float-left"><img
                                    src="@if($post->image) {{ $post->image }} @else {{ asset('website/images/user.png') }} @endif"
                                    alt="Image" class="img-fluid"></figure>
                           
                            <span>&nbsp;-&nbsp; {!! date('D, d, M, Y', strtotime($post->created_at)) !!} </span>
                        </div>
                        <p> {{ Str::limit($post->description, 100) }} </p>
                        <p><a href="{{ route('rewards.post', ['slug' => $post->slug]) }}">Read More</a></p>
                    </div>
                </div>
            
                @endforeach
            </div>
            <div class="col-md-4">
                @foreach($lastPosts as $post)
               
                <div class="entry2">
                    <a href="{{ route('rewards.post', ['slug' => $post->slug]) }}"><img src="{{ $post->image }}"
                            alt="Image" class="img-fluid rounded"></a>
                    <div class="excerpt">
                        

                        <h2><a href="{{ route('rewards.post', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h2>
                        <div class="post-meta align-items-center text-left clearfix">
                            <figure class="author-figure mb-0 mr-3 float-left"><img
                                    src="@if($post->image) {{ $post->image }} @else {{ asset('website/images/user.png') }} @endif"
                                    alt="Image" class="img-fluid"></figure>
                           
                            <span>&nbsp;-&nbsp; {!! date('D, d, M, Y', strtotime($post->created_at)) !!} </span>
                        </div>
                        <p> {{ Str::limit($post->description, 100) }} </p>
                        <p><a href="{{ route('rewards.post', ['slug' => $post->slug]) }}">Read More</a></p>
                    </div>
                </div>
            
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <h2>Recent Rewards</h2>
            </div>
        </div>
        <div class="row">
            @foreach($recentPosts as $post)
            <div class="col-lg-4 mb-4">
                <div class="entry2">
                    <a href="{{ route('rewards.post', ['slug' => $post->slug]) }}"><img src="{{ $post->image }}"
                            alt="Image" class="img-fluid rounded"></a>
                    <div class="excerpt">
					{{-- <span class="post-category text-white bg-secondary mb-3">{{ $post->category }}</span>--}}

                        <h2><a href="{{ route('rewards.post', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h2>
                        <div class="post-meta align-items-center text-left clearfix">
                            <figure class="author-figure mb-0 mr-3 float-left"><img
                                    src="@if($post->image) {{ $post->image }} @else {{ asset('website/images/user.png') }} @endif"
                                    alt="Image" class="img-fluid"></figure>
									{{--  <span class="d-inline-block mt-1">By <a href="#">{{ $post->user->name }}</a></span>--}}
                            <span>&nbsp;-&nbsp; {!! date('D, d, M, Y', strtotime($post->created_at)) !!} </span>
                        </div>
                        <p> {{ Str::limit($post->description, 100) }} </p>
                        <p><a href="{{ route('rewards.post', ['slug' => $post->slug]) }}">Read More</a></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
		 <div class="d-flex justify-content-center m-2">
                        <ul class="pagination">
						{{$recentPosts->links()}}                       
                        </ul>
                  </div>  
		{{-- <div class="row text-center pt-5 border-top">
            {{ $recentPosts->links() }}
            
			<div class="col-md-12">
          <div class="custom-pagination">
            <span>1</span>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <span>...</span>
            <a href="#">15</a>
          </div>
        </div>
		</div> --}}
        </div>
    </div>
</div>





 @include('frontpage.give_review');
@endsection
