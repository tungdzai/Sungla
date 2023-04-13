<?php

namespace App\Repositories\Products;

interface ProductRepositoryInterface
{
    public function getAll();
    public function getProduct($id);
}
