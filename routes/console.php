<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('mjolnir:sync-orders')
    ->everyMinute();

/*
Schedule::command('mjonir:dispatch-positions')
    ->everyMinute();
*/

Schedule::command('mjolnir:update-recvwindow-safety-duration')
    ->everyMinute();

Schedule::command('mjolnir:update-accounts-balances')
    ->everyFifteenMinutes();

Schedule::command('mjolnir:refresh-data')
    ->everyFifteenMinutes();

Schedule::command('mjolnir:dispatch-core-job-queue')
    ->everySecond();

Schedule::command('mjolnir:optimize')
    ->weekly();
