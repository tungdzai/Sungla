<?php

namespace App\Repositories\Carts;
interface CartRepositoryInterface
{
  public function addCart($customer_id);
  public function addCartItem($data);

  public function showCarts($customer_id);
  public function deleteProduct($product_id);
}
