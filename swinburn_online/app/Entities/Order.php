<?php

namespace App\Entities;

use VCComponent\Laravel\Order\Entities\Order as EntitiesOrder;
use VCComponent\Laravel\Order\Entities\OrderItem;

class Order extends EntitiesOrder
{
    public function products() {
        return $this->hasManyThrough(Product::class, OrderItem::class, 'id', 'id');
    }
}
