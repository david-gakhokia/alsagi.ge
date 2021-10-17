<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\PromotionController;
use Illuminate\Support\Facades\Artisan;


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



Route::get('/' , [FrontController::class , 'home']);

Route::get('/about', function () {
    return view('frontend.pages.about');
});

Route::get('/contact', function () {
    return view('frontend.pages.contact');
});

// პროდუქცია
    Route::get('products' , [FrontController::class , 'products']);
    Route::get('product/{id}' , [FrontController::class , 'show']);

// სიახლეები
    Route::get('posts' , [FrontController::class , 'posts']);
    Route::get('post/{id}' , [FrontController::class , 'post_show']);

Route::get('/symlink', function () {
    return view('symlink');
});

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/artisan', function () {
    return Artisan::call('storage:link');
});


// Route::resource('/', FrontController::class,'index');
// Route::get('/', [HomeController::class, 'index']);

// Route::get('/products', function () {
//     return  view('Frontend.index');
// });


Auth::routes();

Route::get('/admin', [HomeController::class, 'index'])->name('admin');



Route::group(['prefix' => 'admin','middleware' => ['auth']], function() {

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('sliders', SliderController::class);
    Route::resource('offers', OfferController::class);
    Route::resource('promotions', PromotionController::class);

});
