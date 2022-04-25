<?php

use Illuminate\Database\Seeder;
use App\Entities\Tag;
use App\Entities\Post;

class TaggableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::ofType('posts')->where('status', 1)->get();
        $tags = Tag::where('status',1)->pluck('id')->toArray();
        foreach ($posts as $post) {
            $post->attachTags([$tags[array_rand($tags)], $tags[array_rand($tags)]]);
        }
    }
}
