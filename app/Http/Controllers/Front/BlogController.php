<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    //
    public function show_news()
    {
        // dd('aa');

    $posts =DB::table('blogs')->join('users','blogs.id','=','users.id')
    ->join('categories','blogs.cat_id','=','categories.cat_id')
    ->get();
     return  view('news',['posts'=> $posts]);

    }

    public function show_deatails($blog_id)
    {

    $blogs =Blog::join('categories','blogs.cat_id','=','categories.cat_id')

    ->select('categories.cat_name_en','blogs.*')
    ->where('blogs.blog_id',$blog_id);
    // return view('deatails_news',['blogs'=> $blogs ]);


    if($blogs->exists())
    {
        $blogs=$blogs->get();
        $posts=['blogs' => $blogs];
        return  view('deatails_news',$posts);

    }




        // $services = Service::where('s_id',$s_id)->get();
        // $category = Category::select()->get();

        // return view('Admin.editservices',['services'=>  $services , 'category' => $category]);

    }


}
