<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DahshboradController extends Controller
{
    //
    function index(){
        return view('Admin.dashboard');
    }

    public function count_user(){
        $authId = Auth::id();

        $users = DB::table('users')->where('id',$authId)->get();
            // ->select('select * from users')
            // ->get()->count();

            // $users_count = $users->count();

            return view('Admin.dashboard', ['users' => $users]);


    }

}
