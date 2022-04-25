<?php

namespace App\Http\View\Composers;

use App\Entities\Menu;
use Illuminate\View\View;

class MenuComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $menu_header_1 = Menu::getMenu('menu-1');
        $menu_header_2 = Menu::getMenu('menu-2');
        $footer_1     = Menu::getMenu('footer-1');
        $footer_2     = Menu::getMenu('footer-2');
        $view->with([
            'menu_header_1' => $menu_header_1,
            'menu_header_2' => $menu_header_2,
            'footer_1'     => $footer_1,
            'footer_2'     => $footer_2,
        ]);
    }
}
