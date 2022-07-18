@extends('frontpage.frontpage')
@section('title') 
 <title>{{ $post->title }}</title>
        <meta charset="utf-8">
    <meta name="description" content="
    {{ Str::limit($post->description, 100) }} ...
    ">
    <meta name="keywords" content="{{ $post->title }}">
    <meta name="author" content="Tanaka Karumazondo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script>
    var timeleft = 59;
var downloadTimer = setInterval(function(){
  if(timeleft <= 0){
    clearInterval(downloadTimer);
    document.getElementById("countdown").innerHTML = "Finished";
  } else {
    document.getElementById("countdown").innerHTML = timeleft + " seconds remaining Preparing Download";
  }
  timeleft -= 1;
}, 1000);
</script>
<script>
    setTimeout(function() {
    $('#timer').fadeOut('fast');
	 $('#dload').fadeIn('fast');
}, 60000);
</script>
    
@endsection 
 

@section('body') 
<div class="container-fluid">


	                     
    <div class="container">
        <div class="row same-height ">
            <div class="col-md-12 col-lg-10">
                <div class="post-entry text-center">
                   
                    <h1 class="mb-4"><a href="javascript:void()">{{ $post->title }}</a></h1>
                    <div class="post-meta align-items-center text-center">
                       
                       
                        <span>&nbsp;&nbsp; {!! date('D, d, M, Y', strtotime($post->created_at)) !!}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

<br>
<section class="site-section py-lg">
    <div class="container">
        <div class="row blog-entries element-animate">
            <div class="col-md-12 col-lg-8 main-content">
			 <span class="text-lg-center text-left font-description-sm" >
							 <img src="{{ $post->image }}" alt="Image placeholder"
                                         class="img-fluid mb-5" onerror="this.onerror=null;this.src='uploads/image/non.jpg';"/>
							</span>
                <div class="post-content-body">
                    {!! $post->description !!}
                </div>
				<div class="post-content-body">
                    <p class="dropdown-item"><i class="fas fa-share fa-1x ml-2">Share on Social Midea</i></p>
								 	
                                <tr>
                                    @foreach($socialShare as $key =>$value)
                                    <th><a href="{{$value}}"><i class="fab fa-{{$key}} fa-2x ml-2"></i>&#160;&#160;</a></th>
                                     @endforeach
                                </tr>
                </div>
                <br>
               <div   class="row justify-content-center align-items-center">

        <a  style="background:red;color:#fff;padding:10px;text-decoration:none;display:block">Download Free Guide "How to get Reward"</a>
      
     

    </div>
    
    <div id="wer"></div>
	<br>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<div id="timer"  class="row justify-content-center align-items-center">
	 <p id="countdown" style="background:#333ab7;color:#fff;padding:12px;text-decoration:none;display:block"></p>
	 
	</div>
	<br>
	<div id="dload" style="display:none;" class="row justify-content-center align-items-center">
	 <a href="{!! $post->dlink !!}" style="background:#333ab7;color:#fff;padding:12px;text-decoration:none;display:block">Download</a>
	</div>
	<br>
	<div class="row justify-content-center align-items-center">
	  <a  style="background:red;color:#fff;padding:10px;text-decoration:none;display:block;font-size:12px;">Note: If The Link is Not Working Then Try Again Later</a>
	</div><br>

            </div>

            <!-- END main-content -->

            <div class="col-md-12 col-lg-4 sidebar">
                <div class="sidebar-box search-form-wrap">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="icon fa fa-search"></span>
                            <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                        </div>
                    </form>
                </div>
                <!-- END sidebar-box -->
                <div class="sidebar-box">
                    
                </div>
                <!-- END sidebar-box -->
                <div class="sidebar-box">
                    <h3 class="heading">Recent Rewards</h3>
                    <div class="post-entry-sidebar">
                        <ul>
                            @foreach($posts as $post)
                            <li>
                                <a href="{{ route('rewards.post', ['slug' => $post->slug]) }}">
                                    <img src="{{ $post->image }}" alt="Image placeholder"
                                         class="img-fluid mb-5" onerror="this.onerror=null;this.src='uploads/image/non.jpg';"/>
                                    <div class="text">
                                        <h4> {{ $post->title }} </h4>
                                        <div class="post-meta">
                                            <span class="mr-2"> {!! date('D, d, M, Y', strtotime($post->created_at)) !!} </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- END sidebar-box -->

               
                <!-- END sidebar-box -->

               
            </div>
            <!-- END sidebar -->

        </div>
    </div>
</section>



</div>
@endsection

@section('script')
<script>
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://laravel-blog-tutorial-series.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<script id="dsq-count-scr" src="//laravel-blog-tutorial-series.disqus.com/count.js" async></script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endsection          