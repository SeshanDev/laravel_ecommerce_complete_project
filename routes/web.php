<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\Frontend\RatingController;
use App\Http\Controllers\Frontend\ReviewController;
use App\Mail\OrderMail;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Auth::routes(['verify'=>true]);
Route::get('/TecCom','Frontend\FrontendController@index')->middleware('verified');
Route::get('/','Frontend\FrontendController@index');
Route::get('allcategories','Frontend\FrontendController@allcategory');
Route::get('category/{name}','Frontend\FrontendController@category');
Route::get('category/{name}/{brand_name}','Frontend\FrontendController@productview');

Route::get('product-list','Frontend\FrontendController@productlistAjax');
Route::post('searchproduct','Frontend\FrontendController@searchproduct');

Auth::routes();

Route::get('/load-cart-data','Frontend\CartController@cartcount');
Route::get('/load-wishlist-data','Frontend\WishlistController@wishlistcount');

Route::post('/addtocart','Frontend\CartController@addproduct');
Route::post('/deletecartitem','Frontend\CartController@deleteitem');
Route::post('/updatecart','Frontend\CartController@updatecart');

Route::post('/addtowishlist','Frontend\WishlistController@add');
Route::post('/deletewishlistitem','Frontend\WishlistController@delete');

Route::post('filter','Frontend\FrontendController@search');
Route::get('offer','Frontend\FrontendController@offer');
Route::get('aboutus','Frontend\FrontendController@aboutus');

Route::middleware(['auth'])->group(function(){
    
    Route::get('cart','Frontend\CartController@viewcart');
    Route::get('/checkout','Frontend\CheckoutController@index');
    Route::post('/place-order','Frontend\CheckoutController@placeorder');
    Route::get('/my-orders','Frontend\UserController@index');
    Route::get('/my-profile','Frontend\UserController@myprofile');
    Route::get('/view-order/{id}','Frontend\UserController@view');
    Route::get('/wishlist','Frontend\WishlistController@index');

    Route::post('/add-rating','Frontend\RatingController@add');
    
    Route::get('add-review/{product_modelname}/userreview','Frontend\ReviewController@add');
    Route::post('/add-review','Frontend\ReviewController@create');
    Route::get('edit-review/{product_modelname}/userreview','Frontend\ReviewController@edit');
    Route::put('update-review','Frontend\ReviewController@update');
    
    Route::post('/pay','Frontend\CheckoutController@pay');

    Route::get('/payment','Frontend\CheckoutController@stripe');

    Route::get('/invoice/{id}','Frontend\UserController@invoice');

    Route::post('/my-profile-update','Frontend\UserController@profileupdate');
   
});


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth','isAdmin'])->group(function(){
    Route::get('/dashboard','Admin\FrontendController@index');
    Route::get('/charts','Admin\FrontendController@chart');

    Route::get('categories','Admin\CategoryController@index');
    Route::get('add-category','Admin\CategoryController@add');
    Route::post('insert-category','Admin\CategoryController@insert');
    Route::get('edit-product{id}','Admin\CategoryController@edit');
    Route::put('update-category{id}','Admin\CategoryController@update');
    Route::get('delete-category{id}','Admin\CategoryController@destroy');

    Route::get('laptops','Admin\ProductController@laptop');
    Route::get('desktops','Admin\ProductController@desktop');
    Route::get('printers','Admin\ProductController@printer');
    Route::get('phones','Admin\ProductController@phone');
    Route::get('special','Admin\ProductController@special');
    Route::get('categories','Admin\CategoryController@index');
    Route::get('add-product','Admin\ProductController@add');
    Route::post('insert-product','Admin\ProductController@insert');
    Route::get('edit-prod/{id}','Admin\ProductController@edit');
    Route::put('update-product/{id}','Admin\ProductController@update');
    Route::get('delete-product{id}','Admin\ProductController@destroy');

    
    Route::get('orders','Admin\OrderController@index');
    Route::get('admin/view-order/{id}','Admin\OrderController@view');
    Route::put('update-order/{id}','Admin\OrderController@updateorder');
    Route::get('order-history','Admin\OrderController@orderhistory');
    Route::get('users','Admin\DashboardController@users');
    Route::get('admins','Admin\DashboardController@admins');
    Route::get('view-user/{id}','Admin\DashboardController@viewusers');
  

});