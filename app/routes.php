<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('Admin/indexad');
});

Route::controller('users', 'UsersController');
Route::get('users/register', 'UsersController@getRegister');
Route::get('users/login', 'UsersController@getLogin');

Route::controller('admin/categories', 'CategoriesController');
Route::controller('admin/products', 'ProductsController');
/*Route::controller('admin/content/add', 'ContentController');*/
Route::controller('content', 'ContentController');
Route::get('admin/content/add','ContentController@getNewContent');
Route::get('admin/content/{id}',

    array('as' => 'admin/content/edit',
        'uses' => 'ContentController@user'
    ));
//update content

Route::post('admin/content/{id}',
    array('as' => 'admin/content/change',
        'uses' => 'ContentController@update'
    ));