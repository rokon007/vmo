@extends('admin.app')
 

@section('body') 


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     @if($message = Session::get('success'))
		 <script>
	          swal("Vimbiso Admin","{!!Session::get('success')!!}","success",{
				  button:"OK",
			  })
	     </script>
		  @endif



<div class="content d-flex flex-column flex-column-fluid" id="kt_content"> 
    <!--begin::Subheader-->
						<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-1">
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<!--begin::Page Title-->
										<h5 class="text-dark font-weight-bold my-1 mr-5"> Company Edit Page</h5>
										<!--end::Page Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
											<li class="breadcrumb-item text-muted">
												<a href="#" class="text-muted">Vimbiso</a>
											</li>
											<li class="breadcrumb-item text-muted">
												<a href="#" class="text-muted"> Company Edit Page</a>
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
	<!--begin::Container-->
		<div class="container">
		<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
		 <form action="{{ url('/update_company/'.$CompanyData->email) }}" method="post" enctype="multipart/form-data"class="form">
									@csrf
									 @method('PUT')
									<div class="modal-body">
										<div class="offset-xxl-0 col-xxl-12">
											
											<!--begin::Form-->
											
												<div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
												<div class="row">
												
												<div class="col-xl-6">
												<div class="form-group">
														<label>Company Email</label>
			                                             <input   type="text" name="email"  class="form-control form-control-lg" readonly value="{{$CompanyData->email}}">
												</div>
												<div class="form-group">
														<label>Company name</label>
			                                             <input   type="text" name="company"  class="form-control form-control-lg" value="{{$CompanyData->company}}">
												</div>
												<div class="form-group">
														<label for="exampleSelectl">Select Country</label>
														<select name="country" class="form-control form-control-lg" id="exampleSelectl">
															<option value="{{$CompanyData->country}}">{{$CompanyData->country}}</option>
															
                                                           <option value="AF">Afghanistan</option>
																	<option value="Åland Islands">Åland Islands</option>
																	<option value="Albania">Albania</option>
																	<option value="Algeria">Algeria</option>
																	<option value="American Samoa">American Samoa</option>
																	<option value="Andorra">Andorra</option>
																	<option value="Angola">Angola</option>
																	<option value="Anguilla">Anguilla</option>
																	<option value="Antarctica">Antarctica</option>
																	<option value="Antigua and Barbuda">Antigua and Barbuda</option>
																	<option value="Argentina">Argentina</option>
																	<option value="Armenia">Armenia</option>
																	<option value="Aruba">Aruba</option>
																	<option value="Australia">Australia</option>
																	<option value="Austria">Austria</option>
																	<option value="Azerbaijan">Azerbaijan</option>
																	<option value="Bahamas">Bahamas</option>
																	<option value="Bahrain">Bahrain</option>
																	<option value="Bangladesh">Bangladesh</option>
																	<option value="Barbados">Barbados</option>
																	<option value="Belarus">Belarus</option>
																	<option value="Belgium">Belgium</option>
																	<option value="Belize">Belize</option>
																	<option value="Benin">Benin</option>
																	<option value="Bermuda">Bermuda</option>
																	<option value="Bhutan">Bhutan</option>
																	<option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
																	<option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
																	<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
																	<option value="Botswana">Botswana</option>
																	<option value="Bouvet Island">Bouvet Island</option>
																	<option value="Brazil">Brazil</option>
																	<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
																	<option value="Brunei Darussalam">Brunei Darussalam</option>
																	<option value="Bulgaria">Bulgaria</option>
																	<option value="Burkina Faso">Burkina Faso</option>
																	<option value="Burundi">Burundi</option>
																	<option value="Cambodia">Cambodia</option>
																	<option value="Cameroon">Cameroon</option>
																	<option value="Canada">Canada</option>
																	<option value="Cape Verde">Cape Verde</option>
																	<option value="Cayman Islands">Cayman Islands</option>
																	<option value="Central African Republic">Central African Republic</option>
																	<option value="Chad">Chad</option>
																	<option value="Chile">Chile</option>
																	<option value="China">China</option>
																	<option value="Christmas Island">Christmas Island</option>
																	<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
																	<option value="Colombia">Colombia</option>
																	<option value="Comoros">Comoros</option>
																	<option value="Congo">Congo</option>
																	<option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
																	<option value="Cook Islands">Cook Islands</option>
																	<option value="Costa Rica">Costa Rica</option>
																	<option value="Côte d'Ivoire">Côte d'Ivoire</option>
																	<option value="Croatia">Croatia</option>
																	<option value="Cuba">Cuba</option>
																	<option value="Curaçao">Curaçao</option>
																	<option value="Cyprus">Cyprus</option>
																	<option value="Czech Republic">Czech Republic</option>
																	<option value="Denmark">Denmark</option>
																	<option value="Djibouti">Djibouti</option>
																	<option value="Dominica">Dominica</option>
																	<option value="Dominican Republic">Dominican Republic</option>
																	<option value="Ecuador">Ecuador</option>
																	<option value="Egypt">Egypt</option>
																	<option value="El Salvador">El Salvador</option>
																	<option value="Equatorial Guinea">Equatorial Guinea</option>
																	<option value="Eritrea">Eritrea</option>
																	<option value="Estonia">Estonia</option>
																	<option value="Ethiopia">Ethiopia</option>
																	<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
																	<option value="Faroe Islands">Faroe Islands</option>
																	<option value="Fiji">Fiji</option>
																	<option value="Finland">Finland</option>
																	<option value="France">France</option>
																	<option value="French Guiana">French Guiana</option>
																	<option value="French Polynesia">French Polynesia</option>
																	<option value="French Southern Territories">French Southern Territories</option>
																	<option value="Gabon">Gabon</option>
																	<option value="Gambia">Gambia</option>
																	<option value="Georgia">Georgia</option>
																	<option value="Germany">Germany</option>
																	<option value="Ghana">Ghana</option>
																	<option value="Gibraltar">Gibraltar</option>
																	<option value="Greece">Greece</option>
																	<option value="Greenland">Greenland</option>
																	<option value="Grenada">Grenada</option>
																	<option value="Guadeloupe">Guadeloupe</option>
																	<option value="Guam">Guam</option>
																	<option value="Guatemala">Guatemala</option>
																	<option value="Guernsey">Guernsey</option>
																	<option value="Guinea">Guinea</option>
																	<option value="Guinea-Bissau">Guinea-Bissau</option>
																	<option value="Guyana">Guyana</option>
																	<option value="Haiti">Haiti</option>
																	<option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
																	<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
																	<option value="Honduras">Honduras</option>
																	<option value="Hong Kong">Hong Kong</option>
																	<option value="Hungary">Hungary</option>
																	<option value="Iceland">Iceland</option>
																	<option value="India">India</option>
																	<option value="Indonesia">Indonesia</option>
																	<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
																	<option value="Iraq">Iraq</option>
																	<option value="Ireland">Ireland</option>
																	<option value="Isle of Man">Isle of Man</option>
																	<option value="Israel">Israel</option>
																	<option value="Italy">Italy</option>
																	<option value="Jamaica">Jamaica</option>
																	<option value="Japan">Japan</option>
																	<option value="Jersey">Jersey</option>
																	<option value="Jordan">Jordan</option>
																	<option value="Kazakhstan">Kazakhstan</option>
																	<option value="Kenya">Kenya</option>
																	<option value="Kiribati">Kiribati</option>
																	<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
																	<option value="Korea, Republic of">Korea, Republic of</option>
																	<option value="Kuwait">Kuwait</option>
																	<option value="Kyrgyzstan">Kyrgyzstan</option>
																	<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
																	<option value="Latvia">Latvia</option>
																	<option value="Lebanon">Lebanon</option>
																	<option value="Lesotho">Lesotho</option>
																	<option value="Liberia">Liberia</option>
																	<option value="Libya">Libya</option>
																	<option value="Liechtenstein">Liechtenstein</option>
																	<option value="Lithuania">Lithuania</option>
																	<option value="Luxembourg">Luxembourg</option>
																	<option value="Macao">Macao</option>
																	<option value="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option>
																	<option value="Madagascar">Madagascar</option>
																	<option value="Malawi">Malawi</option>
																	<option value="Malaysia">Malaysia</option>
																	<option value="Maldives">Maldives</option>
																	<option value="Mali">Mali</option>
																	<option value="Malta">Malta</option>
																	<option value="Marshall Islands">Marshall Islands</option>
																	<option value="Martinique">Martinique</option>
																	<option value="Mauritania">Mauritania</option>
																	<option value="Mauritius">Mauritius</option>
																	<option value="Mayotte">Mayotte</option>
																	<option value="Mexico">Mexico</option>
																	<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
																	<option value="Moldova, Republic of">Moldova, Republic of</option>
																	<option value="Monaco">Monaco</option>
																	<option value="Mongolia">Mongolia</option>
																	<option value="Montenegro">Montenegro</option>
																	<option value="Montserrat">Montserrat</option>
																	<option value="Morocco">Morocco</option>
																	<option value="Mozambique">Mozambique</option>
																	<option value="Myanmar">Myanmar</option>
																	<option value="Namibia">Namibia</option>
																	<option value="Nauru">Nauru</option>
																	<option value="Nepal">Nepal</option>
																	<option value="Netherlands">Netherlands</option>
																	<option value="New Caledonia">New Caledonia</option>
																	<option value="New Zealand">New Zealand</option>
																	<option value="Nicaragua">Nicaragua</option>
																	<option value="Niger">Niger</option>
																	<option value="Nigeria">Nigeria</option>
																	<option value="Niue">Niue</option>
																	<option value="Northern Mariana Islands">Norfolk Island</option>
																	<option value="Northern Mariana Islands">Northern Mariana Islands</option>
																	<option value="Norway">Norway</option>
																	<option value="Oman">Oman</option>
																	<option value="Pakistan">Pakistan</option>
																	<option value="Palau">Palau</option>
																	<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
																	<option value="Panama">Panama</option>
																	<option value="Papua New Guinea">Papua New Guinea</option>
																	<option value="Paraguay">Paraguay</option>
																	<option value="Peru">Peru</option>
																	<option value="Philippines">Philippines</option>
																	<option value="Pitcairn">Pitcairn</option>
																	<option value="Poland">Poland</option>
																	<option value="Portugal">Portugal</option>
																	<option value="Puerto Rico">Puerto Rico</option>
																	<option value="Qatar">Qatar</option>
																	<option value="Réunion">Réunion</option>
																	<option value="Romania">Romania</option>
																	<option value="Russian Federatio">Russian Federation</option>
																	<option value="Rwanda">Rwanda</option>
																	<option value="Saint Barthélemy">Saint Barthélemy</option>
																	<option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
																	<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
																	<option value="Saint Lucia">Saint Lucia</option>
																	<option value="Saint Martin (French part)">Saint Martin (French part)</option>
																	<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
																	<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
																	<option value="Samoa">Samoa</option>
																	<option value="San Marino">San Marino</option>
																	<option value="Sao Tome and Principe">Sao Tome and Principe</option>
																	<option value="Saudi Arabia">Saudi Arabia</option>
																	<option value="Senegal">Senegal</option>
																	<option value="Serbia">Serbia</option>
																	<option value="Seychelles">Seychelles</option>
																	<option value="Sierra Leone">Sierra Leone</option>
																	<option value="Singapore">Singapore</option>
																	<option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
																	<option value="Slovakia">Slovakia</option>
																	<option value="Slovenia">Slovenia</option>
																	<option value="Solomon Islands">Solomon Islands</option>
																	<option value="Somalia">Somalia</option>
																	<option value="South Africa">South Africa</option>
																	<option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
																	<option value="South Sudan">South Sudan</option>
																	<option value="Spain">Spain</option>
																	<option value="Sri Lanka">Sri Lanka</option>
																	<option value="Sudan">Sudan</option>
																	<option value="Suriname">Suriname</option>
																	<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
																	<option value="Swaziland">Swaziland</option>
																	<option value="Sweden">Sweden</option>
																	<option value="Switzerland">Switzerland</option>
																	<option value="Syrian Arab Republic">Syrian Arab Republic</option>
																	<option value="Taiwan, Province of China">Taiwan, Province of China</option>
																	<option value="Tajikistan">Tajikistan</option>
																	<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
																	<option value="Thailand">Thailand</option>
																	<option value="Timor-Leste">Timor-Leste</option>
																	<option value="Togo">Togo</option>
																	<option value="Tokelau">Tokelau</option>
																	<option value="Tonga">Tonga</option>
																	<option value="Trinidad and Tobago">Trinidad and Tobago</option>
																	<option value="Tunisia">Tunisia</option>
																	<option value="Turkey">Turkey</option>
																	<option value="Turkmenistan">Turkmenistan</option>
																	<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
																	<option value="Tuvalu">Tuvalu</option>
																	<option value="Uganda">Uganda</option>
																	<option value="Ukraine">Ukraine</option>
																	<option value="United Arab Emirates">United Arab Emirates</option>
																	<option value="United Kingdom">United Kingdom</option>
																	<option value="United States" selected="selected">United States</option>
																	<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
																	<option value="Uruguay">Uruguay</option>
																	<option value="Uzbekistan">Uzbekistan</option>
																	<option value="Vanuatu">Vanuatu</option>
																	<option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
																	<option value="Viet Nam">Viet Nam</option>
																	<option value="Virgin Islands, British">Virgin Islands, British</option>
																	<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
																	<option value="Wallis and Futuna">Wallis and Futuna</option>
																	<option value="Western Sahara">Western Sahara</option>
																	<option value="Yemen">Yemen</option>
																	<option value="Zambia">Zambia</option>
																	<option value="Zimbabwe">Zimbabwe</option>
															
															
														</select>
													</div>
													<div class="form-group">
														<label>City</label>
			                                             <input   type="text" name="city"  class="form-control form-control-lg" value="{{$CompanyData->city}}">
													</div>
													<div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description" type="text" autofocus>{{$CompanyData->description}}</textarea>
                     
            </div>
													<div class="form-group ">
                                                  <label> Business Image</label>
                <input id="business_image" onchange="ImagePreview1(this);"  type="file" class="form-control form-control-lg"name="business_image" >
                                                   </div>
													
												</div>												
												
												
									<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>			
												<div class="col-xl-6">
												<div class="form-group">
														<label>Street Address and Door Number</label>
			                                             <input   type="text" name="block"  class="form-control form-control-lg" value="{{$CompanyData->block}}">
													</div>
												<div class="form-group">
														<label>contact</label>
			                                             <input   type="tel" name="contact"  class="form-control form-control-lg" value="{{$CompanyData->contact}}">
													</div>
												<div class="form-group">
														<label for="exampleSelectl">Select Parent catagori</label>
														<select name="category" class="form-control form-control-lg" id="category" >
															<option value="{{$CompanyData->category}}">{{$CompanyData->category}}</option>
															@foreach($categories as $NewcategoriData)
															
                                                            <option value="{{$NewcategoriData->name}}" >{{$NewcategoriData->name}}</option>
														   	
															@endforeach
															
														</select>
														
														
														
														
													</div>
													<div class="form-group">
														<label>Subcategory</label>
			                                             <select name="subcategory" class="form-control form-control-lg" id="sub">
															
															<option value="{{$CompanyData->subcategory}}">{{$CompanyData->subcategory}}</option>
                                                         @foreach($Allcategories as $NewcategoriData)
														 @if($NewcategoriData->getAttribute('category_id')!=NULL)
                                                            <option value="{{$NewcategoriData->name}}" >{{$NewcategoriData->category_id }}-->{{$NewcategoriData->name }}</option>
														      @endif
															@endforeach
															
															
														</select>
													</div>
													 <div class="form-group">
               
				
				 @if(File::exists("uploads/image/$CompanyData->email.jpg"))
					  <img id="Image3" style="height:225px;width: 250px;float:right;" src="<?php echo asset("uploads/image/$CompanyData->email.jpg")?>">

                          @else 
  <img id="Image3" style="height:225px;width: 250px;float:right;" src="<?php echo asset("uploads/image/non.jpg")?>">
                       @endif
              </div>
												</div>
												
													<!--begin: Code-->
												
													</div>
												</div>
												
											
											<!--end::Form-->
										</div>
									</div>
							<div class="modal-footer">
		<a href="{{url('/admin/companies')}}" type="button" class="btn btn-light-primary font-weight-bold" >Back</a>
		<input  name="submit" type="submit" class="btn btn-primary font-weight-bold" value="Update">
		             
						</div>
						 </form>
       <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
        <br>  
          
        </div>
        <!-- END Content -->
      
      </div>
	  </div>

      @endsection