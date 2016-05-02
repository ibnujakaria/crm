<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LeadsController extends Controller
{
  public function __construct()
  {
    view()->share('menuActive', 'leads');
  }

  public function index()
  {
    return view('admin.leads.index');
  }
}
