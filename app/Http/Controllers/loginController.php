<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class loginController extends Controller
{
    protected function viewSignUp(Request $request): Response
    {
        return response()->view('SignUp', ["title" => "SignUp"]);
    }

    protected function viewSignIn(Request $request): Response
    {
        return response()->view('SignIn', ["title" => "SignIn"]);
    }

    protected function store(Request $request): RedirectResponse
    {
        $validate = $request->validate([
            'email' => 'required|unique:users|max:100|email:rfc,dns',
            'name' => 'required|max:255',
            'password' => 'required|min:5|max:100',
        ]);

        $validate["password"] = Hash::make($validate["password"]);
        User::create($validate);
        return redirect("/SignIn")->with("message", "user data was successful!");
    }

    protected function auth(Request $request): RedirectResponse
    {
        $validate = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($validate)) {
            $request->session()->regenerate();
            return redirect()->intended('/Homepage');
        }

        return back()->with("error", "SignIn failed");
    }

    protected function LogOut(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/");
    }
}
