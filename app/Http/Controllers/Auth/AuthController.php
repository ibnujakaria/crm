<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function login()
  {
    return view('auth.login');
  }

  public function loginProcess(Request $request)
  {
    if ($request->user_role === 'sales') {
      $guard = 'sales';
    }
    else {
      $guard = 'admin';
    }

    $remember = (bool) $request->remember_me;
    $result = Auth::guard($guard)->attempt(['email' => $request->email, 'password' => $request->password], $remember);

    if ($result) {
      return redirect()->to('');
    }

    return redirect()->back()->withInput()->with('errors', [
      'login' => ['Login gagal. Email atau password salah']
    ]);
  }

  public function logout()
  {
    Auth::guard('sales')->logout();
    Auth::guard('admin')->logout();
    return redirect()->to('/auth/login');
  }
}
