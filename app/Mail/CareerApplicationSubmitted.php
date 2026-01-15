<?php

namespace App\Mail;

use App\Models\CareerApplication;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CareerApplicationSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $application;

    public function __construct(CareerApplication $application)
    {
        $this->application = $application;
    }

    public function build()
    {
        return $this->subject('New Career Application')
            ->view('emails.application_submitted')
            ->attach(storage_path('app/public/' . $this->application->resume))
            ->attach(storage_path('app/public/' . $this->application->voice_recording));
    }
}
