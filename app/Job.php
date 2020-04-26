<?php

namespace App;

use App\Company;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
protected $fillable = ['user_id','company_id','title','slug','description','roles','category_id','position','address','type','status','last_date'];
    public function getRoutekeyName()  {
    	return 'slug'; 
    }

    public function company() {
    	return $this->belongsTo('App\Company');
    }
}
