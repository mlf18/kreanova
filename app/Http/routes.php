<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::auth();

Route::get('/home', 'HomeController@index');

Route::resources([
	'pengusul' => 'PengusulController',
	'penguji' => 'PengujiController',
	'admin' => 'AdminController',
	'quesioner' => 'QuesionerController',
	'bupati' =>'BupatiController',
	'permission' =>'PermissionController',
	'role' => 'RoleController',
	'test' => 'TestController',
	'users' => 'UserController',
	'proposals' => 'ProposalController'
]);
