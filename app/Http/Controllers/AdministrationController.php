<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    public function index()
    {
        $ventes = Order::all();
        return view('backend.pages.index', compact('ventes'));
    }
}
