<?php

namespace App\Entities;

use Prettus\Repository\Traits\TransformableTrait;
use VCComponent\Laravel\Category\Entities\Category as EntitiesCategory;
use VCComponent\Laravel\Language\Traits\HasLanguageTrait;
use VCComponent\Laravel\Product\Traits\HasProductTrait;

class Category extends EntitiesCategory
{
    use TransformableTrait, HasProductTrait, HasLanguageTrait;

    public function posts()
    {
        return $this->morphedByMany(Post::class, 'categoryable');
    }
}
