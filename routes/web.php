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

// if (auth()->user()->hasRole('admin'))
// {
//     Auth::routes();
// }
// else
// {
// 	Auth::routes([
//         'register' => false
//     ]);
// }


// Route::get('/home', 'HomeController@index')->name('home');
// Auth::routes();

Auth::routes([
    'register' => false
]);
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'PageController@upgrade']);

		/*Route::get('areas', ['as' => 'areas.index', 'uses' => 'AreasController@index']);*/
		/*Route::resource('/areas','AreasController@create');*/
		/*Route::resource('areas', ['as' => 'areas.create', 'uses' => 'AreasController@create']);*/

		Route::get('indicators', ['as' => 'indicators.index', 'uses' => 'IndicatorsController@index']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	Route::get('/cambiodecolor/{id}/color/{color}','ProfileController@updatecolor');
	Route::resource('areas','AreasController');
});

