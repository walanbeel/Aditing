<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Mail;
class ContactController extends Controller
{
    //
    public function contact()
    {
        $sets =DB::table('settings')->join('users','settings.id','=','users.id')
        ->get();
      return view('contact-us',['sets'=> $sets]);
    }

    public function sendEmail(Request $request)
    {
        $details=[
        'name'=> $request->name,
        'email'=> $request->email,
        'subject'=> $request->subject,
        'message'=> $request->message,
        ];

        Mail::to('wala20.nbeel@gmail.com')->send(new ContactMail($details));

        return back()->with('message_sent','Your massage has been succesfully!');
    }
}
