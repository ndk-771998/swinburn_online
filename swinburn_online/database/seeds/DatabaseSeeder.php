<?php

use App\Entities\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(OrderStatusSeeder::class);
        $this->call(GendersTableSeeder::class);
        $this->call(MediaDimentionSeeder::class);
        $this->call(AnalyticsQuerySeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(TagSeeder::class);
        $this->call(CategoryableSeeder::class);
        $this->call(TaggableSeeder::class);
        $this->call(OptionSeeder::class);
        $this->call(ContactFormSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(LanguageableTableSeeder::class);
    }
}
