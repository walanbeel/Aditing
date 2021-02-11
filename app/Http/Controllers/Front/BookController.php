<?php

namespace App\Http\Controllers\Front;

use App\Models\Category;
use App\Models\Book;
use Illuminate\Support\Facades\DB;
use App\Documents;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use League\CommonMark\Block\Element\Document;

class BookController extends Controller
{
    //
    public function show_books(Request $request)
    {
        // $books=Book::all();
        $library = DB::table('books')->join('categories', 'categories.cat_id', '=', 'books.cat_id')->paginate(8);
        $category = Category::all()->where('is_active', 1)->where('status', 1);
        $sets = DB::table('settings')->join('users', 'settings.id', '=', 'users.id')
            ->get();
        return  view('books', ['books' => $library, 'sets' => $sets, 'category' => $category]);
    }
    /******************** download ***************************/
    public function download($file)
    {
        return response()->download(public_path() . "/images/books/" . $file);
    }
    /******************** download ***************************/
    ###################### Filtering ###########################

    public function filter($B_id)
    {
        $sets = DB::table('settings')->join('users', 'settings.id', '=', 'users.id')->get();
        $category = Category::all()->where('is_active', 1)->where('status', 1);
        $books = DB::table('books')->join('categories', 'categories.cat_id', '=', 'books.cat_id')->where('books.cat_id', '=', $B_id)->get();
        return view('books', ['books' => $books, 'sets' => $sets, 'category' => $category]);
    }
    ###################### Filtering ###########################

    //  public function cate_filter()
    //  {

    //     $category= Category::all()->where('is_active',1);
    //                 //   dd($category);
    //                 $data=['category'=>$category];
    //      return view('books',$data);
    //  }
}
