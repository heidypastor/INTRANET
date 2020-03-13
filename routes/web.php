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
    return redirect('/home');
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


// Auth::routes();

Auth::routes([
    'register' => false
]);
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {

	/*rutas de muestra de la plantilla*/
	Route::get('icons', ['as' => 'pages.icons', 'uses' => 'PageController@icons']);
	Route::get('maps', ['as' => 'pages.maps', 'uses' => 'PageController@maps']);
	Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'PageController@notifications']);
	Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'PageController@rtl']);
	Route::get('tables', ['as' => 'pages.tables', 'uses' => 'PageController@tables']);
	Route::get('typography', ['as' => 'pages.typography', 'uses' => 'PageController@typography']);
	Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'PageController@upgrade']);

	/*rutas administrativas para usuarios, roles, perfiles etc...*/
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::resource('roles', 'RoleController', ['except' => ['show']]);
	Route::resource('permissions', 'PermissionController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	Route::get('/cambiodecolor/{id}/color/{color}','ProfileController@updatecolor');


	/*Rutas a controladores resource*/
	Route::resource('areas','AreasController');
	Route::resource('documents','DocumentsController');
	Route::resource('indicators','IndicatorsController');
	Route::resource('comites','ComitesController');
	Route::resource('proceso','ProcessController');
	Route::resource('entrada','InputController');
	Route::post('actualizarentrada','InputController@actualizar')->name('entrada.actualizar');
	Route::post('actualizaractividad','ActivityController@actualizar')->name('actividad.actualizar');
	Route::post('actualizarsalida','OutputController@actualizar')->name('salida.actualizar');
	Route::post('actualizarcliente','ClienteController@actualizar')->name('cliente.actualizar');
	Route::post('actualizarproveedor','ProveedorController@actualizar')->name('proveedor.actualizar');
	Route::post('actualizarrecurso','RecursosController@actualizar')->name('recursos.actualizar');
	Route::post('actualizarseguimiento','SeguimientoController@actualizar')->name('seguimiento.actualizar');
	Route::post('actualizargambiental','GambientalController@actualizar')->name('gambiental.actualizar');
	Route::post('actualizargseguridad','GseguridadController@actualizar')->name('gseguridad.actualizar');
	Route::resource('cliente','ClienteController');
	Route::resource('proveedor','ProveedorController');
	Route::resource('salida','OutputController');
	Route::resource('actividad','ActivityController');
	Route::resource('releases','ReleasesController');
	Route::resource('requisitos','RequisitosController');
	Route::resource('alerts','AlertsController');
	Route::resource('seguimiento','SeguimientoController');
	Route::resource('recursos','RecursosController');
	Route::resource('gambiental','GambientalController');
	Route::resource('gseguridad','GseguridadController');


	/*rutas a metodos especificos de los controladores*/
	Route::get('nosotros', ['as' => 'prosarc.nosotros', 'uses' => 'ProsarcController@nosotros']);
	Route::get('requiLegal', ['as' => 'prosarc.requiLegal', 'uses' => 'ProsarcController@requiLegal']);
	Route::get('GHumana', ['as' => 'prosarc.GHumana', 'uses' => 'ProsarcController@GHumana']);
	Route::get('GAmbiental', ['as' => 'prosarc.GAmbiental', 'uses' => 'ProsarcController@GAmbiental']);
	Route::get('GCalidad', ['as' => 'prosarc.GCalidad', 'uses' => 'ProsarcController@GCalidad']);
	Route::get('search', ['as' => 'prosarc.search', 'uses' => 'ProsarcController@search']);
	Route::get('SST', ['as' => 'prosarc.SST', 'uses' => 'ProsarcController@SST']);
	Route::get('index2', ['as' => 'indicators.index2', 'uses' => 'IndicatorsController@index2']);
	Route::get('calendario', ['as' => 'alerts.calendario', 'uses' => 'AlertsController@calendario']);
	Route::put('/CambioDeFechaAlerts/{id}', 'AjaxController@CambioDeFecha');
	Route::put('/CambioDeBoton/{id}', 'AjaxController@CambioDeBoton');
	/*Route::put('/CambioDeFechaAlerts/{id}', 'AjaxController@CambioDeFecha');*/
	// Route::get('areas', ['as' => 'areas.index', 'uses' => 'AreasController@index']);
	// Route::get('indicators', ['as' => 'indicators.index', 'uses' => 'IndicatorsController@index']);
	Route::get('search/{search}','SearchController@searchAllModels'); /*ruta para busqueda en los modelos de la aplicacion*/


	
});


