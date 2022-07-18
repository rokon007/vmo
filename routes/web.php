<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ImportExcelController;
use App\Http\Controllers\pagecontroller;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\Googlecontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\FileManagerController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\linkedincontroller;
use App\Http\Controllers\instagramcontroller;
use App\Http\Controllers\sitemapcontroller;
use App\Http\Controllers\Blog_categoryController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\RewardsController;


/*
|--------------------------------------------------------------------------
| Web Routes   companies plan 
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/    
/*   
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/review',[App\Http\Controllers\WelcomeController::class,'givshow']);

// Route::get('/auth/redirect',[App\Http\Controllers\WelcomeController::class,'redirect']);
// Route::get('/review/google/callback',[App\Http\Controllers\ReviewController::class,'googlecallback']);



//Route::get('/blog',[HomeController::class,"index"])->name('blog');
//Route::get('/home', 'HomeController@index')->name('home');

// Front End Routes
Route::get('/blog',[FrontEndController::class,"home"])->name('website');
Route::get('/announcement',[FrontEndController::class,"Announcement_show"])->name('announcement');
Route::get('/rewards',[FrontEndController::class,"rewards_show"])->name('rewards');
//Route::get('/', 'FrontEndController@home')->name('website');
Route::get('/category/{slug}',[FrontEndController::class,"category"])->name('website.category');
//Route::get('/category/{slug}', 'FrontEndController@category')->name('website.category');
Route::get('/tag/{slug}',[FrontEndController::class,"tag"])->name('website.tag');
//Route::get('/tag/{slug}', 'FrontEndController@tag')->name('website.tag');
Route::get('/post/{slug}',[FrontEndController::class,"post"])->name('website.post');
Route::get('/rewards_post/{slug}',[FrontEndController::class,"rewards_post"])->name('rewards.post');
Route::get('/announcement/{slug}',[FrontEndController::class,"announcement_post"])->name('announcement.post');
//Route::get('/post/{slug}', 'FrontEndController@post')->name('website.post');

//Route::post('/contact', 'FrontEndController@send_message')->name('website.contact');
//Rewards
//Route::get('/rewards', function () {
   // return view('frontpage.rewards');
//});
///download
Route::get('/download', function () {
    $file=public_path()."/inputgrup.pdf";
	$headers=array(
	'content-Type:application/pdf',
	);
	return Response::download($file,"Rewards Guide.pdf",$headers);
});

Route::get('/auth/redirectfacebook', [FacebookController::class, 'redirectToFacebook']);

Route::get('/login/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);


Route::get('/auth/redirectgoogle', [Googlecontroller::class, 'redirectToGoogle']);

Route::get('/review/google/callback', [Googlecontroller::class, 'handleGoogleCallback']);
//Instafram
Route::get('/auth/redirectinstagram', [instagramcontroller::class, 'redirectToInstagram']);
Route::get('/login/instagram/callback', [instagramcontroller::class, 'handleInstagramCallback']);

//linkedin
Route::get('/auth/redirectlinkedin', [linkedincontroller::class, 'redirectTolinkedin']);
Route::get('/login/linkedin/callback', [linkedincontroller::class, 'handlelinkedinCallback']);


Route::get('/subcategory/get',[App\Http\Controllers\CategoryController::class,'subcat']);

Route::get('userset/{id}', [App\Http\Controllers\pagecontroller::class, 'SetUser'])->name('user.set')->middleware('is_admin');
Route::post('/updateuser/{email}',[App\Http\Controllers\pagecontroller::class, 'updateuser_funtion'])->name('updateuser')->middleware('is_admin');


//CompanyController
Route::get('edit_company/{email}', [App\Http\Controllers\pagecontroller::class, 'editcompany'])->name('edit.company')->middleware('is_admin');
Route::put('/update_company/{email}',[App\Http\Controllers\pagecontroller::class, 'updatecompany_funtion'])->name('updatecompany')->middleware('is_admin');	



Route::get('/',[WelcomeController::class,"welcomeindex"])->name('welcome');
Route::get('/categories',[CategoryController::class,"FrontCategory"]);
// Route::post('/search',[CategoryController::class,"search"]);
Route::get('/search',[App\Http\Controllers\CategoryController::class, 'search'])->name('search'); 
//Normal User
Route::get('/profile/{company}', [App\Http\Controllers\pagecontroller::class, 'indexprofile'])->name('profile');
//review_display
Route::get('/review_display/{rd}', [App\Http\Controllers\pagecontroller::class, 'review_display'])->name('review_display');
//Route::get('warden/building/{buildingId}/employee/{employeeId}',[
   // 'uses'=>'WardenController@deleteWarden',
   // 'as'=>'delete-warden'
//]);{id}/{ticketid}
Route::put('/replay/{id}', [App\Http\Controllers\pagecontroller::class, 'replay_save'])->name('replay.save');
Route::get('/put_replay/{id}', [App\Http\Controllers\pagecontroller::class, 'put_replay'])->name('replay.view');
//put_replay


Route::get('/settings', [App\Http\Controllers\pagecontroller::class, 'indexsettings'])->name('settings');
Route::get('/update_profile/{email}', [App\Http\Controllers\pagecontroller::class, 'indexupdate_profile'])->name('update_profile');

//landing page Route
//Route::get("/home",[HomeController::class,"index"]);
Route::get("/about",[pagecontroller::class,"about"]);
Route::get("/companies",[CompanyController::class,"index"]);
//Route::get("/registration",[pagecontroller::class,"registration"]);
//Route::get("/login",[HomeController::class,"login"]);
Route::get("/plans",[pagecontroller::class,"plans"]);
//Route::get("/password_reset",[pagecontroller::class,"password_reset"]);
Route::get("/contactus",[pagecontroller::class,"contactus"]);
//Route::get("/admin/dashboard",[pagecontroller::class,"dashboard"]);
//Route::get("/admin/login",[pagecontroller::class,"adminlogin"]);
Route::get("/terms_conditons",[pagecontroller::class,"terms_conditons"]);
Route::get("/privacy_policy",[pagecontroller::class,"privacy_policy"]);

//Title and Tag ..................................

Route::get('/admin/title', [App\Http\Controllers\TitleandtagController::class, 'titleandtag'])->name('titleandtag')->middleware('is_admin');
Route::post('save_title', [App\Http\Controllers\TitleandtagController::class, 'save_title'])->name('save_title')->middleware('is_admin');
//Route::get("titleandtag", "TitleandtagController@titleandtag")->name('titleandtag');
//Route::post("save_title", "TitleandtagController@save_title")->name('save_title');

// Slider Site ...................................................?

//Route::get("slider/add", "SliderController@slideradd")->name('slideradd');
//Route::post("slider/save", "SliderController@slider_save")->name('slider_save');


//Route::get('/admin/slider', [App\Http\Controllers\SliderController::class, 'slideradd'])->name('slideradd')->middleware('is_admin');
//Route::post('slider/save', [App\Http\Controllers\SliderController::class, 'slider_save'])->name('slider_save')->middleware('is_admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');






Route::get('/adminlogin',[App\Http\Controllers\pagecontroller::class,"adminlogin"])->name('adminlogin');

//admin aria

//Blog
Route::get('/admin/blog/category', [App\Http\Controllers\Blog_categoryController::class, 'index'])->name('category.index')->middleware('is_admin');
Route::get('/admin/blog/tag', [App\Http\Controllers\TagController::class, 'index'])->name('tag.index')->middleware('is_admin');
Route::get('/admin/blog/post', [App\Http\Controllers\PostController::class, 'index'])->name('post.index')->middleware('is_admin');
Route::get('/admin/announcement', [App\Http\Controllers\AnnouncementController::class, 'index'])->name('announcement.index')->middleware('is_admin');
// Admin Panel Routes
Route::group(['prefix' => 'admin', 'middleware' => ['is_admin']], function () {
   

    Route::resource('category', 'App\Http\Controllers\Blog_categoryController');
    Route::resource('tag', 'App\Http\Controllers\TagController');
    Route::resource('post', 'App\Http\Controllers\PostController');
	Route::resource('announcement', 'App\Http\Controllers\AnnouncementController');
	Route::resource('rewards', 'App\Http\Controllers\RewardsController');
    
});

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminindex'])->name('admin.home')->middleware('is_admin');

Route::get('/admin/page', [App\Http\Controllers\pagecontroller::class, 'pagesetting'])->name('admin.page')->middleware('is_admin');

Route::get('/admin/company_set', [App\Http\Controllers\pagecontroller::class, 'setcompany'])->name('admin.company_set')->middleware('is_admin');

Route::get('/userscompany/{id}',[App\Http\Controllers\pagecontroller::class,'usercompany'])->name('usercompany')->middleware('is_admin');

Route::put('companyedite/{cid}',[App\Http\Controllers\pagecontroller::class,'companyedit']);
// Route::put('update-student/{id}', [StudentController::class, 'update']);
//Route::get('/admin/user', [App\Http\Controllers\pagecontroller::class, 'userpage'])->name('admin.user')->middleware('is_admin');

//ADMIN COMPANY companies
Route::get('/admin/companies',[App\Http\Controllers\CompanyController::class,'admincompanyshow'])->name('admin.companies')->middleware('is_admin');
Route::post('/admin/company', [App\Http\Controllers\CompanyController::class, 'store'])->name('company.save')->middleware('is_admin');
Route::get('company_delete/{id}', [App\Http\Controllers\CompanyController::class, 'delete_company'])->name('company.delete')->middleware('is_admin');

Route::post('/getSubcate', [App\Http\Controllers\CompanyController::class, 'getSubcate']);
//For Review Saverecord

 Route::post('/bussinesprofile/save', [App\Http\Controllers\JoinInsertControler::class, 'Saverecord'])->name('bussinesprofile.save');
 Route::get('/admin/bussinesprofile',[App\Http\Controllers\pagecontroller::class,'businessprofile'])->name('admin.bussinesprofile')->middleware('is_admin');
 Route::post('import-profiles',[\App\Http\Controllers\ProfileController::class,'importprofiles'])->name('import-profiles')->middleware('is_admin');
 Route::get('export-profile',[\App\Http\Controllers\ProfileController::class,'exportprofile'])
    ->name('export-profile')->middleware('is_admin');  


//For Review Saverecord
Route::get('/admin/reviews', [App\Http\Controllers\ReviewController::class, 'create'])->name('reviews.create')->middleware('is_admin');
Route::post('/admin/reviews', [App\Http\Controllers\ReviewController::class, 'store'])->name('reviews.store')->middleware('is_admin');
Route::post('/give/reviews', [App\Http\Controllers\pagecontroller::class, 'give'])->name('reviews.give');
Route::get('click_delete/{id}', [App\Http\Controllers\ReviewController::class, 'delete_funtion'])->name('reviews.delete')->middleware('is_admin');
Route::get('click_edit/{id}', [App\Http\Controllers\ReviewController::class, 'edit_funtion'])->name('reviews.edit')->middleware('is_admin');
// updatereview
Route::post('/updatereview/{id}',[App\Http\Controllers\ReviewController::class, 'updatereview_funtion'])->name('updatereview')->middleware('is_admin');
Route::post('import-reviews',[\App\Http\Controllers\ReviewController::class,'importreviews'])->name('import-reviews')->middleware('is_admin'); 
Route::get('export-reviews',[\App\Http\Controllers\ReviewController::class,'exportreviews'])->name('export-reviews')->middleware('is_admin');   

//For emailverify
Route::get('/admin/emailverify', [App\Http\Controllers\EmailVeryfyController::class, 'emailshow'])->name('admin.emailverify')->middleware('is_admin');


//For Category 
Route::get('/admin/categories', [App\Http\Controllers\CategoryController::class, 'create'])->name('categories.create')->middleware('is_admin');
Route::post('/admin/categories', [App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store')->middleware('is_admin');

Route::get('ccategory_delete/{id}', [App\Http\Controllers\CategoryController::class, 'delete_category'])->name('categories.delete')->middleware('is_admin');

Route::post('import-category',[\App\Http\Controllers\CategoryController::class,'importCategory'])->name('import-category')->middleware('is_admin');
Route::get('export-category',[\App\Http\Controllers\CategoryController::class,'exportcategory'])->name('export-category')->middleware('is_admin');  

// Front page searching
Route::get('viewcompany/{name}', [App\Http\Controllers\CategoryController::class, 'viewcompany']);

Route::get('viewcompany1/{name}', [App\Http\Controllers\CategoryController::class, 'viewcompany1']);



//ImportExcelController

Route::get('/admin/user', [App\Http\Controllers\VimbisoUserController::class, 'create'])->name('admin-user')->middleware('is_admin'); 
Route::get('/admin/add-user', [App\Http\Controllers\VimbisoUserController::class, 'view_adduser'])->name('adduser')->middleware('is_admin'); 

//Route::post('/user/import', [App\Http\Controllers\ImportExcelController::class, 'import'])->middleware('is_admin');


//Route::get('/admin/user',[App\Http\Controllers\pagecontroller::class,'importUser']);
//Route::post('/import',[App\Http\Controllers\pagecontroller::class,'import'])->name('user.import');


Route::get('export-user',[\App\Http\Controllers\VimbisoUserController::class,'exportUser'])->name('export-user')->middleware('is_admin');
Route::post('import-user',[\App\Http\Controllers\VimbisoUserController::class,'importUser'])->name('import-user')->middleware('is_admin');


//COMPANY EPORT IMPORT
Route::get('export-company',[\App\Http\Controllers\CompanyController::class,'exportCompany'])->name('export-company')->middleware('is_admin');
Route::post('import-company',[\App\Http\Controllers\CompanyController::class,'importCompany'])->name('import-company')->middleware('is_admin');

Route::get('/upload-image',[\App\Http\Controllers\HomeController::class,'UploadImage'])->name('upload.image')->middleware('is_admin');

// RESET PASSWORD
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);
 
    $status = Password::sendResetLink(
        $request->only('email')
    );
 
    return $status === Password::RESET_LINK_SENT
                ? view('auth.notis')
                // ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');



Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');


Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);
 
    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ]);
 
            $user->save();
 
            event(new PasswordReset($user));
        }
    );
 
    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');




Route::get('filemanager', [FileManagerController::class, 'index'])->middleware('is_admin');


//SENT EMAIL
Route::get('/send-email', [MailController::class, 'sendEmail']);

//RequestFor contact
Route::post('/request-contact', [App\Http\Controllers\ContactController::class, 'RequestForcontact'])->name('request-contact');
//RequestForEmail
Route::post('/request-email', [App\Http\Controllers\ContactController::class, 'RequestForEmail'])->name('request-email');

//CONTACT

Route::post('/contact-form', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contact-form.store');
//INFO
Route::get('/info/{id}', [App\Http\Controllers\pagecontroller::class, 'info_funtion'])->name('infoview');
Route::get('/contact/{id}', [App\Http\Controllers\pagecontroller::class, 'info_contact'])->name('contactview');

Route::get('/genrate-sitemap', [App\Http\Controllers\sitemapcontroller::class, 'set_sitemap'])->name('sitemap');
Route::get('/sitemap', [App\Http\Controllers\sitemapcontroller::class, 'set_sitemap2'])->name('sitemap2');



