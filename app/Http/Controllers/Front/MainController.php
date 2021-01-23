<?php

namespace App\Http\Controllers;
use App\Models\Setting;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    // function index(){
    //     $blogs = DB::table('blogs')->limit(3)->get();
    //     $aboutus =Setting::join('users','settings.id','=','users.id')
    //     ->select('*')
    //     ->get();
    //     $sets =DB::table('settings')->join('users','settings.id','=','users.id')
    //     ->get();
    //      return  view('main',['sets'=> $sets],['blogs'=> $blogs],['aboutus'=>  $aboutus]);


    // }
}
