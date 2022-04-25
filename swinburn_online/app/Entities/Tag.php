<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use VCComponent\Laravel\Language\Traits\HasLanguageTrait;
use VCComponent\Laravel\Tag\Entities\Tag as BaseTag;

class Tag extends BaseTag
{
    use HasLanguageTrait;
    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }
}
