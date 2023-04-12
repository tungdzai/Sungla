<?php

namespace App\Repositories\Customers;

use App\Models\Customers;
use App\Repositories\Customers\CustomerRepositoryInterface;

class CustomerRepository implements CustomerRepositoryInterface
{

    public function addCustomer($data)
    {
        if ($data) {
            return Customers::create($data);
        }
    }
}
