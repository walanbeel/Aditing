<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Team;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class TeamController extends Controller
{
    //
    public function create(){

        return view('Admin.createteames');
    }


    public function addteam(Request $request){

        //viladate data before insert to databse

       $rules=$this->getRules();
        $messages=$this->getMessages();
        $validator = Validator::make($request->all(),$rules, $messages);
         if( $validator ->fails()){
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
         }
       // insert,
        $team=new Team;
        $t_profile='';

        if($request->hasfile('t_profile'))
        {
            $imgFile =$request->file('t_profile') ;
            $imgName =time().basename($_FILES["t_profile"]["name"]);
            $team=$imgFile->move('images/teams/',$imgName);
            $team->t_profile=$imgName;
        }

        $id=Auth::user()->id;
        Team::create([
            'id'=>$id,
            't_profile'=>$imgName,
            'name_en'=>$request->name_en,
            'name_ar' =>$request->name_ar,
            'sub_title_en'=>$request->sub_title_en,
            'sub_title_ar'=>$request->sub_title_ar,
            'short_intro_en'=>$request->short_intro_en,
            'short_intro_ar'=>$request->short_intro_ar,

             ]);
               return redirect()->route('team.all')->with(['success' => 'تم اضافه الفريق بنجاح ']);
            }

            protected function getMessages()
            {
                return $messages = [
                    'name_en.required'=>__('messages.name en required'),
                    'name_ar.required'=>__('messages.name ar required'),
                    'sub_title_en.required'=>__('messages.sub title en must be required'),
                    'sub_title_ar.required'=>__('messages.sub title ar must be required'),
                    'short_intro_en.required'=>__('messages.intro en must be required'),
                    'short_intro_ar.required'=>__('messages.intro ar must be required'),
                    't_profile.required'=>__('messages.image must be required'),
                ];
            }
            protected function getRules()
            {
                return $rules = [
                    'name_en' => 'required|max:255',
                    'name_ar' => 'required|max:255',
                    'sub_title_en' => 'required|max:255',
                    'sub_title_ar' => 'required|max:255',
                    'short_intro_en' => 'required',
                    'short_intro_ar'=> 'required',
                    't_profile'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',

                ];
            }


            public function getAllTeams()
            {

                $teams =DB::table('teams')->join('users','teams.id','=','users.id')->paginate(4); // return collection of all result*/

                return view('Admin.allteams',['teams'=> $teams]);

            }
################## Edit Teams ##################

    public function editteams($t_id)
    {

        $teams = Team::where('t_id',$t_id)->get();
        return view('Admin.editteams',['teams'=>$teams]);

    }

################## Eidt Teams ##################

################## Update Teams ##################

public function updateteams(Request $request)
{
    $teams=new Team;
    $image='';
    $t_profile='';
    $attchment='';
    $imgName='';
    $id=Auth::user()->id;
    if($request->hasfile('t_profile'))
    {
    $attchmentFile =$request->file('t_profile') ;
    $num=count($attchmentFile);
    for($i=0;$i<$num;$i++){
    $ext=$attchmentFile[$i]->getClientOriginalExtension();
    $imgName =rand(123456,999999).".".$ext;
    $t_profile=$attchmentFile[$i]->move('images/teams/',$imgName);
    $attchment.=$imgName;

    }}
    else{
       $imgName=$request->t_profile2;
    }

            $teams::where('t_id',$request->t_id)
            ->update([
                't_profile'=>$imgName,
                'name_en'=>$request->name_en,
                'name_ar' =>$request->name_ar,
                'sub_title_en'=>$request->sub_title_en,
                'sub_title_ar'=>$request->sub_title_ar,
                'short_intro_en'=>$request->short_intro_en,
                'short_intro_ar'=>$request->short_intro_ar,
                 ]);

            $data['teams'] =Team::get();
            return redirect('/team/allteams')->with($data);

        }



################## Update Teams #################

################## Delete Teams ##################
public function deleteteams($t_id){

    $teams=Team::where('t_id',$t_id)->delete();
    return redirect()
        ->route('team.all')
        ->with(['success' => __('messages.team deleted successfully')]);

}

################## Delete Teams ##################

}
