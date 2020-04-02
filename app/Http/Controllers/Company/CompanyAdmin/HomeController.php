<?php

namespace App\Http\Controllers\Company\CompanyAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

  public function index(){

    if (Auth::check() && Auth::user()->hasAnyRole(['CompanyAdmin'])) {
      return view('layouts.company.co_admin.statistics');
  }
    elseif (Auth::check()) {
      return redirect('/');
    }
    else {
    return view('auth.login');
    }

  }

}
