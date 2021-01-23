<?php

namespace App\Http\Controllers\Front;
use App\Models\Setting;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //
    public function show_setting()
    {
        // print_r($sets);
     $blogs = DB::table('blogs')->select()->limit(3)->get();
     $aboutus =Setting::join('users','settings.id','=','users.id')
     ->select('*')
     ->get();
     $sets =DB::table('settings')->join('users','settings.id','=','users.id')
     ->get();
       return  view('main',['sets'=> $sets ,'aboutus'=> $aboutus,'blogs'=> $blogs]);

      // $books=Book::all();
    // $settings =Setting::join('users','settings.id','=','users.id')
    // ->select('*')
    // ->get();
    //  return  view('layout/master',['settings'=> $settings]);

    }


    public function show_about()
    {
        // $books=Book::all();
    $aboutus =Setting::join('users','settings.id','=','users.id')
    ->select('*')
    ->get();
    $sets =DB::table('settings')->join('users','settings.id','=','users.id')
    ->get();
     return  view('about',['aboutus'=> $aboutus],['sets'=> $sets]);


     }
}
