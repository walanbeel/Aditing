<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class BlogController extends Controller
{
    //
    public function create(){
        $cat ['category']=Blog::all();

        return view('Admin.createblog', $cat);


    }

    public function add(Request $request){

        //viladate data before insert to databse

       $rules=$this ->getRules();
        $messages=$this ->getMessages();
        $validator = Validator::make($request->all(),$rules, $messages);
         if( $validator ->fails()){
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
         }
        //insert,
        $id=Auth::user()->id;
        Blog::create([
             'id'=>$id,
             'cat_id'=>$request->cat_id,
            'title_en' =>$request->title_en,
            'title_ar'=>$request->title_ar,
            'content_en'=>$request->content_en,
            'content_ar'=>$request->content_ar,
            'main_img'=>$request->main_img,
            'blog_img'=>$request->blog_img,

               ]);
                return redirect()->back()->with(['success' => 'تم اضافه المقال بنجاح ']);
            }


        protected function getMessages()
        {
            return $messages = [
                 'title_en.required'  =>  __('messages.blog name required'),
                'title_ar.required'  =>  __('messages.blog name required'),
                'content_en.required'       =>  __('messages.blog name required'),
                'content_en.required'       =>  __('messages.blog name required'),



            ];
        }
        protected function getRules()
        {
            return $rules = [
                'title_en' => 'required',
                'title_ar' => 'required',
                'content_en' => 'required',
                'content_ar' => 'required',
            ];
        }


        public function getAllblog()
    {
        $blogs = DB::table('blogs')->join('users','blogs.id','=','users.id')
        ->join('categories','blogs.cat_id','=','categories.cat_id')
        ->get(); // return collection of all result*/

       return view('Admin.allblog',['blogs'=> $blogs]);
    }



    ################## Edit services ##################

    public function editblog($blog_id)
    {


        $blogs = Blog::where('blog_id',$blog_id)->get();
        $category = Category::select()->get();

        return view('Admin.editblog',['services'=>  $blogs , 'category' => $category]);

    }
################## Eidt services ##################



 ################## Update services ##################

 public function updateblog(Request $request)
    {
        $blogs=new Blog;

        $blogs::where('blog_id',$request->blog_id)
        ->update(['id'=>$request->id,
        'cat_id'=>$request->cat_id,
        'title_en'=>$request->title_en,
        'title_ar'=>$request->title_ar,
        'content_en'=>$request->content_en,
        'content_ar'=>$request->content_ar,
        'main_img'=>$request->main_img,
        'blog_img'=>$request->blog_img,
         ]);

         $blogs['blogs'] = Blog::get();
        return redirect('blogs/allblog')->with($blogs);

    }


################## Update services ##################


################## Delete services ##################
public function deleteblog($blog_id){

    $blogs=Blog::where('blog_id',$blog_id)->delete();

    // if(!$s_id)

    // return redirect()->back()->with(['error' => __('messages.category not exist')]);

    // $services->delete();

    return redirect()
        ->route('blogs.all')
        ->with(['success' => __('messages.blogs deleted successfully')]);



}

################## Delete services ##################

}
