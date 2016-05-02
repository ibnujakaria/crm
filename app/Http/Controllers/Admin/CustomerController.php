<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
  public function __construct()
  {
    view()->share('menuActive', 'customers');
  }

  public function index()
  {
    return view('admin.customers.index');
  }
}
