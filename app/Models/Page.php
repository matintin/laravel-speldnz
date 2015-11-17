<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //
    public function children(){
    	return $this->hasMany("\App\Models\Page","parent_id");
    }
    public function parent(){
    	return $this->belongsTo("\App\Models\Page","parent_id");
    }
}
