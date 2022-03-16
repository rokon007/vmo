	@extends('admin.app')
 

@section('body') 
<div class="col-xl-12">
             <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
																<div class="modal-content">
																<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Edit Reviews</h5>
	                                
								</div>
	<!----------------------------------------------------->

                          <div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<div class="card card-custom">
									<div class="card-body p-0">
										<!--begin: Wizard-->
										<div class="wizard wizard-2" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="false">
											<!--begin: Wizard Nav-->
											
											
											
											
											
											
											
											<!--end: Wizard Nav-->
											<!--begin: Wizard Body-->
											<div class="wizard-body py-8 px-8 py-lg-20 px-lg-10">
												<!--begin: Wizard Form-->
												<div class="row">
													<div class="offset-xxl-0 col-xxl-12">
														<form action="{{ route('updatereview', ['id' => $RData->id]) }}"  method="post"  class="form">
									@csrf
															<!--begin: Wizard Step 1-->
															<div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
																
																
															<div class="row">
																<div class="col-xl-4">
																<div class="form-group">
																	<label>Name</label>
																	<input type="text" class="form-control form-control-solid form-control-lg" name="name" placeholder=" Name" value="{{$RData->name}}" />
																	<span class="form-text text-muted">Please enter your name.</span>
																</div>
																
																<div class="form-group">
																	<label>Contact</label>
																	<input type="tel" class="form-control form-control-solid form-control-lg" name="contact"  value="{{$RData->contact}}" />
																	<span class="form-text text-muted">Please enter your phone number.</span>
																</div>
																<div class="form-group">
																	<label>Purchased item</label>
																	<input type="text" class="form-control form-control-solid form-control-lg" name="purchaseditem" value="{{$RData->purchaseditem}}" />
																	<span class="form-text text-muted">Please enter Purchased item.</span>
																</div>
																
																<div class="form-group">
																	<label>Item counter</label>
																	<input type="number" class="form-control form-control-solid form-control-lg" name="itemcounter" value="{{$RData->itemcounter}}" />
																	<span class="form-text text-muted">Please enter your Item counter.</span>
																</div>
																<div class="form-group">
																	<label>Date of purchase</label>
																	<input type="date" class="form-control form-control-solid form-control-lg" name="dateofpurchase" value="{{$RData->dateofpurchase}}" />
																	<span class="form-text text-muted">Please enter Date of purchase.</span>
																</div>
																		
															</div>
																	
																	<div class="col-xl-4">
																	<div class="form-group">
																	<label>Branch location</label>
																	<input type="text" class="form-control form-control-solid form-control-lg" name="branchlocation" value="{{$RData->branchlocation}}" />
																	<span class="form-text text-muted">Please enter your Branch location.</span>
																</div>
																
																<div class="form-group">
																	<label>Review</label>					
																	<textarea class="form-control form-control-solid form-control-lg" name="review" value="" rows="6">{{$RData->review}}</textarea>
																	<span class="form-text text-muted">Please enter your Review.</span>
																</div>
																<div class="form-group">
																	<label>Ratings</label>
																	<input type="number" class="form-control form-control-solid form-control-lg" name="ratings" value="{{$RData->ratings}}" />
																	<span class="form-text text-muted">Please put your Ratings.</span>
																</div>
																<div class="form-group">
																	<label>Type of purchase</label>
																	<input type="text" class="form-control form-control-solid form-control-lg" name="typeofpurchase" value="{{$RData->typeofpurchase}}" />
																	<span class="form-text text-muted">Please enter your last name.</span>
																</div>
																
																		
																	</div>
																	
																	
																	<div class="col-xl-4">
																	
																		<div class="form-group">
																			<label>Response</label>
																			<textarea class="form-control form-control-solid form-control-lg" name="response"  rows="6">{{$RData->response}}</textarea>
																			<span class="form-text text-muted">Please enter your Response.</span>
																		</div>
																		
																		
																		
																	<div class="form-group">
																		<div class="checkbox-inline">
																		         
																				 <label class="checkbox checkbox-danger">
                                                                               <input type="checkbox" value="1" name="isresolved[]"{{ $RData->isresolved == 1 ? 'checked' : null }}   />
                                                                               <span></span>
                                                                                  Is resolved
                                                                               </label>
																				 
                                                                                <label class="checkbox checkbox-danger">
                                                                                <input type="checkbox" name="whatsappreview[]" value="1" {{ $RData->whatsappreview == 1 ? 'checked' : null }}/>
                                                                                <span></span>
                                                                                   Whatsapp review
                                                                                </label>                                                                                                                                                          
                                                                         </div>
																	</div>
																	
																	<div class="form-group">
																		<div class="checkbox-inline">																		        						 
                                                                              <label class="checkbox checkbox-danger ">
                                                                             <input type="checkbox" name="resolved[]" value="1" {{ $RData->resolved == 1 ? 'checked' : null }}/>
                                                                             <span></span>
                                                                                 Resolved
                                                                                 </label>
                                                                         </div>
																	</div>
																		 
																		 
																		 <div class="form-group">
																	       <label>Company</label>

																	       <select name="company_id" class="form-control form-control-solid form-control-lg" id="exampleSelectl">
															<option value="{{$RData->company_id}}">{{$RData->company}}</option>
															@foreach($CompanyNameData as $companyname)
                                                            <option value="{{$companyname->id}}" >{{$companyname->company}}</option>
															@endforeach
															
														</select>



																	       
																	       <span class="form-text text-muted">Please enter your Company.</span>
																        </div>
																		
																		 <div class="form-group">
																	       <label>Unlisted company</label>
																	       <select name="unlistedcompany" class="form-control form-control-solid form-control-lg" >
															        <option value="">No Company</option>
                                                                    <option value="Company" >Company</option>
														                 </select>
																	       <span class="form-text text-muted">Please enter your Unlisted company.</span>
																        </div>
																		
																	</div>
																</div>
															</div>
															<!--end: Wizard Step 1-->
															<!--begin: Wizard Step 2-->
															
															
															
															
															
														
															
															<!--end: Wizard Step 6-->
															<!--begin: Wizard Actions-->
															<div class="d-flex justify-content-between border-top mt-5 pt-10">
																
																<div >
																<button type="button"  class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4 " data-dismiss="modal" >Cansel</button>
																	<input  type="submit" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" value="Submit">
																	
																</div>
															</div>
															<!--end: Wizard Actions-->
														</form>
													</div>
													<!--end: Wizard-->
												</div>
												<!--end: Wizard Form-->
											</div>
											<!--end: Wizard Body-->
										</div>
										<!--end: Wizard-->
									</div>
								</div>
							</div>
							<!--end::Container-->
						</div>
						</div>
						</div>

</div>
									<!------------------------------------------------------->
@endsection