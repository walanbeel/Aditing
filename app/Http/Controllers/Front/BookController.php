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
    public function show_books()
    {
        // $books=Book::all();
    $books =DB::table('books')->paginate(8);

    $sets =DB::table('settings')->join('users','settings.id','=','users.id')
    ->get();
     return  view('books',['books'=> $books],['sets'=> $sets]);


    }


    // public function show($B_id)
    // {
    //     $data=Documents::find($B_id);
    //     return  view('document.view',['data'=> $data]);

    // }

    public function download($file)
    {
     return response()->download(public_path('images/books/'.$file));

    }
}
