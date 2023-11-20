<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    function index($id) {
        echo "Hello ", $id ;
    }
    function show(){
        return view('avinash.head').view('avinash.index').view('avinash.footer');
    }
}