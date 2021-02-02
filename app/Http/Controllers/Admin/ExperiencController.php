<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Experienc;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ExperiencController extends Controller
{
    //
    public function create(){

        return view('Admin.createExperienc');

    }

    public function addExperienc(Request $request){

        //viladate data before insert to databse

       $rules=$this->getRules();
        $messages=$this->getMessages();
        $validator = Validator::make($request->all(),$rules, $messages);
         if( $validator ->fails()){
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
         }
       // insert,
       $experienc=new Experienc;
       $active='';
       if(isset($request->is_active))
       $active=1;
       else
       $active=0;
        $logo='';

        if($request->hasfile('logo'))
        {
            $imgFile =$request->file('logo') ;
            $imgName =time().basename($_FILES["logo"]["name"]);
            $logo=$imgFile->move('images/experienc/',$imgName);
            $logo->logo=$imgName;
        }

        $id=Auth::user()->id;
        Experienc::create([
            'id'=>$id,
            'name_en'=>$request->name_en,
            'name_ar' =>$request->name_ar,
            'logo'=>$imgName,
            'url'=>$request->url,
            'is_active'=>$active,

             ]);
               return redirect()->route('experienc.all')->with(['success' => 'تم اضافه  بنجاح ']);
            }

            protected function getMessages()
            {
                return $messages = [
                    'name_en.required'=>__('messages.name en required'),
                    'name_ar.required'=>__('messages.name ar required'),
                    'logo.required'=>__('messages.image must be required'),
                    'is_active.required'=>__('messages.is_active must be required'),


                ];
            }
            protected function getRules()
            {
                return $rules = [
                    'name_en' => 'required|max:255',
                    'name_ar' => 'required|max:255',
                    'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
                    'is_active'=> 'required',
                ];
            }


            public function getAllExprienc()
            {

                $experience =DB::table('experiences')->join('users','experiences.id','=','users.id')->get(); // return collection of all result*/

                return view('Admin.allExprienc',['experience'=> $experience]);

            }
################## Edit Teams ##################

    public function editExprienc($exp_id)
    {

        $experience = Experienc::where('exp_id',$exp_id)->get();
        return view('Admin.editExprienc',['experience'=> $experience]);

    }

################## Eidt Teams ##################

################## Update Teams ##################

public function updateExprienc(Request $request)
{
    $experienc=new Experienc;
    $id=Auth::user()->id;
    $active='';
    if(isset($request->is_active))
    $active=1;
    else
    $active=0;
    $image='';
    $logo='';
    $attchment='';
    $imgName='';
    if($request->hasfile('logo'))
    {
    $attchmentFile =$request->file('logo') ;
    $num=count($attchmentFile);
    for($i=0;$i<$num;$i++){
    $ext=$attchmentFile[$i]->getClientOriginalExtension();
    $imgName =rand(123456,999999).".".$ext;
    $logo=$attchmentFile[$i]->move('images/experienc/',$imgName);
    $attchment.=$imgName;

    }}
    else{
       $imgName=$request->logo2;
    }
            $experienc::where('exp_id',$request->exp_id)
            ->update(['id'=>$id,
                'name_en'=>$request->name_en,
                'name_ar' =>$request->name_ar,
                'logo'=>$imgName,
                'url'=>$request->url,
                'is_active'=>$active,
                 ]);

            $data['exprienc'] =Experienc::get();
            return redirect('/experienc/allExprienc')->with($data);


}

################## Update Teams #################

################## Delete Teams ##################
public function deleteExprienc($exp_id){

    $experienc=Experienc::where('exp_id',$exp_id)->delete();
    return redirect()
        ->route('experienc.all')
        ->with(['success' => __('messages.Exprienc deleted successfully')]);

}

################## Delete Teams ##################


public function display_row($exp_id)
{
    $affected1 =[];
    $data['dept'] =Experienc::where('exp_id',$exp_id)->get();
    return view('update',$data);
                }
                public function is_active($exp_id){
                    $affected1= Experienc::where('exp_id',$exp_id)
                    ->update(['is_active'=>'1']);
                    // $affected = Category::where('is_delete',0)->paginate(25);
                    $experience =DB::table('experiences')->join('users','experiences.id','=','users.id')->get(); // return collection of all result*/
                    return view('Admin.showcategory',['experience'=>  $experience]);

                    }
                    public function is_not_active($exp_id){
                        $affected1= Experienc::where('exp_id',$exp_id)
                        ->update(['is_active'=>'0']);
                        $experience=DB::table('experiences')->join('users','experiences.id','=','users.id')->get(); // return collection of all result*/
                        return view('Admin.showcategory',['experience'=>  $experience]);

                        }

public function display_with_status($exp_id)
    {
        if($exp_id==1){
            $affected1 =[];
            $affected = Experienc::where(['is_active',1])->paginate(25);
            return view('department',['cat'=>$affected,'data1'=>$affected1]);
        }elseif($exp_id==0){
            $affected1 =[];
            $affected = Experienc::where(['is_active',0])->paginate(25);
            return view('department',['cat'=>$affected,'data1'=>$affected1]);
        }

    }



}
