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
										<h5 class="text-dark font-weight-bold my-1 mr-5"> Users</h5>
										<!--end::Page Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
											<li class="breadcrumb-item text-muted">
												<a href="#" class="text-muted">Vimbiso</a>
											</li>
											<li class="breadcrumb-item text-muted">
												<a href="#" class="text-muted"> Users</a>
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
        <!-- Content -->
   <div class="d-flex flex-column-fluid">
	<!--begin::Container-->
		<div class="container">
          <div class="card card-custom">
									<div class="card-header flex-wrap border-0 pt-6 pb-0">
										<div class="card-title">
											<h3 class="card-label">Change user 
											<span class="d-block text-muted pt-2 font-size-sm">Select user to change</span></h3>
										</div>
              
    <div class="offset-xxl-0 col-xxl-12">
  <div class="row">     
               <div class="col-xl-5">
			   <div class="form-group">
                        <label class="required" for="id_username">Username:</label>
                            <input class="form-control form-control-lg" type="text" name="username" value="{{$UserData['id']}}_{{$UserData['company_name']}}" class="vTextField" maxlength="150" autocapitalize="none" autocomplete="username" required="" id="id_username">
                       <h3><span class="d-block text-muted pt-2 font-size-lg">Required. 150 characters or fewer. Letters, digits and @/./+/-/_ only.</span></h3>
                </div>
        </div>
      
               <div class="col-xl-5">
			    <div class="form-group">
                        <label for="id_password">Password:</label>
                            <div id="id_password">
<strong>Invalid password format or unknown hashing algorithm.</strong>
</div>
                        <h3><span class="d-block text-muted pt-2 font-size-lg">Raw passwords are not stored, so there is no way to see this user’s password, but you can change the password using</span></h3> <a href="../password/">this form</a>
                </div>
        </div>
		<div class="col-xl-2">
			   <div class="form-group">
  <ul class="object-tools" style="float:right;">
<li>   
    <a href="/admin/vimbiso/user/665/history/" class="historylink">History</a>
</li>   
  </ul>
              </div>
    </div>
        </div>
          </div>
  </div>

</div>

<br>
 <div class="card card-custom">
	<div class="card-header flex-wrap border-0 pt-6 pb-0">								
		<div class="card-title">								
			<h3 class="card-label">Personal info
				<span class="d-block text-muted pt-2 font-size-sm">Select user to change</span></h3>
		</div>																							
          
    <div class="offset-xxl-0 col-xxl-12">
	    <div class="row"> 
		     <div class="col-xl-4">
			   <div class="form-group">
                        <label class="required" for="id_username">First name:</label>
                            <input class="form-control form-control-lg" type="text"value="{{$UserData['first_name']}}" name="first_name" id="first_name">
                 </div>       
               </div> 
			    <div class="col-xl-4">
			   <div class="form-group">
                        <label class="required" for="id_username">Last name:</label>
                            <input class="form-control form-control-lg" type="text" value="{{$UserData['last_name']}}" name="last_name" id="last_name">
                 </div>       
               </div> 
			    <div class="col-xl-4">
			   <div class="form-group">
                        <label class="required" for="id_username">Email address:</label>
                            <input class="form-control form-control-lg" type="email" value="{{$UserData['email']}}" name="email" value="" id="email">
                 </div>       
               </div> 
       
		</div>
	</div>
</div>
</div>

<br>
 <div class="card card-custom">
	<div class="card-header flex-wrap border-0 pt-6 pb-0">								
		<div class="card-title">								
			<h3 class="card-label">Permissions
				<span class="d-block text-muted pt-2 font-size-sm">Select user to change</span></h3>
		</div>																							
          
    <div class="offset-xxl-0 col-xxl-12">
	    <div class="row"> 
		     <div class="col-xl-8">
			   <div class="form-group">
                     <input type="checkbox" name="is_active" id="id_is_active" checked="">
						<label  for="id_is_active">Active</label>
                       <h3><span class="d-block text-muted pt-2 font-size-lg">Designates whether this user should be treated as active. Unselect this instead of deleting accounts.</span></h3>
                 </div>       
               </div> 
			    <div class="col-xl-8">
			   <div class="form-group">
                         <input type="checkbox" name="is_staff" id="id_is_staff"><label class="vCheckboxLabel" for="id_is_staff">Staff status</label>
                        <h3><span class="d-block text-muted pt-2 font-size-lg">Designates whether the user can log into this admin site.</span></h3>
                 </div>       
               </div> 
			    <div class="col-xl-8">
			   <div class="form-group">
                       <input type="checkbox" name="is_superuser" id="id_is_superuser">
						<label class="vCheckboxLabel" for="id_is_superuser">Superuser status</label>
                        <h3><span class="d-block text-muted pt-2 font-size-lg">Designates that this user has all permissions without explicitly assigning them.</span></h3>
                 </div>       
               </div> 
       
		</div>
	</div>
