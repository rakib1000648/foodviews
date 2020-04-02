<?php

namespace App\Http\Controllers\Company\SystemAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
  public function index(){

    if (Auth::check()) {
      return view('layouts.customer.home');
  }
  else {
    return view('auth.login');
  }

  }
}
