<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Carts;
use Illuminate\Http\Request;
use  App\Repositories\Carts\CartRepositoryInterface;


class CartsController extends Controller
{
    public $cartRepository;

    public function __construct(CartRepositoryInterface $cartRepository)
    {
        $this->cartRepository = $cartRepository;
    }

    public function addCart(Request $request)
    {
        $product = session('product');
        $quantity = $request->input('quantity');
        $customer = session('customer');
        if (!empty($customer->id)) {
            $cart_id = Carts::select('id')->where('customer_id', $customer->id)->first();
        }
        $cart_item = [
            'cart_id' => $cart_id->id,
            'product_id' => $product->id,
            'quantity' => $quantity,
            'price' => $product->price
        ];
//        dd($cart_item);
        $statusCartItem = $this->cartRepository->addCartItem($cart_item);
        if ($statusCartItem) {
            return redirect()->back();
        }
    }

    public function showCart(Request $request)
    {
        $showCarts = $this->cartRepository->showCarts(session('customer')->id);
        $data['showCarts'] = $showCarts;
        return view('client.carts.show_cart', $data);

    }

    public function deleteProductCart($product_id)
    {
        return $product_id;
    }
}
