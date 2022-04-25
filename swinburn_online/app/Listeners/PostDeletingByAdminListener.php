<?php

namespace App\Listeners;

use VCComponent\Laravel\Category\Entities\Category;

class PostDeletingByAdminListener
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $post = $event->post;
        $request = request();
        
        if ($post->type == "onlinecourses") {
            $units_category_id = $post->getMetaField('hidden_units_category_id');
            $standards_categories_id = $post->getMetaField('hidden_standards_category_id');

            Category::whereIn('id', [$units_category_id, $standards_categories_id])->delete();
        }

    }
}
