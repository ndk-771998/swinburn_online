<?php

namespace App\Http\View\Composers;

use App\Entities\Post;
use Illuminate\View\View;

class SearchHintsComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $posts = Post::whereIn('type', ['posts', 'events', 'faqs'])->where('status', 1)->with('languages')->latest()->limit(30)->get();

        $view->with([
            'searching_hints' => $posts,
        ]);
    }
}
