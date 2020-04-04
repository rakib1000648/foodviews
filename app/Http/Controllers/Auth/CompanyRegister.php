<?php

namespace App\Http\Controllers\Auth;

use Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CoCity;
use App\Models\CoCategory;
use App\Models\CoBasicInfo;

class CompanyRegister extends Controller
{
  public function show(){
      $cat = CoCategory::all();
      $city = CoCity::all();
      return view('auth.companyregister')
      ->with('category',$cat)
      ->with('cities',$city);
  }

  public function save(request $req)
  {


    $req->validate([
           'name' => 'required',
           'domain' => 'required|unique:co_basic_infos',
           'email' => 'required|email|unique:co_basic_infos',
           'phone' => 'required|unique:co_basic_infos',
           'city' => 'required',
           'address' => 'required',
           'category' => 'required',
           'tc' => 'required'
       ], [
           'name.required' => 'Name is required',
           'domain.required' => 'Domain id is required',
           'domain.unique' => 'Domain id already exists',
           'email.required' => 'Email address is required',
           'email.email' => 'Email address is invalid',
           'email.unique' => 'Email address already exists',
           'phone.required' => 'Phone number is required',
           'phone.unique' => 'Phone number already exists',
           'city.required' => 'City name is required',
           'address.required' => 'Company address is required',
           'category.required' => 'Company category is required',
           'tc.required' => 'Terms and Conditions is required'
       ]);

       $coinfodata = new CoBasicInfo();
       $coinfodata->name = $req->name;
       $coinfodata->domain = $req->domain;
       $coinfodata->email = $req->email;
       $coinfodata->phone = $req->phone;
       $coinfodata->CoCityId = $req->city;
       $coinfodata->address = $req->address;
       $coinfodata->CoCategoryId = $req->category;
       $coinfodata->tc = $req->tc;
       $coinfodata->status = "1";
       $coinfodata->save();


       return redirect('/companyverify')
       ->with('success','We are investigating of your company information. You will get confirmation link within 24 hrs. Please check your email.');

  }

    public function coverify()
    {
        return view('auth.companyverify');
    }
}
