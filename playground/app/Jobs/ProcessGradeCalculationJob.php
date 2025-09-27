<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class ProcessGradeCalculationJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    private $semA , $semB;
    public function __construct($semA, $semB)
    {
        //
        $this->semA = $semA;
        $this->semB = $semB;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
        $total = $this->semA + $this->semB;

        $message="Total grade is $total";
    }
}
