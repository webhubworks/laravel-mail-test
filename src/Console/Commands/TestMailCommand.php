<?php

namespace WebhubWorks\MailTest\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use WebhubWorks\MailTest\Mail\TestMail;

class TestMailCommand extends Command
{
    protected $signature = 'mail-test:send-now {email}';

    protected $description = 'Send a test email to the specified email address.';

    public function handle(): int
    {
        Validator::validate(['email' => $this->argument('email')], [
            'email' => 'required|email',
        ]);

        Mail::to($this->argument('email'))->send(new TestMail());

        return self::SUCCESS;
    }
}
