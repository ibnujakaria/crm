<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Validator;
use App\Api\ProductApi;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
  protected $productApi;

  public function __construct(ProductApi $productApi)
  {
    $this->productApi = $productApi;
    view()->share('menuActive', 'products');
  }

  public function index()
  {
    $products = $this->productApi->getAll();
    return view('admin.products.index', compact('products'));
  }

  public function create()
  {
    return view('admin.products.create');
  }

  public function store(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'nama' => 'required',
      'harga' => 'required|numeric|min:0',
      'stok' => 'required|numeric|min:0',
      'cover' => 'required|image|max:2000'
    ]);

    if ($validator->fails()) {
      return redirect()->back()->withInput()->withErrors($validator);
    }

    # nek sukses
    $this->productApi->insert($request);

    return redirect()->to('products');
  }
}
