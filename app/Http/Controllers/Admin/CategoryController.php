<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use LaravelLocalization;

class CategoryController extends Controller
{


    public function create(){
        $category= Category::all()->where('is_active',1);

        return view('Admin.category',['cate'=>$category]);

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
         $cat=new Category;

         $active='';
         if(isset($request->is_active))
         $active=1;
         else
         $active=0;

        Category::create([
            'id'=>$id,
            'cat_name_en' =>$request->cat_name_en,
            'cat_name_ar'=>$request->cat_name_ar,
            'is_active'=>$active,
            'parent'=>$request->parent,
        ]);


        return redirect()->route('category.show')->with(['success' => 'تم اضافه الصنف بنجاح ']);

    }


        protected function getMessages()
        {
            return $messages = [
                'cat_name_en.required'  =>  __('messages.catgory name required'),
                'cat_name_en.unique'    =>  __('messages.category must be unique'),
                'cat_name_ar.required'  => 'اسم القسم مطلوب',
                'cat_name_ar.unique'    => 'اسم القسم موجود',
            ];
        }
        protected function getRules()
        {
            return $rules = [
                'cat_name_en' => 'required|unique:categories,cat_name_en',
                'cat_name_ar' => 'required|unique:categories,cat_name_ar',

            ];
        }


################## display category ##################

    public function getAllCategory()
    {
        $Categorys =DB::table('categories')->join('users','categories.id','=','users.id')->paginate(4); // return collection of all result*/
       return view('Admin.showcategory',['Categorys'=> $Categorys]);
    }



################## Edit category ##################

    public function edit($cat_id)
    {


        $Categorys = Category::where('cat_id',$cat_id)->get();

        return view('Admin.editcategory',['Categorys'=> $Categorys ]);

    }
################## Eidt category ##################


 ################## Update category ##################

    public function update(Request $request)
    {
        $cat=new Category;
        $active='';
        if(isset($request->is_active))
        $active=1;
        else
        $active=0;

        $cat::where('cat_id',$request->cat_id)
        ->update(['cat_name_en'=>$request->cat_name_en ,
        'cat_name_ar'=>$request->cat_name_ar,
        'is_active'=>$active,
        'parent'=>$request->parent ]);

        $data['category'] = Category::get();
        return redirect('category/showcategory')->with($data);



    }


################## Update category ##################

################## Delete category ##################
    public function deletecategory($cat_id){

        $Categorys=Category::where('cat_id',$cat_id)->delete();
        return redirect()
            ->route('category.show')
            ->with(['success' => __('messages.category deleted successfully')]);

    }

################## Delete category ##################

public function display_row($cat_id)
{
    $affected1 =[];
    $data['dept'] = Category::where('cat_id',$cat_id)->get();
    return view('update',$data);
                }
                public function is_active($cat_id){
                    $affected1= Category::where('cat_id',$cat_id)
                    ->update(['is_active'=>'1']);
                    // $affected = Category::where('is_delete',0)->paginate(25);
                    $Categorys =DB::table('categories')->join('users','categories.id','=','users.id')->get(); // return collection of all result*/
                    return view('Admin.showcategory',['Categorys'=> $Categorys]);

                    }
                    public function is_not_active($cat_id){
                        $affected1= Category::where('cat_id',$cat_id)
                        ->update(['is_active'=>'0']);
                        $Categorys =DB::table('categories')->join('users','categories.id','=','users.id')->get(); // return collection of all result*/
                        return view('Admin.showcategory',['Categorys'=> $Categorys]);

                        }

public function display_with_status($cat_id)
    {
        if($cat_id==1){
            $affected1 =[];
            $affected = Category::where(['is_active',1])->paginate(25);
            return view('department',['cat'=>$affected,'data1'=>$affected1]);
        }elseif($cat_id==0){
            $affected1 =[];
            $affected = Category::where(['is_active',0])->paginate(25);
            return view('department',['cat'=>$affected,'data1'=>$affected1]);
        }

    }

}
