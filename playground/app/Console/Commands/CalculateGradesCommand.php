<?php

namespace App\Console\Commands;

use App\Jobs\ProcessGradeCalculationJob;
use Illuminate\Console\Command;

class CalculateGradesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'grades:calculate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculate student grades based on their scores';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $semA = 75;
        $semB = 90;

        // $total = $semA + $semB;

        // $message = "The total grade is: $total";

        // $this->info($message);
        // $this->warn($message);
        // $this->error($message);
        // $this->line($message);

        ProcessGradeCalculationJob::dispatch($semA, $semB);
    }
}
