@extends('frontpage.frontpage')
 @section('title') 
 <title>Vimbiso|Plans</title>
 <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="description" content="Find the right plan for you
">
     <meta name="keywords" content="Plans">   
    <meta name="author" content="Tanaka Karumazondo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         
    
@endsection 
@section('body') 


 <!-- Content -->
    
<style>

.card-btn{
    position:absolute;
    bottom:10px;
}
.card{
    min-height:590px;
}
.list-group-item::before{
    font-family: "Font Awesome 5 Brands";
    font-weight: 400;
	content: "✓";
    padding-right:5px;
    color:var(--green); 
}
.text-subheading{
    font-weight: 600;
    font-size: 17px;
}

</style>
<div class="container-fluid">
<br>
        <div class="row p-2 d-flex justify-content-center">
            <div class="col-12 text-center">
                <h1><b>Plans & Pricing</b></h1>
                <h3 class="text-subheading">Find the right plan for you</h1>
                <br>
            </div>
        </div>
        <div class="row mb-5 d-flex justify-content-center align-items-center">
		<div class="col-lg-1 col-sm-12 mb-4">
                <br>
            </div>
            <div class="col-lg-3 col-sm-12 mb-4">
                <div class="card card1">
				 <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h3 style="font-weight:700"></strong>.  Free Plan</strong></h3>
                            <h5 class="card-title">$0</h5>
                            <br>
                            <p class="text-subheading">Claim your company profile & show ratings</p>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item">Claim your business profile page</li>
                            <li class="list-group-item">Invite customer reviews</li>
                        </ul>
                        <br>
                        <a href="#" class="card-link btn btn-primary card-btn border-0 bright-red-bg">Subscribe</a>
                    </div>
					</div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 mb-4">
                <div class="card card2">
                    <div class="card-body">
                        <div class="card-header">
                            <h3 style="font-weight:700"></strong>Standard Plan</h3>
                            <span class=""><strong>From</strong></span>
                            <h5 class="card-title mt-1">
                            $10 <blockquote class=" pl-2" style="display:inline-block"><p><strong>per month</strong><br> Paid annually</p></blockquote>
                            </h5>
                            <p class="text-subheading">Engage with customers & show ratings</p>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item">Claim your business profile page</li>
                            <li class="list-group-item">Invite customer reviews</li>
                            <li class="list-group-item">Respond to reviews</li>
                        </ul>

                        <br>
                        <button type="button" onclick="submitForm('price_1K9qTqB4k1y3jDV8ZjJGXsPU');" class="card-link btn btn-primary card-btn border-0 bright-yellow-bg">Subscribe</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 mb-4">
                <div class="card card3">
                    <div class="card-body">
                        <div class="card-header">
                            <h3 style="font-weight:700"></strong>Premium Plan</h3>
                            <span class=""><strong>From</strong></span>
                            <h5 class="card-title mt-1">
                            $20 <blockquote class=" pl-2" style="display:inline-block"><p><strong>per month</strong><br> Paid annually</p></blockquote>
                            </h5>
                            <p class="text-subheading">All reviews verified <i class="fas fa-check-circle "></i> for authenticity in your marketing.</p>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item">Claim your business profile page</li>
                            <li class="list-group-item">Invite customer reviews</li>
                            <li class="list-group-item">Respond to reviews</li>
                            <li class="list-group-item">All reviews verified </li>
                        </ul>

                        <button type="button" onclick="submitForm('price_1K2lRqB4k1y3jDV8MCSrIfMw');" class="card-link btn btn-primary card-btn border-0 bright-green-bg">Subscribe</button>
                    </div>
                </div>
            </div>
			</center>
        </div>

    </div>
    <form action="http://www.vimbiso.org/plans/" method="POST" id="subscribe_form" style="hidden">
        <input type="hidden" name="csrfmiddlewaretoken" value="zGuAi1RA93WAemrHZ1rkfDEASafY2IG7NW0yjpGqKwGhmOKw0d92gaWBrbhDcBeN">
        <input type="text" name="price-id" id="price-id" hidden>
    </form>

    <script>
        function submitForm(id){
            $('#price-id').val(id);
            if ($('#price-id').val()){
                $('#subscribe_form').submit();
            }
            else{
                console.log('No input field found!');
            }
            
        }
    </script>

    
    
        <script>
            ''
        </script>
                    
                    
                    
                   

       <!-- Modal -->
           @include('frontpage.give_review');


     <!-- FOOTER -->


@endsection 


    