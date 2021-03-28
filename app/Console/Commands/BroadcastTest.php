<?php

namespace App\Console\Commands;

use App\Events\SendNotification;
use App\Events\UserUpdate;
use App\Models\User;
use Illuminate\Console\Command;

class BroadcastTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'broadcast:test';

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
        $user = User::find(1);
//        dd($user);
//        UserUpdate::dispatch($user);
        event(new UserUpdate($user));
//        return 0;
    }
}
