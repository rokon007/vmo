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

/*
|--------------------------------------------------------------------------
| Web Routes   companies
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/    
/*   companies
Route::get('/', function () {
    return view('welcome');
});
*/
// Route::get('userset/{id}',[App\Http\Controllers\UserController::class,'SetUser'])->name('user.set')->middleware('is_admin');

Route::get('/auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});
Route::get('/review/giv',[App\Http\Controllers\ReviewController::class,'givshow']);
 
// Route::get('https://vimbisotest.herokuapp.com/review/google/callback', function () {
//     $user = Socialite::driver('google')->user();
//  dd($user);
//      $user->token
// });
Route::get('/review/google/callback',[App\Http\Controllers\ReviewController::class,'googlecallback']);


Route::get('/subcategory/get',[App\Http\Controllers\CategoryController::class,'subcat']);

Route::get('userset/{id}', [App\Http\Controllers\pagecontroller::class, 'SetUser'])->name('user.set')->middleware('is_admin');
Route::post('/updateuser/{email}',[App\Http\Controllers\pagecontroller::class, 'updateuser_funtion'])->name('updateuser')->middleware('is_admin');	



Route::get('/',[WelcomeController::class,"welcomeindex"])->name('welcome');
Route::get('/categories',[CategoryController::class,"FrontCategory"]);
// Route::post('/search',[CategoryController::class,"search"]);
Route::get('/search',[App\Http\Controllers\CategoryController::class, 'search'])->name('search'); 
//Normal User
Route::get('/profile/{company}', [App\Http\Controllers\pagecontroller::class, 'indexprofile'])->name('profile');
Route::get('/settings', [App\Http\Controllers\pagecontroller::class, 'indexsettings'])->name('settings');

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






Route::get('adminlogin',[App\Http\Controllers\pagecontroller::class,"adminlogin"])->name('adminlogin');

//admin aria

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



