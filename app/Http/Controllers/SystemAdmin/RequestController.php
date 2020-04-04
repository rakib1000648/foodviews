<?php

namespace App\Http\Controllers\SystemAdmin;

use App\Mail\CompanyAdminMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CoBasicInfo;
use App\Models\CoCity;
use App\Models\CoCategory;

class RequestController extends Controller
{



  public function show(){

    if (Auth::check() && Auth::user()->hasAnyRole(['SystemAdmin'])) {

      $cobasicinfo = new CoBasicInfo;

      $allinfo= $cobasicinfo->allCoBasicInfo();

      return view(('layouts.system_admin.requests'),compact('allinfo'));


    }
    elseif (Auth::check()) {
      return redirect('/');
    }
    else {
    return view('auth.login');
    }

  }
    public function acceptcompany($id)
    {
      if (Auth::check() && Auth::user()->hasAnyRole(['SystemAdmin'])) {
        

        $CoBasicInfo = CoBasicInfo::find($id);

        $email_data = array(
                  'name'=>$CoBasicInfo->name,
                  'domain'=>$CoBasicInfo->domain,


              );

        Mail::to($CoBasicInfo->email)->send(new CompanyAdminMail($email_data));



        $CoBasicInfo->status = "2";
        $CoBasicInfo->save();





        return redirect('/systemadmin/requests');

      }
      elseif (Auth::check()) {
        return redirect('/');
      }
      else {
      return view('auth.login');
      }

    }

}
