<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OportunityController extends Controller
{
  public function __construct()
  {
    view()->share('menuActive', 'oportunities');
  }

  public function index()
  {
    return view('admin.oportunities.index');
  }
}
