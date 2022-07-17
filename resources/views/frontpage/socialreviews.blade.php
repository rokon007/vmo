@extends('frontpage.frontpage')
 @section('title') 
 <title>Vimbiso|Review</title>
 <meta charset="utf-8">
    <meta name="description" content="Zimbabwe: Number of companies listed on the stock exchange: For that indicator, we provide data for Zimbabwe from 1993 to 1999. The average value for ...">
    <meta name="keywords" content=" Listed Companies in Zimbabwe">
        <!-- Required meta tags -->
    <meta name="author" content="Tanaka Karumazondo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
@endsection 
@section('body') 

 <!-- Content -->
    
<style>
    .row{
        margin-left: 0px;
    }
</style>


    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="row align-items-center">
		 <div class="col-lg-3 col-sm-12 d-flex justify-content-center align-items-center">
                               <br>
                        </div>
            
            <div class="col-lg-6 col-sm-12 m-lg-0 m-4" style="border:2px solid var(--red);border-radius:10px">
                <h2 class="text-center p-3 "><strong>Give a review</strong></h2>
                
              <form action="http://www.vimbiso.org/give/reviews" method="post" >
					 @csrf				
                   <!--  <input type="hidden" name="csrfmiddlewaretoken" value="{{ csrf_token() }}" > -->
				   <input type="hidden" name="reviewfrom" value="{{$reviewfrom}}" >
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email or WhatsApp number</label>
                        <input type="text" class="form-control" name="contact" aria-describedby="emailHelp" value="{{Auth::user()->email}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Your name</label>
                        <input type="text" class="form-control" id="reveiwer-name" name="name" value="{{Auth::user()->company_name}}" required>
                    </div>
					
                    <div class="form-row d-flex justify-content-center align-items-center" id="company-block">
                        <div id="company-dropdown" class="w-100 mb-3">
                            <label for="exampleInputPassword1">Company name</label>
                            <span style="color:lightgray"> (Not listed add company <a style="cursor:pointer" class="text-success" onclick="unlistedcompany()">+</a> )</span>
                             <select name="company_id" class="form-control js-example-basic-single" id="company_id">
															<option value="">Select A Company</option>
															@foreach($CompanyNameData as $companyname)                                                          
															<option value="{{$companyname->id}}">{{$companyname->company}}</option>


															@endforeach											
														</select>
                        </div>
                    </div>
                    <div class="form-group d-flex flex-row">
                        <div class="col-lg-6 col-sm-12 p-0 pr-3">
                            <label for="exampleInputPassword1">Product or service purchased</label>
                            <input type="text" class="form-control" name="purchased-item" placeholder="Enter Product or service name" required>
                        </div>
                        <div class="col-lg-6 col-sm-12 ml-2">
                            <label for="exampleInputPassword1">Type of purchase</label>
                            <select class="form-control" name="purchaseditem">
                                <option value="">Select purchase type</option>
                                <option value="service">Service</option>
                                <option value="product">Product</option>
                                <option value="location">Location</option>
                            </select>  
                        </div>                      
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Date of purchase</label>
                        <input type="date" class="form-control" name="dateofpurchase"  required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Branch location <span style="color:lightgray">(where you made the purchase)</span></label>
                        <input type="text" class="form-control" name="branchlocation" placeholder="Enter branch location"  required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Your review</label>
                        <textarea type="text" class="form-control" name="review"  required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Ratings</label>
                        <input type="number" step="1" max="5" class="form-control" name="ratings" placeholder="/5"  required>
                    </div>
                    <div class="modal-footer">
                
                <button type="Submit" class="btn btn-primary">Add Review</button>
            </div>
                
            </div>
            
        </form>
            </div>
        </div>
    </div>
	  <script>
        function unlistedcompany(){
            console.log("unlistedCompany");
            $("#company-dropdown").remove();
            $("#company-block").append(`<div class="col-lg-4 pr-3 mb-3">
                <label for="exampleInputPassword1">Company name</label>
                <input type="text" class="form-control" id="unlistedcompany-name" name="unlistedcompany-name" placeholder="Company name" required>
            </div>
            <div class="col-lg-4 pr-3 mb-3">
                <label for="exampleInputPassword1">Company email</label>
                <input type="text" class="form-control" id="unlistedcompany-email" name="unlistedcompany-email" placeholder="Company email" required>
            </div>
            <div class="col-lg-4 pr-3 mb-3">
                <label for="exampleInputPassword1">Company contact</label>
                <input type="text" class="form-control" id="unlistedcompany-contact" name="unlistedcompany-contact" placeholder="Company contact">
            </div>
            <div class="col-lg-4 pr-3 mb-3">
                <label for="exampleInputPassword1">Company country</label>
                <input type="text" class="form-control" id="unlistedcompany-country" name="unlistedcompany-country" placeholder="Company country" required>
            </div>
            <div class="col-lg-4 pr-3 mb-3">
                <label for="exampleInputPassword1">Company city</label>
                <input type="text" class="form-control" id="unlistedcompany-city" name="unlistedcompany-city" placeholder="Company city" required>
            </div>
            <div class="col-lg-4 mb-3">
                <label for="exampleInputPassword1">Company block address</label>
                <input type="text" class="form-control" id="unlistedcompany-block" name="unlistedcompany-block" placeholder="Company block address">
            </div>
            <div class="col-lg-4 mb-3">
                <label for="exampleInputPassword1">Company category</label>
                <input type="text" class="form-control" id="unlistedcompany-category" name="unlistedcompany-category" placeholder="Company category">
            </div>`)
        }
    </script>
	 <script>
        let notifier = new AWN({});
        $('.js-example-basic-single').select2();
      </script> 
@endsection