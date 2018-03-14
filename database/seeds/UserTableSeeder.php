<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Usertype;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Laracry',
            'email' => 'mzfahri620@gmail.com',
            'password' => bcrypt('secret'),
            "created_at" =>  \Carbon\Carbon::now(), # \Datetime()
            "updated_at" => \Carbon\Carbon::now(),  # \Datetime()
            'id_usertype' => 1,
        ]);
    }
}
