<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Hassan',
            'email' => 'hassan@gmail.com',
            'password' => bcrypt('123456789'),
        ]);
        DB::table('users')->insert([
            'name' => 'Hassan',
            'email' => 'hassan1@gmail.com',
            'password' => bcrypt('123456789'),
        ]);
        DB::table('users')->insert([
            'name' => 'Hassan',
            'email' => 'hassan2@gmail.com',
            'password' => bcrypt('123456789'),
        ]);
        DB::table('users')->insert([
            'name' => 'Hassan',
            'email' => 'hassan3@gmail.com',
            'password' => bcrypt('123456789'),
        ]);
    }
}
