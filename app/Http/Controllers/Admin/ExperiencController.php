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

    //    $rules=$this->getRules();
    //     $messages=$this->getMessages();
    //     $validator = Validator::make($request->all(),$rules, $messages);
    //      if( $validator ->fails()){
    //         return redirect()->back()->withErrors($validator)->withInputs($request->all());
    //      }
       // insert,
       $experienc=new Experienc;
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
            'is_active'=>$request->is_active,

             ]);
               return redirect()->back()->with(['success' => 'تم اضافه  بنجاح ']);
            }

            protected function getMessages()
            {
                return $messages = [
                    'name_en.required'=>__('messages.name required'),
                    'name_ar.required'=>__('messages.name required'),
                    'logo.required'=>__('messages.function must be required'),

                ];
            }
            protected function getRules()
            {
                return $rules = [
                    'ame_en' => 'required',
                    'name_ar' => 'required',
                    'logo' => 'required',
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
                'is_active'=>$request->is_active,
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



}
