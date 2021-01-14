<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    //
    public function create(){


        return view('Admin.createsetting');


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
    //     $logo='';
    //     if(isset($_FILES["logo"]["name"]))
    //     {
    //         if($request->hasfile('logo'))
    //     {
    //        $imgFile =$request->file('logo') ;
    //        $imgName =time().basename($_FILES["logo"]["name"]);
    //        $logo=$imgFile->move('images/books/',$imgName);
    //        $logo=$imgName;
    //     }
    //     else
    //     $logo=$request->image;
    // }

     // $file_name = $this->saveImage($request->photo,'images/books');
        $id=Auth::user()->id;
        Setting::create([
             'id'=>$id,
            'Website_name_en' =>$request->Website_name_en,
            'Website_name_ar'=>$request->Website_name_ar,
            'mobile_num'=>$request->mobile_num,
            'icon'=>$request->icon,
            'logo'=>$request->logo,
            'email_web'=> $request->email_web,
            'aboutus_en'=>$request->aboutus_en,
            'aboutus_ar'=>$request->aboutus_ar,
            'slider'=>$request->slider,
            'Facebook'=>$request->Facebook,
            'LinkedIn'=>$request->LinkedIn,
            'Twitter'=>$request->Twitter,


               ]);
                return redirect()->back()->with(['success' => 'تم اضافه الصنف بنجاح ']);
            }


        protected function getMessages()
        {
            return $messages = [
                 'authoer_name_en.required'  =>  __('messages.book name required'),
                'authoer_name_ar.required'  =>  __('messages.book name required'),
                'B_preface_en.required'  =>  __('messages.book  must be required'),
                'B_preface_ar.required'  =>  __('messages.book  must be required'),


            ];
        }
        protected function getRules()
        {
            return $rules = [
                'authoer_name_en' => 'required|unique:books,authoer_name_en',
                'authoer_name_ar' => 'required|unique:books,authoer_name_ar',
                'B_preface_en' => 'required',
                'B_preface_ar' => 'required',

            ];
        }



        // protected function saveImage($photo,$folder){
        //  $file_extension=$photo->B_img->getCilentoriginalExtension();
        // $file_name =time(). ' . '.$file_extension;
        // $path=$folder;
        // $photo ->B_img->move($path,$file_name);
        // return  $file_name;
        // }


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


        $setting = Setting::where('B_id',$B_id)->get();
        return view('Admin.editbook',);

    }


################## Eidt services ##################



 ################## Update services ##################

 public function updatebook(Request $request)
    {
        $settings=new Setting;

        $settings::where('B_id',$request->B_id )
        ->update(['id'=>$request->id,
        'cat_id'=>$request->cat_id,
        'authoer_name_en'=>$request->sauthoer_name_en,
        'authoer_name_ar'=>$request->authoer_name_ar,
        'B_name_en'=>$request->B_name_en,
        'B_name_ar'=>$request->B_name_ar,
        'image'=>$request->image,
        'B_img'=>$request->B_img,

        'is_active'=>$request->is_active,
         ]);

        $data['books'] = Setting::get();
        return redirect('books/allbooks')->with($data);

    }


################## Update services ##################

################## Delete services ##################
    public function deletebook($s_id){

        $settings=Setting::where('s_id',$s_id)->delete();

        // if(!$s_id)

        // return redirect()->back()->with(['error' => __('messages.category not exist')]);

        // $services->delete();

        return redirect()
            ->route('books.all')
            ->with(['success' => __('messages.book deleted successfully')]);



    }

################## Delete services ##################

}
