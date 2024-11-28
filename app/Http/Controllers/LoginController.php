<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('adminlogin'); // Show login form
    }

    public function adminlogin(Request $request)
    {
        // Validate sa incoming req
        $request->validate([
            'name' => 'required|string',  
            'password' => 'required|string',
        ]);

        // pangitaon sa db ang admin
        $admin = Admin::where('name', $request->name)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            // passed di pareha sa oop bagsak
            Auth::login($admin);
            return redirect()->route('dashboard'); 
        }

        return back()->withErrors([
            'message' => 'Invalid credentials. Please try again.',
        ]);
    }
}
