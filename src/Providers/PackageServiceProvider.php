<?php

declare(strict_types=1);

namespace WebhubWorks\MailTest\Providers;

use Illuminate\Support\ServiceProvider;
use WebhubWorks\MailTest\Console\Commands\TestMailCommand;

final class PackageServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands(
                commands: [
                    TestMailCommand::class,
                ],
            );
        }
    }
}
