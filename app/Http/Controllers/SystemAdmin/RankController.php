<?php

namespace App\Http\Controllers\SystemAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RankController extends Controller
{
  public function index(){

    if (Auth::check() && Auth::user()->hasAnyRole(['SystemAdmin'])) {
      return view('layouts.system_admin.ranks');
    }
    elseif (Auth::check()) {
      return redirect('/');
    }
    else {
    return view('auth.login');
    }

  }
}
