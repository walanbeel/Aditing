<?php
use Illuminate\Support\Facades\Auth;

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

Route::get('/main', function () {
    return view('main');
});

Route::get('/contact',function(){
    return view('contact');
});

Route::get('/news',function(){
    return view('news');
});

Route::get('/about',function(){
    return view('about');
});

Route::get('/services',function(){
    return view('services');
});

Route::get('/books',function(){
    return view('books');
});

Auth::routes();

Route::get('/home', function(){
    return view('home');
})->name('home');
/*************Route contact page************ */
Route::get('/contact-us',[ContactController::class,'contact']);

Route::post('/send_massage',[ContactController::class,'sendEmail'])->name('contact.send');

