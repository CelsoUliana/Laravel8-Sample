<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\CustomerApiController;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $apiController;

    /*
        Dependency injection of the Api controller class.
    */
    public function __construct(){
        $this->apiController = new CustomerApiController();
    }

    public function index(){
        $data = $this->apiController->index();
        return view('new')->with('data', $data);
    }
}
