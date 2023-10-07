<?php

namespace App\Http\Controllers;

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

    
}
