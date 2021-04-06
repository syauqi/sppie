<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Adding user that has admin roles
        DB::table('users')->insert([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'roles' => 'ADMIN',
        ]);
        // Adding user that has student roles
        DB::table('users')->insert([
            'nisn' => '181910575',
            'address' => 'Jl RA Kartini 26 Ventura Bldg Lt 8,Cilandak Barat',
            'phone_number' => '0217504417',
            'class' => 'XII — RPL',
            'name' => 'Syauqizaidan Khairan Khalaf',
            'username' => 'syauqi@sppie.com',
            'email' => 'syauqi@sppie.com',
            'password' => Hash::make('123456'),
            'roles' => 'STUDENT',
        ]);
        // Adding user that has staff roles
        DB::table('users')->insert([
            'name' => 'Staff',
            'username' => 'staff@sppie.com',
            'email' => 'staff@sppie.com',
            'password' => Hash::make('123456'),
            'roles' => 'STAFF',
        ]);
        // Adding RPL class seeder
        DB::table('classes')->insert([
            'class_id' => 'RPL001',
            'class_name' => 'XII — RPL',
            'skill_competence' => 'REKAYASA PERANGKAT LUNAK',
        ]);
        // Adding MM class seeder
        DB::table('classes')->insert([
            'class_id' => 'MM001',
            'class_name' => 'XII — MM',
            'skill_competence' => 'MULTIMEDIA',
        ]);
        // Adding Akuntansi class seeder
        DB::table('classes')->insert([
            'class_id' => 'AK001',
            'class_name' => 'XII — AK',
            'skill_competence' => 'AKUNTANSI',
        ]);
    }
}
