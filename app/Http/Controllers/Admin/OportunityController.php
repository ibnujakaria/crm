<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Api\SalesApi;
use App\Api\LeadsApi;
use App\Api\OportunityApi;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OportunityController extends Controller
{
  protected $salesApi, $leadsApi, $oportunityApi;

  public function __construct(SalesApi $salesApi, LeadsApi $leadsApi, OportunityApi $oportunityApi)
  {
    $this->salesApi = $salesApi;
    $this->leadsApi = $leadsApi;
    $this->oportunityApi = $oportunityApi;

    view()->share('menuActive', 'oportunities');
  }

  public function index()
  {
    return view('admin.oportunities.index');
  }

  public function create()
  {
    $sales = $this->salesApi->getAll();
    $leads = $this->leadsApi->getAll();
    $products = [
      (object) ['id' => 1, 'nama' => 'Lukisan Monalisa']
    ];

    return view('admin.oportunities.create', compact('sales', 'leads', 'products'));
  }

  public function store(Request $request)
  {
    $validator = \Validator::make($request->all(), [
      'jumlah_step' => 'required|numeric'
    ]);

    if ($validator->fails()) {
      return redirect()->back()->withInput()->withErrors($validator);
    }

    $this->oportunityApi->create($request->all());
    return redirect()->to('oportunities');
  }
}
