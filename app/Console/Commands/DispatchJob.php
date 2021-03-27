<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\PrecessPodcast;
use Illuminate\Support\Facades\Log;

class DispatchJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dispatch:job';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
	    PrecessPodcast::dispatch();
	    Log::info("test");
        return 0;
    }
}
