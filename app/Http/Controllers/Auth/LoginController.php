<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Model\User;
use App\Notifications\VerifyRegistration;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
//    //*
//|--------------------------------------------------------------------------
//| Login Controller
//|--------------------------------------------------------------------------
//|
//| This controller handles authenticating users for the application and
//| redirecting them to your home screen. The controller uses a trait
//| to conveniently provide its functionality to your applications.
//|
//*/

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        //Find User by this email

        $user = User::where('email', $request->email)->first();
        if ($user->status == 1){
            //Login this user
            if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
                //Login Now
                return redirect()->intended(route('index'));
            }
            else{
                session()->flash('sticky_error', 'Invalid Login');
                return back();
            }
        } else{
            //Send him a token again
            if (!is_null($user)){
                $user->notify(new VerifyRegistration($user));
                session()->flash('success', 'A New Confirmation mail has been sent to your email. Please confirm your email.');
                return redirect('/');
            }else{
                session()->flash('sticky_error', 'Please Log-in first!');
                return redirect()->route('login');
            }
        }
    }
}
