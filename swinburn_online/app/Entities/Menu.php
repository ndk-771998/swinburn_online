<?php

namespace App\Entities;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use VCComponent\Laravel\Language\Traits\HasLanguageOptionTrait;
use VCComponent\Laravel\Menu\Entities\Menu as BaseMenu;

class Menu extends BaseMenu
{
    use HasLanguageOptionTrait;

    public static function getMenu($position)
    {
        $website_language = Session::get('website_language') ? Session::get('website_language') : 'vn';
        $cache_name = 'menu ' . $position . ' ' . $website_language;
        $time_cache = 60;
        if (Cache::has($cache_name)) {
            return Cache::get($cache_name);
        }
        return Cache::remember($cache_name, $time_cache, function () use ($position) {
            return Menu::select('id')->where('name', $position)->with('languages')->with('menuItems')->first();
        });
    }

    public function menuItems()
    {
        return $this->hasMany(ItemMenu::class)->where('parent_id', 0)->with('languages')->with('subMenus')->orderBy('order_by', 'ASC');
    }

    public function getField($field)
    {
        if ($this->languages->count()) {
            $a = $this->languages->search(function ($item) use ($field) {
                return $item->pivot->field === $field;
            });
            return $this->languages[$a]->pivot->value;
        }
        return false;
    }
}
