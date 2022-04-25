<?php

namespace App\Listeners;

use App\Entities\User;
use VCComponent\Laravel\Notification\Entities\Notification as EntitiesNotification;
use VCComponent\Laravel\Notification\Notifications\Notification;

class ProductCreatedByAdminListener
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
        $product = $event->product;
        $request = request();

        if ($request->has('media_ids')) {
            $product->attachMedia($request->input('media_ids'));
        }

        if ($request->has('category_ids')) {
            $product->attachCategories($request->input('category_ids'));
        }
        if ($request->has('media_urls')) {
            
            foreach ($request->media_urls as $item) {
                $image_path = explode($request->getSchemeAndHttpHost().'/', $item);
                $medias = $product->addMedia(public_path($image_path[1]))->preservingOriginal()->toMediaCollection();
                $product->attachMedia($medias->id);
            }

        }

        if ($request->has('tag_ids')) {
            $product->syncTag($request->input('tag_ids'));
        }

        $users = User::whereHas('roles', function ($q) {
            $q->where('slug', 'admin');
        })->get();

        $notification = EntitiesNotification::where('slug', 'thong-bao-co-admin-tao-moi-san-pham')->first();

        if($users->count() && $notification) {
            $user = new User();
            $user->email = "admin@vmms.vn";
            $user->notify(new Notification($notification, ['LOGO_URL' => 'https://vmms.vn/assets/images/img/logo-nen.png'], $users));
        }
    }
}
