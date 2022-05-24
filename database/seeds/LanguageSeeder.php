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
            ['name' => 'Html', 'color' => 'danger'],
            ['name' => 'Css', 'color' => 'primary'],
            ['name' => 'JS', 'color' => 'warning'],
            ['name' => 'VueJS', 'color' => 'secondary'],
            ['name' => 'Bootstrap', 'color' => 'primary'],
            ['name' => 'Php', 'color' => 'primary'],
            ['name' => 'Laravel', 'color' => 'secondary'],
            ['name' => 'MysQL', 'color' => 'light'],
            ['name' => 'VSCode', 'color' => 'dark'],
        ];

        foreach($languages as $language){
            $l = new Language();
            $l->name = $language['name'];
            $l->color = $language['color'];
            $l->save();
        }
    }
}
