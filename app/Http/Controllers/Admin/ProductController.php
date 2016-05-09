<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
  public function __construct()
  {
    view()->share('menuActive', 'products');
  }

  public function index()
  {
    return view('admin.products.index');
  }
}
