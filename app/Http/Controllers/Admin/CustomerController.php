<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Api\CustomersApi;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
  protected $customersApi;

  public function __construct(CustomersApi $customersApi)
  {
    $this->customersApi = $customersApi;
    view()->share('menuActive', 'customers');
  }

  public function index()
  {
    $customers = $this->customersApi->getAll();
    return view('admin.customers.index', compact('customers'));
  }
}
