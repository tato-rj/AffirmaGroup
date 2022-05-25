<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithFaker;
use App\Mail\Admin\ContactReceivedEmail;
use Tests\TestCase;

class ContactTest extends TestCase
{
    use WithFaker;

    /** @test */
    public function visitors_can_send_a_message()
    {
        \Mail::fake();

        $this->post(route('contact'), [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'company' => $this->faker->word,
            'recruitment_needs' => [$this->faker->word],
            'message' => $this->faker->paragraph
        ]);

        \Mail::assertSent(ContactReceivedEmail::class);
    }
}
