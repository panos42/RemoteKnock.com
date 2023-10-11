<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;
use App\Models\CvProfile;
use Illuminate\Http\Request;

class CvProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $cvProfile = CvProfile::where('user_id', $user->id)->first();
    
        return view('cv.index', compact('cvProfile'));
    }


    public function store(Request $request)
{
    $user = auth()->user();

    $data = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'Job_Experience' => 'required|string',
        'Education' => 'required|string',
        'Skills' => 'required|string',
        'Languages' => 'required|string',
        'Objective' => 'required|string',
    ]);

    // Check if a CV profile already exists for the user
    $cvProfile = CvProfile::where('user_id', $user->id)->first();

    if ($cvProfile) {
        // Update existing CV profile
        $cvProfile->update([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'Job_Experience' => $data['Job_Experience'],
            'Education' => $data['Education'],
            'Skills' => $data['Skills'],
            'Languages' => $data['Languages'],
            'Objective' => $data['Objective'],
            // Update other fields as needed
        ]);
    } else {
        // Create a new CV profile
        CvProfile::create([
            'user_id' => $user->id,
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'Job_Experience' => $data['Job_Experience'],
            'Education' => $data['Education'],
            'Skills' => $data['Skills'],
            'Languages' => $data['Languages'],
            'Objective' => $data['Objective'],
            // Set other fields here
        ]);
    }

    return redirect('/cv-builder')->with('success', 'CV profile saved successfully.');
}





public function generatePdf()
{
    $user = auth()->user();
    $cvProfile = $user->cvProfile;

    if (!$cvProfile) {
        return redirect('/cv-builder')->with('error', 'CV profile not found.');
    }

    // Use the Blade view to render the HTML template with data
    $htmlTemplate = View::make('pdf_template', compact('cvProfile'))->render();

    // Initialize Dompdf
    $dompdf = new Dompdf();
    $dompdf->loadHtml($htmlTemplate);

    // (Optional) Set paper size and orientation
    $dompdf->setPaper('A4', 'portrait');

    // Render the HTML as PDF
    $dompdf->render();

    // Generate a unique file name for the PDF
    $filename = 'cv_' . $user->id . '.pdf';

    // Save the PDF to a file or serve it for download
    $dompdf->stream($filename);

    // You can also save the PDF to a file using $dompdf->output() and save it to a storage location
}

    
}
