<?php

namespace App\Entities;

use VCComponent\Laravel\ConfigContact\Entites\ContactFormInputValidation as EntitesContactFormInputItem;
use VCComponent\Laravel\Language\Traits\HasLanguageTrait;

class ContactFormInputValidation extends EntitesContactFormInputItem
{
    use HasLanguageTrait;

    public function scopeCheckHasLanguage($q, $language_session)
    {
        $q->whereHas('languages', function ($l) use ($language_session) {
            $l->where('code', $language_session);
        });
    }

    public function getValidationValueAttribute($value)
    {
        $trans = $this->getField('validation_value');
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
