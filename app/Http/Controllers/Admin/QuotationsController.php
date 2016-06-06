<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Api\ProductApi;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class QuotationsController extends Controller
{
  protected $productApi;

  public function __construct(ProductApi $productApi)
  {
    $this->productApi = $productApi;
    view()->share('menuActive', 'quotations');
  }

  public function index()
  {
    return view('admin.quotations.index');
  }

  public function create()
  {
    $products = $this->productApi->getAll();
    return view('admin.quotations.create', compact('products'));
  }
}
