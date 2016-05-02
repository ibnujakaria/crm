<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PromoCampaignController extends Controller
{

  public function __construct()
  {
    view()->share('menuActive', 'promo-campaign');
  }

  public function index()
  {
    return view('admin.promo-campaign.index');
  }
}
