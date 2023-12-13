<?php

namespace WebhubWorks\MailTest\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Lang;

class TestMail extends Mailable
{
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: Lang::get('Test Mail from :app', [
                'app' => Config::get('app.name'),
            ]),
        );
    }

    public function content(): Content
    {
        return new Content(
            text: 'This is a test mail. It worked! ✅',
        );
    }
}
