<?php

namespace App;

use App\Company;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

	protected $gurarded = []; 
    public function getRoutekeyName()  {
    	return 'slug'; 
    }

    public function company() {
    	return $this->belongsTo('App\Company');
    }
}
