@extends('frontpage.frontpage')
@section('title') 
 <title>{{ $post->title }}</title>
        <meta charset="utf-8">
    <meta name="description" content="
    Vimbiso is a free independent & transparent customer assurance platform. At Vimbiso we believe the key to unlocking business success starts by listening to your customers.
    ">
    <meta name="keywords" content="Vimbiso,how grow business,12/04">
    <meta name="author" content="Tanaka Karumazondo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
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
                                         class="img-fluid mb-5"/>
							</span>
                <div class="post-content-body">
                    {!! $post->description !!}
                </div>
                
               

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
                    <h3 class="heading">Recent Announcement</h3>
                    <div class="post-entry-sidebar">
                        <ul>
                            @foreach($posts as $post)
                            <li>
                                <a href="">
                                    <img src="{{ $post->image }}" alt="Image placeholder"
                                         class="img-fluid mb-5"/>
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