<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('mjonir:sync-positions')
    ->everyMinute();

/*
Schedule::command('mjonir:dispatch-positions')
    ->everyMinute();
*/

Schedule::command('mjonir:refresh-data')
    ->everyFifteenMinutes();
