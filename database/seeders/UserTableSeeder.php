<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
            // to create admin user on setup
            // email: superadmin@mail.test
            // password: superadmin
            'name' => 'Super Admin',
            'email' => 'superadmin@mail.test',
            'email_verified_at' => now(),
            'password' =>   Hash::make('superadmin'),
            'remember_token' => Str::random(10),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            ]
        ]);
    }
}
