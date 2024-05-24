<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contact()
    {
        return view('contact');
    }

    public function my_account()
    {
        return view('account');
    }

    public function adminDashboard()
    {
        return view('administrateur/home');
    }
}
