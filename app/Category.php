<?php

namespace App;
use App\Job;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function job() {
    	return $this->hasMany('App\job');
    }
}
