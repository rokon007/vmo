@extends('frontpage.frontpage')
@section('title') 
 <title>{{ $post->title }}</title>
        <meta charset="utf-8">
    <meta name="description" content="
    {!! Str::limit($post->description, 100) !!} ...
    ">
    <meta name="keywords" content="{{ $post->title }}">
    <meta name="author" content="Tanaka Karumazondo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="/rokon/static/css/blogstyle.css"> 
    
@endsection 
 

@section('body') 
<div class="container-fluid">

<div class="site-cover site-cover-sm same-height overlay single-page"
    style="background-image: url('{{ $post->image }}');">
<!--	<div class="site-cover site-cover-sm same-height overlay single-page" > -->
   
	
    <div class="container">
        <div class="row same-height justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="post-entry text-center">
                    <span class="post-category text-white bg-success mb-3">{{ $post->category }}</span>
                    <h1 class="mb-4"><a href="javascript:void()">{{ $post->title }}</a></h1>
                    <div class="post-meta align-items-center text-center">
                        <figure class="author-figure mb-0 mr-3 d-inline-block">
                            <img src="@if($post->user->image) {{ $post->user->image }} @else {{ asset('images/admin.jpg') }} @endif" alt="Image" class="img-fluid">
                        </figure>
                        <span class="d-inline-block mt-1">By Admin</span>
                        <span>&nbsp;-&nbsp; {{ $post->created_at->format('M d, Y') }}</span>
                    </div>
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
                <div class="post-content-body">
				<center>
         <script type="text/javascript">
    atOptions = {
        'key' : '04d8dc338c29aacbcc8424433298a188',
        'format' : 'iframe',
        'height' : 60,
        'width' : 468,
        'params' : {}
    };
    document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.effectivecreativeformats.com/04d8dc338c29aacbcc8424433298a188/invoke.js"></scr' + 'ipt>');
</script> 
     </center>
	 <br>
                    {!! $post->description !!}
                </div>
				 <div class="post-content-body">
                    <p class="dropdown-item"><i class="fas fa-share fa-1x ml-2">Share on Social Media</i></p>
								 	
                                <tr>
                                    @foreach($socialShare as $key =>$value)
                                    <th><a href="{{$value}}"><i class="fab fa-{{$key}} fa-2x ml-2"></i>&#160;&#160;</a></th>
                                     @endforeach
                                </tr>
                </div>
                <div class="pt-5">
                    <p>
                        Categories: <a href="{{ route('website.category', ['slug' => $post->category_id]) }}">{{ $post->category }}</a> 
                        @if($post->tags()->count() > 0)
                        Tags: 
                            @foreach($post->tags as $tag)
                                <a href="{{ route('website.tag', ['slug' => $tag->slug]) }}">#{{ $tag->name }}</a>, 
                            @endforeach
                        @endif
                    </p>
                </div>
				<center>
         <script type="text/javascript">
    atOptions = {
        'key' : '04d8dc338c29aacbcc8424433298a188',
        'format' : 'iframe',
        'height' : 60,
        'width' : 468,
        'params' : {}
    };
    document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.effectivecreativeformats.com/04d8dc338c29aacbcc8424433298a188/invoke.js"></scr' + 'ipt>');
</script> 
     </center>
                <div class="pt-5">
                    <h5 class="mb-5" id="dsq-count-scr">{{$commentcount}} Comments</h5>
					@if($commentcount!=0)
                    <a href="{{ route('website.post', ['slug' => $post->slug]) }}#disqus_thread">Comments</a>
                   @endif
						
					
                    <div id="disqus_thread"></div>
