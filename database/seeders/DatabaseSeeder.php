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
            'password' => Hash::make('123456'),
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
            'name' => 'Tatang Suherman',
            'username' => 'tatang@sppie.com',
            'email' => 'tatang@sppie.com',
            'password' => Hash::make('123456'),
            'roles' => 'STAFF',
        ]);
    }
}
