<?php

namespace App\Entities;

use VCComponent\Laravel\ConfigContact\Entites\ContactFormInputItem as EntitesContactFormInputItem;
use VCComponent\Laravel\Language\Traits\HasLanguageTrait;

class ContactFormInputItem extends EntitesContactFormInputItem
{
    use HasLanguageTrait;
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
