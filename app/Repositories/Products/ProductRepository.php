<?php

namespace App\Repositories\Products;

use App\Models\Products;

class ProductRepository implements ProductRepositoryInterface
{
    public $query;

    public function __construct(Products $products)
    {
        $this->query = $products->select(
            'name',
            'description',
            'price',
            'image',
            'brand_id',
            'category_id'
        );
    }

    /** get all product
     * @return void
     */
    public function getAll()
    {
        return $this->query->get();
    }
}