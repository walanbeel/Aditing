<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ServicesController extends Controller
{



    public function create(){
        $cat ['category']=Category::all()->where('is_active',1);

        return view('Admin.createservic', $cat);


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
        $services=new Service;
        $id=Auth::user()->id;
        $active='';
        if(isset($request->is_active))
        $active=1;
        else
        $active=0;

        $ser_images='';
        $imgName='';
        $attchment='';
        if($request->hasfile('ser_images'))
        {
           $imgFile =$request->file('ser_images') ;
           $imgName =time().basename($_FILES["ser_images"]["name"]);
           $ser_images=$imgFile->move('images/services/',$imgName);
           $services->ser_images=$imgName;
        }


        Service::create([
             'id'=>$id,
             'cat_id'=>$request->cat_id,
            's_name_en' =>$request->s_name_en,
            's_name_ar'=>$request->s_name_ar,
            'ser_images'=>$imgName,
            's_describe_en'=>$request->s_describe_en,
            's_describe_ar'=>$request->s_describe_ar,
            'is_active'=>$active,
               ]);
                return redirect()->route('services.all')->with(['success' => 'تم اضافه الصنف بنجاح ']);
            }


        protected function getMessages()
        {
            return $messages = [
                 's_name_en.required'  =>  __('messages.service name required'),
                's_name_en.unique'    =>  __('messages.service  must be unique'),
                's_name_ar.required'  =>  __('messages.service name required'),
                's_name_ar.unique'    =>  __('messages.service  must be unique'),
                's_describe_ar'       =>  __('messages.service name required'),
                's_describe_en'       =>  __('messages.service name required'),
                's_describe_ar.unique'  =>  __('messages.service  must be unique'),
                's_describe_en.unique'  =>  __('messages.service  must be unique'),
                // 'ser_images.required'    =>  __('messages.service image required'),



            ];
        }
        protected function getRules()
        {
            return $rules = [
                's_name_en' => 'required|unique:categories,cat_name_en',
                's_name_ar' => 'required|unique:categories,cat_name_ar',
                's_describe_en' => 'required|unique:categories,cat_name_en',
                's_describe_ar' => 'required|unique:categories,cat_name_ar',
                // 'ser_images' => 'required|image',

            ];
        }


        public function getAllService()
    {
        $services = DB::select('select * from services inner join users on users.id = services.id
        inner join categories on categories.cat_id =services.cat_id');

        // $services = DB::table('services')->join('users','services.id','=','users.id')
        // ->join('categories','services.cat_id','=','categories.cat_id')
        // ->paginate(4); // return collection of all result*/

       return view('Admin.allservices',['services'=> $services]);
    }



    ################## Edit services ##################

    public function editservice($s_id)
    {


        $services = Service::where('s_id',$s_id)->get();
        $category = Category::select()->get();

        return view('Admin.editservices',['services'=>  $services , 'category' => $category]);

    }
################## Eidt services ##################



 ################## Update services ##################

 public function updateservice(Request $request)
 {

    $service=new Service;
    $id=Auth::user()->id;
    $active='';
    if(isset($request->is_active))
    $active=1;
    else
    $active=0;
    $image='';
    $ser_images='';
    $attchment='';
    $imgName='';
    if($request->hasfile('ser_images'))
    {
    $attchmentFile =$request->file('ser_images') ;
    $num=count($attchmentFile);
    for($i=0;$i<$num;$i++){
    $ext=$attchmentFile[$i]->getClientOriginalExtension();
    $imgName =rand(123456,999999).".".$ext;
    $ser_images=$attchmentFile[$i]->move('images/services/',$imgName);
    $attchment.=$imgName;

    }}
    else{
       $imgName=$request->ser_images2;
    }
            $service::where('s_id',$request->s_id)
            ->update(['id'=>$id,
                's_name_en'=>$request->s_name_en,
                's_name_ar' =>$request->s_name_ar,
                'ser_images'=>$imgName,
                's_describe_en'=>$request->s_describe_en,
                's_describe_ar'=>$request->s_describe_ar,
                'is_active'=>$active,
                 ]);

                 $servicesss['services'] = Service::get();
                   return redirect('/services/allservices')->with($servicesss);




}
//     $service=Service::where('s_id',$request->s_id);
//     $id=Auth::user()->id;
//     dd($request);
//     if($service->exists())
//     {
//         $service->cat_id=$request->input('cat_id');
//         $service->s_name_en=$request->input('s_name_en');
//         $service->s_name_ar=$request->input('s_name_ar');
//         $service->id=$request->input('id');
//         $service->s_describe_en=$request->input('s_describe_en');
//         $service->s_describe_ar=$request->input('s_describe_ar');
//         $service->is_active=$request->input('is_active');


//         if($request->ser_image != '')
//         {
//             if($request->hasfile('ser_images'))
//             {
//                $imgFile =$request->file('ser_images') ;
//                $imgName =time().basename($_FILES["ser_images"]["name"]);
//                $ser_images=$imgFile->move('images/services/',$imgName);
//                $ser_images=$imgName;
//             }
//             $service->update(['id'=> $service->$id,
//             'cat_id'=>$service->cat_id,
//             's_name_en'=>$service->s_name_en,
//             's_name_ar'=>$service->s_name_ar,
//             'ser_images'=>$service->ser_images,
//             's_describe_en'=>$service->s_describe_en,
//             's_describe_ar'=>$service->s_describe_ar,
//             'is_active'=>$service->is_active,
//             ]);


//         }else{
//             $service->update(['id'=> $service->$id,
//             'cat_id'=>$service->cat_id,

//             's_name_en'=>$service->s_name_en,
//              's_name_ar'=>$service->s_name_ar,
//             's_describe_en'=>$service->s_describe_en,
//             's_describe_ar'=>$service->s_describe_ar,
//             'is_active'=>$service->is_active,
//             ]);


//         }
//     }else{
//         return "wala";
//     }
//     $servicesss['services'] = Service::get();
//     return redirect('/services/allservices')->with($servicesss);

//    }


################## Update services ##################

################## Delete services ##################
    public function deleteservice($s_id){

        $services=Service::where('s_id',$s_id)->delete();



        return redirect()
            ->route('services.all')
            ->with(['success' => __('messages.category deleted successfully')]);



    }

################## Delete services ##################

public function display_row($s_id )
{
    $affected1 =[];
    $data['dept'] = Service::where('s_id ',$s_id )->get();
    return view('update',$data);
                }
                public function is_active($s_id ){
                    $affected1= Service::where('s_id ',$s_id)
                    ->update(['is_active'=>'1']);
                    //  $affected1=DB::update('update `services` set is_active = 1 where s_id= $s_id');
                    // $affected1= Service::where('s_id ',$s_id )
                    // ->update(['is_active'=>'1']);
                    // $affected = Category::where('is_delete',0)->paginate(25);
                    $services =DB::table('services')->join('users','services.id','=','users.id')
                    ->join('categories','services.cat_id','=','categories.cat_id')
                    ->paginate(4); // return collection of all result*/
                    return view('Admin.allservices',['services'=> $services]);

                    }
                    public function is_not_active($s_id ){
                        $affected1= Service::where('s_id ',$s_id )
                        ->update(['is_active'=>'0']);
                        //  $affected1=DB::update('update `services` set is_active = 0 where s_id= $s_id');
                        // $affected1= Service::where('s_id ',$s_id )
                        // ->update(['is_active'=>'0']);
                        $services =DB::table('services')->join('users','services.id','=','users.id')
                        ->join('categories','services.cat_id','=','categories.cat_id')
                        ->get(); // return collection of all result*/
                        return view('Admin.allservices',['services'=>  $services]);

                        }

public function display_with_status($s_id )
    {
        if($s_id ==1){
            $affected1 =[];
            $affected = Service::where(['is_active',1])->paginate(25);
            return view('department',['cat'=>$affected,'data1'=>$affected1]);
        }elseif($s_id ==0){
            $affected1 =[];
            $affected = Service::where(['is_active',0])->paginate(25);
            return view('department',['cat'=>$affected,'data1'=>$affected1]);
        }

    }



}
