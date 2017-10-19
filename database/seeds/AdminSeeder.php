<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'=>"Onye-nhazi",
                'email'=>'nhazi@gmail.com',
                'usertype'=>'nhazi',
                'password'=> bcrypt('nwa_ikuku'),
                'phone'=>'08000000001',
            ]
        ]);
    }
}
