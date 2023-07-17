<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Technology::create(['name' => 'PHP']);
        Technology::create(['name' => 'JavaScript']);
        Technology::create(['name' => 'Laravel']);
        Technology::create(['name' => 'Vue']);
    }
}
