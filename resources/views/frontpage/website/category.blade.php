@extends('frontpage.frontpage')
@section('title') 
 <title>Vimbiso | Blog Category</title>
         <meta charset="utf-8">
    <meta name="description" content="
    Vimbiso is a free independent & transparent customer assurance platform. At Vimbiso we believe the key to unlocking business success starts by listening to your customers.
    ">
    <meta name="keywords" content="Vimbiso,how grow business,12/04">
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
            <span>Category</span>
            <h3>{{ $category->name }}</h3>
            @if($category->description)
              <p>{{ $category->description }}</p>
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
              <a href="{{ route('website.post', ['slug' => $post->slug]) }}"><img src="{{ $post->image }}" alt="Image" class="img-fluid rounded"></a>
              <div class="excerpt">
              <span class="post-category text-white bg-secondary mb-3">{{ $post->category}}</span>

              <h2><a href="{{ route('website.post', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h2>
              <div class="post-meta align-items-center text-left clearfix">
                <figure class="author-figure mb-0 mr-3 float-left">
                  <img src="@if($post->user->image){{ asset($post->user->image) }} @else {{ asset('website/images/user.png') }} @endif" alt="Image" class="img-fluid">
                </figure>
                <span class="d-inline-block mt-1">By <a href="#">{{ $post->user->name }}</a></span>
                <span>&nbsp;-&nbsp; {{ $post->created_at->format('M d, Y') }}</span>
              </div>
              
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id est.</p>
                <p><a href="#">Read More</a></p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="row text-center pt-5 border-top">
          <div class="col-md-12">
             {{ $posts->links() }}
          </div>
      </div>
    </div>
    </div>
	
	</div>
	 @include('frontpage.give_review');
@endsection
    
