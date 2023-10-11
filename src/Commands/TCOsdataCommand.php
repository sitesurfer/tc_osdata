<?php

namespace Sitesurfer\TCOsdata\Commands;

use Illuminate\Console\Command;

class TCOsdataCommand extends Command
{
    public $signature = 'tc-osdata';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
