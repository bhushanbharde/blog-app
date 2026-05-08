<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('app:my-custom-command')]
#[Description('Command description')]
class MyCustomCommand extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
