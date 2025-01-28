<?php

use Illuminate\Support\Facades\Schedule;
use Illuminate\Support\Facades\Schema;
use Nidavellir\Thor\Models\System;

if (! Schema::hasTable('system')) {
    return;
}

if (System::first()->can_process_scheduled_tasks) {
    /*
    If the current system time is between 01:00 AM and 07:00 AM, we don't trigger
    */
    if (! now()->isBetween(now()->startOfDay()->addHours(1), now()->startOfDay()->addHours(7))) {
        Schedule::command('mjolnir:daily-report')
            ->hourly();
    }

    Schedule::command('mjolnir:notify-high-margin-ratio')
        ->everyFifteenMinutes();

    Schedule::command('mjolnir:purge-data')
        ->dailyAt('22:00');

    Schedule::command('mjolnir:identify-orphan-orders')
        ->everyFifteenMinutes();

    Schedule::command('mjolnir:run-integrity-checks')
        ->everyFourMinutes();

    Schedule::command('mjolnir:sync-orders')
        ->everyMinute();

    Schedule::command('mjolnir:dispatch-positions')
        ->everyMinute();

    Schedule::command('mjolnir:update-recvwindow-safety-duration')
        ->everyFifteenMinutes();

    Schedule::command('mjolnir:update-accounts-balances')
        ->everyFiveMinutes();

    Schedule::command('mjolnir:refresh-data')
        ->everyThirtyMinutes();

    Schedule::command('mjolnir:dispatch-core-job-queue')
        ->everySecond();

    Schedule::command('mjolnir:optimize')
        ->dailyAt("23:00");
}
