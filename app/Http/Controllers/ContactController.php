<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'         => 'required|string|max:255',
            'email'        => 'required|email|max:255',
            'phone_number' => 'required|string|max:30',
            'address'      => 'required|string|max:255',
            'message'      => 'required|string',
        ]);

        // Save to DB
        $contact = ContactMessage::create($validated);

        // Send email
        Mail::to('kevinfadel15@gmail.com')
            ->send(new ContactMail($contact));

        return redirect()->route('home')
            ->with('success', 'Your message has been sent successfully.');
    }
}
