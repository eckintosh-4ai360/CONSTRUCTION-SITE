<?php

namespace Tests\Feature;

use App\Mail\ContactInquiryMail;
use App\Mail\QuoteRequestMail;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class InquiryFormTest extends TestCase
{
    public function test_contact_form_sends_the_contact_mailable(): void
    {
        Mail::fake();

        config(['site.contact_recipient' => 'contact@eckintosh.test']);

        $response = $this->post(route('contact.submit'), [
            'name' => 'Jane Builder',
            'email' => 'jane@example.com',
            'subject' => 'Kitchen renovation',
            'message' => 'I would like to discuss a renovation project.',
        ], [
            'X-Requested-With' => 'XMLHttpRequest',
        ]);

        $response->assertOk();
        $response->assertSeeText('OK');

        Mail::assertSent(ContactInquiryMail::class, function (ContactInquiryMail $mail) {
            return $mail->hasTo('contact@eckintosh.test')
                && $mail->details['name'] === 'Jane Builder'
                && $mail->details['email'] === 'jane@example.com'
                && $mail->details['subject'] === 'Kitchen renovation';
        });
    }

    public function test_quote_form_sends_the_quote_mailable(): void
    {
        Mail::fake();

        config(['site.quote_recipient' => 'quotes@eckintosh.test']);

        $response = $this->post(route('quote.submit'), [
            'name' => 'Marcus Owner',
            'email' => 'marcus@example.com',
            'phone' => '+233 20 123 4567',
            'message' => 'I need a quote for a commercial fit-out.',
        ], [
            'X-Requested-With' => 'XMLHttpRequest',
        ]);

        $response->assertOk();
        $response->assertSeeText('OK');

        Mail::assertSent(QuoteRequestMail::class, function (QuoteRequestMail $mail) {
            return $mail->hasTo('quotes@eckintosh.test')
                && $mail->details['name'] === 'Marcus Owner'
                && $mail->details['email'] === 'marcus@example.com'
                && $mail->details['phone'] === '+233 20 123 4567';
        });
    }

    public function test_contact_form_requires_a_subject(): void
    {
        Mail::fake();

        $response = $this->post(route('contact.submit'), [
            'name' => 'Jane Builder',
            'email' => 'jane@example.com',
            'subject' => '',
            'message' => 'Missing subject should fail.',
        ], [
            'X-Requested-With' => 'XMLHttpRequest',
        ]);

        $response->assertStatus(422);
        $response->assertSeeText('The subject field is required.');

        Mail::assertNothingSent();
    }

    public function test_quote_form_requires_a_phone_number(): void
    {
        Mail::fake();

        $response = $this->post(route('quote.submit'), [
            'name' => 'Marcus Owner',
            'email' => 'marcus@example.com',
            'phone' => '',
            'message' => 'Missing phone should fail.',
        ], [
            'X-Requested-With' => 'XMLHttpRequest',
        ]);

        $response->assertStatus(422);
        $response->assertSeeText('The phone field is required.');

        Mail::assertNothingSent();
    }
}
