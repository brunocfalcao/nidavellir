# Define the number of instances per queue
$instancesPerQueue = 5

# Define the queues
$queues = @("cronjobs", "indicators", "positions", "orders")

# Hardcoded path to PHP executable
$phpPath = "D:\php\php.exe"

# Start queue listeners in background processes
foreach ($queue in $queues) {
    for ($i = 1; $i -le $instancesPerQueue; $i++) {
        Start-Process -FilePath $phpPath -ArgumentList @("artisan", "queue:listen", "--queue=$queue") -NoNewWindow -PassThru
        Start-Sleep -Milliseconds 500  # Small delay to prevent process race conditions
    }
}

Write-Output "Started $($instancesPerQueue * $queues.Count) queue listeners."

# Run the job dispatcher in the main thread (infinite loop)
while ($true) {
    & "$phpPath" artisan mjolnir:dispatch-core-job-queue
    Start-Sleep -Seconds 1
}
