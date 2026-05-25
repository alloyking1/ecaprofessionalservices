<?php

namespace App\Http\Controllers;

use App\Http\Requests\CareerApplicationRequest;
use App\Http\Requests\ContactSubmissionRequest;
use App\Mail\CareerApplicationMail;
use App\Mail\ContactSubmissionMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class FormSubmissionController extends Controller
{
    public function submitContact(ContactSubmissionRequest $request)
    {
        $data = $request->validated();

        Mail::to($this->submissionRecipientAddress(), $this->submissionRecipientName())
            ->send(new ContactSubmissionMail($data));

        Log::info('Contact submission received', $data);

        return back()->with('contact_success', 'Thanks for reaching out. Our team will contact you shortly.');
    }

    public function submitCareer(CareerApplicationRequest $request)
    {
        $data = $request->validated();

        Mail::to($this->submissionRecipientAddress(), $this->submissionRecipientName())
            ->send(new CareerApplicationMail($data, $request->file('cv')));

        Log::info('Career application received', [
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'position' => $data['position'],
            'cv_filename' => $request->file('cv')->getClientOriginalName(),
            'cover_letter' => $data['cover_letter'] ?? null,
        ]);

        return back()->with('career_success', 'Application submitted successfully. We will review and get back to you.');
    }

    private function submissionRecipientAddress(): string
    {
        return (string) config('mail.submission_to.address');
    }

    private function submissionRecipientName(): string
    {
        return (string) config('mail.submission_to.name');
    }
}
