<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Carts;
use Illuminate\Http\Request;


class CartsController extends Controller
{
    public function addCart(Request $request)
    {
        $product = session('product');
        $quantity = $request->input('quantity');
        $customer = session('customer');
        if (!empty($customer->id)) {
            $cart_id=Carts::select('id');
        }
        dd($customer->id);

    }
}
