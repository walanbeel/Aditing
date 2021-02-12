<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Front\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\ContactController;
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



Auth::routes();


/*************Route contact page************ */
Route::group(['prefix' => LaravelLocalization::setLocale(),
  'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){

Route::get('/contact-us',[ContactController::class,'contact'])->name('contact.contact-us');

Route::post('/send_massage',[ContactController::class,'sendEmail'])->name('contact.send');


// Route::get('news','BlogController@show_news');

Route::group(['namespace'=>'Front','prefix'=>'blogs'],function(){


Route::get('/news', [BlogController::class,'show_news'])->name('blogs.news');
// Route::get('/news','BlogController@show_news');
Route::get('deatails/{blog_id}', [BlogController::class,'show_deatails'])->name('deatails/{blog_id}');
// Route::get('/topic/{blog_id}', [BookController::class,'show_topic'])->name('topic/{blog_id}');

});

});


Route::group(['prefix' => LaravelLocalization::setLocale(),
  'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){
Route::group(['namespace'=>'Front','prefix'=>'books'],function(){
    Route::get('/book','BookController@show_books')->name('books.show');
    Route::get('/files/{B_id}','BookController@show')->name('books.view');
    Route::get('/file/dowenload/{file}','BookController@download')->name('download');
    // Route::get('book/{B_id}','BookController@show_more')->name('deatails/{B_id}');
    Route::get('/deatail/{B_id}','BookController@deatail')->name('/deatail/{B_id}');

    // Route::get('/filter','BookController@filter')->name('books.filter');
      Route::get('/books/{B_id}','BookController@filter')->name('filter');

      Route::get('/books/{cat_id}','BookController@cate_filter')->name('catgory');



});
});
//Route::get('/books/{id}','Front/BookController@filter')->name('filter');


Route::group(['prefix' => LaravelLocalization::setLocale(),
  'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){

Route::group(['namespace'=>'Front','prefix'=>'home'],function(){
    Route::get('/main','SettingController@show_setting')->name('home.master');
    Route::get('/about','SettingController@show_about')->name('home.about');
    // Route::get('/about','SettingController@show_teams');

    // Route::get('/file/dowenload/{images}','BookController@download');

});

});

Route::group(['prefix' => LaravelLocalization::setLocale(),
  'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){

Route::group(['namespace'=>'Front','prefix'=>'services'],function(){
    Route::get('/services','ServiceController@show_services')->name('services.services');

});

});










