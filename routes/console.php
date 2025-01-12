<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('mjolnir:sync-positions')
    ->everyMinute();

/*
Schedule::command('mjonir:dispatch-positions')
    ->everyMinute();
*/

Schedule::command('mjolnir:refresh-data')
    ->everyFifteenMinutes();

Schedule::command('mjolnir:dispatch-core-job-queue')
    ->everySecond();
