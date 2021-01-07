<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServicesController extends Controller
{
    //
    // public function add_services(Request $req){
    //         $service= new Service;

    //         $service->s_name_en=$req->s_name_en;
    //         $service->s_name_ar=$req->s_name_ar;
    //         $service->s_describe_en=$req->s_describe_en;
    //         $service->s_describe_en=$req->s_describe_en;
    //         $service->_describe_ar=$req->s_describe_ar;
    //         $service->save();


    //         return redirect('add');
    //  }


    // public function create(){
    //     return view('Admin.createservic');
    //     $cat ['category']=Category::all ();
    //      @foreach ($category as $item)



    // }

    public function add(Request $request){

        //viladate data before insert to databse

    //    $rules=$this ->getRules();
    //     $messages=$this ->getMessages();
    //     $validator = Validator::make($request->all(),$rules, $messages);
    //      if( $validator ->fails()){
    //         return redirect()->back()->withErrors($validator)->withInputs($request->all());
    //      }
        //insert,
        $id=Auth::user()->id;
        Service::create([
             'id'=>$id,
             'cat_id'=>$request->cat_id,
            's_name_en' =>$request->s_name_en,
            's_name_ar'=>$request->s_name_ar,
            's_describe_en'=>$request->s_describe_en,
            's_describe_ar'=>$request->s_describe_ar,
            'is_active'=>$request->is_active,
               ]);
                return redirect()->back()->with(['success' => 'تم اضافه الصنف بنجاح ']);
            }


        // protected function getMessages()
        // {
        //     return $messages = [
        //          's_name_en.required'  =>  __('messages.service name required'),
        //         's_name_en.unique'    =>  __('messages.service  must be unique'),
        //         's_name_ar.required'  =>  __('messages.service name required'),
        //         's_name_ar.unique'    =>  __('messages.service  must be unique'),
        //         's_describe_ar'       =>  __('messages.service name required'),
        //         's_describe_en'       =>  __('messages.service name required'),
        //         's_describe_ar.unique'  =>  __('messages.service  must be unique'),
        //         's_describe_en.unique'  =>  __('messages.service  must be unique'),


        //     ];
        // }
        // protected function getRules()
        // {
        //     return $rules = [
        //         's_name_en' => 'required|unique:categories,cat_name_en',
        //         's_name_ar' => 'required|unique:categories,cat_name_ar',
        //         's_describe_en' => 'required|unique:categories,cat_name_en',
        //         's_describe_ar' => 'required|unique:categories,cat_name_ar',
        //         'is_active' => 'required',
        //     ];
        // }


        public function getAllServices()
    {
        $services = Service::select(
            's_id',
            'id',
            'cat_id',
            's_name_en' ,/*. LaravelLocalization::getCurrentLocale() . ' as cat_name',*/
            's_name_ar',
            's_describe_en',
            's_describe_ar',
            'is_active',

            )->get(); // return collection of all result*/

       return view('Admin.allservices',['service'=> $services]);
    }


    ################## Edit services ##################
    public function editservice($s_id)
    {

        $services =Service::find($s_id);

        if (!$services)
        {
            return redirect()->back();
        }
         else
         {
            $services = Service::select('s_id','id','cat_id', 's_name_en', 's_name_ar','s_describe_en','s_describe_ar', 'is_active')->find($s_id);

        return view('editservice',compact('service'));

         }

    }
################## Eidt services ##################



 ################## Update services ##################

 public function updateservice(/*OfferRequ*/ $request, $s_id)
    {
        //validtion

        // chek if offer exists

        $services = Service::find($s_id);
        if (!$services)
            return redirect()->back();

        //update data

        $services->update($request->all());

        return redirect()->back()->with(['success' => ' تم التحديث بنجاح ']);

    }

################## Update services ##################

################## Delete services ##################
    public function deleteservice($s_id){

        $services=Service::find($s_id);

        if(!$s_id)

        return redirect()->back()->with(['error' => __('messages.category not exist')]);

        $services->delete();

        return redirect()
            ->route('services.all',$s_id)
            ->with(['success' => __('messages.category deleted successfully')]);



    }

################## Delete services ##################


}
