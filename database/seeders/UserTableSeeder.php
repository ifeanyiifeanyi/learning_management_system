<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
             // admin insert
            [
                'name' => 'Admin User',
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'role' => 'admin',
                'status' => 1,
                'password' => Hash::make('12345678')
            ] ,
            // instructor
            [
                'name' => 'Instructor User',
                'username' => 'instructor',
                'email' => 'instructor@instructor.com',
                'role' => 'instructor',
                'status' => 1,
                'password' => Hash::make('12345678')
            ] ,
            //user
            [
                'name' => 'User User',
                'username' => 'user',
                'email' => 'user@user.com',
                'role' => 'user',
                'status' => 1,
                'password' => Hash::make('12345678')
            ] ,
        ]);
    }
}
