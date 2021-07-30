<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Registration;

class RegisteredStudent extends Mailable
{
    use Queueable, SerializesModels;
    public Registration $student;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Registration $student)
    {
        $this->student = $student;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $url = url('/status?status='.$this->student['reg_ref']);
        
        return $this->markdown('emails.registered.payment', [
            'url' => $url,
        ]);
    }
}
