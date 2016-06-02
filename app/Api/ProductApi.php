<?php
namespace App\Api;

use App\Product;

class ProductApi {

  public function getAll()
  {
    return Product::orderby('id', 'desc')->get();
  }

  public function insert($request)
  {
    $product = new Product;
    $product->nama = $request->nama;
    $product->harga = $request->harga;
    $product->stok = $request->stok;

    $cover = $product->nama . "_" . uniqid() . "." . $request->file('cover')->extension();
    $cover = snake_case($cover);
    $request->file('cover')->move('assets/dist/images/', $cover);
    $product->cover = $cover;
    $product->save();

    return $product;
  }
}
