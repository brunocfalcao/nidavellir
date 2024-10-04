@echo off
setlocal enabledelayedexpansion

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
echo "Step 8: Retrieving the latest GitHub commit hash using API"

:: Replace the following with your actual GitHub repository details
set repoOwner=brunocfalcao
set repoName=nidavellir-trading

:: Making the API call to fetch the latest commit hash (first commit in the response)
curl -s https://api.github.com/repos/%repoOwner%/%repoName%/commits | findstr /r /c:"\"sha\"" > temp.txt

:: Extract the full commit hash from the temp.txt file (removing extra characters)
for /f "tokens=2 delims=:" %%i in (temp.txt) do set fullCommitHash=%%i
set fullCommitHash=%fullCommitHash:~2,40%

:: Now, get the short version (first 7 characters of the commit hash)
set shortCommitHash=%fullCommitHash:~0,7%

echo "Latest commit hash: %shortCommitHash%"

:: Cleanup
del temp.txt

:: Done
echo "All steps completed successfully."
goto :eof

:error
echo "An error occurred, exiting."
exit /b 1
