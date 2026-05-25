<?php

namespace Tests\Feature;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class FormSubmissionTest extends TestCase
{
    public function test_contact_form_submits_successfully(): void
    {
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
    }

    public function test_contact_form_requires_fields(): void
    {
        $response = $this->post('/contact', []);

        $response
            ->assertSessionHasErrors(['name', 'email', 'phone', 'subject', 'message']);
    }

    public function test_career_form_submits_with_cv_upload(): void
    {
        Storage::fake('local');

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

        $storedFiles = Storage::disk('local')->files('career-cvs');
        $this->assertNotEmpty($storedFiles);
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
