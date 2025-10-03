<?php

namespace Developing Sonder\Putio\Commands;

use Illuminate\Console\Command;

class PutioCommand extends Command
{
    public $signature = 'putio';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
