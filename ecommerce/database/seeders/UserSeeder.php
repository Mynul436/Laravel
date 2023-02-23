<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('users')->insert([
            'name' => 'Baki Billah',
            'email' => 'baki@gmail.com',  // unique() is not a valid method,
         'password' => Hash::make('password1'),
        ]);	

        DB::table('users')->insert([
            'name' => 'Abdul Ahad',
            'email' => 'abdul@gmail.com',
            'password' => Hash::make('password2'),
        ]);

    }
}
