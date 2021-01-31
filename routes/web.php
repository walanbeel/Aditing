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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/main', function () {
//     return view('main');
// });

// Route::get('/contact',function(){
//     return view('contact');
// });

// Route::get('/news',function(){
//     return view('news');
// });

// Route::get('/about',function(){
//     return view('about');
// });

// Route::get('/services',function(){
//     return view('services');
// });

// Route::get('/books',function(){
//     return view('books');
// });
// Route::get('/deatails',function(){
//     return view('deatails_news');
// });


Auth::routes();

// Route::get('/home', function(){
//     return view('home');
// })->name('home');
/*************Route contact page************ */
Route::get('/contact-us',[ContactController::class,'contact'])->name('contact.contact-us');

Route::post('/send_massage',[ContactController::class,'sendEmail'])->name('contact.send');

// Route::get('news','BlogController@show_news');

Route::group(['namespace'=>'Front','prefix'=>'blogs'],function(){


Route::get('/news', [BlogController::class,'show_news'])->name('blogs.news');
// Route::get('/news','BlogController@show_news');
Route::get('deatails/{blog_id}', [BlogController::class,'show_deatails'])->name('deatails/{blog_id}');
// Route::get('/books', [BookController::class,'show_books']);



});

Route::group(['namespace'=>'Front','prefix'=>'books'],function(){
    Route::get('/books','BookController@show_books')->name('books.show');
    Route::get('/files/{B_id}','BookController@show')->name('books.view');
    Route::get('/file/dowenload/{file}','BookController@download')->name('download');
    Route::get('deatails/{B_id}','BookController@show_book')->name('show');

});

Route::group(['namespace'=>'Front','prefix'=>'home'],function(){
    Route::get('/main','SettingController@show_setting')->name('home.master');
    Route::get('/about','SettingController@show_about')->name('home.about');
    // Route::get('/about','SettingController@show_teams');

    // Route::get('/file/dowenload/{images}','BookController@download');
});


Route::group(['namespace'=>'Front','prefix'=>'services'],function(){
    Route::get('/services','ServiceController@show_services')->name('services.services');

});









