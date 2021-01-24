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





#################### Category route ####################
  Route::group(['prefix' => LaravelLocalization::setLocale(),
  'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){



    Route::group(['namespace'=>'Admin','prefix'=>'category','middleware'=>'auth'],function(){
        Route::get('create','CategoryController@create')->name('category.create');

        Route::post('store','CategoryController@store')->name('category.store');

        Route::get('edit/{cat_id}','CategoryController@edit')->name('category.edit');
        //  Route::get('edit/{cat_id}','CategoryController@edit')->name('category.edit');
        Route::post('update','CategoryController@update')->name('category.update');
        Route::get('delete/{cat_id}','CategoryController@deletecategory')->name('category.delete');

        Route::get('showcategory', 'CategoryController@getAllCategory')->name('category.show');

        Route::get('/display_row/{cat_id}','CategoryController@display_row');


        Route::get('/category/{cat_id}','CategoryController@display_with_status');





    });

});
Route::get('/cat_active/{cat_id}','Admin\CategoryController@is_active');

Route::get('/cat_no_active/{cat_id}','Admin\CategoryController@is_not_active');


#################### End Category route ####################


#################### Services route ####################
Route::group(['prefix' => LaravelLocalization::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){

Route::group(['namespace'=>'Admin','prefix'=>'services','middleware'=>'auth'],function(){

    Route::get('create','ServicesController@create')->name('services.create');;
    Route::post('add','ServicesController@add')->name('services.add');

    Route::get('edit/{s_id}','ServicesController@editservice')->name('services.edit');
    Route::post('update','ServicesController@updateservice')->name('services.update');
    Route::get('delete/{s_id}','ServicesController@deleteservice')->name('services.delete');

    Route::get('allservices', 'ServicesController@getAllService')->name('services.all');



});
});
#################### End Services route ####################




#################### Books route ####################
Route::group(['prefix' => LaravelLocalization::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){

Route::group(['namespace'=>'Admin','prefix'=>'books','middleware'=>'auth'],function(){

    Route::get('create','BookController@create')->name('books.create');
    Route::post('add','BookController@add')->name('books.add');

    Route::get('edit/{B_id}','BookController@editbook')->name('books.edit');
    Route::post('update','BookController@updatebook')->name('books.update');
    Route::get('delete/{B_id}','BookController@deletebook')->name('books.delete');

    Route::get('allbooks','BookController@getAllbooks')->name('books.all');



});
});
#################### End Books route ####################


#################### Blogs route ####################
Route::group(['prefix' => LaravelLocalization::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){

Route::group(['namespace'=>'Admin','prefix'=>'blogs','middleware'=>'auth'],function(){

    Route::get('create','BlogController@create')->name('blogs.create');
    Route::post('add','BlogController@add')->name('blogs.add');

    Route::get('edit/{blog_id}','BlogController@editblog')->name('blogs.edit');
    Route::post('update','BlogController@updateblog')->name('blogs.update');
    Route::get('delete/{blog_id}','BlogController@deleteblog')->name('blogs.delete');

    Route::get('allblog','BlogController@getAllblog')->name('blogs.all');



});
});

#################### End Blogs route ####################

#################### Setting ####################
Route::group(['prefix' => LaravelLocalization::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){

Route::group(['namespace'=>'Admin','prefix'=>'setting','middleware'=>'auth'],function(){

    Route::get('create','SettingController@create')->name('setting.create');
    Route::post('add','SettingController@add')->name('setting.add');

    Route::get('edit/{set_id}','SettingController@editsettings')->name('setting.edit');
    Route::post('update','SettingController@updatesettings')->name('setting.update');
    Route::get('delete/{set_id}','SettingController@deletesettings')->name('setting.delete');

    Route::get('allsetting','SettingController@getAllsetting')->name('setting.all');



});
});

#################### End Setting ####################

#################### Acount ####################

Route::group(['prefix' => LaravelLocalization::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){

Route::group(['namespace'=>'Admin','prefix'=>'dashboard','middleware'=>'auth'], function () {

    Route::get('dashboard','DahshboradController@index')->name('dashboard.show');



});
});

#################### End Acount ####################














