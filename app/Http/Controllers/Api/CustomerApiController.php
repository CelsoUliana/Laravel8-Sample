<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Http\Resources\CustomerResource;

class CustomerApiController extends Controller
{
    public function index(){
        return CustomerResource::collection(Customer::all());
    }

    public function show(Customer $customer){
        return new CustomerResource($customer);
    }

    public function store(Request $request){

        $validated = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|max:255|unique:customers'
        ]);

        $customer = Customer::Create($validated);

        return response()->json(new CustomerResource($customer), 201);
    }

    public function update(Customer $customer, Request $request){

        $validated = $request->validate([
            'first_name' => 'max:255',
            'last_name' => 'max:255',
            'email' => 'max:255|unique:customers'
        ]);

        $customer->update($validated);

        return response()->json(new CustomerResource($customer), 200);
    }

    public function delete(Customer $customer){

        $customer->delete();

        return response()->json(null, 204);
    }
}
