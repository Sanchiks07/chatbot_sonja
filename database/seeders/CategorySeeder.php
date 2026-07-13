<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'General_Information'],

            ['name' => 'Transport'],

            ['name' => 'Accommodation'],

            ['name' => 'Food_Groceries'],

            ['name' => 'Healthcare'],

            ['name' => 'Meeting_PLaces'],

            ['name' => 'Sightseeing'],
            
            ['name' => 'Emergency']
        ]);
    }
}
