<?php

namespace App\Http\Controllers\Front;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function show_services()
    {
    $services =DB::table('services')->join('users','services.id','=','users.id')
    ->join('categories','services.cat_id','=','categories.cat_id')
    ->get();
    $sets =DB::table('settings')->join('users','settings.id','=','users.id')
    ->get();
     return  view('services',['services'=> $services],['sets'=> $sets]);

    }

     // $books=Book::all();
    // $services =Service::join('categories','books.cat_id','=','categories.cat_id')
    // ->select('*')
    // ->get();
    //  return  view('services',['services'=> $services]);
    //

}
