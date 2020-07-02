<?php

namespace App\Mail;

use App\Profile;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SampleEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $profile;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Profile $profile)
    {
        $this->profile = $profile;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.sample')->with('profile', $this->profile);
    }
}
