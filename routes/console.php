<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('mjolnir:sync-orders')
    ->everyMinute();

Schedule::command('mjolnir:dispatch-positions')
    ->everyMinute();

Schedule::command('mjolnir:update-recvwindow-safety-duration')
    ->everyThreeMinutes();

Schedule::command('mjolnir:update-accounts-balances')
    ->everyFifteenMinutes();

Schedule::command('mjolnir:refresh-data')
    ->hourly();

Schedule::command('mjolnir:dispatch-core-job-queue')
    ->everySecond();

Schedule::command('mjolnir:optimize')
    ->weekly();
