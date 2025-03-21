<?php

use Nidavellir\Thor\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        api: __DIR__.'/../routes/api.php',
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        /*
        $exceptions->report(function (\Throwable $e) {
            // Notify admin users about unhandled exceptions
            User::admin()->get()->each(function ($user) use ($e) {
                $user->pushover(
                    message: "[Unhandled Exception] - " . $e->getMessage() .
                        " in " . $e->getFile() .
                        " on line " . $e->getLine(),
                    title: 'Application Error',
                    applicationKey: 'nidavellir_errors',
                    additionalParameters: ['priority' => 1, 'sound' => 'siren']
                );
            });
        });
        */
    })
    ->create();
