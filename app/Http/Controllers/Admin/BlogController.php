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
        $cat['category']=Category::all();

        return view('Admin.createblog',$cat);
    }


    public function add(Request $request){

        //viladate data before insert to databse

        $rules=$this ->getRules();
        $messages=$this ->getMessages();
        $validator = Validator::make($request->all(),$rules, $messages);
        if( $validator ->fails()){
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }
       // insert,
        $blog=new Blog;
        $main_img='';
        $imgName='';
        $attchment='';

        // print_r($_FILES['main_img']);

        if($request->hasfile('main_img'))
     {
        $imgFile =$request->file('main_img') ;
        $imgName =time().basename($_FILES["main_img"]["name"]);
        $blog=$imgFile->move('images/news/',$imgName);

     }
    //  if($request->hasfile('main_img'))
    //  {
    //     $attchmentFile =$request->file('main_img') ;
    //     $num=count($attchmentFile);
    //     for($i=0;$i<$num;$i++){
    //       $ext=$attchmentFile[$i]->getClientOriginalExtension();
    //     $attchmentName =rand(123456,999999).".".$ext;
    //     $attchment=$attchmentFile[$i]->move('images/news/',$attchmentName);
    //     $main_img .=$attchmentName.',';
    //    }



    // if($request->hasfile('blog_img'))
    // {
    //    $attchmentFile =$request->file('blog_img') ;
    //    $num=count((array)$request->file('blog_img'));
    //   for($i=0;$i<$num;$i++){
    //      $ext=$attchmentFile[$i]->getClientOriginalExtension();
    //    $attchmentName =rand(123456,999999).".".$ext;
    //    $attchment=$attchmentFile[$i]->move('images/books/',$attchmentName);
    //    //$bus->attachment=$attchmentName;
    //    $blog_img .=$attchmentName.',';

    //    }


        $id=Auth::user()->id;
        Blog::create([
             'id'=>$id,
             'cat_id'=>$request->cat_id,
            'title_en' =>$request->title_en,
            'title_ar'=>$request->title_ar,
            'content_en'=>$request->content_en,
            'content_ar'=>$request->content_ar,
            'main_img'=>$imgName,

               ]);
               return redirect()->route('blogs.all')->with(['success' => 'تم اضافه المقال بنجاح ']);
            }


        protected function getMessages()
        {
            return $messages = [
                 'title_en.required'   =>  __('messages.blog title en required'),
                'title_ar.required'    =>  __('messages.blog title ar required'),
                'content_en.required'  =>  __('messages.blog content en required'),
                'content_ar.required'  =>  __('messages.blog content ar required'),
                'main_img.required'    =>  __('messages.blog image required'),


            ];
        }
        protected function getRules()
        {
            return $rules = [
                'title_en' => 'required|max:255',
                'title_ar' => 'required|max:255',
                'content_en' => 'required',
                'content_ar' => 'required',
                'main_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
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

        return view('Admin.editblog',['blogs'=>  $blogs , 'category' => $category]);

    }
################## Eidt services ##################



 ################## Update services ##################

 public function updateblog(Request $request)
 {
     $blogs=new Blog;
        $image='';
        $imgName='';
        $attchment='';
        $main_img='';
        //print_r($_FILES['main_img']);
        $id=Auth::user()->id;

        // if($request->hasfile('blog_img'))
        // {
        // $attchmentFile =$request->file('blog_img') ;
        // $num=count($attchmentFile);
        // for($i=0;$i<$num;$i++){
        // $ext=$attchmentFile[$i]->getClientOriginalExtension();
        // $attchmentName =rand(123456,999999).".".$ext;
        // $attachment=$attchmentFile[$i]->move('images/news/',$attchmentName);
        // $attchment.=$attchmentName.',';

        // }}
        // else{
        //     $attchment=$request->blog_img2;
        // }

        if($request->hasfile('main_img'))
        {
        $attchmentFile =$request->file('main_img') ;
        $num=count($attchmentFile);
        for($i=0;$i<$num;$i++){
        $ext=$attchmentFile[$i]->getClientOriginalExtension();
        $imgName =rand(123456,999999).".".$ext;
        $main_img=$attchmentFile[$i]->move('images/news/',$imgName);
        $attchment.=$imgName;

        }}

        else{
           $imgName=$request->main_img2;
        }
        $blogs::where('blog_id',$request->blog_id)
        ->update(['id'=>$id,
        'cat_id'=>$request->cat_id,
        'title_en'=>$request->title_en,
        'title_ar'=>$request->title_ar,
        'content_en'=>$request->content_en,
        'content_ar'=>$request->content_ar,
        'main_img'=> $imgName,
         ]);

         $blogss['blogs'] = Blog::get();
        return redirect('/blogs/allblog')->with($blogss);


    }

################## Update services ##################


################## Delete services ##################
public function deleteblog($blog_id){

    $blogs=Blog::where('blog_id',$blog_id)->delete();

    return redirect()
        ->route('blogs.all')
        ->with(['success' => __('messages.blogs deleted successfully')]);

}

################## Delete services ##################

}
