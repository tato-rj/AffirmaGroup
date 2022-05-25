<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use App\Mail\User\ResumeSubmittedEmail as UserResumeSubmittedEmail;
use App\Mail\Admin\ResumeSubmittedEmail as AdminResumeSubmittedEmail;
use App\Resume;

class ResumeTest extends TestCase
{
    /** @test */
    public function applicants_can_upload_a_resume()
    {
        $request = make(Resume::class, ['resume' => UploadedFile::fake()->image('resume.pdf')]);

        $this->assertEquals(Resume::count(), 0);

        $this->post(route('resume.store'), $request->toArray());

        $this->assertNotEquals(Resume::count(), 0);

        \Storage::disk('public')->assertExists(Resume::first()->resume_path);
    }

    /** @test */
    public function applicants_receive_an_email_after_submitting_a_resume()
    {
        \Mail::fake();

        $request = make(Resume::class, ['resume' => UploadedFile::fake()->image('resume.pdf')]);

        $this->post(route('resume.store'), $request->toArray());

        \Mail::assertSent(UserResumeSubmittedEmail::class);
    }

    /** @test */
    public function admin_receives_an_email__with_the_resumse_attached_when_it_is_submitted()
    {
        \Mail::fake();

        $request = make(Resume::class, ['resume' => UploadedFile::fake()->image('resume.pdf')]);

        $this->post(route('resume.store'), $request->toArray());

        \Mail::assertSent(AdminResumeSubmittedEmail::class, function($mail) {
            $mail = $mail->build();
            return count($mail->attachments) > 0;
        });
    }
}
