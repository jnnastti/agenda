<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'name' => env('ADMIN_USER'),
            'email' => env('ADMIN_USER_MAIL'),
            'password' => env('ADMIN_USER_PASSWORD'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
