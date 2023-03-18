<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];

        for ($i=1; $i <= 10000; $i++) {
            $data[] = ['name'=>'User'.$i.' name', 'is_admin'=> 0];
        }

        // User::insert($data); // Eloquent approach
        DB::table('users')->insert($data); // Query Builder approach
    }
}
