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
        //   dd($request);
        //viladate data before insert to databse

    //    $rules=$this ->getRules();
    //     $messages=$this ->getMessages();
    //     $validator = Validator::make($request->all(),$rules, $messages);
    //      if( $validator ->fails()){
    //         return redirect()->back()->withErrors($validator)->withInputs($request->all());
    //      }
        //insert,
        $set=new Setting;
        $logo='';
        $icon='';

         if($request->hasfile('logo'))
         {
            $imgFile =$request->file('logo') ;
            $imgName =time().basename($_FILES["logo"]["name"]);
            $logo=$imgFile->move('images/set/',$imgName);
            $set->logo=$imgName;
         }

         if($request->hasfile('icon'))
         {
            $imgFile =$request->file('icon') ;
            $iconName =time().basename($_FILES["icon"]["name"]);
            $logo=$imgFile->move('images/set/', $iconName );
            $set->icon= $iconName ;
         }



     // $file_name = $this->saveImage($request->photo,'images/books');
        $id=Auth::user()->id;
        Setting::create([
             'id'=>$id,
            'Website_name_en' =>$request->Website_name_en,
            'Website_name_ar'=>$request->Website_name_ar,
            'mobile_num'=>$request->mobile_num,
            'location'=>$request->location,
            'icon'=>$iconName,
            'logo'=>$imgName,
            'email_web'=> $request->email_web,
            'aboutus_en'=>$request->aboutus_en,
            'aboutus_ar'=>$request->aboutus_ar,
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


        public function getAllsetting()
    {

        $settings =DB::table('settings')->join('users','settings.id','=','users.id')->get(); // return collection of all result*/

        return view('Admin.allsetting',['settings'=> $settings]);

    }




    ################## Edit services ##################

    public function editsettings($set_id)
    {


        $setting = Setting::where('set_id',$set_id)->get();
        return view('Admin.editsetting',['setting'=> $setting]);

    }


################## Eidt services ##################



 ################## Update services ##################

 public function updatesettings(Request $request)
    {
        $settings=new Setting;
        $id=Auth::user()->id;

        if($request->hasfile('logo'))
        {
           $imgFile =$request->file('logo') ;
           $imgName =time().basename($_FILES["logo"]["name"]);
           $book=$imgFile->move('images/set/',$imgName);
           $imglogo=$imgName;
           if($request->hasfile('icon'))
           {
              $imgFile =$request->file('icon') ;
              $imgName =time().basename($_FILES["icon"]["name"]);
              $book=$imgFile->move('images/set/',$imgName);
              $imgicon=$imgName;

        $settings::where('set_id',$request->set_id)
        ->update(['id'=>$id,
        'logo'=>$imglogo,
        'icon'=>$imgicon,
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
        }
        else{
            $settings::where('set_id',$request->set_id )
        ->update(['id'=>$id,
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
        }}
        else{
            $settings::where('set_id',$request->set_id )
            ->update(['id'=>$id,
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
        }

        $data['settings'] = Setting::get();
        return redirect('/setting/allsetting')->with($data);

    }


################## Update services ##################

################## Delete services ##################
    public function deletesettings($set_id){

        $settings=Setting::where('set_id',$set_id)->delete();

        

        return redirect()
            ->route('setting.all')
            ->with(['success' => __('messages.book deleted successfully')]);



    }

################## Delete services ##################

}
