<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Session;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    //
//    public function getcategory(){

//        return Category::select('id','name')->get();
//     }

    // public function add_category(Request $req){
    //    $id=Auth::User()->id;
    //     Category::create([
    //         'cat_id' =>6,
    //         'user_id'=>4,
    //         'cat_name_en' => 'consulting',
    //         'cat_name_ar'=>'اسنشارات',
    //     ]);

    //        return 'admin' ;
    // }

    public function create(){
        return view('Admin.category');

    }

    public function store(Request $request){

        //viladate data before insert to databse

        //insert
        // $id=Auth::User()->id;

        Category::create([

            'cat_name_en'=> $request->cat_name_en,
            'user_id'=>7,

            'cat_name_ar'=> $request->cat_name_ar,



        ]);

        return "saves sucsfullly";

    }
}
