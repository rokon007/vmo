<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header metallic-red-bg div-1">
                <div class="d-flex justify-content-center ">
                    <h3 class="modal-title text-white text-center " id="exampleModalLongTitle">Give a review</h3>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <form action="{{route('reviews.give')}}" method="post"  class="form">
									@csrf
                    <input type="hidden" name="csrfmiddlewaretoken" value="lB6hTX7BPDoxyGkcanDqHJTLrOl1ZKiysBVUI5EuLhGxCIiDxvFx1JJwPdYURiU9">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email or WhatsApp number</label>
                        <input type="text" class="form-control" name="contact" aria-describedby="emailHelp" placeholder="Enter Email or WhatsApp number" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Your name</label>
                        <input type="text" class="form-control" id="reveiwer-name" name="name" placeholder="Your name" required>
                    </div>
                    <div class="form-row d-flex justify-content-center align-items-center" id="company-block">
                        <div id="company-dropdown" class="w-100 mb-3">
                            <label for="exampleInputPassword1">Company name</label>
                            <span style="color:lightgray"> (Not listed add company <a style="cursor:pointer" class="text-success" onclick="unlistedcompany()">+</a> )</span>
                             <select name="company_id" class="form-control form-control-solid form-control-lg" id="company_id">
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
                    <!-- <div class="Stars" style="--rating: 5;" aria-label="Rating of this product is 2.3 out of 5."> -->
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="Submit" class="btn btn-primary">Add Review</button>
            </div>
        </form>
            </div>
        </div>
    </div>