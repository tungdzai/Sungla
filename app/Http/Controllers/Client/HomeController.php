<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Products\ProductRepositoryInterface;

class HomeController extends Controller
{
    public $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $products=$this->productRepository->getAll();
        $data['products']=$products;
//        dd($products);
        return view('client.home',$data);
    }
}
