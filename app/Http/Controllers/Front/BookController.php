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
    /******************** download ***************************/
    public function download($file)
    {
     return response()->download(public_path() . "/images/books/".$file);

    }
    /******************** download ***************************/

    public function show_more($B_id)
    {
        // echo $B_id;
        $sets =DB::table('books')->join('users','books.id','=','users.id')
        ->get();
        $book =Book::join('categories','categories.cat_id','=','books.cat_id')

        ->select('categories.cat_name_en','books.*')
        ->where('books.B_id',$B_id)->get();
        // return  view('books',['book'=> $book],['sets'=> $sets]);
        return  $book;
        echo json_encode($book);

        // $book=Book::all();
        // return  $book;
        // $book=DB::select('select * from books , categories where books.B_id = 22 and books.cat_id=categories.cat_id');


         echo json_encode($book);

}
}
