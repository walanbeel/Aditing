<?php

namespace App\Http\Controllers\Admin;
 use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
//  use Auth;
use Session;
use Illuminate\Http\Request;

use LaravelLocalization;
class CategoryController extends Controller
{
    //
//    public function getcategory(){

//        return Category::select('id','name')->get();
//     }

    public function add_category(Request $req){
       $id=Auth::User()->id;
        Category::create([
            'cat_id' =>$req->cat_id,
            'user_id'=>$req->id,
            'cat_name_en' =>$req->cat_name_en,
            'cat_name_ar'=>$req->cat_name_ar,
            'is_active'=>$req->is_active,
            'parent'=>$req->parent,
            ]);


           return 'admin' ;
    }

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
                'cat_name_en.required'  =>  __('messages.catgory name required'),
                'cat_name_en.unique'    =>  __('messages.category must be unique'),
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



    public function getAllCategory()
    {
        $Categorys = Category::select('cat_id','user_id',
            'cat_name_en',
            'cat_name_ar',
            'is_active',
            'parent',

            )->get(); // return collection of all result*/

       return view('Admin.showcategory',['Categorys'=> $Categorys]);
    }


    // public function editcategory($cat_id)
    // {

    //     $Category =Category::where('cat_id',$cat_id)->get();  // search in given table id only

    //     if (!$Category)
    //     {
    //         return redirect()->back();
    //     }
    //      else
    //      {
    //         $Category = Category::select('cat_id ', 'user_id', 'cat_name_en', 'cat_name_ar', 'is_active', 'parent')->find($cat_id);

    //     return view('category.edit', compact('category'));
    //      }

    // }


    public function editcategory($cat_id)
    {

        $Categorys =Category::find($cat_id);

        if (!$Categorys)
        {
            return redirect()->back();
        }
         else
         {
            $Categorys = Category::select('user_id','cat_name_en', 'cat_name_ar', 'is_active', 'parent')->find($cat_id);

        return view('editcategory', ['Categorys'=>$Categorys]);
         }

    }

}
