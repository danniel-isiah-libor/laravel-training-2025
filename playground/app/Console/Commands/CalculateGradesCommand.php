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
    protected $signature = 'app:calculate-grades-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $semA =75;
        $semB= 90;

        // $total = $semA + $semB;

        // $message="Total grade is $total";

        // $this->warn($message);

        ProcessGradeCalculationJob::dispatch($semA, $semB);
    }
}
