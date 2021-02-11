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

        $id=Auth::user()->id;
        Setting::create([
             'id'=>$id,
            'Website_name_en' =>$request->Website_name_en,
            'Website_name_ar'=>$request->Website_name_ar,
            'mobile_num'=>$request->mobile_num,
            'phone_num'=>$request->phone_num,
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


                return redirect()->route('setting.all')->with(['success' => 'تم اضافه  بنجاح ']);
            }



        protected function getMessages()
        {
            return $messages = [
                'Website_name_en.required'  =>  __('messages.Website name en must be required'),
                'Website_name_ar.required'  =>  __('messages.Website name ar must be required'),
                'mobile_num.required'  =>  __('messages.mobile number  must be required'),
                'phone_num.required'  =>  __('messages.phone number  must be required'),
                'location.required'  =>  __('messages.location  must be required'),
                'icon.required'  =>  __('messages.icon  must be required'),
                'logo.required'  =>  __('messages.logo  must be required'),
                'email_web.required'  =>  __('messages.email web  must be required'),
                'aboutus_en.required'  =>  __('messages.aboutus en  must be required'),
                 'aboutus_ar.required'  =>  __('messages.aboutus ar  must be required'),
                 'Facebook.required'  =>  __('messages.Facebook  must be required'),
                 'LinkedIn.required'  =>  __('messages.LinkedIn  must be required'),
                 'Twitter.required'  =>  __('messages.Twitter  must be required'),



            ];
        }
        protected function getRules()
        {
            return $rules = [
                'Website_name_en' => 'required',
                'Website_name_ar' => 'required',
                'mobile_num' => 'required|min:13|numeric',
                'phone_num'=>'required|min:13|numeric',
                'location' => 'required|max:255',
                'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
                'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,.webp',
                'email_web' => 'required',
                'aboutus_en' => 'required',
                'aboutus_ar' => 'required',
                'Facebook' => 'required',
                'LinkedIn' => 'required',
                'Twitter' => 'required',



            ];
        }

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
        $icon='';
        $imgName='';
        $attchment='';
        $logo='';

        if($request->hasfile('icon'))
        {
        $attchmentFile =$request->file('icon') ;
        $num=count($attchmentFile);
        for($i=0;$i<$num;$i++){
        $ext=$attchmentFile[$i]->getClientOriginalExtension();
        $attchmentName =rand(123456,999999).".".$ext;
        $icon=$attchmentFile[$i]->move('images/set/',$attchmentName);
        $attchment.=$attchmentName;

        }}
        else{
            $attchment=$request->icon2;
        }

        if($request->hasfile('logo'))
        {
        $attchmentFile =$request->file('logo') ;
        $num=count($attchmentFile);
        for($i=0;$i<$num;$i++){
        $ext=$attchmentFile[$i]->getClientOriginalExtension();
        $imgName =rand(123456,999999).".".$ext;
        $logo=$attchmentFile[$i]->move('images/set/',$imgName);
        $attchment.=$imgName;

        }}

        else{
           $imgName=$request->logo2;
        }
        $settings::where('set_id',$request->set_id)
        ->update(['id'=>$id,
        'icon'=>$attchmentName,
        'logo'=>$imgName,
        'Website_name_en'=>$request->Website_name_en,
        'Website_name_ar'=>$request->Website_name_ar,
        'mobile_num'=>$request->mobile_num,
        'phone_num'=>$request->phone_num,
        'location'=>$request->location,
        'email_web'=>$request->email_web,
        'aboutus_en'=>$request->aboutus_en,
        'aboutus_ar'=>$request->aboutus_ar,
        'Facebook'=>$request->Facebook,
        'LinkedIn'=>$request->LinkedIn,
        'Twitter'=>$request->Twitter,
         ]);


         $data['settings'] = Setting::get();
         return redirect('/setting/allsetting')->with($data);

    }


################## Update services ##################

################## Delete services ##################
    public function deletesettings($set_id){

        $settings=Setting::where('set_id',$set_id)->delete();
        return redirect()
            ->route('setting.all')
            ->with(['success' => __('messages.Setting deleted successfully')]);

    }

################## Delete services ##################

}
