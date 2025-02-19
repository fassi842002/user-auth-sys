<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Show registration form with logged-in user check
    public function register()
    {
        if (Auth::check()) {
            return redirect()->route("dashboard");
        }
        
        return View('auth.register');
    }

    // Handle registration form submission
    public function registerPost(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "password" => "required|confirmed|min:6"
        ]);

        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ]);

        auth()->login($user);

        return redirect()->route('dashboard')->with('success', 'User register successully.');
    }
    
    // Display dashboard with authentication check
    public function dashboard(Request $request)
    {
        if(!Auth::check()){
            return redirect()->route("login");
        }
        return View('dashboard');
    }

    // Handle user logout
    public function logout(Request $request)
    {
        auth()->logout();
        return redirect()->route("login");
    }

    // Show login form with logged-in user check
    public function login(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route("dashboard");
        }
        
        return View('auth.login');
    }

    // Process login request
    public function loginPost(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if (auth()->attempt(["email" => $request->email, "password" => $request->password])) {
            return redirect()->route('dashboard')->with('success', 'Login successully.');
        }

        return back()->with('error', 'Email or password are incorrect.');
    }
}
