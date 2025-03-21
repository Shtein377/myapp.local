<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class TestJob implements ShouldQueue
{
    use Queueable, SerializesModels, InteractsWithQueue, Dispatchable;

   
    public function __construct()
    {
        //
    }

   
    public function handle(): void
    {  info();
        sleep(1);
    }
}
