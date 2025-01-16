<?php

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

// Add the route with throttling middleware
Route::middleware([
    'throttle:60,1', // Throttles requests to 60 per minute
])->group(function () {
    Route::get('/account/dashboard/{uuid}', function (Request $request, $uuid) {
        // Log the request for audit
        Log::info('Fetching dashboard information for account', ['uuid' => $uuid, 'ip' => $request->ip()]);

        // Check if the account exists
        $account = Account::where('uuid', $uuid)->first();

        if (! $account) {
            return response()->json(['error' => 'Account not found'], 404);
        }

        // Cache the trade information for better performance
        $cacheKey = "account_dashboard_{$uuid}";
        $tradeInfo = Cache::remember($cacheKey, 300, function () use ($account) {
            return [
                'trades' => $account->trades()->get(),
                'balance' => $account->balance,
                'recent_activity' => $account->recentActivity()->take(5)->get(),
            ];
        });

        return response()->json($tradeInfo);
    });
});
