@extends('admin.app')
 

@section('body') 


		<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-1">
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<!--begin::Page Title-->
										<h5 class="text-dark font-weight-bold my-1 mr-5">Companies</h5>
										<!--end::Page Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
											<li class="breadcrumb-item text-muted">
												<a href="#" class="text-muted">Account</a>
											</li>
											<li class="breadcrumb-item text-muted">
												<a href="#" class="text-muted">Company settings</a>
											</li>
											
											
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page Heading-->
								</div>
								<!--end::Info-->
								<!--begin::Toolbar-->
								<div class="d-flex align-items-center">
									<!--begin::Actions-->
									<a href="#" class="btn btn-light-primary font-weight-bolder btn-sm">Actions</a>
									<!--end::Actions-->
									<!--begin::Dropdown-->
									<div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
										<a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="svg-icon svg-icon-success svg-icon-2x">
												<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Files/File-plus.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24" />
														<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</a>
										<div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0 m-0">
											<!--begin::Navigation-->
											<ul class="navi navi-hover">
												<li class="navi-header font-weight-bold py-4">
													<span class="font-size-lg">Choose Label:</span>
													<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
												</li>
												<li class="navi-separator mb-3 opacity-70"></li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
															<span class="label label-xl label-inline label-light-success">Customer</span>
														</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
															<span class="label label-xl label-inline label-light-danger">Partner</span>
														</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
															<span class="label label-xl label-inline label-light-warning">Suplier</span>
														</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
															<span class="label label-xl label-inline label-light-primary">Member</span>
														</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
															<span class="label label-xl label-inline label-light-dark">Staff</span>
														</span>
													</a>
												</li>
												<li class="navi-separator mt-3 opacity-70"></li>
												<li class="navi-footer py-4">
													<a class="btn btn-clean font-weight-bold btn-sm" href="#">
													<i class="ki ki-plus icon-sm"></i>Add new</a>
												</li>
											</ul>
											<!--end::Navigation-->
										</div>
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::Toolbar-->
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								
								<!--end::Notice-->
								<!--end::Notice-->
								@if(count($errors)>0)
                                   <div class="alert alert-danger">
                                   	Upload Validetion Error!<br><br>
                                   	<ul>
                                       @foreach($errors->all() as $error)
                                          <li>{{$error}}</li>
                                       @endforeach 
                                   	</ul>

                                   </div>
								@endif

								@if($message = Session::get('success'))
								<div class="alert alert-success alert-block">
									<button type="button" class="close" data-dismiss="alert">x</button>
									<strong>{{$message}}</strong>
								</div>
								@endif
								<!--begin::Card-->
								<div class="card card-custom">
									<div class="card-header flex-wrap border-0 pt-6 pb-0">
										<div class="card-title">
											<h3 class="card-label">Company Details
											<span class="d-block text-muted pt-2 font-size-sm">Select company to change</span></h3>
										</div>
										
										
										
										
										
										
									</div>
									<div class="card-body">
									
				<form action="{{ url('companyedite/'.$CompanyData->id) }}" method="post"  class="form">
									@csrf
                                    @method('PUT')
									<div class="modal-body">
										<div class="offset-xxl-0 col-xxl-12">
											
											<!--begin::Form-->
											
												<div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
												<div class="row">
												
												<div class="col-xl-2">
												<div class="form-group">
														<label>Company id</label>
			                                             <input   type="text" name="company" value="{{$CompanyData['user_id']}}" class="form-control form-control-lg" readonly>
														 </div>
												</div>
												<div class="col-xl-3">
												<div class="form-group">
														<label>Company name</label>
			                                             <input   type="text" name="company" value="{{$CompanyData['company']}}" class="form-control form-control-lg" readonly>
												</div>
												</div>
												<div class="col-xl-4">
												<div class="form-group">
														<label for="exampleSelectl">Country</label>
														<input type="text" name="country" value="{{$CompanyData['country']}}"  class="form-control form-control-lg" readonly >
													</div>
													</div>
													<div class="col-xl-3">
													<div class="form-group">
														<label>City</label>
			                                             <input   type="text" name="city" value="{{$CompanyData['city']}}"  class="form-control form-control-lg" readonly>
													</div>
													</div>
													<div class="col-xl-2">
													<div class="form-group">
														<label>Block</label>
			                                             <input   type="text" name="block" value="{{$CompanyData['block']}}"   class="form-control form-control-lg" readonly>
													</div>
												</div>												
												
												
									<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>			
												<div class="col-xl-2">
												<div class="form-group">
														<label>contact</label>
			                                             <input   type="tel" name="contact" value="{{$CompanyData['contact']}}"  class="form-control form-control-lg" placeholder="Contact">
													</div>
													</div>
												<div class="col-xl-3">	
												<div class="form-group">
														<label for="exampleSelectl">Select Parent catagori</label>
														<select name="category" class="form-control form-control-lg" id="category" >
															<option value="">Select Parent catagori</option>
															@foreach($categories as $NewcategoriData)
															
                                                            <option value="{{$NewcategoriData->name}}" >{{$NewcategoriData->name}}</option>
														   	
															@endforeach
															
														</select>
														<script>
														jQuery(document).ready(function(){
															jQuery('#category').change(function(){
																let cid=jQuery(this).val();
																jQuery.ajax({
																	url:'/getSubcate',
																	type:'post',
																	data:'cid='+cid+'&_token={{csrf_token()}}',
																	success:function(result){
																		jquery('#sub').html(result)
																	}
																});
															});
														});
														
														</script>
														
														
														
													</div>
													</div>
													<div class="col-xl-5">
													<div class="form-group">
														<label>Subcategory</label>
			                                             <select name="subcategory" class="form-control form-control-lg" id="sub">
															
															<option value="">Select Subcategoryi</option>
                                                         @foreach($Allcategories as $NewcategoriData)
														 @if($NewcategoriData->getAttribute('category_id')!=NULL)
                                                            <option value="{{$NewcategoriData->name}}" >{{$NewcategoriData->category_id }}-->{{$NewcategoriData->name }}</option>
														      @endif
															@endforeach
															
															
														</select>
													</div>
													</div>
													<div class="form-group">
														
													</div>
												
												
													<!--begin: Code-->
												
													</div>
												</div>
												
											
											<!--end::Form-->
										</div>
									</div>
							<div class="modal-footer">
		<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
		<input  name="submit" type="submit" class="btn btn-primary font-weight-bold" value="Submit">
		             
						</div>
						 </form>						
<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXend: DatatableXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
									</div>
								</div>
								<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->

                                                              <!--begin::Modal-->
														<div class="modal fade" id="exampleModalSizeLg" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg" aria-hidden="true">
															<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
																<div class="modal-content">
									
								<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Add Company</h5>
	                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									                  <i aria-hidden="true" class="ki ki-close"></i>
									</button>
								</div>
								
					</div>
				</div>
			</div>
														<!--end::Modal-->





@endsection