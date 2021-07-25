
<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GoogleController;
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

Route::get('/', function () {
    return view('welcome');
});
    
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard',function(){
    return redirect()->intended('my_page2');
});

Route::get('login/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('login/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('/users/edit', 'UserController@edit2');
Route::post('/users/edit', 'UserController@update');

Route::get('/my_page', 'My_pageController@edit3');

Route::get('/my_page2', 'My_pageController@index');
Route::post('/my_page2', 'My_pageController@my_page_update');

Route::get('/log', "CompanyController@index");
Route::post('/create', "CompanyController@create");

Route::get('/search', "HomeController@index");
Route::post('/answer', "HomeController@redirectIndex");


Route::get('/company_register',[App\Http\Controllers\RegisterController::class,'create']);
Route::post('/company_register' ,[App\Http\Controllers\RegisterController::class,'store'])
    ->middleware('guest');


Route::get('/company_login', [App\Http\Controllers\LoginController::class,'index'])
    ->middleware('guest')
    ->name('company_login');
Route::post('/company_login',[App\Http\Controllers\LoginController::class,'authenticate'])
    ->middleware('guest');

Route::get('/logout' ,[App\Http\Controllers\LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

Route::get('company', 'App\Http\Controllers\CompanyController@index');

Route::get('/home',function() {
    return view('home');
});