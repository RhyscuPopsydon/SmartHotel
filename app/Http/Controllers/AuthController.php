<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showSignup() {
        return view('auth.signup');
    }

    public function signup(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'contact_number' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'contact_number' => $request->contact_number,
            'password' => Hash::make($request->password),
            'role' => 'guest',
            'date_created' => now(),
            'date_updated' => now(),
        ]);

        return redirect('/login')->with('success', 'Account created! Please login.');
    }

    public function showLogin() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Session::put('user_id', $user->user_id);
            Session::put('user_name', $user->name);
            Session::put('role', $user->role);

            // Redirect based on role
            if ($user->role === 'guest') {
                return redirect()->route('rooms.index');
            } elseif ($user->role === 'receptionist') {
                return redirect()->route('receptionist.index');
            } elseif ($user->role === 'admin') {
                return redirect()->route('dashboard'); // or admin dashboard later
            }

            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Invalid email or password.');
    }

    public function logout() {
        Session::flush();
        return redirect('/dashboard');
    }
}
