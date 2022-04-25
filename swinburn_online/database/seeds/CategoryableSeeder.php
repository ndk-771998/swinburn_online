<?php

use Illuminate\Database\Seeder;
use App\Entities\Post;
use App\Entities\Category;

class CategoryableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->categoryPosts();
        $this->categoryFaqs();
        $this->categoryEvents();
    }

    public function categoryPosts(){
        $posts = Post::ofType('posts')->get();
        $category_posts = Category::ofType('posts')->pluck('id')->toArray();
        foreach ($posts as $post) {
            $post->attachCategories([$category_posts[array_rand($category_posts)], $category_posts[array_rand($category_posts)]]);
        }
    }

    public function categoryFaqs(){
        $posts = Post::ofType('faqs')->get();
        $category_faqs = Category::ofType('faqs')->pluck('id')->toArray();
        foreach ($posts as $post) {
            $post->attachCategories([$category_faqs[array_rand($category_faqs)], $category_faqs[array_rand($category_faqs)]]);
        }
    }

    public function categoryEvents(){
        $posts = Post::ofType('events')->get();
        $category = Category::ofType('events')->pluck('id')->toArray();
        foreach ($posts as $post) {
            $post->attachCategories([$category[array_rand($category)], $category[array_rand($category)]]);
        }
    }
}
