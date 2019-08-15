<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailApplicant extends Mailable
{
    use Queueable, SerializesModels;

    public $applicant;
    // public $content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($applicant)
    {
        $this->applicant = $applicant;
        // $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('no-reply@ncommerce.id', 'Ombe Coffe Team')
                    ->subject('User Applicant')
                    ->markdown('emails.applicant')
                    ->with([
                        'applicant'=>$this->applicant,
                        // 'content'=>$this->content
                    ]);
    }
}
