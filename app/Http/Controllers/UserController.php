<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\Models\Category;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'terms' => ['required', 'accepted'], // Ajouter cette ligne pour valider la case à cocher

        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);

        return redirect()->route('register')->with('success', 'Enregistré avec succès!');
    }

    public function home()
    {
        $categories = Category::all();

        $allCategories = Category::take(6)->get();

        return view('account.home' , compact('allCategories', 'categories'));
    }

    public function editProfil()
    {
        $allCategories = Category::take(6)->get();

        return view('account.edit-profil' , compact('allCategories'));
    }

    public function editPassword()
    {
        $allCategories = Category::take(6)->get();

        return view('account.password' , compact('allCategories'));
    }

    public function orders()
    {
        $allCategories = Category::take(6)->get();

        return view('account.order-history' , compact('allCategories'));
    }

    public function ordersDetails()
    {
        $allCategories = Category::take(6)->get();

        return view('account.order-details' , compact('allCategories'));
    }
}
