<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ActivityController extends Controller
{
  public function __construct()
  {
    view()->share('menuActive', 'activities');
  }

  public function index()
  {
    return view('admin.activities.index');
  }
}
