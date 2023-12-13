<?php

namespace WebhubWorks\MailTest\Console\Commands;

use Illuminate\Console\Command;

class TestMailCommand extends Command
{
    protected $signature = 'mail-test:send-now {email}';

    protected $description = 'Send a test email to the specified email address.';
    
    public function handle(): int
    {
        
        return self::SUCCESS;
    }
}
