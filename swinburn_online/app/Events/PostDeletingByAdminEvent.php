<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;

class PostDeletingByAdminEvent
{
    use SerializesModels;

    public $post;

    public function __construct($post)
    {
        $this->post = $post;
    }
}
