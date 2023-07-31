<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LocalStatistic;

class LocalStatisticController extends Controller
{
     /**
     * Save the inputted data into the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
            
        // Create a new LocalStatistic instance and fill it with the request data
        $localStatistic = new LocalStatistic($request->all());

        // Save the new record to the database
        $localStatistic->save();

        // Redirect back to the input form with a success message
        return redirect()->back()->with('success', 'Data saved successfully!');
    }
}
