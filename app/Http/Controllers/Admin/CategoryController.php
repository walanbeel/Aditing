<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use LaravelLocalization;
use Auth;
use Session;


class CategoryController extends Controller
{
    //
//    public function getcategory(){

//        return Category::select('id','name')->get();
//     }

    // public function add_category(Request $req){
    //    $id=Auth::User()->id;
    //     Category::create([
    //         'cat_id' =>$req-> cat_id,
    //         'id'=>$req->id,
    //         'cat_name_en' =>$req-> cat_name_en,
    //         'cat_name_ar'=>$req-> cat_name_ar,
    //         'is_active'=>$req-> is_active,
    //         'parent'=>$req-> parent,
    //         ]);


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
         $id=Auth::user()->id;
        Category::create([
            'id'=>$id,
            'cat_name_en' =>$request->cat_name_en,
            'cat_name_ar'=>$request->cat_name_ar,
            'is_active'=>$request->is_active,
            'parent'=>$request->parent,



        ]);
        return redirect()->back()->with(['success' => 'تم اضافه الصنف بنجاح ']);
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
        $Categorys = Category::select(
            'cat_id',
            'id',
            'cat_name_en' ,/*. LaravelLocalization::getCurrentLocale() . ' as cat_name',*/
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

################## Edit category ##################
    public function editcategory($category_id)
    {

        $Categorys =Category::find($category_id);

        if (!$Categorys)
        {
            return redirect()->back();
        }
         else
         {
            $Categorys['category'] = Category::where('cat_id',$category_id)->get();


        return view('Admin.editcategory', $Categorys);
         }

    }
################## Eidt category ##################


 ################## Update category ##################

    public function update(Request $request)
    {
        $cat=new Category;

        $cat::where('cat_id',$request->cat_id)
        ->update(['cat_name_en'=>$request->cat_name_en ,
        'cat_name_ar'=>$request->cat_name_ar,
        'is_active'=>$request->is_active,
        'parent'=>$request->parent ]);

        $data['category'] = Category::get();
        return redirect('category/showcategory')->with($data);

    }




################## Update category ##################

################## Delete category ##################
    public function deletecategory($category_id){

        $Categorys=Category::where('cat_id',$category_id)->delete();

        // if(!$category_id)

        // return redirect()->back()->with(['error' => __('messages.category not exist')]);

        // $Categorys->delete();

        return redirect()
            ->route('category.show')
            ->with(['success' => __('messages.category deleted successfully')]);



    }

################## Delete category ##################

}
