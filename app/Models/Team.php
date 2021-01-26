<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    protected $table = "teams";
    protected $fillable = ['t_id','id','t_profile','name_en','name_ar',
    'sub_title_en','sub_title_ar','short_intro_en','short_intro_ar','created_at','updated_at'];
}