</div>
</div>

<br>
 <div class="card card-custom">
	<div class="card-header flex-wrap border-0 pt-6 pb-0">								
		<div class="card-title">								
			<h3 class="card-label">Permissions
				<span class="d-block text-muted pt-2 font-size-sm">Select user to change</span></h3>
		</div>																							
          
    <div class="offset-xxl-0 col-xxl-12">
	    <div class="row"> 
		     <div class="col-xl-8">
			   <div class="form-group">
                    
                 </div>       
               </div> 
			    <div class="col-xl-8">
			   <div class="form-group">
                         
                 </div>       
               </div> 
			    <div class="col-xl-8">
			   <div class="form-group">
                      
                 </div>       
               </div> 
       
		</div>
	</div>
</div>
</div>

<br>
 <div class="card card-custom">
	<div class="card-header flex-wrap border-0 pt-6 pb-0">								
		<div class="card-title" style="backgraund:green;">								
			<h3 class="card-label">Business profiles
				<span class="d-block text-muted pt-2 font-size-lg">Business profile:</span></h3>
				 <span style="float:right;"><input type="checkbox" name="profile-0-DELETE" id="id_profile-0-DELETE"> <label class="vCheckboxLabel inline" for="id_profile-0-DELETE">Delete</label></span>
		</div>																							
          
    <div class="offset-xxl-0 col-xxl-12">
	    <div class="row"> 
		     <div class="col-xl-6">
			   <div class="form-group">
                   
                <div>
                        <label >Image:</label>
						 <input id="business_image" onchange="ImagePreview1(this);" style="height:45px;font-size: 18px;" type="file" class="form-control form-control-lg" name="business_image" >
                           
                </div>
       
                 </div>       
               </div> 
			   <script type="text/javascript">
        function ImagePreview1(input) {
            if (input.files && input.files[0]) {
                var filedr = new FileReader();
                filedr.onload = function (e) {
                    $('#Image3').attr('src', e.target.result);
                }
                filedr.readAsDataURL(input.files[0]);
            }
        }
    </script>
			    <div class="col-xl-6" style="float:right;">
			   <div class="form-group">
                   
                <div>
                         <img id="Image3" style="height:200px;width: 175px;float:right;" src="uploads/image/non.jpg">
                </div>
       
                 </div>       
               </div> 
			     <div class="col-xl-7">
			   <div class="form-group">
                 <label class="required" for="id_username">Description:</label>
                   <textarea name="description"  rows="3"  class="form-control form-control-lg" id="description" value=""></textarea>  
                 </div>       
               </div>
			   
			   <div class="col-xl-6">
			   <div class="form-group">
                   
                <div>
                       <label class="required" >Category:</label>
                           <select class="form-control form-control-lg" name="category" id="category" >
						  
						   @foreach($categories as $cat)
                           <option value="{{$cat->name}}" >{{$cat->name}}</option>
							@endforeach
                          </select>
                </div>
       
                 </div>       
               </div> 
			    <div class="col-xl-6">
			   <div class="form-group">
                   
                <div>
                       <label class="required" >Sub category:</label>
                           <select class="form-control form-control-lg" name="subcategory" id="subcategory" >
                          @foreach($Allcategories as $cat)
                           <option value="{{$cat->name}}" >{{$cat->category_id}}-->{{$cat->name}}</option>
							@endforeach
                          </select>
                </div>
       
                 </div>       
               </div>
			   
			   
                <div class="col-xl-3">
				    <div class="from-group">
					     <label class="required">Tags:</label>                       
                  <select class="form-control form-control-lg" name="profile-0-tags" id="id_profile-0-tags">
                  <option value="1"></option>
                  <option value="3">Vimbiso</option>
                  <option value="4">Bank</option>
                  </select>
					
				</div>			   
		</div>
		
		
		 <div class="col-xl-3">
				    <div class="from-group">
					     
                  <label >Status:</label>
                        
                            <input type="number" name="status" value="{{$UserData['last_name']}}" class="form-control form-control-lg" id="status">                    
                        <h3><span class="d-block text-muted pt-2 font-size-lg">#1 for claimed profile #2 for uncliamed profile #3 for AskingReviews</span></h3>
			</div>			   
		</div>
		 <div class="col-xl-3">
				<br></br>
			   <div class="form-group">
                     <input type="checkbox" class="from-control" name="verified" id="verified"><label >Verified</label>  
                 </div>       
               </div> 
		
		
		
		
						
		
	</div>
</div>
</div>
      


</div>


        <br>  
          
        </div>
        <!-- END Content -->
      
      </div>
	  </div>

      @endsection