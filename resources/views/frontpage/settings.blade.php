@extends('frontpage.frontpage')
 

@section('body')  

<link rel="stylesheet" href="css/regi1.css">
 <section id="courses">
  <div style="">
 <div class="row">
<div class="col-lg-2" >
  <div class="form_container">
<br></br>
  </div>
</div>


<div class="form_container">
                                 <div class="col-lg-3" >
                              <div class="item">
                                        <div class="courses-thumb">
                                           <div class="courses-top">
                        <div class="card-header div-1">
                                                    <center>
                          <h2 style="text-decoration:none;color: white;" class="card-title"></h1>
                          </center>
                                                </div>
                                                <!---->
                        <center>
                                                      <hr style="height:50px">
                                                              <a href=" " ><button style="color:black;font-size:20px;height:45px;width:80%;border: 2px;border-style: double;background-color: #fff;" class="btn btn-hover-text-primary form-control">Profile</button></a>
                                                                 <hr> 
                                                                 <a href=" " ><button style="color:black;font-size:20px;height:45px;width:80%;border: 2px;border-style: double;background-color: #fff;" class="btn btn-hover-text-primary form-control">Change Password</button></a>
                                                                 <hr> 
                                                                 <a href=" " ><button style="color:black;font-size:20px;height:45px;width:80%;border: 2px;border-style: double;background-color: #fff;" class="btn btn-hover-text-primary form-control">Payment Method</button></a>
                                                                 <hr>
                                                                <a href=" " ><button style="color:black;font-size:20px;height:45px;width:80%;border: 2px;border-style: double;background-color: #fff;" class="btn btn-hover-text-primary form-control">Sing Out</button></a>
                                                                 <hr style="height:100px">

                                                                             
                                                </center>                            
                                                  <!---->
                                                  <div class="card-header div-1">
                                                    <center>
                          <h2 style="text-decoration:none;color: white;" class="card-title"></h1>
                          </center>
                                                </div>
                                            </div>
                                        </div>
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

<br>



  
     
  <div class="col-sm-5">
<div class="form_wrapper">
        
          <div class="form_container">
    <div class="title_container">
      <center><h2>Update Business Profile</h2></center>
      @if(session('status'))
        <h6 class="alart alart-success">{{session('status')}}</h6>
      @endif
      </div>
      <div class="row clearfix">
     
       <form action="{{route('bussinesprofile.save')}}" method="post" enctype="multipart/form-data"class="form">
         @csrf
       <div class="col-md-6"> 
	   <div class="form-group">
                <label for="exampleInputEmail1">User Id</label>
                 <input id="name" style="height:45px;font-size: 20px" type="text" class="form-control @error('name') is-invalid @enderror" name="userid" value="{{Auth::user()->id}}" readonly >
                      @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
       <div class="form-group">
                <label for="exampleInputEmail1">Company Name</label>
                 <input id="name" style="height:45px;font-size: 20px" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{Auth::user()->company_name}}" readonly >
                      @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>

          <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                 <input id="email"style="height:45px;font-size: 20px" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{Auth::user()->email}}" readonly >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <textarea class="form-control" name="description" type="text" autofocus></textarea>
                     
            </div>
           
        </div> 

         <div class="col-md-6">  
               
                <div class="form-group">
                <label for="exampleInputEmail1">Country</label>
               <select name="country" style="height:45px;font-size: 20px"class="form-control form-control-lg" id="exampleSelectl">
                              <option value="">Select Country</option>
                              
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
                <label for="exampleInputEmail1">City</label>
                <input type="text" style="height:45px;font-size: 20px" id="city" name="city" class="form-control" >
                      
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Block</label>
                <input type="text"style="height:45px;font-size: 20px"  id="block" name="block" class="form-control" >
                      
            </div>
            
        </div>
<br>
          
            <div class="col-lg-6" style="float:right;">
              <div class="form-group">
                <img id="Image3" style="height:120px;width: 175px;float:right;" src="">
              </div>
        <div class="form-group ">
                <label for="exampleInputPassword1"> Business Image</label>
                <input id="business_image" onchange="ImagePreview1(this);" style="height:45px;font-size: 18px;" type="file" class="" name="business_image" required autocomplete="new-password">
            </div>
          </div>
        
         <div class="col-lg-12">
           <center><input class="btn btn-primary" type="submit" value="Register" /></center>
         </div>
        
         
        </form>
       
    </div>
  </div>
        </div>
        </div>



</div>
</div>
</section>














  <!-- Modal -->
         @include('frontpage.give_review');  
 

@endsection