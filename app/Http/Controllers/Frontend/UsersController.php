<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard()
    {
        $user = Auth::user();
        return view('frontend.pages.users.dashboard', compact('user'));
    }
    public function profile()
    {
        $user = Auth::user();
        return view('frontend.pages.users.profile', compact('user'));
    }
    public function profileUpdate(Request $request)
    {
        $user = Auth::user();
        $this->validate($request, [
            'first_name' => ['required', 'string', 'max:30'],
            'last_name' => ['nullable', 'string', 'max:15'],
            'username' => ['required', 'alpha_dash', 'max:100', 'unique:users,username,'.$user->id],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users,email,'.$user->id],
        ]);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->username = $request->username;
        $user->email = $request->email;
        if ($request->password != NULL || $request->password != '' ){
            $user->password = Hash::make($request->password);
        };
        $user->ip_address = request()->ip();
        $user->save();

        session()->flash('success', 'Your Profile has been Updated Successfully');
        return back();
    }
}
