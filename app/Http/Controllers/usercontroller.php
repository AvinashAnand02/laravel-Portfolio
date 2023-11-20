<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    function getData(Request $req)
    {
        // Retrieve the username from the input
        $username = $req->input('user');
        
        // Store the username in the session
        $req->session()->put('user', $username);
        
        // Redirect to the 'profile' route while passing the username
        return view('profile', compact('username'));
    }
}
