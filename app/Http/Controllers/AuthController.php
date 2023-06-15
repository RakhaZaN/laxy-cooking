<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function register(Request $request): View
    {
        $type = $request->type ?? 'register';
        return view('auth.auth', compact('type'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'username' => 'required|string',
            'password' => 'required|string'
        ]);
        $validated['password'] = Hash::make($validated['password']);

        // return $validated;

        $create = User::create($validated);
        if ($create) {
            return redirect(route('auth.view', ['type' => 'login']));
        }

        return back()->withInput()->with('error', 'Email or Password is Wrong!');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->with('error', 'Invalid credentials')->withInput()->exceptInput('password');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
