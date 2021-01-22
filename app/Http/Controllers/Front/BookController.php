<?php

namespace App\Http\Controllers\Front;
use App\Models\Category;
use App\Models\Book;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function show_books()
    {
        // $books=Book::all();
    $books =Book::join('categories','books.cat_id','=','categories.cat_id')
    ->select('*')
    ->get();
     return  view('books',['books'=> $books]);


    }

    public function download($file)
    {
     return response()->download(public_path('images/books/'.$file));

    }
}
