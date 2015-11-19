<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subpage extends Model
{
    public function page(){
    	return $this->belongsTo("App\Models\Page");
    }
}
