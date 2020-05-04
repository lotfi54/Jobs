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

 public function users(){
        return $this->belongsToMany(User::class)->withTimeStamps();
    }

public function checkApplication() {
    return \DB::table('job_user')->where('user_id',auth()->user()->id)->where('job_id',$this->id)->exists(); 
}


}
