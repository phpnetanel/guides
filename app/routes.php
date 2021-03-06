<?php


Route::get('/', function()
{
	return View::make('template.template');
});

/*=======================================
=            User Controller            =
=======================================*/

Route::post('login', 'UserController@login');
Route::post('logout', 'UserController@logOut');
Route::post('signup', 'UserController@signup');
Route::post('checkifemailexits', 'UserController@checkIfEmailExits');

/*=============================================
=           Admin Controller            =
=============================================*/

Route::post('addcategory', 'AdminController@addCategory');


/*=============================================
=            Categories Controller            =
=============================================*/


Route::get('getcategories', 'CategoryController@index');
Route::get('searchbycategory', 'CategoryController@getGuidesByCategory');

/*=============================================
=            Guides Resource            =
=============================================*/

Route::resource('api/guides', 'GuideController');
Route::post('api/myguides', 'GuideController@myGuides');
Route::get('api/search', 'GuideController@search');
Route::get('api/searchcategory', 'GuideController@searchcategory');