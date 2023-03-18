<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($j=0; $j < 10000; $j++) {
            $data = [];
            for ($i=1; $i <= 10000; $i++) {
                $data[] = ['title'=>'Task'.($i+$j*10000).' name', 'description'=>'Task'.($i+$j*10000).' Description', 'assigned_by_id'=> rand(1,100), 'assigned_to_id'=> rand(101,10100)];
            }

            // User::insert($data); // Eloquent approach
            DB::table('tasks')->insert($data); // Query Builder approach
        }
    }
}
