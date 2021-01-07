<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServicesController;
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
//


#################### Category route ####################
//  Route::group(['prefix' => LaravelLocalization::setLocale(),
//  'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){



    Route::group(['namespace'=>'Admin','prefix'=>'category','middleware'=>'auth'],function(){
        Route::get('create','CategoryController@create');
        Route::post('store','CategoryController@store')->name('category.store');

        Route::get('edit/{category_id}','CategoryController@editcategory');
        Route::post('update','CategoryController@update')->name('category.update');
        Route::get('delete/{category_id}','CategoryController@deletecategory')->name('category.delete');

        Route::get('showcategory', 'CategoryController@getAllCategory')->name('category.show');


    });

//});

#################### End Category route ####################

#################### Services route ####################
Route::group(['namespace'=>'Admin','prefix'=>'services','middleware'=>'auth'],function(){

    Route::get('create','ServicesController@create');
    Route::post('add','ServicesController@add')->name('services.add');

    Route::get('edit/{s_id}','ServicesController@editservice');
    Route::post('update/{s_id}','ServicesController@updateservice')->name('services.update');
    Route::get('delete/{s_id}','ServicesController@deleteservice')->name('services.delete');;

    Route::get('allservices', 'ServicesControllerr@getAllService')->name('services.all');



});
#################### End Services route ####################











