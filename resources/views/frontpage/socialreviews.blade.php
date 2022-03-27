@extends('frontpage.frontpage')
 @section('title') 
 <title>Vimbiso|Review</title>
         <meta name="description" content="vary good">
     <meta name="keywords" content="vimbiso">
    
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
                
              <form action="{{route('reviews.give')}}" method="post" >
									@csrf
                    <input type="hidden" name="csrfmiddlewaretoken" value="lB6hTX7BPDoxyGkcanDqHJTLrOl1ZKiysBVUI5EuLhGxCIiDxvFx1JJwPdYURiU9">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email or WhatsApp number</label>
                        <input type="text" class="form-control" name="contact" aria-describedby="emailHelp" value="{{$finduser->email}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Your name</label>
                        <input type="text" class="form-control" id="reveiwer-name" name="name" value="{{$finduser->name}}" required>
                    </div>
					
                    <div class="form-row d-flex justify-content-center align-items-center" id="company-block">
                        <div id="company-dropdown" class="w-100 mb-3">
                            <label for="exampleInputPassword1">Company name</label>
                            <span style="color:lightgray"> (Not listed add company <a style="cursor:pointer" class="text-success" onclick="unlistedcompany()">+</a> )</span>
                             <select name="company_id" class="form-control form-control-solid form-control" id="company_id">
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
	 
@endsection