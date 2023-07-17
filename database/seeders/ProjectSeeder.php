<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $types = Type::all(['id']);
        $technologies = Technology::all(['id']);

        for ($i = 0; $i < 7; $i++) {
            $project = new Project();
            $project->title = $faker->text();
            $project->description = $faker->text();
            $project->image = $faker->imageUrl(800, 600, 'animals', true);
            $project->type_id = $types->random()->id;

            
            $project->save();
        }
    }
}
