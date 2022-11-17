<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class FibonacciJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $number;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($number)
    {
        $this->number = $number;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $n1 = 0;
        $n2 = 1;
        $counter = 0;
        while ($counter < $this->number) {
            echo PHP_EOL.min($n1, PHP_INT_MAX);
            $n3 = $n2 + $n1;
            $n1 = $n2;
            $n2 = $n3;
            $counter = $counter + 1;
        }
    }
}
