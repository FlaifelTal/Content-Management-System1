<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //to create a bigger number of data make a loop 
        for($i =1; $i<=50;$i++){
        //pay attention to datatypes 
        DB::table('posts')->insert([
            'title' => Str::random(20),
            'description' => Str::random(200),
            'status' => 1,
            'publish_data' =>date('Y-m-d'),
            'user_id' => 1
        ]);
    }
    }
}
