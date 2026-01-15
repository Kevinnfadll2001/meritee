<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Application;
use Barryvdh\DomPDF\Facade\Pdf;

class ApplicationSubmittedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $application;

    public function __construct(Application $application)
    {
        $this->application = $application;
    }

    public function build()
    {
        // Generate PDF from the Blade view
        $pdf = Pdf::loadView('emails.application_submitted', ['application' => $this->application]);

        return $this->subject('New Job Application')
                    ->view('emails.application_submitted') // optional: for inline preview
                    ->attachData($pdf->output(), 'application.pdf', [
                        'mime' => 'application/pdf',
                    ]);
    }
}
