<?php

namespace App\Listeners;

use App\Entities\Category;
use App\Entities\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use VCComponent\Laravel\Notification\Entities\Notification as EntitiesNotification;
use VCComponent\Laravel\Notification\Notifications\Notification;

class PostCreatedByAdminListener
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $post    = $event->post;
        $request = request();

        if ($request->has('media_ids')) {
            $post->attachMedia($request->input('media_ids'));
        }

        if ($request->has('category_ids')) {
            $post->attachCategories($request->input('category_ids'));
        }
        if ($request->has('tag_ids')) {
            $post->attachTags($request->input('tag_ids'));
        }
        if ($request->has('media_urls')) {

            foreach ($request->media_urls as $item) {

                $image_path = explode($request->getSchemeAndHttpHost().'/', $item);
                $medias = $post->addMedia(public_path($image_path[1]))->preservingOriginal()->toMediaCollection();
                $post->attachMedia($medias->id);
            }

        }

        if ($request->has('tag_ids')) {
            $post->syncTag($request->input('tag_ids'));
        }

        $users = User::whereHas('roles', function ($q) {
            $q->where('slug', 'admin');
        })->get();

        $notification = EntitiesNotification::where('slug', 'thong-bao-co-admin-tao-moi-bai-viet')->first();

        if($users->count() && $notification) {
            $user = new User();
            $user->email = "admin@vmms.vn";
            $user->notify(new Notification($notification, ['LOGO_URL' => 'https://vmms.vn/assets/images/img/logo-nen.png'], $users));
        }

        if ($post->type == "onlinecourses") 
        {
            $units_category = Category::updateOrCreate([
                'name'      => $post->title,
                'type'      => 'units',
            ], [
                'thumbnail' => $post->thumbnail,
            ]);

            $standards_category = Category::updateOrCreate([
                'name'      => $post->title,
                'type'      => 'standards',
            ], [
                'thumbnail' => $post->thumbnail,
            ]);

            $post->postMetas()->updateOrCreate([
                'post_id'   => $post->id,
                'key'   => 'hidden_units_category_id',
            ], [
                'value' => $units_category->id,
            ]); 

            $post->postMetas()->updateOrCreate([
                'post_id'   => $post->id,
                'key'   => 'hidden_standards_category_id',
            ], [
                'value' => $standards_category->id,
            ]); 
        }
    }
}
