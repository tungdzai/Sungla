<?php

namespace App\Repositories\Carts;

use App\Models\CartItems;
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

    public function addCartItem($data)
    {
        if ($data) {
            return CartItems::create($data);
        }
    }

    public function showCarts($customer_id)
    {
        if ($customer_id) {
            $cart_items = Carts::select(
                'products.image',
                'products.name',
                'cart_items.quantity',
                'cart_items.price',

            )
                ->join('cart_items', 'carts.id', '=', 'cart_items.cart_id')
                ->join('products', 'products.id', '=', 'cart_items.product_id')
                ->where('carts.customer_id', $customer_id)
                ->get();
            return $cart_items;
        }
    }

    public function deleteProduct($product_id)
    {
        if ($product_id) {
        }
    }
}
