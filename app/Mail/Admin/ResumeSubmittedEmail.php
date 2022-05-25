<?php

namespace App\Mail\Admin;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Resume;

class ResumeSubmittedEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $resume;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Resume $resume)
    {
        $this->resume = $resume;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Resume received')
                    ->markdown('emails.admin.resume')
                    ->attach($this->resume->file());
    }
}
