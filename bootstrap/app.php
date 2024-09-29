<?php

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Application;
use Nidavellir\Trading\JobPollerManager;
use Illuminate\Console\Scheduling\Schedule;
use Nidavellir\Trading\Models\ExceptionLog;
use Illuminate\Foundation\Configuration\Exceptions;
use Nidavellir\Trading\Abstracts\AbstractException;

return Application::configure(basePath: dirname(__DIR__))
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->report(function (AbstractException $e) {
            // Use the globally defined function
            logExceptionChain($e);
        })->stop();

        $exceptions->report(function (\Exception $e) {
            logExceptionChain($e);
        })->stop();
    })
    ->withSchedule(function (Schedule $schedule) {
        $schedule->call(function () {
            $jobPollerManager = new JobPollerManager;
            $jobPollerManager->handle();
        })
        ->everySecond();
    })
    ->create();
