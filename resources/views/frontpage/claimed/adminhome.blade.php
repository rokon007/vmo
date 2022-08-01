@extends('frontpage.claimed.app')

@section('body')  

 <!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-2">
									<!--begin::Page Title-->
									<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Dashboard</h5>
									<!--end::Page Title-->
									<!--begin::Actions-->
									<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
									<span class="text-muted font-weight-bold mr-4">{{auth()->user()->company_name}}</span>
									<a href="#" class="btn btn-light-warning font-weight-bolder btn-sm">Add New</a>
									<!--end::Actions-->
								</div>
								<!--end::Info-->
								<!--begin::Toolbar-->
								<div class="d-flex align-items-center">
									<!--begin::Actions-->
									<a href="#" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">Today</a>
									<a href="#" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">Month</a>
									<a href="#" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">Year</a>
									<!--end::Actions-->
									<!--begin::Daterange-->
									<a href="#" class="btn btn-sm btn-light font-weight-bold mr-2" id="kt_dashboard_daterangepicker" data-toggle="tooltip" title="Select dashboard daterange" data-placement="left">
										<span class="text-muted font-size-base font-weight-bold mr-2" id="kt_dashboard_daterangepicker_title">Today</span>
										<span class="text-primary font-size-base font-weight-bolder" id="kt_dashboard_daterangepicker_date">Aug 16</span>
									</a>
									<!--end::Daterange-->
									<!--begin::Dropdowns-->
									<div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
										<a href="#" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="svg-icon svg-icon-success svg-icon-lg">
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
										<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right py-3">
											<!--begin::Navigation-->
											<ul class="navi navi-hover py-5">
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-drop"></i>
														</span>
														<span class="navi-text">New Group</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-list-3"></i>
														</span>
														<span class="navi-text">Contacts</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-rocket-1"></i>
														</span>
														<span class="navi-text">Groups</span>
														<span class="navi-link-badge">
															<span class="label label-light-primary label-inline font-weight-bold">new</span>
														</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-bell-2"></i>
														</span>
														<span class="navi-text">Calls</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-gear"></i>
														</span>
														<span class="navi-text">Settings</span>
													</a>
												</li>
												<li class="navi-separator my-3"></li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-magnifier-tool"></i>
														</span>
														<span class="navi-text">Help</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-bell-2"></i>
														</span>
														<span class="navi-text">Privacy</span>
														<span class="navi-link-badge">
															<span class="label label-light-danger label-rounded font-weight-bold">5</span>
														</span>
													</a>
												</li>
											</ul>
											<!--end::Navigation-->
										</div>
									</div>
									<!--end::Dropdowns-->
								</div>
								<!--end::Toolbar-->
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Dashboard-->
								
								
								
								
								<div class="row">
									<div class="col-xl-3">
										<!--begin::Stats Widget 29-->
										<div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url(https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/shapes/abstract-1.svg)">
											<!--begin::Body-->
											<div class="card-body">
												<span class="svg-icon svg-icon-2x svg-icon-info">
													<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Mail-opened.svg-->
													 @if($ratings !=NULL)
						@if(($reviewscount-1)!=0)
				  @if(round($ratings/($reviewscount-1)) ==1) 
                <span class="fa fa-star checked" style="color:#C70039;"></span> 
                  @elseif(round($ratings/($reviewscount-1)) ==2) 			
                <span class="fa fa-star checked" style="color:#FF5733;"></span>
               <span class="fa fa-star checked" style="color:#FF5733;"></span>
				@elseif(round($ratings/($reviewscount-1)) ==3) 
				<span class="fa fa-star checked" style="color:#FFC300;"></span>
                <span class="fa fa-star checked" style="color:#FFC300;"></span>
                <span class="fa fa-star checked" style="color:#FFC300;"></span>				
				@elseif(round($ratings/($reviewscount-1)) ==4) 
					
				<span class="fa fa-star checked" style="color:#008000;"></span>
				<span class="fa fa-star checked" style="color:#008000;"></span>
				<span class="fa fa-star checked" style="color:#008000;"></span>
				<span class="fa fa-star checked" style="color:#008000;"></span>
					
				@elseif(round($ratings/($reviewscount-1)) ==5) 
					
				<span class="fa fa-star checked" style="color:#034a03;"></span>
				<span class="fa fa-star checked" style="color:#034a03;"></span>
				<span class="fa fa-star checked" style="color:#034a03;"></span>
				<span class="fa fa-star checked" style="color:#034a03;"></span>
				<span class="fa fa-star checked" style="color:#034a03;"></span>
					
				
					 @endif
				  @endif
				  @endif
													<!--end::Svg Icon-->
												</span>
												<span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">{{$reviewscount-1}}</span>
												<span class="font-weight-bold text-muted font-size-sm">Total Reviews:</span>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Stats Widget 29-->
									</div>
									<div class="col-xl-3">
										<!--begin::Stats Widget 30-->
										<div class="card card-custom bg-info card-stretch gutter-b">
											<!--begin::Body-->
											<div class="card-body">
												<span class="svg-icon svg-icon-2x svg-icon-white">
													<span class="fa fa-star checked" style="color:#FFC300;"></span>
                                                    <span class="fa fa-star checked" style="color:#FFC300;"></span>
                                                    <span class="fa fa-star checked" style="color:#FFC300;"></span>	
												</span>
												<span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block">
												<strong>
                                                    @if($ratings !=NULL)
								  {{$ratings3}}
                                @endif
                                                </strong>
												</span>
												<span class="font-weight-bold text-white font-size-sm">Average ratings</span>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Stats Widget 30-->
									</div>
									<div class="col-xl-3">
										<!--begin::Stats Widget 31-->
										<div class="card card-custom bg-danger card-stretch gutter-b">
											<!--begin::Body-->
											<div class="card-body">
												<span class="svg-icon svg-icon-2x svg-icon-white">
													<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Media/Equalizer.svg-->
													<span class="fa fa-star checked" style="color:#034a03;"></span>
				<span class="fa fa-star checked" style="color:#034a03;"></span>
				<span class="fa fa-star checked" style="color:#034a03;"></span>
				<span class="fa fa-star checked" style="color:#034a03;"></span>
				<span class="fa fa-star checked" style="color:#034a03;"></span>
													<!--end::Svg Icon-->
												</span>
												<span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block">
												@if($ratings !=NULL)
								  {{$ratings5+$ratings4}}
                                @endif
												</span>
												<span class="font-weight-bold text-white font-size-sm">Good ratings</span>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Stats Widget 31-->
									</div>
									<div class="col-xl-3">
										<!--begin::Stats Widget 32-->
										<div class="card card-custom bg-dark card-stretch gutter-b">
											<!--begin::Body-->
											<div class="card-body">
												<span class="svg-icon svg-icon-2x svg-icon-white">
													<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Group-chat.svg-->
													  <span class="fa fa-star checked" style="color:#C70039;"></span>
													<!--end::Svg Icon-->
												</span>
												<span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 text-hover-primary d-block">
												@if($ratings !=NULL)
									 @if($ratings1-1 !=0)
								  {{$ratings1+$ratings2}}
							  @else
								  0
                                @endif
								 @endif
												</span>
												<span class="font-weight-bold text-white font-size-sm">Bad ratings</span>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Stats Widget 32-->
									</div>
								</div>
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
		<div class="row">
									<div class="col-xl-8">
										<!--begin::Engage Widget 13-->
										<!--begin::Card-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Card Body-->
											<div class="card-body d-flex rounded bg-primary p-12 flex-column flex-md-row flex-lg-column flex-xxl-row">
												<!--begin::Image-->
												<center>
												@if(File::exists("uploads/image/$CData->email.jpg"))
   <img src="<?php echo asset("uploads/image/$CData->email.jpg")?>"  class="border border-dark" style="max-height: 200px;max-width: 250px;">
                                                  @elseif(File::exists("uploads/image/$CData->email.png"))
   <img src="<?php echo asset("uploads/image/$CData->email.png")?>"  class="border border-dark" style="max-height: 200px;max-width: 250px;">
                                                  @elseif(File::exists("uploads/image/$CData->email.webp"))
   <img src="<?php echo asset("uploads/image/$CData->email.webp")?>"  class="border border-dark" style="max-height: 200px;max-width: 250px;">
												 @else 
  <img src="<?php echo asset("uploads/image/non.jpg")?>"   class="border border-dark" style="max-height: 200px;max-width: 250px;">
                                                  @endif
												</center>
													<div class="bgi-no-repeat bgi-position-center bgi-size-cover h-50px h-md-auto h-lg-50px h-xxl-auto mw-100 w-150px" style="background-image: "></div>										
												<!--end::Image-->
												<!--begin::Card-->
												<div class="card card-custom w-auto w-md-300px w-lg-auto w-xxl-300px ml-auto">
													<!--begin::Card Body-->
													<div class="card-body px-12 py-10">
														<h3 class="font-weight-bolder font-size-h2 mb-1">
															<a href="#" class="text-dark-75">{{$CData->company}}</a><br><br>
																													 @if($ratings !=NULL)
						@if(($reviewscount-1)!=0)
				  @if(round($ratings/($reviewscount-1)) ==1) 
                <span class="fa fa-star checked" style="color:#C70039;"></span> 
                  @elseif(round($ratings/($reviewscount-1)) ==2) 			
                <span class="fa fa-star checked" style="color:#FF5733;"></span>
               <span class="fa fa-star checked" style="color:#FF5733;"></span>
				@elseif(round($ratings/($reviewscount-1)) ==3) 
				<span class="fa fa-star checked" style="color:#FFC300;"></span>
                <span class="fa fa-star checked" style="color:#FFC300;"></span>
                <span class="fa fa-star checked" style="color:#FFC300;"></span>				
				@elseif(round($ratings/($reviewscount-1)) ==4) 
					
				<span class="fa fa-star checked" style="color:#008000;"></span>
				<span class="fa fa-star checked" style="color:#008000;"></span>
				<span class="fa fa-star checked" style="color:#008000;"></span>
				<span class="fa fa-star checked" style="color:#008000;"></span>
					
				@elseif(round($ratings/($reviewscount-1)) ==5) 
					
				<span class="fa fa-star checked" style="color:#034a03;"></span>
				<span class="fa fa-star checked" style="color:#034a03;"></span>
				<span class="fa fa-star checked" style="color:#034a03;"></span>
				<span class="fa fa-star checked" style="color:#034a03;"></span>
				<span class="fa fa-star checked" style="color:#034a03;"></span>
					
				
					 @endif
				  @endif
				  @endif
														</h3>
														<br>
														<div class="font-size-h6 mb-9">Total Reviews: {{$reviewscount-1}}
														<br>
														Avg ratings: <strong>
                                                                     @if($ratings !=NULL)
						                                                @if(($reviewscount-1)!=0)
                                                                            {{round($ratings/($reviewscount-1))}}
			                                                            @else
                                                                          0
			                                                             @endif
                                                                     @else
                                                                        0
                                                                     @endif
                                                                   </strong>
														</div>
														
                                                       <div class="font-size-sm mb-8">Outlines keep you honest. They stop you from indulging in poorly ought out metaphorsy about driving and keep you focused one the overall structure of your post</div>
														<div class="font-size-sm mb-8">{{$CData->description}}</div>
														<!--begin::Info-->
														<div class="d-flex mb-3">
															<span class="text-dark-50 flex-root font-weight-bold">Country</span>
															<span class="text-dark flex-root font-weight-bold">{{$CData->country}}</span>
														</div>
														<div class="d-flex mb-3">
															<span class="text-dark-50 flex-root font-weight-bold">City</span>
															<span class="text-dark flex-root font-weight-bold">{{$CData->city}}</span>
														</div>
														<div class="d-flex mb-3">
															<span class="text-dark-50 flex-root font-weight-bold">block</span>
															<span class="text-dark flex-root font-weight-bold">{{$CData->block}}</span>
														</div>
														<div class="d-flex mb-3">
															<span class="text-dark-50 flex-root font-weight-bold">Contact</span>
															<span class="text-dark flex-root font-weight-bold">{{$CData->contact}}</span>
														</div>
														<div class="d-flex">
															<span class="text-dark-50 flex-root font-weight-bold">Email</span>
															<span class="text-dark flex-root font-weight-bold">{{$CData->email}}</span>
														</div>
														<!--end::Info-->
													</div>
													<!--end::Card Body-->
												</div>
												<!--end::Card-->
											</div>
											<!--end::Card Body-->
										</div>
										<!--end::Card-->
										<!--end::Engage Widget 13-->
									</div>
									
									
									
								<div class="col-lg-4 col-xxl-4">
										<!--begin::List Widget 9-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header align-items-center border-0 mt-4">
												<h3 class="card-title align-items-start flex-column">
													<span class="font-weight-bolder text-dark">My Activity</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">890,344 Sales</span>
												</h3>
												<div class="card-toolbar">
													<div class="dropdown dropdown-inline">
														<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ki ki-bold-more-hor"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
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
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-4">
												<!--begin::Timeline-->
												<div class="timeline timeline-6 mt-3">
													<!--begin::Item-->
													<div class="timeline-item align-items-start">
														<!--begin::Label-->
														<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">08:42</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-warning icon-xl"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Text-->
														<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Outlines keep you honest. And keep structure</div>
														<!--end::Text-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item align-items-start">
														<!--begin::Label-->
														<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">10:00</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-success icon-xl"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Content-->
														<div class="timeline-content d-flex">
															<span class="font-weight-bolder text-dark-75 pl-3 font-size-lg">AEOL meeting</span>
														</div>
														<!--end::Content-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item align-items-start">
														<!--begin::Label-->
														<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">14:37</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-danger icon-xl"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Desc-->
														<div class="timeline-content font-weight-bolder font-size-lg text-dark-75 pl-3">Make deposit 
														<a href="#" class="text-primary">USD 700</a>. to ESL</div>
														<!--end::Desc-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item align-items-start">
														<!--begin::Label-->
														<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">16:50</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-primary icon-xl"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Text-->
														<div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Indulging in poorly driving and keep structure keep great</div>
														<!--end::Text-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item align-items-start">
														<!--begin::Label-->
														<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">21:03</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-danger icon-xl"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Desc-->
														<div class="timeline-content font-weight-bolder text-dark-75 pl-3 font-size-lg">New order placed 
														<a href="#" class="text-primary">#XF-2356</a>.</div>
														<!--end::Desc-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item align-items-start">
														<!--begin::Label-->
														<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">23:07</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-info icon-xl"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Text-->
														<div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Outlines keep and you honest. Indulging in poorly driving</div>
														<!--end::Text-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item align-items-start">
														<!--begin::Label-->
														<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">16:50</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-primary icon-xl"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Text-->
														<div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Indulging in poorly driving and keep structure keep great</div>
														<!--end::Text-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item align-items-start">
														<!--begin::Label-->
														<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">21:03</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-danger icon-xl"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Desc-->
														<div class="timeline-content font-weight-bolder font-size-lg text-dark-75 pl-3">New order placed 
														<a href="#" class="text-primary">#XF-2356</a>.</div>
														<!--end::Desc-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Timeline-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end: List Widget 9-->
									</div>	
									
									
									
									
								</div>						
								
								
								
								
								
								
								
								
								
								
								
								
								<!--begin::Row-->
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								<div class="row">
									
									<div class="col-lg-12 col-xxl-4">
										<!--begin::List Widget 9-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header align-items-center border-0 mt-4">
												<h3 class="card-title align-items-start flex-column">
													<span class="font-weight-bolder text-dark">Reviews Chart</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">Total Reviews: {{$reviewscount-1}}</span>
												</h3>
												
												
												
												
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-4">
											
											
											<!--begin::Timeline-->
												<div class="example-preview">
														<div class="pt-4">
														 <span class="text-lg-center text-left font-description-sm" style="float:left;">Excellent&nbsp;  </span>
															<div class="progress">
																<div class="progress-bar bg-success" role="progressbar" style="width:
																 @if($ratings !=NULL)
								                                {{100/($reviewscount-1)*($ratings5+$ratings4)}}%
                                                                   @endif
																" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
														<div class="pt-4">
														<span class="font-description-sm" style="float:left;">Average&nbsp;&nbsp;   </span>
															<div class="progress">
																<div class="progress-bar bg-warning" role="progressbar" style="width:
																@if($ratings !=NULL)
									                            {{100/($reviewscount-1)*$ratings3}}%
                                                                @endif
																" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
														
														<div class="py-4">
														 <span class="font-description-sm" style="float:left;">Bad &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     </span>
															<div class="progress">
																<div class="progress-bar bg-danger" role="progressbar" style="width:
																@if($ratings !=NULL)
									                               @if($ratings1-1 !=0)
							                                        {{100/($reviewscount-1)*($ratings1+$ratings2)}}%
							                                       @else
								                                    0%
                                                                   @endif
								                                  @endif
																" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
																@if($ratings !=NULL)
									                              @if($ratings1-1 !=0)
								                                    {{$ratings1+$ratings2}}
							                                     @else
								                                   0
                                                                @endif
								                              @endif
																</div>
															</div>
														</div>
													</div>
											<!--end::Timeline-->
											
												
											</div>
											<!--end: Card Body-->
										</div>
										<!--end: List Widget 9-->
									</div>
									
									
									
									
									
									<!------------------------------------------------------------------------------------------------>
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row">
								
									<div class="col-lg-12">
										<!--begin::Advance Table Widget 4-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 py-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Recent Reviews</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
												</h3>
												<div class="card-toolbar">
													<a href="#" class="btn btn-info font-weight-bolder font-size-sm mr-3">New Report</a>
													<a href="#" class="btn btn-danger font-weight-bolder font-size-sm">Create</a>
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-0 pb-3">
												<div class="tab-content">
													<!--begin::Table-->
													<div class="table-responsive">
														<table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
															<thead>
																<tr class="text-left text-uppercase">
																	<th style="min-width: 250px" class="pl-7">
																		<span class="text-dark-75">Name</span>
																	</th>
																	<th style="min-width: 100px">contact</th>
																	<th style="min-width: 100px">Review From</th>
																	<th style="min-width: 100px">Date</th>
																	<th style="min-width: 130px">rating</th>
																	<th style="min-width: 80px"></th>
																</tr>
															</thead>
															<tbody>
															@if($RT->count())
                                                            @foreach ($RT as $ns)
																<tr>
																	<td class="pl-0 py-8">
																		<div class="d-flex align-items-center">
																			<div class="symbol symbol-50 symbol-light mr-4">
																				<span class="symbol-label">
																					<img src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
																				</span>
																			</div>
																			<div>
																				<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{$ns->name}}</a>
																				<span class="text-muted font-weight-bold d-block">{{$ns->branchlocation}}</span>
																			</div>
																		</div>
																	</td>
																	<td>
																		<span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$ns->contact}}</span>
																		<span class="text-muted font-weight-bold">Contact</span>
																	</td>
																	<td>
																		<span class="text-dark-75 font-weight-bolder d-block font-size-lg">
																		@if($ns->whatsappreview ==1)
                                                                       review on WhatsApp <a href="#" target="_blank"><i class="fab fa-whatsapp fa-2x ml-2"></i></a>   
                                                                       @elseif($ns->whatsappreview ==2)
                                                                       review on FaceBook <a href="#" target="_blank"><i class="fab fa-facebook fa-2x ml-2"></i></a>
								                                      @elseif($ns->whatsappreview ==3)
                                                                      review on Google <a href="#" target="_blank"><i class="fab fa-google fa-2x ml-2"></i></a>
								                                 	@elseif($ns->whatsappreview ==4)
                                                                     review on Linkedin <a href="#" target="_blank"><i class="fab fa-linkedin fa-2x ml-2"></i></a>
								                                     @endif	
																		</span>
																		<span class="text-muted font-weight-bold">@if($ns->whatsappreview ==1)
                                                                       review on WhatsApp 
                                                                       @elseif($ns->whatsappreview ==2)
                                                                       review on FaceBook 
								                                      @elseif($ns->whatsappreview ==3)
                                                                      review on Google 
								                                 	@elseif($ns->whatsappreview ==4)
                                                                     review on Linkedin
								                                     @endif	</span>
																	</td>
																	<td>
																		<span class="text-dark-75 font-weight-bolder d-block font-size-lg">{!! date('D, d, M, Y', strtotime($ns->updated_at)) !!}</span>
																		<span class="text-muted font-weight-bold">Date</span>
																	</td>
																	<td>
										
										
										
										@if($ns->ratings ==1) 
										<div class="tst-rating">
                                             <i class="fa fa-star" style="color:#C70039;"></i>
                                            
                                        </div>
										@elseif($ns->ratings ==2)
										   <div class="tst-rating">
                                             <i class="fa fa-star" style="color:#FF5733;"></i>
                                             <i class="fa fa-star" style="color:#FF5733;"></i>
                                              
                                        </div>
										@elseif($ns->ratings ==3)
										   <div class="tst-rating">
                                             <i class="fa fa-star" style="color:#FFC300;"></i>
                                             <i class="fa fa-star" style="color:#FFC300;"></i>
                                              <i class="fa fa-star" style="color:#FFC300;"></i>
                                             
                                        </div>
										@elseif($ns->ratings ==4)
										    <div class="tst-rating">
                                             <i class="fa fa-star" style="color:#008000;"></i>
                                             <i class="fa fa-star" style="color:#008000;"></i>
                                              <i class="fa fa-star" style="color:#008000;"></i>
                                              <i class="fa fa-star" style="color:#008000;"></i>
                                              
                                        </div>
										@elseif($ns->ratings ==5)
										      <div class="tst-rating">
                                             <i class="fa fa-star" style="color:#034a03;"></i>
                                             <i class="fa fa-star" style="color:#034a03;"></i>
                                              <i class="fa fa-star" style="color:#034a03;"></i>
                                              <i class="fa fa-star" style="color:#034a03;"></i>
                                              <i class="fa fa-star" style="color:#034a03;"></i>
                                        </div>
										@else
											<div class="tst-rating">
                                             <i class="fa fa-map" style="color:#C70039;"></i>
                                             
                                        </div>
										@endif
																		<span class="text-muted font-weight-bold d-block font-size-sm">Rated</span>
																	</td>
																	<td class="pr-0 text-right">
																		<a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">View Offer</a>
																	</td>
																</tr>
																@endforeach
                                                                @else   
                                                                <tr>
                                                                <td colspan="6">
                                                                 <h5 class="text-center">No Review Found.</h5>
                                                               </td>
                                                               </tr>
                                                              @endif	
															</tbody>
														</table>
													</div>
													<!--end::Table   $reviews        -->
												</div>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Advance Table Widget 4-->
									</div>
								</div>
								<!--end::Row-->
								<!--end::Dashboard-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
 

 
@endsection