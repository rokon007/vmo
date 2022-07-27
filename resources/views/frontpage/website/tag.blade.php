@extends('frontpage.frontpage')
@section('title') 
 <title>Vimbiso | Blog {{ $tag->name }}</title>
 <meta charset="utf-8">
    <meta name="description" content="
    @if($tag->description) {{ $tag->description }} @endif
    ">
    <meta name="keywords" content="{{ $tag->name }}">
    <meta name="author" content="Tanaka Karumazondo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/rokon/static/css/blogstyle.css"> 
    
@endsection 
 

@section('body') 
<div class="container-fluid">


    <div class="py-5 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <span>Tag</span>
            <h3>{{ $tag->name }}</h3>
            @if($tag->description)
              <p>{{ $tag->description }}</p>
            @endif
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-white">
      <div class="container">
        <div class="row">
          @foreach($posts as $post)
          <div class="col-lg-4 mb-4">
            <div class="entry2">
              <a href="{{ route('website.post', ['slug' => $post->slug]) }}"><img 
			  <img src="{{ $post->image }}"onerror="this.onerror=null;this.src='{{ asset('images/No_image.png') }}';"
			  alt="Image" class="img-fluid rounded"></a>
              <div class="excerpt">
              <span class="post-category text-white bg-secondary mb-3">{{ $post->category}}</span>

              <h2><a href="{{ route('website.post', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h2>
             <div class="post-meta align-items-center text-left clearfix">
                            <figure class="author-figure mb-0 mr-3 float-left"><img
                                    src="@if($post->user->image) {{ $post->user->image }} @else {{ asset('images/admin.jpg') }} @endif"
                                    alt="Image" class="img-fluid"></figure>
                            <span class="d-inline-block mt-1">By <a href="#">Admin</a></span>
                            <span>&nbsp;-&nbsp; {{ $post->created_at->format('M d, Y') }} </span>
                        </div>
              
                <p>{!! Str::limit($post->description, 100) !!}.</p>
                <p><a href="{{ route('website.post', ['slug' => $post->slug]) }}">Read More</a></p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="row text-center pt-5 border-top">
          <div class="col-md-12">
            <ul class="pagination">
						{{ $posts->links() }}                      
                        </ul>
          </div>
      </div>
    </div>
    </div>
	
	</div>
	 @include('frontpage.give_review');
@endsection
    
