<?php

namespace App\Http\Controllers;

use App\Http\Requests\CareerApplicationRequest;
use App\Http\Requests\ContactSubmissionRequest;
use Illuminate\Support\Facades\Log;

class FormSubmissionController extends Controller
{
    public function submitContact(ContactSubmissionRequest $request)
    {
        $data = $request->validated();

        Log::info('Contact submission received', $data);

        return back()->with('contact_success', 'Thanks for reaching out. Our team will contact you shortly.');
    }

    public function submitCareer(CareerApplicationRequest $request)
    {
        $data = $request->validated();

        $cvPath = $request->file('cv')->store('career-cvs', 'local');

        Log::info('Career application received', [
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'position' => $data['position'],
            'cv_path' => $cvPath,
            'cover_letter' => $data['cover_letter'] ?? null,
        ]);

        return back()->with('career_success', 'Application submitted successfully. We will review and get back to you.');
    }
}
