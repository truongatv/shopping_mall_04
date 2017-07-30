<?php

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
Route::get('/', 'WelcomeController@index');

Auth::routes();
Route::get('/redirect/{social}', 'SocialAuthController@redirect');
Route::get('/callback/{social}', 'SocialAuthController@callback');
Route::prefix('admin')->middleware(['admin', 'auth'])->group(function () {

});
Route::get('category', 'CategoryController@index');
Route::get('category/NewArrival', 'CategoryController@newArrival');
Route::get('category/TopSell', 'CategoryController@topSell');
Route::get('category/{group}/{name}', 'CategoryController@typeCategory');
Route::get('test/{id}', 'CategoryController@test');

Route::post('upload', 'UploadController@upload');

// Route to user profile
Route::get('profile', [
    'as' => 'profile',
    'uses' => 'ProfileController@getProfile',
]);
Route::post('sua_profile', [
    'as' => 'sua_profile',
    'uses' => 'ProfileController@postProfile',
]);
Route::get('edit_profile', [
    'as' => 'edit-profile-user',
    'uses' => 'ProfileController@getEditProfile',
]);

//product_details
Route::get('/product_details/{product_id}', 'ProductDetailsController@getDetails')->name('product_details');
//shop_details
Route::get('/shop_details/{shop_product_id}', 'ShopDetailsController@getDetails')->name('shop_details');



//search
Route::post('search', 'CategoryController@search');

//add cart
Route::post('/add_cart/{produc_id}', 'AddCartController@create')->name('add_cart');

Route::get('view_cart/{user_id}', 'ViewCartController@viewCart')->name('view_cart');
Route::get('view_cart/order/{id}', 'ViewCartController@viewCartWithId')->name('view_cart_id')->middleware('auth');

//show history orders
Route::get('history_orders', 'HistoryOrdersController@showHistory');

