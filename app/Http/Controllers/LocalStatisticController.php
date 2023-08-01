<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LocalStatistic;

class LocalStatisticController extends Controller{
    public function store(Request $request)
    {
        // Validate the request data
        // $request->validate([
            // Add validation rules for each field if needed
        // ]);
            
        try {
             // Create a new LocalStatistic instance and fill it with the request data
        $localStatistic = new LocalStatistic($request->all());

        // Save the new record to the database
        $localStatistic->save();
        } catch (\Exception $e) {
            return back()->with('error',$e->getMessage());
        }

        // Redirect back to the input form with a success message
        return redirect()->back()->with('success', 'Data saved successfully!');
    }
}
