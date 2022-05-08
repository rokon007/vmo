<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	
<!-- Mirrored from preview.keenthemes.com/metronic/demo1/custom/pages/login/classic/login-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Feb 2022 17:35:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<!-- Google Tag Manager -->
		
		<!-- End Google Tag Manager -->
		<meta charset="utf-8" />
		<title>Login Page | Vimbiso Admin</title>
		<meta name="description" content="Login page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	
		<!--begin::Fonts-->
		<link rel="stylesheet" href={{asset("https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700")}} />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href={{asset("../../theme/html/demo1/dist/assets/css/pages/login/classic/login-35883.css?v=7.2.9")}} rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href={{asset("../../theme/html/demo1/dist/assets/plugins/global/plugins.bundle5883.css?v=7.2.9")}} rel="stylesheet" type="text/css" />
		<link href={{asset("../../theme/html/demo1/dist/assets/plugins/custom/prismjs/prismjs.bundle5883.css?v=7.2.9")}} rel="stylesheet" type="text/css" />
		<link href={{asset("/theme/html/demo1/dist/assets/css/style.bundle5883.css?v=7.2.9")}} rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href={{asset("../../theme/html/demo1/dist/assets/css/themes/layout/header/base/light5883.css?v=7.2.9")}} rel="stylesheet" type="text/css" />
		<link href={{asset("../../theme/html/demo1/dist/assets/css/themes/layout/header/menu/light5883.css?v=7.2.9")}} rel="stylesheet" type="text/css" />
		<link href={{asset("../../theme/html/demo1/dist/assets/css/themes/layout/brand/dark5883.css?v=7.2.9")}} rel="stylesheet" type="text/css" />
		<link href={{asset("../../theme/html/demo1/dist/assets/css/themes/layout/aside/dark5883.css?v=7.2.9")}} rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		<link rel="shortcut icon" type="image/png" href="/rokon/static/images/favicon.ico"/>
		<!-- Hotjar Tracking Code for keenthemes.com -->
		
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!-- Google Tag Manager (noscript) -->
		
		<!-- End Google Tag Manager (noscript) -->
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-3 login-signin-on d-flex flex-row-fluid" id="kt_login">
				<div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-image: url(../../theme/html/demo1/dist/assets/media/bg/bg-1.jpg);">
					<div class="login-form text-center text-white p-7 position-relative overflow-hidden">
						<!--begin::Login Header-->
						<div class="d-flex flex-center mb-15">
							<a href="#">
								<img src="../../theme/html/demo1/dist/assets/media/logos/logo-no-bg-2.png" class="max-h-100px" alt="" />
							</a>
						</div>
						<!--end::Login Header-->
						<!--begin::Login Sign in form-->
						<div class="login-signin">
							<div class="mb-20">
								<h3>Sign In To Admin</h3>
								<p class="opacity-60 font-weight-bold">Enter your details to login to your account:</p>
							</div>
							<form class="form"   method="POST" action="{{ route('login') }}" >
								 @csrf

								<div class="form-group">
									<input  class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5 @error('email') is-invalid @enderror" type="text" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus autocomplete="off" />
								</div>

                                     
                                      @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                        

								<div class="form-group">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5 @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" />
								</div>



                                  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                


								<div class="form-group d-flex flex-wrap justify-content-between align-items-center px-8">
									<div class="checkbox-inline">
										<label class="checkbox checkbox-outline checkbox-white text-white m-0">
										<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}/>
										<span></span>Remember me</label>
									</div>
									<a href="javascript:;" id="kt_login_forgot" class="text-white font-weight-bold">Forget Password ?</a>
								</div>
								<div class="form-group text-center mt-10">
									<button type="submit"  class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3">Sign In</button>
								</div>
							</form>
							<div class="mt-10">
								<span class="opacity-70 mr-4">Don't have an account yet?</span>
								<a href="javascript:;" id="kt_login_signup" class="text-white font-weight-bold">Sign Up</a>
							</div>
						</div>
						<!--end::Login Sign in form-->
						<!--begin::Login Sign up form-->
						<div class="login-signup">
							<div class="mb-20">
								<h3>Sign Up</h3>
								<p class="opacity-60">Enter your details to create your account</p>
							</div>
							<form class="form text-center" id="kt_login_signup_form">
								<div class="form-group">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8" type="text" placeholder="Fullname" name="fullname" />
								</div>
								<div class="form-group">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8" type="text" placeholder="Email" name="email" autocomplete="off" />
								</div>
								<div class="form-group">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8" type="password" placeholder="Password" name="password" />
								</div>
								<div class="form-group">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8" type="password" placeholder="Confirm Password" name="cpassword" />
								</div>
								<div class="form-group text-left px-8">
									<div class="checkbox-inline">
										<label class="checkbox checkbox-outline checkbox-white text-white m-0">
										<input type="checkbox" name="agree" />
										<span></span>I Agree the 
										<a href="#" class="text-white font-weight-bold ml-1">terms and conditions</a>.</label>
									</div>
									<div class="form-text text-muted text-center"></div>
								</div>
								<div class="form-group">
									<button id="kt_login_signup_submit" class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3 m-2">Sign Up</button>
									<button id="kt_login_signup_cancel" class="btn btn-pill btn-outline-white font-weight-bold opacity-70 px-15 py-3 m-2">Cancel</button>
								</div>
							</form>
						</div>
						<!--end::Login Sign up form-->
						<!--begin::Login forgot password form-->
						<div class="login-forgot">
							<div class="mb-20">
								<h3>Forgotten Password ?</h3>
								<p class="opacity-60">Enter your email to reset your password</p>
							</div>
							<form class="form" id="kt_login_forgot_form">
								<div class="form-group mb-10">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8" type="text" placeholder="Email" name="email" autocomplete="off" />
								</div>
								<div class="form-group">
									<button id="kt_login_forgot_submit" class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3 m-2">Request</button>
									<button id="kt_login_forgot_cancel" class="btn btn-pill btn-outline-white font-weight-bold opacity-70 px-15 py-3 m-2">Cancel</button>
								</div>
							</form>
						</div>
						<!--end::Login forgot password form-->
					</div>
				</div>
			</div>
			<!--end::Login-->
		</div>
		<!--end::Main-->
		
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src={{asset("../../theme/html/demo1/dist/assets/plugins/global/plugins.bundle5883.js?v=7.2.9")}}></script>
		<script src={{asset("../../theme/html/demo1/dist/assets/plugins/custom/prismjs/prismjs.bundle5883.js?v=7.2.9")}}></script>
		<script src={{asset("/theme/html/demo1/dist/assets/js/scripts.bundle5883.js?v=7.2.9")}}></script>
		<script src={{asset("../../theme/html/demo1/dist/assets/js/engage_code.js")}}></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src={{asset("../../theme/html/demo1/dist/assets/js/pages/custom/login/login-general5883.js?v=7.2.9")}}></script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/metronic/demo1/custom/pages/login/classic/login-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Feb 2022 17:35:44 GMT -->
</html>