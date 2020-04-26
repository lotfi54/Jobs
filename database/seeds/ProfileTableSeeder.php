<?php

use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('profiles')->insert([
            'user_id' => '1',
            'gender' => 'male',
            'address' => '31 A rue de la Meuse',
            'firstname' => 'lotfi',
            'lastname' => 'Bouraine',
            'dob' => '1993-01-29',
            'experience' => 'je suis dev',
            'bio' => 'Trop de chose a dire',
        ]);

        DB::table('profiles')->insert([
            'user_id' => '2',
            'gender' => 'male',
            'address' => '31 A rue de la Meuse',
            'firstname' => 'Ryad',
            'lastname' => 'Bouraine',
            'dob' => '1993-01-29',
            'experience' => 'je suis dev',
            'bio' => 'Trop de chose a dire',
        ]);

        DB::table('profiles')->insert([
            'user_id' => '3',
            'gender' => 'male',
            'address' => '31 A rue de la Meuse',
            'firstname' => 'Killian',
            'lastname' => 'Bouraine',
            'dob' => '1993-01-29',
            'experience' => 'je suis dev',
            'bio' => 'Trop de chose a dire',
        ]);
    }
}
