<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


public function run()
{
    DB::table('admins')->insert([
        'name' => 'zakkspace',
        'password' => Hash::make('admin123'), 
    ]);
    }
}

