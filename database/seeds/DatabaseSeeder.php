<?php

use App\Category;
use App\Job;
use App\Profile;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


 $this->call(UsersTableSeeder::class);
         $this->call(RolesTableSeeder::class);
    $this->call(ProfileTableSeeder::class);
       	factory('App\User',20)->create();
    	factory('App\Company',20)->create();
    	factory('App\Job',20)->create();

  $categories = [

            'Finance',
            'Industrie',
            'Marketing et Communication',
            'BTP et Construction',
            'Informatique et Technologie'

        ];
        foreach($categories as $category){
            Category::create(['name'=>$category]);
        }
    }
}
