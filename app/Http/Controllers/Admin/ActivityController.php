<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Oportunity;
use App\Http\Requests;
use App\Api\ActivityApi;
use App\Http\Controllers\Controller;

class ActivityController extends Controller
{

  protected $activityApi = null;

  public function __construct(ActivityApi $activityApi)
  {
    $this->activityApi = $activityApi;

    view()->share('menuActive', 'activities');
  }

  public function index($oportunity)
  {
    return redirect()->to("oportunities/{$oportunity}");
  }

  public function create(Oportunity $oportunity)
  {
    return view('admin.activities.create', compact('oportunity'));
  }

  public function store(Request $request, Oportunity $oportunity)
  {
    $validator = \Validator::make($request->all(), [
      'nama' => 'required',
      'tanggal' => 'required|date',
      'status' => 'required',
      'biaya' => 'required',
      'deskripsi' => 'required'
    ]);

    if ($validator->fails()) {
      return redirect()->back()->withInput()->withErrors($validator);
    }

    $this->activityApi->create($request, $oportunity);

    return redirect()->to("oportunities/{$oportunity->id}")->with('message', 'Activity berhasil dibuat');
  }
}
