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
     $sets =DB::table('settings')->join('users','settings.id','=','users.id')
     ->get();

     $posts =DB::table('blogs')->join('users','blogs.id','=','users.id')
    ->orderBy('blog_id','DESC')->paginate(5);

     $blogs =DB::table('blogs')->select()->orderBy('blog_id','DESC')
     ->limit(6)->get();

     return  view('news',['posts'=> $posts , 'blogs' => $blogs , 'sets'=> $sets ]);

    }

    public function show_deatails($blog_id)
    {
        $sets =DB::table('settings')->join('users','settings.id','=','users.id')
        ->get();
        $blogs =Blog::join('categories','blogs.cat_id','=','categories.cat_id')
        ->select('categories.cat_name_en','blogs.*')
        ->where('blogs.blog_id',$blog_id);
        

    // return view('deatails_news',['blogs'=> $blogs ]);


    if($blogs->exists())
    {
        $blogs=$blogs->get();
        $posts=['blogs' => $blogs];
        $sets=['sets'=> $sets];

        return  view('deatails_news',$posts,$sets);

    }

    }

    // public function show_topic()
    // {
    //     $topics =DB::table('blogs')->select()->orderBy('blog_id','DESC')
    //         ->limit(6)->get();
    //         $topics=['topics'=> $topics];
    //         return  view('deatails_news',$topics );
    // }


}
