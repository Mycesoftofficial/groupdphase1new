<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LocalStatistic;
use Illuminate\Support\Facades\View;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;
use Illuminate\Support\Carbon;

class ReportController extends Controller
{
    public function report(Request $request)
    {       
        $userEnteredDate = $request->input('CreatedAt');

        $reports = [];
    
        // Validate and sanitize the user-entered date
        try {
            $parsedDate = Carbon::parse($userEnteredDate);
        } catch (\Exception $e) {
            // Handle invalid date input here
            return redirect()->back()->withErrors(['CreatedAt' => 'Invalid date format'])->withInput();
        }
    
        // Format the parsed date for querying
        $formattedDate = $parsedDate->format('Y-m-d');
    
        // Query records based on the formatted date
        $reports = LocalStatistic::whereDate('created_at', $formattedDate)->get();
    
        return view('report.report', compact('reports', 'userEnteredDate'));
    }
    
    public function download(Request $request)
    {
        $selectedDate = $request->input('CreatedAt');
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
        $reports = LocalStatistic::whereDate('created_at', '=', $selectedDate)->get();
    
        return view('content_to_print', [
            'report' => $report,
            'selectedDate' => $selectedDate,
            'reports' => $reports,
        ]);
    }
}
