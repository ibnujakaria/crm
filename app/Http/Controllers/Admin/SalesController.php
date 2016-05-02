<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SalesController extends Controller
{
  public function __construct()
  {
    view()->share('menuActive', 'sales');
  }

  public function index()
  {
    return view('admin.sales.index');
  }
}
