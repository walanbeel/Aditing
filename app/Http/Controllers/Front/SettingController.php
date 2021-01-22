<?php

namespace App\Http\Controllers\Front;
use App\Models\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //
    public function show_setting()
    {
        // $books=Book::all();
    $settings =Setting::join('users','settings.id','=','users.id')
    ->select('*')
    ->get();
     return  view('layout/master',['settings'=> $settings]);


    }


    public function show_about()
    {
        // $books=Book::all();
    $set =Setting::join('users','settings.id','=','users.id')
    ->select('*')
    ->get();
     return  view('about',['set'=> $set]);


    }
}
