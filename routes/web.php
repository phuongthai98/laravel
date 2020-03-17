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

Route::get('/', 'HomeController@index')->name('home');


Route::get('product-detail/{id}','HomeController@product_detail')->name('product_detail');
Route::get('/home/search-product','HomeController@search')->name('search');
Route::post('/home/search-product','HomeController@post_search')->name('search');


Route::group(['prefix' => 'cart'], function() {
	Route::get('cart','CartController@checkout')->name('cart');
    Route::get('add/{id}','CartController@add')->name('cart.add');
    Route::get('remove/{id}','CartController@remove')->name('cart.remove');
    Route::get('update/{id}','CartController@update')->name('cart.update');
    Route::get('clear','CartController@clear')->name('cart.clear'); 
    
});

Route::get('home/login','HomeController@login')->name('home_login');
Route::post('home/login','HomeController@post_login')->name('home_login');
Route::get('home_logout','HomeController@home_log_out')->name('home_logout');


Route::get('order','OrderController@order')->name('order');
Route::post('order','OrderController@sub_order')->name('order');

Route::get('contact','MailController@contact')->name('contact');
Route::post('contact','MailController@send_contact')->name('contact');





// =============== ADMIN ======================================================================================================
Route::get('admin-login', 'Admin\AdminController@login')->name('login');
Route::post('admin-login', 'Admin\AdminController@post_login')->name('login');
Route::get('logout','Admin\AdminController@logout')->name('logout');

//-- middleware : bắt buộc đăng nhập trước ------
Route::group(['prefix' => 'admin','namespace' => 'Admin','middleware' => 'auth'], function() {
    Route::get('admin','AdminController@index')->name('admin');
	Route::get('catalogs','AdminController@catalogs')->name('catalogs');
	Route::get('products','AdminController@products')->name('products');
	Route::get('banner','AdminController@banner')->name('banner');
	Route::get('users','AdminController@users')->name('users');

	//========= Add admin ===============
	Route::get('add-admin','AdminController@add_admin')->name('add_admin');
	Route::post('add-admin','AdminController@post_admin')->name('add_admin');

	// -----|| Catalogs ||

	Route::get('addCat','AdminController@addCat')->name('addCat');
	Route::post('addCat','AdminController@post_addCat')->name('addCat');
	Route::get('editCat/{id}','AdminController@editCat')->name('editCat');
	Route::post('editCat/{id}','AdminController@edit_postCat');
	Route::get('del/{id}', 'AdminController@delCat')->name('delCat');
	Route::get('/cat/search','AdminController@searchCat')->name('searchCat');
	Route::post('/cat/search','AdminController@post_searchCat')->name('searchCat');

	// -----|| Products ||

	Route::get('addPro','AdminController@addPro')->name('addPro');
	Route::post('addPro','AdminController@post_addPro')->name('post_addPro');
	Route::get('editPro/{id}', 'AdminController@editPro')->name('editPro');
	Route::post('editPro/{id}','AdminController@upPro')->name('editPro');
	Route::get('delPro/{id}','AdminController@delPro')->name('delPro');
	Route::get('/pro/search','AdminController@searchPro')->name('searchPro');
	Route::post('/pro/search','AdminController@post_searchPro')->name('searchPro');


	//------|| Banner ||

	Route::get('addBan','AdminController@addBan')->name('addBan');
	Route::post('addBan','AdminController@post_addBan')->name('post_addBan');
	Route::get('editBan/{id}','AdminController@editBan')->name('editBan');
	Route::post('editBan/{id}','AdminController@edit_postBan')->name('editBan');
	Route::get('delBan/{id}','AdminController@delBan')->name('delBan');
	Route::get('/ban/search','AdminController@searchBan')->name('searchBan');
	Route::post('/ban/search','AdminController@post_searchBan')->name('searchBan');



	//-------|| Users ||

	Route::get('addUser','AdminController@addUser')->name('addUser');
	Route::post('addUser','AdminController@post_addUser')->name('addUser');
	Route::get('editUser/{id}','AdminController@editUser')->name('editUser');
	Route::post('editUser/{id}','AdminController@edit_postUser')->name('editUser');
	Route::get('delUser/{id}','AdminController@delUser')->name('delUser');
	Route::get('/user/search','AdminController@searchUsers')->name('searchUsers');
	Route::post('/user/search','AdminController@post_searchUsers')->name('searchUsers');

});




//============================== END =====================================================