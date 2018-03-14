<?php

use Illuminate\Database\Seeder;

use App\Usertype;
class UsertypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usertype::insert([
            'id_usertype' => 1,
            'usertype' => 'superuser',
        ]);
    }
}
