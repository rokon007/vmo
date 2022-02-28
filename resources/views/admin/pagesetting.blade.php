@extends('admin.app')
 

@section('body') 

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-1">
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<!--begin::Page Title-->
										<h5 class="text-dark font-weight-bold my-1 mr-5">Layout Builder</h5>
										<!--end::Page Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
											<li class="breadcrumb-item text-muted">
												<a href="#" class="text-muted">Features</a>
											</li>
											<li class="breadcrumb-item text-muted">
												<a href="#" class="text-muted">Front Page Setting</a>
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
									<div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
										<a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="svg-icon svg-icon-success svg-icon-2x">
												<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Files/File-plus.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24"></polygon>
														<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
														<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000"></path>
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
													<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
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
								<!--begin::Notice-->
								<div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
									<div class="alert-icon alert-icon-top">
										      
									</div>
									<div class="alert-text">
										 <?php 
                                              $massage = Session::get('massage');        
                                             if($massage){  
											         ?>
                                                    <h4 class="alert alert-success"> 
													<?php
													echo $massage; 
													?> 
													</h4>
                                        <?php   Session::put('massage',NULL); } ?> 
									</div>
								</div>
								<!--end::Notice-->
								<!--begin::Card-->
								<div class="card card-custom">
									<!--begin::Header-->
									<div class="card-header card-header-tabs-line">
										<ul class="nav nav-dark nav-bold nav-tabs nav-tabs-line" data-remember-tab="tab_id" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" data-toggle="tab" href="#kt_builder_themes">Titel</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#kt_builder_page">Page</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#kt_builder_header">Header</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#kt_builder_subheader">Subheader</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#kt_builder_content">Content</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#kt_builder_aside">Aside</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#kt_builder_footer">Footer</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#kt_builder_extras">Extras</a>
											</li>
										</ul>
									</div>
									<!--end::Header-->
									<!--begin::Form-->
 <form role="form" method="post" action="{{route('save_title')}}"  enctype="multipart/form-data" >
										<!--begin::Body-->
										<div class="card-body">
											<div class="tab-content pt-3">
												<!--begin::Tab Pane-->
												<div class="tab-pane active" id="kt_builder_themes">
												
													<div class="form-group row">
														<label class="col-lg-3 col-form-label text-lg-right">Website Title:</label>
														<div class="col-lg-9 col-xl-4">
															 <input type="text" class="form-control form-control-solid" id="name" name="title"  value="{{$title->title}} " required>
															<div class="form-text text-muted">Website Title</div>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label text-lg-right">Tags:</label>
														<div class="col-lg-9 col-xl-4">
															<textarea class="form-control form-control-solid" name="tags" type="textarea" id="message" placeholder="Enter title Description"   rows="3" required> {{$title->tags}} </textarea>
															<div class="form-control form-control-solid">Add Title Tags</div>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label text-lg-right">Description:</label>
														<div class="col-lg-9 col-xl-4">
															<textarea class="form-control form-control-solid" name="tags" type="textarea" id="message" placeholder="Enter title Description"   rows="3" required> {{$title->deteles}} </textarea>
															<div class="form-control form-control-solid">Add Title Description</div>
														</div>
													</div>
													
													
													
													
												</div>
											
											</div>
										</div>
										<!--end::Body-->
										<!--begin::Footer-->
										
										<!--end::Footer-->
									<div class="card-footer">
											<div class="row">
												<div class="col-lg-3"></div>
												<div class="col-lg-9">
													 <input type="submit"  name="submit" value="Save Title" class="btn btn-primary font-weight-bold mr-2" />
													
													
												</div>
											</div>
										</div>
									<!--end::Form-->
									</form>
								</div>
								<!--end::Card-->
								<!--begin::Modal-->
								<div class="modal fade kt-modal-purchase" id="kt-modal-purchase" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h3 class="modal-title" id="exampleModalLabel">reCaptcha Verification</h3>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>
											<div class="modal-body">
												<form class="form">
													<div class="form-group">
														<script src="../../../www.google.com/recaptcha/api.js"></script>
														<div class="g-recaptcha" data-sitekey="6Lf92jMUAAAAANk8wz68r73rA2uPGr4_e0gn96BL"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lf92jMUAAAAANk8wz68r73rA2uPGr4_e0gn96BL&amp;co=ZmlsZTo.&amp;hl=en&amp;v=BycHQdSIhzR_1EcOLw2mOzYQ&amp;size=normal&amp;cb=wm8a0sjtn7of" role="presentation" name="a-d8ua1yw4fgei" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" width="304" height="78" frameborder="0"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
													</div>
												</form>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary" id="submit-verify">Submit</button>
											</div>
										</div>
									</div>
								</div>
								<!--end::Modal-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
@endsection



