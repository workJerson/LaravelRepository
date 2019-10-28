<?php

namespace App\Repositories;

use App\Customer;

class CustomerRepository
{
    public function all()
    {
        return Customer::all();
    }
}
