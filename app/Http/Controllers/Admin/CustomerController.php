<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        // dd($customers);
        return view('admin.customers.index', compact('customers'));
    }
    public function show($id)
    {
        return view('admin.customers.show', [
            'customer' => Customer::findOrFail($id)
        ]);
    }
}
