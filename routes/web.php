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

Route::get('/','AdvertismentController@view');
Route::get('/latest_deals','AdvertismentController@latest');
Route::get('/advertisement/increaseView/{id}', 'AdvertismentController@increaseView');

Route::get('/news','NewsController@index');
Route::get('/news/{new}','NewsController@show');

Route::get('/contact','SupportController@create');
Route::post('/contact','SupportController@store');

Route::get('/about_us','AboutController@index');
// brands
Route::get('/store_view','BrandController@view');
Route::get('/show_brand/{brand}','BrandController@show');

Route::post('/{adv}/favorites','FavoritesController@store'); 
Route::get('/{channel}','AdvertismentController@view');
// CONTACT US ROUTNG

// Admin Login
Route::get('/admin/login','SessionsController@create')->name('admin.login');
Route::post('/admin/login','SessionsController@store');

Route::prefix('admin')->group( function() {
	// LOGOUT THE USER
Route::get('/logout','SessionsController@destroy');
// DASHBOARD
Route::get('/dashboard','AdminController@index')->name('dashboard');
Route::post('/dashboard','AdminController@store');
Route::patch('/dashboard/{task}','AdminController@update');

// Advertisement Route
Route::get('/advertisement','AdvertismentController@index');
Route::get('/add','AdvertismentController@create');
Route::post('/add','AdvertismentController@store');
Route::get('/edit-advertisement/{adv}','AdvertismentController@edit');
Route::post('/edit-advertisement/{adv}','AdvertismentController@update');
Route::delete('/advertisement/{adv}','AdvertismentController@destroy');

// Category Route
Route::get('/category','ChannelController@index');
Route::get('/add_category','ChannelController@create');
Route::post('/add_category','ChannelController@store');

// Brand Routing
Route::get('/view_brands','BrandController@index');
Route::get('/add_brands','BrandController@create');
Route::post('/add_brands','BrandController@store');
Route::get('/edit_brands','BrandController@edit');
Route::post('/edit_brands','BrandController@update');
Route::delete('/delete_brands','BrandController@destroy');
// News Admins
Route::get('/view_admin','RegistrationController@index');
Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');
Route::delete('/register/{user}','RegistrationController@destroy');

// CAROUSEL ROUTING add_carousel
Route::get('/carousel','CarouselController@index');
Route::get('/add_carousel','CarouselController@create');
Route::post('/add_carousel','CarouselController@store');
Route::get('/edit_carousel/{carousel}','CarouselController@edit');
Route::patch('/edit_carousel/{carousel}','CarouselController@update');
Route::delete('/delete_carousel/{carousel}','CarouselController@destroy');

// SMALL SLIDER ROUTING 
Route::get('/slider','SmallsliderController@index');
Route::get('/add_slider','SmallsliderController@create');
Route::post('/add_slider','SmallsliderController@store');
Route::get('/edit_slider/{smallslider}','SmallsliderController@edit');
Route::patch('/edit_slider/{smallslider}','SmallsliderController@update');
Route::delete('/delete_slider/{smallslider}','SmallsliderController@destroy');

// NEWS ROUTING
Route::get('/view-news','NewsController@view');
Route::get('/add-news','NewsController@create');
Route::post('/add-news','NewsController@store'); 
Route::get('/edit-news/{new}','NewsController@edit');
Route::patch('/edit-news/{new}','NewsController@update');
Route::delete('/delete_news/{new}','NewsController@destroy');

// Support us routing
Route::get('/support','SupportController@index');

});
Auth::routes();

