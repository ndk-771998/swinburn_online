<?php

namespace App\Entities;

use VCComponent\Laravel\Language\Traits\HasLanguageTrait;
use VCComponent\Laravel\Menu\Entities\ItemMenu as EntitiesItemMenu;

class ItemMenu extends EntitiesItemMenu 
{
    use HasLanguageTrait;

    public function subMenus()
    {
        return $this->hasMany(ItemMenu::class, 'parent_id')->orderBy('order_by', 'ASC')->with('subMenus:label,link,id,parent_id');
    }

    public function getLabelAttribute($value)
    {
        $trans = $this->getField('label');
        $language_translate = $this->translate($value, $trans);
        return $language_translate;
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