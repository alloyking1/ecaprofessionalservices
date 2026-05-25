<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\UploadedFile;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class CareerApplicationMail extends Mailable
{
    use Queueable;

    /**
     * @param array<string, mixed> $submission
     */
    public function __construct(public array $submission, public UploadedFile $cv)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Career Application: '.$this->submission['position'],
            replyTo: [$this->submission['email']],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.career-application',
            with: [
                'submission' => $this->submission,
            ],
        );
    }

    /**
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [
            Attachment::fromPath($this->cv->getRealPath())
                ->as($this->cv->getClientOriginalName())
                ->withMime($this->cv->getClientMimeType() ?: 'application/octet-stream'),
        ];
    }
}