<?php
use App\Entities\PostMeta;
use Illuminate\Database\Seeder;
use VCComponent\Laravel\Language\Entities\Languageable;

class LanguageableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Languageable::insert([
            [
                'languageable_type' => "item_menus",
                'languageable_id' => "1",
                'language_id' => "1",
                'field' => "label",
                'value' => "About",
            ],
            [
                'languageable_type' => "item_menus",
                'languageable_id' => "2",
                'language_id' => "1",
                'field' => "label",
                'value' => "FAQs",
            ],
            [
                'languageable_type' => "item_menus",
                'languageable_id' => "3",
                'language_id' => "1",
                'field' => "label",
                'value' => "Current students",
            ],
            [
                'languageable_type' => "item_menus",
                'languageable_id' => "4",
                'language_id' => "1",
                'field' => "label",
                'value' => "On campus courses",
            ],
            [
                'languageable_type' => "item_menus",
                'languageable_id' => "5",
                'language_id' => "1",
                'field' => "label",
                'value' => "Contact us",
            ],
            [
                'languageable_type' => "item_menus",
                'languageable_id' => "6",
                'language_id' => "1",
                'field' => "label",
                'value' => "Swinburne university",
            ],
            [
                'languageable_type' => "item_menus",
                'languageable_id' => "7",
                'language_id' => "1",
                'field' => "label",
                'value' => "Swinburne in Vietnam",
            ],
            [
                'languageable_type' => "item_menus",
                'languageable_id' => "8",
                'language_id' => "1",
                'field' => "label",
                'value' => "Student support",
            ],
            [
                'languageable_type' => "options",
                'languageable_id' => "46",
                'language_id' => "1",
                'field' => "value",
                'value' => config('app.url') . "/assets/images/banners/home_body_banner_english.jpg",
            ],
        ]);

    }
}
