<?php

use Nidavellir\Thor\Models\System;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Schedule;

if (!Schema::hasTable('system')) {
    return;
}

if (System::first()->can_process_scheduled_tasks) {
    Schedule::command('mjolnir:sync-orders')
        ->everyMinute();

    //Schedule::command('mjolnir:dispatch-positions')
    //    ->everyMinute();

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
}
