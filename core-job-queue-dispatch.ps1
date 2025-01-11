while ($true) {
    php artisan mjolnir:core-job-queue-dispatch
    Start-Sleep -Seconds 1
}
