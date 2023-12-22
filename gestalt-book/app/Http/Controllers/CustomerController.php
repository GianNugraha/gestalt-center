<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function listCustomersWithMoreThanTenBorrowedBooks()
    {
        $customers = Customer::has('rents', '>', 10)->withCount('rents')->get();
        return view('customers.customer_info', compact('customers'));
    }
}
