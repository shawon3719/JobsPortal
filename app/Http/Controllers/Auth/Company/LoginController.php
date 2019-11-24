<?php

namespace App\Http\Controllers\Auth\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\User;
use App\Notifications\VerifyRegistration;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating companys for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect companys after login.
     *
     * @var string
     */
    protected $redirectTo = '/company';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function showLoginForm()
    {
        return view('auth.company.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
           'email' => 'required|email',
           'password' => 'required',
        ]);

            if (Auth::guard('company')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
            //Login Now
            return redirect()->intended(route('company.index'));
        }
            else{
                session()->flash('sticky_error', 'Invalid Login');
                return back();
            }
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return redirect()->route('company.login');
    }

}
