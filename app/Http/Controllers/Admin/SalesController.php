<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Api\SalesApi;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SalesController extends Controller
{
  protected $salesApi;

  public function __construct(SalesApi $salesApi)
  {
    $this->salesApi = $salesApi;
    $this->middleware('harus.admin');

    view()->share('menuActive', 'sales');
  }

  public function index()
  {
    $sales = $this->salesApi->getAll();
    return view('admin.sales.index', compact('sales'));
  }

  public function create($value='')
  {
    return view('admin.sales.create');
  }

  public function store(Request $request)
  {
    $validator = \Validator::make($request->all(), [
      'nama' => 'required',
      'email' => 'required|email|unique:sales',
      'tanggal_lahir' => 'required',
      'jenis_kelamin' => 'required',
      'status_perkawinan' => 'required',
      'alamat' => 'required',
      'password' => 'required|confirmed'
    ]);

    if ($validator->fails()) {
      return redirect()->back()->withInput()->withErrors($validator);
    }

    $this->salesApi->insert($request->all());

    return redirect()->to('sales');
  }
}