<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

                    <ul class="comment-list">
					@foreach($comment as $comments)
                        <li class="comment">
                            <div class="vcard">
                                <img src="{{ asset('images/user.png') }}" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                                <h3>{{ $comments->name }}</h3>
                                <div class="meta">{{ $comments->created_at->format('M d, Y') }}</div>
                                <p>{{ $comments->message }}</p>
                                <p><a href="#" class="reply rounded">Reply</a></p>
                            </div>
                        </li>
                       @endforeach
					   {{--      <li class="comment">
                            <div class="vcard">
                                <img src="{{ asset('website/images/user.png') }}" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                                <h3>Jean Doe</h3>
                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                                    necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente
                                    iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                <p><a href="#" class="reply rounded">Reply</a></p>
                            </div>

                            <ul class="children">
                                <li class="comment">
                                    <div class="vcard">
                                        <img src="{{ asset('website/images/user.png') }}" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3>Jean Doe</h3>
                                        <div class="meta">January 9, 2018 at 2:21pm</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem
                                            laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe
                                            enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?
                                        </p>
                                        <p><a href="#" class="reply rounded">Reply</a></p>
                                    </div>


                                    <ul class="children">
                                        <li class="comment">
                                            <div class="vcard">
                                                <img src="{{ asset('website/images/user.png') }}"
                                                    alt="Image placeholder">
                                            </div>
                                            <div class="comment-body">
                                                <h3>Jean Doe</h3>
                                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur
                                                    quidem laborum necessitatibus, ipsam impedit vitae autem, eum
                                                    officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum
                                                    impedit necessitatibus, nihil?</p>
                                                <p><a href="#" class="reply rounded">Reply</a></p>
                                            </div>

                                            <ul class="children">
                                                <li class="comment">
                                                    <div class="vcard">
                                                        <img src="{{ asset('website/images/user.png') }}"
                                                            alt="Image placeholder">
                                                    </div>
                                                    <div class="comment-body">
                                                        <h3>Jean Doe</h3>
                                                        <div class="meta">January 9, 2018 at 2:21pm</div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Pariatur quidem laborum necessitatibus, ipsam impedit vitae
                                                            autem, eum officia, fugiat saepe enim sapiente iste iure!
                                                            Quam voluptas earum impedit necessitatibus, nihil?</p>
                                                        <p><a href="#" class="reply rounded">Reply</a></p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="comment">
                            <div class="vcard">
                                <img src="{{ asset('website/images/user.png') }}" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                                <h3>Jean Doe</h3>
                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                                    necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente
                                    iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                <p><a href="#" class="reply rounded">Reply</a></p>
                            </div>
					   </li> --}}
                    </ul>
                    <!-- END comment-list -->

                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Leave a comment</h3>
						 <form action="{{route('comment.save')}}" method="post" class="p-5 bg-light" >
									@csrf
                      <!--  <form action="#" class="p-5 bg-light"> -->
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
							<input type="hidden" class="form-control" value="{{ $post->id }}" name="post_id" id="post_id">
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="form-group">
                                <label for="website">Company</label>
                                <input type="text" class="form-control" name="company" id="company">
                            </div>

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="message" id="message"  cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Post Comment" class="btn btn-primary">
                            </div>

                        </form>
                    </div> 
					<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
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
                    <div class="bio text-center">
                        <img src="@if($post->user->image) {{ $post->user->image }} @else {{ asset('images/admin.jpg') }} @endif" alt="Image Placeholder"
                            class="img-fluid mb-5">
                        <div class="bio-body">
                            <h3><strong>Admin</strong></h3>
                            <p class="mb-4"><strong>Tanaka Karumazondo</strong><br>Founder and Managing Director, Vimbiso.</p>
                            <p><a href="{{url('about')}}" class="btn btn-primary btn-sm rounded px-4 py-2">Read my bio</a></p>
                            <p class="social">
                                <a href="https://hi-in.facebook.com/vimbiso.org/posts/137764792096405" class="p-2"><span class="fab fa-facebook fa-2x ml-2"></span></a>
                                <a href="https://twitter.com/vimbiso_reviews?lang=en" class="p-2"><span class="fab fa-twitter fa-2x ml-2"></span></a>
                                <a href="https://www.instagram.com/vimbiso_reviews/" class="p-2"><span class="fab fa-instagram fa-2x ml-2"></span></a>
                                <a href="https://www.youtube.com/channel/UCdVRRFdysLHPenjHSICvenw" class="p-2"><span class="fab fa-youtube fa-2x ml-2"></span></a>
								
                            </p>
                        </div>
                    </div>
                </div>
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
                <!-- END sidebar-box -->
                <div class="sidebar-box">
                    <h3 class="heading">Popular Posts</h3>
                    <div class="post-entry-sidebar">
                        <ul>
                            @foreach($posts as $post)
                            <li>
                                <a href="{{ route('website.post', ['slug' => $post->slug]) }}">
                                    <img src="{{ $post->image }}" alt="Image placeholder"
                                         class="img-fluid mb-5" onerror="this.onerror=null;this.src='uploads/image/non.jpg';"/>
                                    <div class="text">
                                        <h4> {{ $post->title }} </h4>
                                        <div class="post-meta">
                                            <span class="mr-2"> {{ $post->created_at->format('M d, Y')}} </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
				
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
                <!-- END sidebar-box -->

                <div class="sidebar-box">
                    <h3 class="heading">Categories</h3>
                    <ul class="categories">
                        @foreach($blog_category as $category)
                        <li><a href="{{ route('website.category', ['slug' => $category->category_id]) }}">{{ $category->category }} <span>({{ $category->total }})</span> </a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- END sidebar-box -->
				
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


                <div class="sidebar-box">
                    <h3 class="heading">Tags</h3>
                    <ul class="tags">
                        @foreach($tags as $tag)
                        <li><a href="{{ route('website.tag', ['slug' => $tag->slug]) }}">{{ $tag->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
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
            <!-- END sidebar -->
            
        </div>
    </div>
</section>

<div class="site-section bg-light">
    <div class="container">

        <div class="row mb-5">
            <div class="col-12">
                <h2>More Related Posts</h2>
            </div>
        </div>
		
		
		<div class="row">
		<div class="col-lg-6">
		<script type="text/javascript">
    atOptions = {
        'key' : '04d8dc338c29aacbcc8424433298a188',
        'format' : 'iframe',
        'height' : 60,
        'width' : 468,
        'params' : {}
    };
    document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.effectivecreativeformats.com/04d8dc338c29aacbcc8424433298a188/invoke.js"></scr' + 'ipt>');
</script> 
		</div>
		<div class="col-lg-6">
		<script type="text/javascript">
    atOptions = {
        'key' : '04d8dc338c29aacbcc8424433298a188',
        'format' : 'iframe',
        'height' : 60,
        'width' : 468,
        'params' : {}
    };
    document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.effectivecreativeformats.com/04d8dc338c29aacbcc8424433298a188/invoke.js"></scr' + 'ipt>');
</script> 
		</div>
		</div>
		

        <div class="row align-items-stretch retro-layout">

            <div class="col-md-5 order-md-2">
                @foreach($lastRelatedPost as $post)
                <a href="{{ route('website.post', ['slug' => $post->slug]) }}" class="hentry img-1 h-100 gradient"
                    style="background-image: url('{{ $post->image }}');">
                    <span class="post-category text-white bg-danger">{{ $post->category }}</span>
                    <div class="text">
                        <h2>{{ $post->title }}</h2>
                        <span>{{ $post->created_at->format('M d, Y')}}</span>
                    </div>
                </a>
                @endforeach
            </div>

            <div class="col-md-7">
                @foreach($firstRelatedPost as $post)
                <a href="{{ route('website.post', ['slug' => $post->slug]) }}" class="hentry img-2 v-height mb30 gradient"
                    style="background-image: url('{{ $post->image }}');">
                    <span class="post-category text-white bg-success">{{ $post->category}}</span>
                    <div class="text text-sm">
                        <h2>{{ $post->title }}</h2>
                        <span>{{ $post->created_at->format('M d, Y')}}</span>
                    </div>
                </a>
                @endforeach

                <div class="two-col d-block d-md-flex justify-content-between">
                    @foreach($firstRelatedPosts2 as $post)
                    <a href="{{ route('website.post', ['slug' => $post->slug]) }}" class="hentry v-height img-2 gradient"
                        style="background-image: url('{{ $post->image }}');">
                        <span class="post-category text-white bg-primary">{{ $post->category }}</span>
                        <div class="text text-sm">
                            <h2>{{ $post->title }}</h2>
                            <span>{{ $post->created_at->format('M d, Y')}}</span>
                        </div>
                    </a>
                    @endforeach
                </div>
				<br>
            </div>
        </div>

    </div>
</div>

</div>
 @include('frontpage.give_review');
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