<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReportsController extends Controller
{
  public function __construct()
  {
    view()->share('menuActive', 'reports');
  }

  public function index()
  {
    return view('admin.reports.index');
  }
}
