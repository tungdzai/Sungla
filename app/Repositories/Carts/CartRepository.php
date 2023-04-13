<?php

namespace App\Repositories\Carts;

use App\Models\Carts;

class CartRepository implements CartRepositoryInterface
{

    public function addCart($customer_id)
    {
        if (!empty($customer_id)) {
            return Carts::create($customer_id);
        }
        // TODO: Implement addCart() method.
    }
}
