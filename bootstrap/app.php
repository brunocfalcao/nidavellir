<?php

use Nidavellir\Trading\Models\ExceptionLog;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Nidavellir\Trading\Abstracts\AbstractException;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;

return Application::configure(basePath: dirname(__DIR__))
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->report(function (AbstractException $e) {
            // Use the globally defined function
            logExceptionChain($e);
        })->stop();

        $exceptions->report(function (\Exception $e) {
            logExceptionChain($e);
        })->stop();
    })->create();
