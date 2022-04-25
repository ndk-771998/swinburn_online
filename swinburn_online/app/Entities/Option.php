<?php

namespace App\Entities;

use VCComponent\Laravel\Config\Services\Option as ServicesOption;
use VCComponent\Laravel\Language\Entities\Language;
use VCComponent\Laravel\Language\Traits\HasLanguageOptionTrait;

class Option extends ServicesOption
{
    use HasLanguageOptionTrait;
    public function languages()
    {
        $lagueconfig = config('app.locale');
        return $this->morphToMany(Language::class, 'languageable')->where('code', $lagueconfig)->withPivot('field', 'value')->withTimestamps();
    }
}
