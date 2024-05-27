<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class UserManager extends Controller
{
    use HasApiTokens;
    public static function rdrt()
    {
        if (!Auth::user()) {
            return redirect('/login');
        }
        return redirect('/home');
    }

    public function getFolders()
    {
        return  auth()->user()->folders()->get();
    }
    //Redirect to Home page if not logged in
    public function home()
    {
        return view('home.index', [
            'allcomics' => auth()->user()->library()->get(),
            'folders' => $this->getFolders()
        ]);
    }
    public function login()
    {
        if (Auth::user()) {
            return redirect('/')->with('message', 'Session in progress');
        }
        return view('Auth.login');
    }

    public function signup()
    {
        if (Auth::user()) {
            return redirect('/home')->with('message', 'Session in progress');
        }
        return view('Auth.signup');
    }

    public function ProfileEdit()
    {
        return view('Auth.profile');
    }

    public function register(Request $request)
    {

        $formData = $request->validate([
            'username' => ['required', 'min:6', Rule::unique('users', 'username')],
            'password' => 'required|confirmed|min:6'
        ]);

        $formData['password'] = bcrypt($formData['password']);
        $formData['remember_token'] = Str::random(10);

        $user = User::create($formData);
        $token = $user->createToken('user_token')->plainTextToken;
        return response(["user" => $user, "token" => $token]);
        //Login User
        // return redirect('/home')->with('message', 'Welcome ' . Auth::user()->name);
    }

    public function signin(Request $request)
    {
        $formData = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if (!Auth::attempt($formData)) {
            return response([
                "error" => "Invalid credentials"
            ], 422);
        }
        $user = Auth::user();
        $token = $user->createToken('user_token')->plainTextToken;
        return response(["user" => $user, "token" => $token]);
    }
    public function logout(Request $request){
        $user = Auth::user();
        if($user->currentAccessToken()->delete()) {
            return response(["success" => true]);
        }
    }
}
