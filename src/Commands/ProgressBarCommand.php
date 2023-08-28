<?php

namespace Jayshkhan\ProgressBar\Commands;

use Illuminate\Console\Command;

class ProgressBarCommand extends Command
{
    public $signature = 'filament-progress-bar';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
