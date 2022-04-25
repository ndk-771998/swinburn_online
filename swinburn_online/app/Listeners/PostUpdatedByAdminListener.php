<?php

namespace App\Listeners;

use App\Entities\Category;
use App\Entities\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use VCComponent\Laravel\Notification\Entities\Notification as EntitiesNotification;
use VCComponent\Laravel\Notification\Notifications\Notification;

class PostUpdatedByAdminListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

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
            $medias = $post->getMedia();
            if ($medias->count()) {
                $media_ids = $medias->map(function ($media) {
                    return $media->id;
                })->toArray();
                $post->detachMedia($media_ids);
            }
            $post->attachMedia($request->input('media_ids'));
        }

        if ($request->has('category_ids')) {
            $categories = $post->categories;
            if ($categories->count()) {
                $category_ids = $post->categories->map(function ($cate) {
                    return $cate->id;
                })->toArray();
                $post->detachCategories($category_ids);
            }
            $post->attachCategories($request->input('category_ids'));
        }

        if ($request->has('tag_ids')) {
            $tags = $post->tags;
            if ($tags->count()) {
                $tag_ids = $post->tags->map(function ($tag) {
                    return $tag->id;
                })->toArray();
                $post->detachtags($tag_ids);
            }
            $post->attachtags($request->input('tag_ids'));
        }

        if ($request->has('media_urls')) {

            $medias = $post->getMedia();
            if ($medias->count()) {
                $media_ids = $medias->map(function ($media) {
                    return $media->id;
                })->toArray();
                $post->detachMedia($media_ids);
            }

            foreach ($request->media_urls as $item) {
                if($item != null) {
                    $image_path = explode($request->getSchemeAndHttpHost().'/', $item);
                    $medias = $post->addMedia(public_path($image_path[1]))->preservingOriginal()->toMediaCollection();
                    $post->attachMedia($medias->id);
                }

            }
        }

        if ($request->has('tag_ids')) {
            $post->syncTag($request->input('tag_ids'));
        }

        $users = User::whereHas('roles', function ($q) {
            $q->where('slug', 'admin');
        })->get();

        $notification = EntitiesNotification::where('slug', 'thong-bao-co-admin-cap-nhat-bai-viet')->first();

        if($users->count() && $notification) {
            $user = new User();
            $user->email = "admin@vmms.vn";
            $user->notify(new Notification($notification, ['LOGO_URL' => 'https://vmms.vn/assets/images/img/logo-nen.png'], $users));
        }
        
        if ($post->type == "onlinecourses") {
            $units_category_id = $post->getMetaField('hidden_units_category_id');
            $standards_categories_id = $post->getMetaField('hidden_standards_category_id');

            Category::whereIn('id', [$units_category_id, $standards_categories_id])->update([
                'name' => $post->title,
            ]);
        }
    }
}
