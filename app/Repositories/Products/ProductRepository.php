<?php

namespace App\Repositories\Products;

use App\Models\Products;

class ProductRepository implements ProductRepositoryInterface
{
    public $query;

    public function __construct(Products $products)
    {
        $this->query = $products->select(
            'id',
            'name',
            'description',
            'price',
            'image',
        );
    }

    /** get all product
     * @return void
     */
    public function getAll()
    {
        return $this->query->get();
    }

    public function getProduct($id)
    {
        if (!empty($id)){
            $product=$this->query
                ->select(
                    'products.id',
                    'products.name',
                    'products.description',
                    'products.price',
                    'products.image',
                    'brands.name as brand_name',
                    'categories.name as category_name',
                )
                ->join('brands','brands.id','=','products.brand_id')
                ->join('categories','categories.id','=','products.category_id')
                ->where('products.id',$id)
                ->first();
            return  $product;
        }
    }
}
