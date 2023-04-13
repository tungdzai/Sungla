<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Repositories\Products\ProductRepositoryInterface;

class ProductsController extends Controller
{
    public $productRepository;
    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository=$productRepository;
    }

    public function ProductDetail($id)
    {
        $product=$this->productRepository->getProduct($id);
        $data['product']=$product;
        session()->put('product',$product);
//        dd($product);
        return view('client.products.product_detail',$data);
    }
}
