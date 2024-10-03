@echo off

:: Step 1
echo "Step 1: Renaming composer.json to composer.local.json"
ren composer.json composer.local.json
if errorlevel 1 (
    echo "Error renaming composer.json. Reverting."
    ren composer.local.json composer.json
    goto :error
)

:: Step 2
echo "Step 2: Renaming composer.ploi.json to composer.json"
ren composer.ploi.json composer.json
if errorlevel 1 (
    echo "Error renaming composer.ploi.json. Reverting."
    ren composer.json composer.ploi.json
    goto :error
)

:: Step 3
echo "Step 3: Running composer update"
call composer update
if errorlevel 1 goto :error

:: Step 4
echo "Step 4: Committing and pushing to remote repo"
git add -A
git commit -m "ploi deploy"
git push
if errorlevel 1 goto :error

:: Step 5
echo "Step 5: Renaming composer.json to composer.ploi.json"
ren composer.json composer.ploi.json
if errorlevel 1 (
    echo "Error renaming composer.json back to composer.ploi.json. Reverting."
    ren composer.ploi.json composer.json
    goto :error
)

:: Step 6
echo "Step 6: Renaming composer.local.json to composer.json"
ren composer.local.json composer.json
if errorlevel 1 (
    echo "Error renaming composer.local.json. Reverting."
    ren composer.json composer.local.json
    goto :error
)

:: Step 7
echo "Step 7: Running another composer update"
call composer update
if errorlevel 1 goto :error

:: Step 8
echo "Step 8: Retrieving the latest GitHub commit hash"
for /f "tokens=1" %%i in ('git log -n 1 --pretty=format:"%%H"') do set commitHash=%%i
echo "Latest commit hash: %commitHash%"

:: Done
echo "All steps completed successfully."
goto :eof

:error
echo "An error occurred, exiting."
exit /b 1
