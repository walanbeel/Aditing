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
        $set=new Setting;
        $logo='';
        $icon='';
         $imgName='';
         $attchment='';

        if($request->hasfile('logo'))
     {
        $imgFile =$request->file('logo') ;
        $imgName =time().basename($_FILES["logo"]["name"]);
        $set=$imgFile->move('images/news/',$imgName);

     }


        if($request->hasfile('logo'))
       {
       $attchmentFile =$request->file('logo') ;
       $num=count((array)$request->file('$attchmentFile'));
       for($i=0;$i<$num;$i++){
       $ext=$attchmentFile[$i]->getClientOriginalExtension();
       $attchmentName =rand(123456,999999).".".$ext;
       $attachment=$attchmentFile[$i]->move('images/news/',$attchmentName);
       $set->attachment.=$attchmentName.',';

       }

     // $file_name = $this->saveImage($request->photo,'images/books');
        $id=Auth::user()->id;
        Setting::create([
             'id'=>$id,
            'Website_name_en' =>$request->Website_name_en,
            'Website_name_ar'=>$request->Website_name_ar,
            'mobile_num'=>$request->mobile_num,
            'location'=>$request->location,
            'icon'=>$icon,
            'logo'=>$imgName,
            'email_web'=> $request->email_web,
            'aboutus_en'=>$request->aboutus_en,
            'aboutus_ar'=>$request->aboutus_ar,
            'Facebook'=>$request->Facebook,
            'LinkedIn'=>$request->LinkedIn,
            'Twitter'=>$request->Twitter,


               ]);
                return redirect()->back()->with(['success' => 'تم اضافه الصنف بنجاح ']);
                // echo "$request->Website_name_en";
                // echo "$request->Website_name_ar";
                // echo "$request->mobile_num";
                // echo "$request->location";
                // echo "$request->icon";
                // echo "$request->logo";
                // echo "$request->email_web";
                // echo "$request->aboutus_en";
                // echo "$request->aboutus_ar";
                // echo "$request->slider";
                // echo "$request->Facebook";
                // echo "$request->LinkedIn";
                // echo "$request->Twitter";



            }
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


        public function getAllsetting()
    {

        $settings =DB::table('settings')->join('users','settings.id','=','users.id')->get(); // return collection of all result*/

        return view('Admin.allsetting',['settings'=> $settings]);

    }




    ################## Edit services ##################

    public function editsettings($set_id)
    {


        $setting = Setting::where('set_id',$set_id)->get();
        return view('Admin.editsettings',['setting'=>  $setting]);

    }


################## Eidt services ##################



 ################## Update services ##################

 public function updatesettings(Request $request)
    {
        $settings=new Setting;

        $settings::where('set_id',$request->set_id )
        ->update(['id'=>$request->id,
        'cat_id'=>$request->cat_id,
        'logo'=>$request->logo,
        'icon'=>$request->icon,
        'Website_name_en'=>$request->Website_name_en,
        'Website_name_ar'=>$request->Website_name_ar,
        'mobile_num'=>$request->mobile_num,
        'location'=>$request->location,
        'email_web'=>$request->email_web,
        'aboutus_en'=>$request->aboutus_en,
        'aboutus_ar'=>$request->aboutus_ar,
        'Facebook'=>$request->Facebook,
        'LinkedIn'=>$request->LinkedIn,
        'Twitter'=>$request->Twitter,

         ]);

        $data['settings'] = Setting::get();
        return redirect('setting/allsettings')->with($data);

    }


################## Update services ##################

################## Delete services ##################
    public function deletesettings($set_id){

        $settings=Setting::where('set_id',$set_id)->delete();

        // if(!$s_id)

        // return redirect()->back()->with(['error' => __('messages.category not exist')]);

        // $services->delete();

        return redirect()
            ->route('setting.all')
            ->with(['success' => __('messages.book deleted successfully')]);



    }

################## Delete services ##################

}
