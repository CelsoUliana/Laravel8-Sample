<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Http\Resources\CustomerResource;

class CustomerController extends Controller
{
    public function index(){
        return CustomerResource::collection(Customer::all());
    }

    public function add(Request $request){
        $customer = new Customer([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
        ]);

        $customer->save();

        return response()->json(['statusCode' => 201, 'message' => 'Customer added sucessfully.']);
    }

    public function search($id){
        $customer = Customer::find($id);
        return response()->json(['StatusCode' => 200, 'message' => 'Customer found sucessfully', 'data' => $customer]);
    }

    public function update($id, Request $request){
        $customer = Customer::find($id);
        $customer->update($request->all());

        return response()->json(['statusCode' => 200, 'message' => 'Customer updated sucessfully.']);
    }

    public function delete($id){
        $customer = Customer::find($id);
        $customer->delete();

        return response()->json(['statusCode' => 204, 'message' => 'Customer deleted sucessfully.']);
    }

}
