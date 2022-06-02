<?php

use Illuminate\Database\Seeder;
use App\Models\Language;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            ['name' => 'Html', 'color' => 'secondary'],
            ['name' => 'Css', 'color' => 'secondary'],
            ['name' => 'JS', 'color' => 'secondary'],
            ['name' => 'VueJS', 'color' => 'secondary'],
            ['name' => 'Bootstrap', 'color' => 'secondary'],
            ['name' => 'Php', 'color' => 'secondary'],
            ['name' => 'Laravel', 'color' => 'secondary'],
            ['name' => 'MysQL', 'color' => 'secondary'],
            ['name' => 'VSCode', 'color' => 'secondary'],
        ];

        foreach($languages as $language){
            $l = new Language();
            $l->name = $language['name'];
            $l->color = $language['color'];
            $l->save();
        }
    }
}
