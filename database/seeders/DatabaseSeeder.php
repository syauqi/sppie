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
        DB::table('users')->insert([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'roles' => 'ADMIN',
        ]);

        DB::table('users')->insert([
            'name' => 'Syauqizaidan Khairan Khalaf',
            'username' => 'syauqi@sppie.com',
            'email' => 'syauqi@sppie.com',
            'password' => Hash::make('123456'),
            'roles' => 'STUDENT',
        ]);

        DB::table('users')->insert([
            'name' => 'Tatang Suherman',
            'username' => 'tatang@sppie.com',
            'email' => 'tatang@sppie.com',
            'password' => Hash::make('123456'),
            'roles' => 'STAFF',
        ]);
    }
}
