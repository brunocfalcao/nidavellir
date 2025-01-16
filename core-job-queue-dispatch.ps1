while ($true) {
    php artisan mjolnir:dispatch-core-job-queue
    Start-Sleep -Seconds 1
}
