<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;

class ProcessGradeCalculationJob implements ShouldQueue
{
    use Queueable;

    private $semA;
    private $semB;

    /**
     * Create a new job instance.
     */
    public function __construct($semA, $semB)
    {
        $this->onQueue('calculations');

        $this->semA = $semA;
        $this->semB = $semB;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $total = $this->semA + $this->semB;

        $message = "The total grade is: $total";

        Log::info($message);
    }
}
