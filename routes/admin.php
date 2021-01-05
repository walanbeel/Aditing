<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function () {
    return "hellow admin";
});

// Route::group(['namespace'=>'Admin','prefix'=>'cpanel'],function(){

//     Route::get('/dashboard','DahshboradController@index');

//     Route::get('/categories','CategoryController@index');
//     Route::get('/categories/add_category','CategoryController@add_category')->name('addCat');

//     Route::get('/New','NewController@index');

//     Route::get('/Services','ServicesController@index');

//     Route::get('/Book','BookController@index');

//     Route::get('/Users','UsersController@index');



// });

// Route::get('/index', function () {
//     return view('');
// });

// Route::get('/dashboard','Admin\DahshboradController@index');

//  Route::get('fillable','CategoryController@getcategory');
Auth::routes();

// Route::group(['prefix' => LaravelLocalization::setLocale(),
// 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){



    Route::group(['namespace'=>'Admin','prefix'=>'category','middleware'=>'auth'],function(){
        Route::get('create','CategoryController@create');
        Route::post('store','CategoryController@store')->name('category.store');

        Route::get('edit/{cat_id}','CategoryController@editcategory');
        Route::post('update','CategoryController@updatecategory')->name('category.update');

        Route::get('showcategory', 'CategoryController@getAllCategory')->name('category.show');


    });

//});










