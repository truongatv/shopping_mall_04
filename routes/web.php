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
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/redirect/{social}', 'SocialAuthController@redirect');
Route::get('/callback/{social}', 'SocialAuthController@callback');
Route::prefix('admin')->middleware(['admin', 'auth'])->group(function () {
});
Route::get('category', 'category@index');

Route::get('category/NewArrival','CategoryController@newArrival');
Route::get('category/TopSell','CategoryController@topSell');


Route::post('upload', 'UploadController@upload');

// Route to user profile
Route::get('profile', [
    'as' => 'profile',
    'uses' => 'ProfileController@getProfile',
]);

Route::post('sua_profile', array(
    'as' => 'sua_profile',
    'uses' => 'ProfileController@postProfile',
));

Route::get('edit_profile', array(
    'as' => 'edit-profile-user',
    'uses' => 'ProfileController@getEditProfile',
));


