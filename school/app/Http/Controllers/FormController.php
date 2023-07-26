<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Registration; // Add this line to import the Registration model

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
        return redirect()->back()->with('success', 'Registration successful!');
    }
}
