<?php

use Illuminate\Database\Seeder;
use App\Entities\Language;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->insertLanguage();
    }

    public function insertLanguage(){
        Language::insert([
            'name' => 'Tiếng Anh',
            'code' => 'en'
        ]);
    }
}
