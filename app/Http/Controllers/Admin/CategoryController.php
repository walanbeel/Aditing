<?php

namespace App\Http\Controllers\Admin;
 use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
//  use Auth;
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

       $rules=$this ->getRules();
        $messages=$this ->getMessages();
        $validator = Validator::make($request->all(),$rules, $messages);
         if( $validator ->fails()){
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
         }
        //insert,
        //  $id=Auth::User()->id;
        Category::create([

            'cat_name_en'=> $request->cat_name_en,
            'user_id'=>9,
            'cat_name_ar'=> $request->cat_name_ar,

        ]);
        return redirect()->back()->with(['success' => 'تم اضافه العرض بنجاح ']);
    }


        protected function getMessages()
        {
            return $messages = [
                'cat_name_en.required'  => 'اسم الصنف مطلوب',
                'cat_name_en.unique'    => 'اسم الصنف موجود',
                'cat_name_ar.required'  => 'اسم الصنف مطلوب',
                'cat_name_ar.unique'    => 'اسم الصنف موجود',
            ];
        }
        protected function getRules()
        {
            return $rules = [
                'cat_name_en' => 'required|unique:categories,cat_name_en',
                'cat_name_ar' => 'required|unique:categories,cat_name_ar',
                'is_active' => 'required',
                'parent'    => 'required',
            ];
        }
}
