<?php

use Illuminate\Database\Seeder;
use Faker\Generator;
use App\Models\Project;
use App\Models\Language;
use Illuminate\Support\Arr;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
       /*  $language_ids = Language::pluck('id')->toArray();
        
        for($i = 0; $i < 50; $i++){
            $p = new Project();
            $p->language_id = Arr::random($language_ids);
            $p->title = $faker->name();
            $p->description = $faker->paragraph();
            $p->img = $faker->imageUrl(640, 480, 'animals', true );
            $p->save();
        } */
    }
}
