<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //
    protected $table = "settings";
    protected $fillable = ['set_id','id','Website_name_en','Website_name_ar','mobile_num','phone_num','location','logo','icon',
    'email_web','aboutus_en','aboutus_ar','Facebook','LinkedIn','Twitter','created_at','updated_at'];
    // protected $hidden=[];
}
