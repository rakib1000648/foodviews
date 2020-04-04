<?php

namespace App\Http\Controllers\Auth;

use App\Models\CoAdminReg;
use App\User;
use App\Models\UserRole;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoAdminRegController extends Controller
{

  public function show($domain)
  {
    $company_domain= $domain;

    return view('auth.companyuserregister');
  }

  public function save(request $req)
  {
    $req->validate([
           'name' => 'required|string|max:255',
           'email' => 'required|string|email|max:255|unique:users',
           'phone' => 'required|string|max:15|unique:users',
           'address' => 'required|string|max:255',
           'password' => 'required|string|min:8|confirmed'

       ], [
           'name.required' => 'Name is required',
           'name.string' => 'Name must be string',
           'name.max' => 'Invalid length of name',

           'email.required' => 'Email id is required',
           'email.string' => 'Email must be string',
           'email.email' => 'Email address is invalid',
           'email.max' => 'Invalid length of email address',
           'email.unique' => 'Email address already exists',

           'phone.required' => 'Phone number is required',
           'phone.string' => 'Email must be string',
           'phone.max' => 'Invalid length of phone number',
           'phone.unique' => 'Phone number already exists',

           'address.required' => 'Company address is required',
           'address.string' => 'Address must be string',
           'address.max' => 'Invalid length of address',

           'password.required' => 'Password is required',
           'password.string' => 'Password must be string',
           'password.min' => 'Invalid length of password',
           'password.confirmed' => 'Passwords are not matched !',


       ]);

       $add_co_admin = new CoAdminReg();
       $add_co_admin->name = $req->name;
       $add_co_admin->email = $req->email;
       $add_co_admin->phone = $req->phone;
       $add_co_admin->address = $req->address;
       $add_co_admin->password =Hash::make($req->password);
       $add_co_admin->save();

       $email=$req->email;

       $this->admincreate($email);

       return redirect('/login');
  }

    public function admincreate($email)
    {
      $co_admin_email= $email;

      $admin_id = DB::table('users')->where('email', $co_admin_email)->value('id');



      $user_role = new UserRole();
      $user_role->user_id = $admin_id;
      $user_role->role_id = "2";
      $user_role->save();


    }


}
