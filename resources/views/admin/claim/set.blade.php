


<!-- Modal-->
<div class="modal fade" id="exampleModalCustomScrollable" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          






        <div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url(/images/slider-image13.jpg)">
												<!--begin::Title-->
												<h4 class="d-flex flex-center rounded-top">
													<span class="text-white">Set Profile</span>
													<span class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-5">Claimed</span>
												</h4>
												<!--end::Title-->
												<!--begin::Tabs
												<ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-line-transparent-white nav-tabs-line-active-border-success mt-3 px-8" role="tablist">
													<li class="nav-item">
														<a class="nav-link show active" data-toggle="tab" href="#topbar_notifications_notifications">Alerts</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#topbar_notifications_events">Events</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs">Logs</a>
													</li>
												</ul>-->
												<!--end::Tabs-->
											</div>
											<!--end::Header-->
											<!--begin::Content-->
										
												<!--end::Tabpane-->
												<!--begin::Tabpane-->
												<div class="tab-pane"  role="tabpanel">
												<br>
												@if($user_info = Session::get('user_info'))
												
												<p class="form-group d-flex flex-center text-center"><strong>{{$user_info->company_name}}</strong></p>
												<p class="form-group d-flex flex-center text-center">Email {{$user_info->email}}, Contact {{$user_info->contact}}<br>{{$user_info->block}},{{$user_info->city}},{{$user_info->country}}</p>
											   
												<form action="{{ route('update_claim_set', ['email' => $user_info->email]) }}"  method="post" >
		                                           @csrf
												                   <div class="form-group d-flex flex-center text-center" >
																		<div class="checkbox-inline">
																		         
																				 <label class="checkbox checkbox-info">
                                                                               <input type="checkbox"  name="is_staff[]" id="id_is_staff" {{ $user_info->is_active == 2 ? 'checked' : null }} />
                                                                               <span></span>
                                                                                  Aprove 
                                                                               </label>
																			   
																			   <label class="checkbox checkbox-info">
                                                                               <input type="checkbox"  name="is_superuser[]" id="id_is_superuser" {{ $user_info->is_superuser == 2 ? 'checked' : null }} />
                                                                               <span></span>
                                                                                  Admin dassbord
                                                                               </label>
																		 </div>
																	</div>
                                                          <div class="form-group d-flex flex-center text-center" >
														   <button type="submit" class="btn btn-lg btn-primary">Set Profile</button>
														  </div>
														  </form>
                                            @endif														  
                                                                                                                                                                                                                                   
                                                                        
													<!--begin::Nav-->
													<div class="d-flex flex-center text-center text-muted min-h-200px">All caught up! 
													<br>No new notifications.</div>
													<!--end::Nav-->
												</div>
												<!--end::Tabpane-->
											</div>
											<!--end::Content-->
									</div>
</div>	







		  


