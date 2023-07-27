<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Registration; // Add this line to import the Registration model
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function register()
    {
        return view('authentication.register');
    }

    public function registration(Request $request)
    {
        // Validation
        $validator = Validator::make($request->all(), [
            'CName' => 'required|string|max:255',
            'CCode' => 'required|string|max:255|unique:registrations',
            'Location' => 'required|string|max:255',
            'District' => 'required|string|max:255',
            'password' => 'required|same:confirm_password',
            'Area' => 'required|string|max:255',
        ]);

        

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create a new registration record
        Registration::create([
            'CName' => $request->CName,
            'CCode' => $request->CCode,
            'Location' => $request->Location,
            'GPSAddress' => $request->GPSAddress,
            'District' => $request->District,
            'password' => bcrypt($request->password),
            'Area' => $request->Area,
        ]);

        // Redirect to a success page or perform any other actions you need
        return view('dashboard');
    }

    public function authenticate(Request $request)
    {
       // Validation (Add your validation rules here)
       $request->validate([
        'CName' => 'required',
        'CCode' => 'required',
    ]);

    // Get the credentials from the request
    $credentials = $request->only('CName', 'CCode');

    // Check if the user exists in the database
    $user = Registration::where('CName', $credentials['CName'])
        ->where('CCode', $credentials['CCode'])
        ->first();

    // If the user does not exist or the password is incorrect, return an error
    if (!$user) {
        return redirect()->route('login')->withErrors('Invalid credentials')->withInput();
    }

    // Log in the user manually
    Auth::login($user);

    // Redirect the user to the intended page after successful login
    return view('dashboard');
    }

    public function login()
    {
        return view('authentication.login');
    }

    public function logout()
    {
        return view('authentication.login');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function form()
    {
        return view('form.form');
    }
}
