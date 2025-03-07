<?php

use Illuminate\Support\Facades\Schedule;
use Illuminate\Support\Facades\Schema;
use Nidavellir\Thor\Models\System;

if (! Schema::hasTable('system')) {
    return;
}

if (System::first()->can_process_scheduled_tasks) {
    Schedule::command('mjolnir:notify-high-margin-ratio')
        ->everyFifteenMinutes();

    Schedule::command('mjolnir:purge-data')
        ->dailyAt('22:00');

    Schedule::command('mjolnir:identify-orphan-orders')
        ->everyFifteenMinutes();

    Schedule::command('mjolnir:run-integrity-checks')
        ->everyFifteenMinutes();

    Schedule::command('mjolnir:sync-orders')
        ->everyMinute();

    Schedule::command('mjolnir:dispatch-positions')
        ->everyTwoMinutes();

    Schedule::command('mjolnir:update-recvwindow-safety-duration')
        ->everyFifteenMinutes();

    Schedule::command('mjolnir:update-accounts-balances')
        ->everyFiveMinutes();

    Schedule::command('mjolnir:refresh-data')
        ->everyThirtyMinutes();

    Schedule::command('mjolnir:dispatch-core-job-queue')
        ->everySecond();

    Schedule::command('mjolnir:optimize')
        ->dailyAt('23:00');

    Schedule::command('mjolnir:daily-report')
        ->dailyAt('23:55');
}
