<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Api\LeadsApi;

class LeadsController extends Controller
{
  protected $leadsApi;

  public function __construct(LeadsApi $leadsApi)
  {
    $this->leadsApi = $leadsApi;
    view()->share('menuActive', 'leads');
  }

  public function index()
  {
    $leads = $this->leadsApi->getAll();
    return view('admin.leads.index', compact('leads'));
  }

  public function create()
  {
    return view('admin.leads.create');
  }

  public function store(Request $request)
  {
    $validator = \Validator::make($request->all(), [
      "nama" => "required",
      "email" => "required|email|unique:sources",
      "nama_perusahaan" => "required",
      "sumber" => "required",
      "industri" => "required",
      "tanggal_lahir" => "required",
      "jenis_kelamin" => "required",
      "alamat" => "required"
    ]);

    if ($validator->fails()) {
      return redirect()->back()->withInput()->withErrors($validator);
    }

    $this->leadsApi->insert($request->all());
    return redirect()->to('leads');
  }
}
