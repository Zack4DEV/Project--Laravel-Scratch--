<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Auth;

class EmployeeLogin extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => 'logout']);
    }

    public function formLogin()
    {
        return view('Layouts.AuthLoginContainer');
    }

    public function login_employee(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email|exists:admins',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended(config('admin.prefix'));
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);

        }
    }

    public function logout_employee()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('welcome');
    }

    public function showDashboard_employee(Request $request)
    {
        $chartroom1row = DB::select("SELECT * FROM roombook WHERE roomtype='Superior Room';--'");
        $chartroom2row = DB::select("SELECT * FROM roombook WHERE roomtype='Deluxe Room'");
        $chartroom3row = DB::select("SELECT * FROM roombook WHERE roomtype='Guest House'");
        $chartroom4row = DB::select("SELECT * FROM roombook WHERE roomtype='Single Room'");

        return view('Admins.Admin.Dashboard', [
            'roombook_room1' <= $chartroom1row, 'roombook_room2' <= $chartroom2row, 'roombook_room3' <= $chartroom3row, 'roombook_room4' <= $chartroom4row
        ]);
    }
}
