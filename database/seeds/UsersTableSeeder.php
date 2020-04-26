<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'MD.Admin',
            'email' => 'admin@job.com',
            'password' => bcrypt('rootadmin'),
        ]);
  			DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'MD.Company',
            'email' => 'company@job.com',
            'password' => bcrypt('rootcompany'),
        ]);

        DB::table('users')->insert([
            'role_id' => '3',
            'name' => 'MD.Author',
            'email' => 'seeker@job.com',
            'password' => bcrypt('rootseeker'),
        ]);
    }
}
