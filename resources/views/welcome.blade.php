@extends('frontpage.frontpage')
 
@section('title')

         <?php
     //$title = DB::table('titetle_and_tags')->first(); ?>

      <title> Vimbiso </title>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="
    Vimbiso is a free independent & transparent customer assurance platform. At Vimbiso we believe the key to unlocking business success starts by listening to your customers.
    ">
    <meta name="keywords" content="Vimbiso,how grow business,12/04">
    <meta name="author" content="Tanaka Karumazondo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  

@endsection
@section('body')  
 
 <?php
        $Show = Session::get('Show');
        if($Show)
        {
			?>
			<script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
			 <script>
$(function() {
    $('#shareModalCenter').modal('show');
});
</script>

		  <?php
          

        }
        ?>
   

    <!-- Navbar -->
    


    <!-- Content -->
    

<div class="container-fluid">
        <div class="row cover p-lg-5 p-sm-1">
            <div class="col-lg-6 col-sm-12 col-xs-12 p-4 ml-lg-5 text-sm-center text-lg-left">
                <span class="cover-text"><b>YOUR REVIEW MATTERS</b></span>
                <br>
                <span class="cover-text-2"><span class="metallic-green">Read reviews.</span> <span style="color:#d0a522;">Write reviews.</span> <span class="metallic-red">Find companies.</span></span>
                <br>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12 cover-search ml-lg-5">
                <div id="search">
                    <form action="{{url('/search')}}" method="get">
                        <fieldset class="clearfix mb-0">
                            <input type="text" name="search1" placeholder="Company or category">
                            <input type="submit" value="Search" class="button float-right bright-red-bg">
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="d-lg-none d-sm-block cover-sm-bg">
            </div> 
        </div>
		
		
		<div class="container-fluid">
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
		</div>
		
		
        <section class="row mt-4 px-lg-5">
                <div class="col-12 px-lg-5">
                    <span class="section-title float-left">Explore categories</span>
                    <a class="btn float-right text-white border-0 bright-green-bg" href="{{url('/categories')}}">View All</a>
                </div><br>
        </section>
        <div class="row d-flex align-items-center justify-content-center my-2">
            @foreach($categories as $categorie)
                <!-- UIkit CARD -->
                
                    <a href="/viewcompany1/{{$categorie->name}}"><button class="btn btn-default  btn-category m-1 category-block" style="text-transform:capitalize;">{{$categorie->name}}</button></a>

            @endforeach                               
            
                

                                           
            
        </div>
		
		
		<div class="container-fluid">
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
		</div>
		
        <h2 class="text-center">Recent Reviews</h2>
        <div class="slider">
            <div class="slide-track">
                
                    
                     @foreach($reviewsdata as $reviews)
                    <a href="/profile/{{$reviews->company}}"> 
                    
                        <div class="slide">
                            
                                
								@if($reviews->ratings ==1)
								    <div  class="reviewcard review-bad">
								@elseif($reviews->ratings ==2)
								    <div  class="reviewcard review-bad">
								@elseif($reviews->ratings ==3)
								     <div  class="reviewcard review-medium">
								@elseif($reviews->ratings ==4)
								      <div  class="reviewcard review-good">
								@elseif($reviews->ratings ==5)
                                       <div  class="reviewcard review-good">								
								@else
								<div  class="reviewcard review-bad">
								@endif
								
                            
                            <div class="propicbox">
                                <img src="rokon/w7.pngwing.com/pngs/419/473/png-transparent-computer-icons-user-profile-login-user-heroes-sphere-black-thumbnail.png" class="propic">
                            </div>
                            <div class="reviewerbox">
                                <span style="font-size:px">{{$reviews->name}}
                                    
                                </span>
								@if($reviews->ratings ==1) 
										<div class="flex-row">
                                             <span class="fa fa-star" style="color:#C70039;"></span>
                                            
                                        </div>
										@elseif($reviews->ratings ==2)
										  <div class="flex-row">
                                             <span class="fa fa-star" style="color:#FF5733;"></span>
                                             <span class="fa fa-star" style="color:#FF5733;"></span>
                                              
                                        </div>
										@elseif($reviews->ratings ==3)
										  <div class="flex-row">
                                             <span class="fa fa-star" style="color:#FFC300;"></span>
                                             <span class="fa fa-star" style="color:#FFC300;"></span>
                                              <span class="fa fa-star" style="color:#FFC300;"></span>
                                             
                                        </div>
										@elseif($reviews->ratings ==4)
										    <div class="flex-row">
                                             <span class="fa fa-star" style="color:#008000;"></span>
                                             <span class="fa fa-star" style="color:#008000;"></span>
                                              <span class="fa fa-star" style="color:#008000;"></span>
                                              <span class="fa fa-star" style="color:#008000;"></span>
                                              
                                        </div>
										@elseif($reviews->ratings ==5)
										      <div class="flex-row">
                                             <span class="fa fa-star" style="color:#034a03;"></span>
                                             <span class="fa fa-star" style="color:#034a03;"></span>
                                              <span class="fa fa-star" style="color:#034a03;"></span>
                                              <span class="fa fa-star" style="color:#034a03;"></span>
                                              <span class="fa fa-star" style="color:#034a03;"></span>
                                        </div>
										@else
											<div class="flex-row">
                                             <span class="fa fa-map" style="color:#C70039;"></span>
                                             
                                        </div>
										@endif
                                
                                <span style="color:var(--blue);font-size:14px !important">{!! date('D, d, M, Y', strtotime($reviews->dateofpurchase)) !!}  <i class="fas fa-map-marker-alt text-success"></i> {{$reviews->branchlocation}}</span>
                            </div>
                            <p class="review p-1 text">{{$reviews->review}}</p>
                            <p class="mb-0 mt-3"><i class="fas fa-building"></i> {{$reviews->company}}</p>
							

                              <div class="v-dialog__container " style="display: block;">
								 <p class="bottomText mt-0 mb-0 pull-right" style="float:right;font:bold">RI # {{$reviews->id}}</p> 
								</div>							 
                            
                            </div>
                        </div>
                    
                        </a>
                      @endforeach
  
            </div>
        </div>
            
    </div>
    <!-- Review messages -->
  <!-- Modal -->
          @include('frontpage.model.shareModalCenter');
         @include('frontpage.give_review');
@endsection