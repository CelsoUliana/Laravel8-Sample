<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\EditCustomerRequest;
use App\Http\Requests\CreateCustomerRequest;
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

    public function store(CreateCustomerRequest $request){

        $validated = $request->validated();

        $customer = Customer::Create($validated);

        return response()->json(new CustomerResource($customer), 201);
    }

    public function update(Customer $customer, EditCustomerRequest $request){

        $validated = $request->validated();

        $customer->update($validated);

        return response()->json(new CustomerResource($customer), 200);
    }

    public function delete(Customer $customer){

        $customer->delete();

        return response()->json(null, 204);
    }
}
