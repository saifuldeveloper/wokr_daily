<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class OptimizeCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature   = 'optimize:cache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $status = Artisan::call('cache:clear');
        $status = Artisan::call('view:clear');
        $status = Artisan::call('config:clear');
        $status = Artisan::call('route:clear');

        if ($status == 1) {
            $this->info('successfully cache clear');
        } else {
            $this->error('cache clear failed');
        }
    }
}
