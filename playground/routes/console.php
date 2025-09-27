<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\{Artisan, Schedule};
use App\Console\Commands\CalculateGradesCommand;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// Artisan::command('grades', CalculateGradesCommand)

Schedule::command('grades:calculate')->everyFiveSeconds();
