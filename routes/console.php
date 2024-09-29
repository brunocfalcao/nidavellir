<?php

use Illuminate\Support\Facades\Schedule;
use Nidavellir\Trading\JobPollerManager;

Schedule::call(function () {
    $jobPollerManager = new JobPollerManager;
    $jobPollerManager->handle();
})->everySecond();
