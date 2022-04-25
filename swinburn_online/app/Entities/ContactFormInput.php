<?php

namespace App\Entities;

use App\Entities\ContactFormInputItem;
use App\Entities\ContactFormInputValidation;
use VCComponent\Laravel\ConfigContact\Entites\ContactFormInput as EntitesContactFormInput;
use VCComponent\Laravel\Language\Traits\HasLanguageTrait;

class ContactFormInput extends EntitesContactFormInput
{
    use HasLanguageTrait;

    public function contactFormInputItems()
    {
        return $this->hasMany(ContactFormInputItem::class)->with('languages');
    }

    public function contactFormInputValidations()
    {
        return $this->hasMany(ContactFormInputValidation::class)->with('languages');
    }

    public function contactForm()
    {
        return $this->belongsTo(ContactForm::class);
    }

    public function getLabelAttribute($value)
    {
        $trans = $this->getField('label');
        $language_translate = $this->translate($value, $trans);
        return $language_translate;
    }

    public function getPlaceHolderAttribute($value)
    {
        $trans = $this->getField('placeholder');
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
