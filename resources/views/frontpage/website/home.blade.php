@extends('frontpage.frontpage')
@section('title') 
 <title>Vimbiso | Blog</title>
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
        <div class="row align-items-stretch retro-layout-2">
            <div class="col-md-4">
                @foreach($firstPosts2 as $post)
                <a href="{{ route('website.post', ['slug' => $post->slug]) }}" class="h-entry mb-30 v-height gradient"
                    style="background-image: url('{{ $post->image }}');">

                    <div class="text">
                        <h2>{{ $post->title }}</h2>
                        <span class="date">{{ $post->created_at->format('M d, Y')}}</span>
                    </div>
                </a>
                @endforeach
            </div>
            <div class="col-md-4">
                @foreach($middlePost as $post)
                <a href="{{ route('website.post', ['slug' => $post->slug]) }}" class="h-entry img-5 h-100 gradient"
                    style="background-image: url('{{ $post->image }}'">
                    <div class="text">
                        <div class="post-categories mb-3">
                            <span class="post-category bg-danger">{{ $post->category }}</span>
                        </div>
                        <h2>{{ $post->title }}</h2>
                        <span class="date">{{ $post->created_at->format('M d, Y')}}</span>
                    </div>
                </a>
                @endforeach
            </div>
            <div class="col-md-4">
                @foreach($lastPosts as $post)
                <a href="{{ route('website.post', ['slug' => $post->slug]) }}" class="h-entry mb-30 v-height gradient"
                    style="background-image: url('{{ $post->image }}');">
                    <div class="text">
                        <h2>{{ $post->title }}</h2>
                        <span class="date">{{ $post->created_at->format('M d, Y')}}</span>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row mb-8">
            <div class="col-12">
                <h2>Recent Posts</h2>
            </div>
        </div>
        <div class="row">
		<div class="col-lg-4 mb-4">
			<script type="text/javascript">
	atOptions = {
		'key' : '8f9fff97b2eefd0a18fee37738af571e',
		'format' : 'iframe',
		'height' : 250,
		'width' : 300,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.effectivecreativeformats.com/8f9fff97b2eefd0a18fee37738af571e/invoke.js"></scr' + 'ipt>');
         </script>
			</div>
			
			<div class="col-lg-4 mb-4">
			<script type="text/javascript">
	atOptions = {
		'key' : '8f9fff97b2eefd0a18fee37738af571e',
		'format' : 'iframe',
		'height' : 250,
		'width' : 300,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.effectivecreativeformats.com/8f9fff97b2eefd0a18fee37738af571e/invoke.js"></scr' + 'ipt>');
         </script>
			</div>
			
			<div class="col-lg-4 mb-4">
			<script type="text/javascript">
	atOptions = {
		'key' : '8f9fff97b2eefd0a18fee37738af571e',
		'format' : 'iframe',
		'height' : 250,
		'width' : 300,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.effectivecreativeformats.com/8f9fff97b2eefd0a18fee37738af571e/invoke.js"></scr' + 'ipt>');
         </script>
			</div>
			
			
            @foreach($recentPosts as $post)
            <div class="col-lg-4 mb-4">
                <div class="entry2">
                    <a href="{{ route('website.post', ['slug' => $post->slug]) }}"><img src="{{ $post->image }}"
					onerror="this.onerror=null;this.src='{{ asset('images/No_image.jpg') }}';"
                            alt="Image" class="img-fluid rounded"></a>
                    <div class="excerpt">
                        <span class="post-category text-white bg-secondary mb-3">{{ $post->category }}</span>

                        <h2><a href="{{ route('website.post', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h2>
                        <div class="post-meta align-items-center text-left clearfix">
                            <figure class="author-figure mb-0 mr-3 float-left"><img
                                    src="@if($post->user->image) {{ $post->user->image }} @else {{ asset('images/admin.jpg') }} @endif"
                                    alt="Image" class="img-fluid"></figure>
                            <span class="d-inline-block mt-1">By <a href="#">Admin</a></span>
                            <span>&nbsp;-&nbsp; {{ $post->created_at->format('M d, Y') }} </span>
                        </div>
                        <p> {{Str::limit(strip_tags($post->description, 10))}} </p>
							

                        <p><a href="{{route('website.post',['slug' => $post->slug])}}">Read More</a></p>
                    </div>
                </div>
            </div>
			 
            @endforeach
			<div class="col-lg-4 mb-4">
			<script type="text/javascript">
	atOptions = {
		'key' : '8f9fff97b2eefd0a18fee37738af571e',
		'format' : 'iframe',
		'height' : 250,
		'width' : 300,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.effectivecreativeformats.com/8f9fff97b2eefd0a18fee37738af571e/invoke.js"></scr' + 'ipt>');
         </script>
			</div>
			<div class="col-lg-4 mb-4">
			<script type="text/javascript">
	atOptions = {
		'key' : '8f9fff97b2eefd0a18fee37738af571e',
		'format' : 'iframe',
		'height' : 250,
		'width' : 300,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.effectivecreativeformats.com/8f9fff97b2eefd0a18fee37738af571e/invoke.js"></scr' + 'ipt>');
         </script>
			</div>
			<div class="col-lg-4 mb-4">
			<script type="text/javascript">
	atOptions = {
		'key' : '8f9fff97b2eefd0a18fee37738af571e',
		'format' : 'iframe',
		'height' : 250,
		'width' : 300,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.effectivecreativeformats.com/8f9fff97b2eefd0a18fee37738af571e/invoke.js"></scr' + 'ipt>');
         </script>
			</div>
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

<div class="site-section bg-light">
    <div class="container">
        <div class="row align-items-stretch retro-layout">
            @foreach($lastFooterPost as $post)
            <div class="col-md-5 order-md-2">
                <a href="{{ route('website.post', ['slug' => $post->slug]) }}" class="hentry img-1 h-100 gradient"
                    style="background-image: url('{{ $post->image }}');">
                    <span class="post-category text-white bg-danger">{{ $post->category }}</span>
                    <div class="text">
                        <h2>{{ $post->title }}</h2>
                        <span class="date">{{ $post->created_at->format('M d, Y')}}</span>
                    </div>
                </a>
            </div>
            @endforeach
            <div class="col-md-7">
                @foreach($firstFooterPost as $post)
                <a href="{{ route('website.post', ['slug' => $post->slug]) }}"
                    class="hentry img-2 v-height mb30 gradient"
                    style="background-image: url('{{ $post->image }}');">
                    <span class="post-category text-white bg-success">{{ $post->category }}</span>
                    <div class="text text-sm">
                        <h2>{{ $post->title }}</h2>
                        <span class="date">{{ $post->created_at->format('M d, Y')}}</span>
                    </div>
                </a>
                @endforeach
                <div class="two-col d-block d-md-flex justify-content-between">
                    @foreach($firstfooterPosts2 as $post)
                    <a href="{{ route('website.post', ['slug' => $post->slug]) }}"
                        class="hentry v-height img-2 gradient" style="background-image: url('{{ $post->image }}');">
                        <span class="post-category text-white bg-primary">{{ $post->category }}</span>
                        <div class="text text-sm">
                            <h2>{{ $post->title }}</h2>
                            <span class="date">{{ $post->created_at->format('M d, Y')}}</span>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


 @include('frontpage.give_review');
@endsection
