<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Show registration form
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Handle registration request
    public function register(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'firstName' => 'required|string|max:255',
            'middleName' => 'nullable|string|max:255',
            'lastName' => 'required|string|max:255',
            'extensionName' => 'nullable|string|max:255',
            'sex' => 'required|string',
            'birthdate' => 'required|date',
            'street' => 'required|string|max:255',
            'region' => 'required|string',
            'province' => 'required|string',
            'city' => 'required|string',
            'barangay' => 'required|string',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create a new user
        User::create([
            'first_name' => $request->input('firstName'),
            'middle_name' => $request->input('middleName'),
            'last_name' => $request->input('lastName'),
            'extension_name' => $request->input('extensionName'),
            'sex' => $request->input('sex'),
            'birthdate' => $request->input('birthdate'),
            'street' => $request->input('street'),
            'region' => $request->input('region'),
            'province' => $request->input('province'),
            'city' => $request->input('city'),
            'barangay' => $request->input('barangay'),
            'username' => $request->input('username'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }
    

    public function login(Request $request)
{
    // Validate the login request
    $validator = Validator::make($request->all(), [
        'username' => 'required|string',
        'password' => 'required|string',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Attempt to log the user in
    $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
        // Authentication passed
        return redirect()->intended('dashboard'); // Redirect to the intended route or a default route
    } else {
        // Authentication failed
        return redirect()->back()->with('error', 'Invalid username or password')->withInput();
    }
}
}
