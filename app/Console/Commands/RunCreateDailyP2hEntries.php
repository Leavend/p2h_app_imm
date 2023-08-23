<?php

namespace App\Console\Commands;

use App\Events\CreateDailyP2hEntries;
use Illuminate\Console\Command;

class RunCreateDailyP2hEntries extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'p2h:run-create-daily-p2h-entries';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command run p2h events';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        event(new CreateDailyP2hEntries());
        $this->info('Daily P2h entries created successfully.');
    }
}
