<?php

namespace App\Http\Controllers\Front;
use App\Models\Setting;
use App\Models\Team;
use App\Models\Experienc;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //
    public function show_setting()
    {

        // print_r($sets);
     $sets =DB::table('settings')->join('users','settings.id','=','users.id')
     ->get();
     $services =DB::table('services')->where('services.is_active','1')->join('users','services.id','=','users.id')
     ->join('categories','services.cat_id','=','categories.cat_id')
     ->get();

     $blogs = DB::table('blogs')->select()->orderBy('blog_id','DESC')->limit(3)->get();

     $aboutus =Setting::join('users','settings.id','=','users.id')
     ->select('*')
     ->get();

     $teams =Team::join('users','teams.id','=','users.id')
     ->select('*')
     ->get();

     $where=['is_active'=>1];
     $exper =Experienc::join('users','experiences.id','=','users.id')
     ->where($where)->orderBy('exp_id','DESC')
     ->get();
     
       return  view('main',['sets'=> $sets ,'aboutus'=> $aboutus,'blogs'=> $blogs,'teams'=>$teams ,'exper'=>$exper,'services'=>$services]);



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
