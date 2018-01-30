<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Notification;

class SendNotifications extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Notification:run';

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
     * @return mixed
     */
    public function handle()
    {
        $notification = new Notification();
        $nots = $notification->getPendingOfDay();

        foreach ($nots as $item) {
            var_dump($item['date']);   
        }
    }
}
