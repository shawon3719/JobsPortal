<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Image;

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
//            'username' => ['required', 'alpha_dash', 'max:100', 'unique:users,username,'.$user->id],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users,email,'.$user->id],
            'cv' => 'nullable',
        ],
            [

                'image.image' => 'Please provide a valid image (ex: .pdf .png, .jpg, .gif, .jpeg etc.)!',

        ]);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
//        $user->username = $request->username;
        $user->email = $request->email;
        $user->cv = $request->cv;
        if ($request->password != NULL || $request->password != '' ){
            $user->password = Hash::make($request->password);
        };
//        $user->ip_address = request()->ip();

//        ---------------------------------------------
//        Uploading CV
//        -------------------------------------------------

        if ($request->image>0){
            $image = $request->file('image');
            $img = time() . '.'.$image->getClientOriginalExtension();
            $location ='images/cv/'.$img;
            Image::make($image)->save($location);
            $user->image = $img;

        }

        $user->save();

        session()->flash('success', 'Your Profile has been Updated Successfully');
        return back();
    }
}
