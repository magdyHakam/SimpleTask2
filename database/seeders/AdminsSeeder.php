<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];

        for ($i=1; $i <= 100; $i++) {
            $data[] = ['name'=>'Admin'.$i.' name', 'is_admin'=> 1];
        }

        // User::insert($data); // Eloquent approach
        DB::table('users')->insert($data); // Query Builder approach
    }
}
