<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Trip;

class TripBookedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $trip;

    public function __construct(Trip $trip)
    {
        $this->trip = $trip;
    }

    public function build()
    {
        return $this->subject('New Trip Booked')
                    ->view('emails.trip_booked'); // Blade view for email
    }
}
