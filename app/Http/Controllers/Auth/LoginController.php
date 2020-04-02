<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        $validationRules['email'] = 'required';
        $validationRules['password'] = 'required';
        $request->validate($validationRules);
        if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password']])){
            if(Auth::user()->hasRole(['SystemAdmin'])){
                $toUrl = '/systemadmin';
            }
            elseif(Auth::user()->hasRole(['CompanyAdmin'])){
                $toUrl = '/company/admin';
            }
            elseif(Auth::user()->hasRole(['CompanyManager'])){
                $toUrl = '/company/manager';
            }
            elseif(Auth::user()->hasRole(['CompanyAccountant'])){
                $toUrl = '/company/accountant';
            }
            elseif(Auth::user()->hasRole(['Customer'])){
                $toUrl = '/home';
            }
            return redirect($toUrl);
        }
        return redirect()->back();
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }

}
