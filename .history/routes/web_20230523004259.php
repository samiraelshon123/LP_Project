<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\SocialMediaController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\auth\AdminLoginController;

////////////

//user

use App\Http\Controllers\User\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin','middleware' => ['auth:admin']], function() {
        //admin
        Route::get('/', function(){
            return view('admin.dashboard');
        })->name('admin');
       
    // brand
    Route::resource('category', CategoryController::class);
    
    // governorate
    Route::resource('brand', BrandController::class);
 
    //blog
     Route::resource('blog',BlogController::class);



});

//////////////////////////////////


Route::group(['middleware' => ['auth']], function() {
    Route::get('/', [UserController::class, 'home'])->name('user.home');
    Route::get('categories', [UserController::class, 'categories'])->name('user.categories');
    Route::get('about_us', [UserController::class, 'about_us'])->name('user.about_us');
    Route::get('change_location', [UserController::class, 'change_location'])->name('user.change_location');
    Route::get('contact_us', [UserController::class, 'contact_us'])->name('user.contact_us');
    Route::get('faq', [UserController::class, 'faq'])->name('user.faq');
    Route::get('privacy', [UserController::class, 'privacy'])->name('user.privacy');
    Route::get('terms_of_use', [UserController::class, 'terms_of_use'])->name('user.terms_of_use');
    Route::get('service_details', [UserController::class, 'service_details'])->name('user.service_details');
    Route::get('service_details', [UserController::class, 'service_details'])->name('user.service_details');




});

//////////////////////////////////

//authentication

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'registerUser'])->name('registerUser');


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginUser'])->name('loginUser');


Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('/adminlogin', [AdminLoginController::class, 'loginPage']);
Route::post('/adminlogin', [AdminLoginController::class, 'loginAdmin'])->name('adminlogin');
