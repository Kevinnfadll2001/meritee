<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CareerApplication;
use Illuminate\Support\Facades\Mail;
use App\Mail\CareerApplicationSubmitted;

class CareerController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name'       => 'required|string|max:255',
            'last_name'        => 'required|string|max:255',
            'gender'           => 'required|in:male,female,other',
            'age'              => 'required|integer|min:16|max:70',

            'email'            => 'required|email|max:255',
            'phone'            => 'required|string|max:30',

            'education_level'  => 'required|string|max:255',
            'last_school'      => 'required|string|max:255',

            'address'          => 'required|string|max:255',
            'street_address'   => 'required|string|max:255',
            'city'             => 'required|string|max:255',

            'resume'           => 'required|mimes:pdf,doc,docx|max:2048',
            'voice_recording'  => 'required|mimes:mp3,wav,m4a|max:5120',
        ]);

        // Store resume
        $validated['resume'] = $request->file('resume')
            ->store('resumes', 'public');

        // Store voice recording
        $validated['voice_recording'] = $request->file('voice_recording')
            ->store('voice-recordings', 'public');

        // Save to database
        $application = CareerApplication::create($validated);

        // SEND EMAIL WITH ATTACHMENTS
        Mail::to('recruiting@ccintl.cc')
            ->send(new CareerApplicationSubmitted($application));

        return redirect()->route('home')
            ->with('success', 'Application submitted successfully.');
    }
}

