<?php

namespace Tests\Feature;

use App\Mail\CareerApplicationMail;
use App\Mail\ContactSubmissionMail;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class FormSubmissionTest extends TestCase
{
    public function test_contact_form_submits_successfully(): void
    {
        Mail::fake();

        $response = $this->post('/contact', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'phone' => '+2348012345678',
            'subject' => 'Consultation request',
            'message' => 'We need accounting and tax advisory support for our business expansion.',
        ]);

        $response
            ->assertRedirect()
            ->assertSessionHas('contact_success');

        Mail::assertSent(ContactSubmissionMail::class, function (ContactSubmissionMail $mail): bool {
            return $mail->hasTo((string) config('mail.submission_to.address'));
        });
    }

    public function test_contact_form_requires_fields(): void
    {
        $response = $this->post('/contact', []);

        $response
            ->assertSessionHasErrors(['name', 'email', 'phone', 'subject', 'message']);
    }

    public function test_career_form_submits_with_cv_upload(): void
    {
        Mail::fake();

        $response = $this->post('/careers', [
            'name' => 'Candidate Name',
            'email' => 'candidate@example.com',
            'phone' => '+2348098765432',
            'position' => 'Audit Associate',
            'cover_letter' => 'I am excited to contribute to your audit and compliance engagements.',
            'cv' => UploadedFile::fake()->create('cv.pdf', 200, 'application/pdf'),
        ]);

        $response
            ->assertRedirect()
            ->assertSessionHas('career_success');

        Mail::assertSent(CareerApplicationMail::class, function (CareerApplicationMail $mail): bool {
            return $mail->hasTo((string) config('mail.submission_to.address'));
        });
    }

    public function test_career_form_validates_cv_presence(): void
    {
        $response = $this->post('/careers', [
            'name' => 'Candidate Name',
            'email' => 'candidate@example.com',
            'phone' => '+2348098765432',
            'position' => 'Audit Associate',
        ]);

        $response->assertSessionHasErrors(['cv']);
    }
}
