<?php

namespace Njaaazi\BreakingBad\Commands;

use Illuminate\Console\Command;

class BreakingBadCommand extends Command
{
    public $signature = 'laravel-breaking-bad';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
