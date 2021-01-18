<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Category;
use App\Models\Book;
use App\Models\Service;
use App\Models\Blog;



class DahshboradController extends Controller
{
    //
    function index(){
        $authId = Auth::id();

        $users =User::get()->count();




        $category =Category::get()->count();
        $service =Service::get()->count();
        $book =Book::get()->count();
        $blog =Blog::get()->count();


        return view('Admin.dashboard', ['category' => $category,'users' => $users,'service' => $service,'book'=> $book,'blog'=> $blog]);




    }



}
