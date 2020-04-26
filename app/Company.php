<?php

namespace App;

use App\Job;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

		protected $fillable = [
        'cname', 'user_id', 'slug','address','phone','website','logo','cover_photo','slogan','description'
    ];
    
    public function jobs() {
    	return $this->hasMany('App\Job');
    }

  

     public function getRoutekeyName()  {
    	return 'slug'; 
    }

}
