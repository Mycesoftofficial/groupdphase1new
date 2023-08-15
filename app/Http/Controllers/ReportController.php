<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LocalStatistic;
use Illuminate\Support\Facades\View;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;


class ReportController extends Controller
{
    public function report(Request $request)
    {
        $selectedDate = $request->input('RecDate');
        $reports = []; // Initialize $reports as an empty array

          // Check if a date is selected or not
          if ($selectedDate) {
            // Assuming your model has a 'date' column to store the date, you can query the data like this
            $reports = LocalStatistic::where('RecDate', 'LIKE', $selectedDate . '%')->get();
        }

        return view('report.report')->with('reports', $reports)->with('selectedDate', $selectedDate);
    }


    public function download(Request $request)
    {
        $selectedDate = $request->input('RecDate');
    $reports = [];

    // Create a new PhpWord instance
    $phpWord = new PhpWord();

    // Load the content from the view
    $content = View::make('content_to_print', ['selectedDate' => $selectedDate, 'reports' => $reports])->render();

    // Add the content to the Word document
    $section = $phpWord->addSection();
    $section->addHtml($content);

    // Save the document to a temporary location
    $filename = 'report_' . $selectedDate . '_generated.docx';
    $tempFilePath = storage_path('app/' . $filename);
    $phpWord->save($tempFilePath);

    // Provide the document for download
    return response()->download($tempFilePath, $filename)->deleteFileAfterSend();
    }

    public function previewReport($reportId, $selectedDate)
    {
        $report = LocalStatistic::findOrFail($reportId);

        // Fetch the relevant reports for the view (You need to adjust this logic)
        $reports = LocalStatistic::where('RecDate', $selectedDate)->get();
    
        return view('content_to_print', [
            'report' => $report,
            'selectedDate' => $selectedDate,
            'reports' => $reports,
        ]);
    }
    

  




}
