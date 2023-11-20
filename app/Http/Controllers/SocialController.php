<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function linkedin()
    {
        return redirect('https://www.linkedin.com/in/avinash-anand02');
    }

    public function github()
    {
        return redirect('https://github.com/AvinashAnand02');
    }

    public function twitter()
    {
        return redirect('https://twitter.com/Avinash52870643');
    }

    public function instagram()
    {
        return redirect('https://www.instagram.com/your.avinash_/');
    }

    public function youtube()
    {
        return redirect('https://www.youtube.com/channel/UCmqNIRWLzwhPCuZUYd5Oxeg');
    }

    public function discord()
    {
        return redirect('https://discord.gg/rEr9EKN8fv');
    }
    public function code1()
    {
        return redirect('https://github.com/AvinashAnand02/Portfolio');
    }
}
