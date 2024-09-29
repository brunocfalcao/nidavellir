<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\StreamedResponse;

Route::get('/export-log', function () {
    $logFile = storage_path('logs/laravel.log');

    if (!file_exists($logFile)) {
        return response()->json(['error' => 'Log file not found'], 404);
    }

    return new StreamedResponse(function () use ($logFile) {
        $handle = fopen($logFile, 'rb');
        while (!feof($handle)) {
            echo fread($handle, 1024);
            flush();
        }
        fclose($handle);
    }, 200, [
        'Content-Type' => 'text/plain',
        'Content-Disposition' => 'attachment; filename="laravel.log"',
    ]);
});
