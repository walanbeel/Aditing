<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Traits\BookTrait;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    //
     //use BookTrait;

       public function create(){
        $cat ['category']=Category::all();

        return view('Admin.createbook',$cat);


    }


    public function add(Request $request){

        //viladate data before insert to databse

    //    $rules=$this ->getRules();
    //     $messages=$this ->getMessages();
    //     $validator = Validator::make($request->all(),$rules, $messages);
    //      if( $validator ->fails()){
    //         return redirect()->back()->withErrors($validator)->withInputs($request->all());
    //      }
        //insert,

         $book=new Book;
         $file='';
         $cover='';
         $fileName ='';
         $coverName='';

         if($request->hasfile('cover'))
         {
            $imgFile =$request->file('cover') ;
            $coverName =time().basename($_FILES["cover"]["name"]);
            $cover=$imgFile->move('images/books/',$coverName);
            $book->cover=$coverName;
         }

         if($request->hasfile('file'))
         {
            $imgFile =$request->file('file') ;
            $fileName =time().basename($_FILES["file"]["name"]);
            $file=$imgFile->move('images/books/',$fileName);
            $book->file=$fileName;
         }

    //     if($request->hasfile('file'))
    //    {
    //    $attchmentFile =$request->file('file') ;
    //    $num=count((array)$request->file('$attchmentFile'));
    //    for($i=0;$i<$num;$i++){
    //    $ext=$attchmentFile[$i]->getClientOriginalExtension();
    //    $attchmentName =rand(123456,999999).".".$ext;
    //    $attachment=$attchmentFile[$i]->move('images/books/',$attchmentName);
    //    $book->attachment.=$attchmentName.',';

    //    }


        $id=Auth::user()->id;
        Book::create([
             'id'=>$id,
             'cat_id'=>$request->cat_id,
            'authoer_name_en' =>$request->authoer_name_en,
            'authoer_name_ar'=>$request->authoer_name_ar,
            'B_name_en'=>$request->B_name_en,
            'B_name_ar'=>$request->B_name_ar,
            'file'=>$fileName,
            'cover'=>$coverName,
            'B_preface_en'=>$request->B_preface_en,
            'B_preface_ar'=>$request->B_preface_ar,

               ]);
                return redirect()->back()->with(['success' => 'تم اضافه الكتاب بنجاح ']);

        }


        protected function getMessages()
        {
            return $messages = [
                 'authoer_name_en.required'  =>  __('messages.book name required'),
                'authoer_name_ar.required'  =>  __('messages.book name required'),
                'B_preface_en.required'  =>  __('messages.book  must be required'),
                'B_preface_ar.required'  =>  __('messages.book  must be required'),
                'image' => __('messages.images must be required'),



            ];
        }

        protected function getRules()
        {
            return $rules = [
                'authoer_name_en' => 'required|unique:books,authoer_name_en',
                'authoer_name_ar' => 'required|unique:books,authoer_name_ar',
                'B_preface_en' => 'required',
                'B_preface_ar' => 'required',
                'image' => 'required',


            ];
        }



        public function getAllbooks()
    {
        $books = DB::table('books')->join('users','books.id','=','users.id')

               ->join('categories','books.cat_id','=','categories.cat_id')
               ->get();

        return view('Admin.allbooks',['books'=> $books]);
    }




################## Edit services ##################

    public function editbook($B_id)
    {


        $books = Book::where('B_id',$B_id)->get();
        $category = Category::select()->get();
        return view('Admin.editbooks',['books'=>  $books , 'category' => $category]);

    }


################## Eidt services ##################



 ################## Update services ##################

 public function updatebook(Request $request)
    {
        $books=new Book;
        $id=Auth::user()->id;
        $file='';
        $imgName='';
        $attchment='';
        $cover='';

        if($request->hasfile('file'))
        {
        $attchmentFile =$request->file('file') ;
        $num=count($attchmentFile);
        for($i=0;$i<$num;$i++){
        $ext=$attchmentFile[$i]->getClientOriginalExtension();
        $attchmentName =rand(123456,999999).".".$ext;
        $file=$attchmentFile[$i]->move('images/books/',$attchmentName);
        $attchment.=$attchmentName;

        }}
        else{
            $attchment=$request->file2;
        }

        if($request->hasfile('cover'))
        {
        $attchmentFile =$request->file('cover') ;
        // $num=count($attchmentFile);
        for($i=0;$i<$num;$i++){
        $ext=$attchmentFile[$i]->getClientOriginalExtension();
        $imgName =rand(123456,999999).".".$ext;
        $cover=$attchmentFile[$i]->move('images/books/',$imgName);
        $attchment.=$imgName;

        }}

        else{
           $imgName=$request->cover2;
        }

            $books::where('B_id',$request->B_id )
           ->update(['id'=>$id,
           'cat_id'=>$request->cat_id,
           'authoer_name_en'=>$request->authoer_name_en,
           'authoer_name_ar'=>$request->authoer_name_ar,
           'B_name_en'=>$request->B_name_en,
           'B_name_ar'=>$request->B_name_ar,
           'file'=>$attchmentName,
           'cover'=>$imgName,


            ]);

        $data['books'] = Book::get();
       return redirect('/books/allbooks')->with($data);

    }



################## Update services ##################

################## Delete services ##################
    public function deletebook($B_id){

        $services=Book::where('B_id',$B_id)->delete();

        // if(!$s_id)

        // return redirect()->back()->with(['error' => __('messages.category not exist')]);

        // $services->delete();

        return redirect()
            ->route('books.all')
            ->with(['success' => __('messages.book deleted successfully')]);



    }

################## Delete services ##################

}
