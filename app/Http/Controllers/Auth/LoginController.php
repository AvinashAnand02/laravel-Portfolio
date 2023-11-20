<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('user');
    }

    public function login(Request $request)
    {
        // Validate the user's login credentials
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect('/'); // Redirect to the dashboard or any other page
        }

        // Authentication failed
        return back()->withErrors(['error' => 'Invalid login credentials']);
    }

    // Add other methods for handling login and authentication, such as logout, etc.
}
