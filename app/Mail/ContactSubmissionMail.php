<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class ContactSubmissionMail extends Mailable
{
    use Queueable;

    /**
     * @param array<string, string> $submission
     */
    public function __construct(public array $submission)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Contact Form Submission: '.$this->submission['subject'],
            replyTo: [$this->submission['email']],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-submission',
            with: [
                'submission' => $this->submission,
            ],
        );
    }
}