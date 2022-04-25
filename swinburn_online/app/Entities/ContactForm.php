<?php

namespace App\Entities;

use App\Entities\ContactFormInput;
use VCComponent\Laravel\ConfigContact\Entites\ContactForm as EntitesContactForm;
use VCComponent\Laravel\Language\Traits\HasLanguageTrait;

class ContactForm extends EntitesContactForm
{
    use HasLanguageTrait;

    public function contactFormInputs()
    {
        return $this->hasMany(ContactFormInput::class);
    }

    public function contactFormValues()
    {
        return $this->hasMany(ContactFormValue::class);
    }

    public function getNameAttribute($value)
    {
        $trans = $this->getField('name');
        $language_translate = $this->translate($value, $trans);
        return $language_translate;
    }

    public function getSubmitButtonContentAttribute($value)
    {
        $trans = $this->getField('submit_button_content');
        $language_translate = $this->translate($value, $trans);
        return $language_translate;
    }

    public function getSuccessNotificationContentAttribute($value)
    {
        $trans = $this->getField('success_notification_content');
        $language_translate = $this->translate($value, $trans);
        return $language_translate;
    }
}
