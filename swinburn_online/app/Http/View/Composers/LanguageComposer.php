<?php

namespace App\Http\View\Composers;

use App\Entities\Language;
use Illuminate\View\View;

class LanguageComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $langs = Language::get();
        $view->with([
            'langs' => $langs
        ]);
    }
}
